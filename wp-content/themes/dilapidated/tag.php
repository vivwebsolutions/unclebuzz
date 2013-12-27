<?php
get_header();
?>

<div class="post">
	<h2>Tag: <?php single_tag_title(); ?></h2>
</div>
	
<?php include('post.php'); ?>

<?php get_footer(); ?>