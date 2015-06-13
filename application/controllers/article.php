<?php
class Article extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
      //  $this->load->model('article_comment_m');
        $this->data['recent_news'] = $this->article_m->get_recent();
    }

    public function index($id, $slug){
    	// Fetch the article
		$this->article_m->set_published();
		$this->data['article'] = $this->article_m->get($id);
     $this->data['comment'] = $this->article_comment_m->get_comment($id);
    	
    	// Return 404 if not found
    	count($this->data['article']) || show_404(uri_string());
		
    	// Redirect if slug was incorrect
    	$requested_slug = $this->uri->segment(3);
    	$set_slug = $this->data['article']->slug;
    	if ($requested_slug != $set_slug) {
    		redirect('article/' . $this->data['article']->id . '/' . $this->data['article']->slug, 'location', '301');
    	}   	
    

   $c_rules = $this->article_comment_m->c_rules;
      
       $this->form_validation->set_rules($c_rules);

        // Process the form
        if ($this->form_validation->run() == TRUE) {
          
            $data = array(
                'article_id'=>$id,

                'name'=>$this->input->post('name'), 
                'email'=>$this->input->post('email'), 
           'website'=>$this->input->post('website'), 
               
              'comment'=>$this->input->post('comment'),
              'posted'=>date('Y-m-d'),
              'about'=>$this->input->post('about')
            );
            
            $this->article_comment_m->save_comment($data);
         redirect(base_url().'article'.'/'.$id.'/'.$slug);
            
        }
       // echo $id+$slug;
        // Load view
add_meta_title($this->data['article']->title);
        $this->data['subview'] = 'article';
       // $this->data['captcha'] = 'captcha';
       //  $this->data['subview'] = 'comment';

        $this->load->view('_main_layout', $this->data);

    }


}