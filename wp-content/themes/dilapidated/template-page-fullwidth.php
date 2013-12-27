<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post-extended">

	<h2><?php the_title(); ?></h2>
	
	<?php the_content(); ?>
	
	<?php wp_link_pages('before=<div class="clear"></div><div class="post-navi">Pages &pagelink=<span>%</span>&after=</div>'); ?>

</div>

<div class="clear"></div>

<div class="comments">
	<?php comments_template(); ?>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>