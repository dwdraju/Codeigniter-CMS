<?php if ( ! function_exists('auto_bitly'))
{
  function auto_bitly($str,$popup=TRUE)
  {
    if (preg_match_all("#(^|\s|\()((http(s?)://)|(www\.))(\w+[^\s\)\<]+)#i", $str, $matches))
    {
      $pop = ($popup == TRUE) ? "" : "";
 
      for ($i = 0; $i < count($matches['0']); $i++)
      {
        $period = '';
        if (preg_match("|\.$|", $matches['6'][$i]))
        {
          $period = '.';
          $matches['6'][$i] = substr($matches['6'][$i], 0, -1);
        }
 
        $bitly = get_bitly('http'.
                  $matches['4'][$i].'://'.
                  $matches['5'][$i].
                  $matches['6'][$i]);
 
        if($bitly != FALSE) {
          $str = str_replace($matches['0'][$i],
                    $matches['1'][$i].
                    ''.
                    $bitly.''.$pop.''.
                  //  str_replace('http://','',$bitly).'</a>'.
                    $period, $str);
        } else {
          $str = str_replace($matches['0'][$i],
                    $matches['1'][$i].''.
                    $matches['4'][$i].'://'.
                    $matches['5'][$i].
                    $matches['6'][$i].'"'.$pop.'>http'.
                    $matches['4'][$i].'://'.
                    $matches['5'][$i].
                    $matches['6'][$i].'</a>'.
                    $period, $str);
        }
      }
    }
    return $str;
  }
}
 
if ( ! function_exists('get_bitly'))
{
  function get_bitly($link,$return_array=FALSE) {
    $login = 'o_2tdu0bf8e7';
    $apikey = 'R_12133151da2c4e9fe82e07951b8a69fb';
    $url = "http://api.bit.ly/v3/shorten?login=$login&apiKey=$apikey&longUrl=".urlencode($link)."&format=json";
 
    if (!function_exists('curl_init'))  {
      $json_data = file_get_contents($url);
    } else {
      $ch = curl_init();
      $timeout = 5;
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
      curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
      $json_data = curl_exec($ch);
      curl_close($ch);
    }
 
    if($return_array) {
      return json_decode($json_data,TRUE);
    }
 
    $data = json_decode($json_data,TRUE);
    if($data['status_code'] == 200)
      return $data['data']['url'];
    else
      return FALSE;
  }
}
