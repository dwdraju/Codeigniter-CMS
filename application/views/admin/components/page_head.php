<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $meta_title; ?></title>
	<!-- Bootstrap -->
	<link href="<?php echo site_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo site_url('css/admin.css'); ?>" rel="stylesheet">
	<link href="<?php echo site_url('css/datepicker.css'); ?>" rel="stylesheet">
		
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="<?php echo site_url('js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo site_url('js/bootstrap-datepicker.js'); ?>"></script>
	<?php if(isset($sortable) && $sortable === TRUE): ?>
	<script src="<?php echo site_url('js/jquery-ui-1.9.1.custom.min.js'); ?>"></script>
	<script src="<?php echo site_url('js/jquery.mjs.nestedSortable.js'); ?>"></script>
	<?php endif; ?>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- TinyMCE -->
	
<script type="text/javascript" src="<?php echo site_url('js/tinymce/tinymce.min.js'); ?>"></script>
	<script type="text/javascript">
		tinymce.init({
			// General options
			selector : "textarea",
			theme : "modern",
			plugins: 'advlist autolink link image lists charmap print preview'
			
		});
	</script>
	<!-- /TinyMCE -->
</head>