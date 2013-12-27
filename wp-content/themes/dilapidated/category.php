<?php
get_header();
?>

<div class="post">
	<h2>Category: <?php single_cat_title(); ?></h2>
</div>
	
<?php include('post.php'); ?>

<?php get_footer(); ?>