		<!-- Main content -->
    <div class="container">
    <div class="row">
 		<div class="col-md-9">
			<article>
				<h2><?php echo ($article->title); ?></h2>
				<p class="pubdate"><?php echo ($article->pubdate); ?></p>

				<?php echo $article->body; ?>




			</article>


<!--facebook link code js 
			<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=716920511714671&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?= auto_bitly(current_url());?>" data-count="vertical">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>

			<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="false" data-share="true">
				

			</div>

-->


			<!--
  <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'awesomebloglocalhost'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    
--> 
    

 		</div>
<div class="col-md-3">
      <h2>Recent news</h2>
<?php $this->load->view('sidebar'); ?>
    </div>


    </div> <!-- row finish -->


   <div  class="col-md-8">
<h2>Drop Comment</h2>
   <?php   
    echo validation_errors(); ?>
<?php echo form_open(); ?>
   <?=form_hidden('article_id', uri_string());?>
 


<table class="table">
<tr>
    <td>Name:</td>
    <td><?php echo form_input('name', set_value('name')); ?></td>
    </tr>
  <tr>
<td>Email:</td>
    <td><?php echo form_input('email', set_value('email')); ?></td>
  </tr>
  <tr>
<td>Website:</td>
    <td><?php echo form_input('website', set_value('website')); ?></td>
  </tr>
  <tr>
<td>About yourself:</td>
    <td><?php echo form_input('about', set_value('about')); ?></td>
  </tr>

<tr>
<td>Comment:</td>
<td><?php echo form_textarea('comment', set_value('comment')); ?></td>
   </tr>




  <tr>
    
    <td><?php echo form_submit('submit', 'Submit', 'class="btn btn-primary"'); ?></td>
  </tr>
</table>

<?php echo form_close();



?>
<h2> Comments</h2><hr>

<?php 

        foreach($comment as $comment){
          echo "<h3>";
          ?>
          <a href="http://<?php echo $comment->website?>"><?=$comment->name?></a>

<?php
   
echo "</h3>";
    if(($comment->about)!=NULL){
    echo " ";
    echo $comment->about; 
    echo " ";
    echo "<br>";
     }
        
        echo $comment->comment;
        echo "<hr>";
     }
?>

   </div>
 		<!-- Sidebar -->
 		</div>