		<!-- Main content -->
 		<div class="row">
 		<div class="col-md-9">
<div class="row">
	<div class="col-md-12"><?php if($articles[0]) echo get_excerpt($articles[0]); ?> </div>
	</div>
<div class="row">
	<?php for ($i=1;$i<=2;$i++){
?>
<div class="col-md-6"><?php if($articles[$i]) echo get_excerpt($articles[$i]); ?> </div>
<?php }

for ($j=3;$j<=6;$j++){
		?>
	
	<div class="col-md-6"><?php if($articles[$j]) echo get_excerpt($articles[$j]); ?> </div>
        
<?php
        }?>
           </div>    
    </div>
 		
 		<!-- Sidebar -->
 		<div class="col-md-3">
 		<div class="sidebar">
 			<h2>Recent news</h2>
<hr>
<?php $articles = array_slice($articles, 3); ?>
<?php echo article_links($articles); ?>
<?php echo anchor($news_archive_link, '+ News archive'); ?>
 		</div>
 		</div>
 		</div>