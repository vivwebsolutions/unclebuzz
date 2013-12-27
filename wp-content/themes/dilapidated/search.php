<?php get_header(); ?>

<div class="post">
	<h2><?php echo $wp_query->found_posts; ?> search results for "<?php echo wp_specialchars($s); ?>"</h2>
</div>

<?php include('post.php'); ?>

<?php get_footer(); ?>