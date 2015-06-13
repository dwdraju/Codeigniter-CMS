<?php $this->load->view('admin/components/page_head'); ?>
<body>
  <nav class="navbar navbar-default" role="navigation">
	    <div class="container-fluid">

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

		    
			    <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
			    <li><?php echo anchor('admin/page', 'Pages'); ?></li>
			    <li><?php echo anchor('admin/page/order', 'Order pages'); ?></li>
			    <li><?php echo anchor('admin/article', 'News articles'); ?></li>
			    <li><?php echo anchor('admin/user', 'Users'); ?></li>
		    

		    </ul>
		    </div>
	    </div>
    </nav>

	<div class="container">
		<div class="row">
			<!-- Main column -->
			<div class="col-md-9">
<?php $this->load->view($subview); ?>
			</div>
			<!-- Sidebar -->
			<div class="col-md-3">
				<section>
					<?php echo mailto('rajudawadinp@gmail.com', '<i class="icon-user"></i> rajudawadinp@gmail.com'); ?><br>
					<?php echo anchor('admin/user/logout', '<i class="icon-off"></i> logout'); ?>
				</section>
			</div>
		</div>
	</div>

<?php $this->load->view('admin/components/page_tail'); ?>