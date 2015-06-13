<?php $this->load->view('components/page_head');?>


<body>

	 <div class="container">
		<h1><?php echo anchor('', strtoupper(config_item('site_name'))); ?></h1>
	

	

	 	
	 		 
	 		<nav class="navbar navbar-default" >
	 		 <div class="collapse navbar-collapse" >
<?php echo get_menu($menu); ?>
</div></nav>
 	

 
 
 	
<?php $this->load->view('templates/' . $subview); ?>
 	
 
<?php $this->load->view('components/page_tail');?>
</div>