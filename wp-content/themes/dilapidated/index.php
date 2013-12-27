<?php
get_header();
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<?php query_posts('paged='.$paged.'&cat='.$theme_home_cats); if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="post">
	
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<div class="meta">
			Posted <?php if (function_exists('time_since')) {
			echo time_since(abs(strtotime($post->post_date_gmt . " GMT")), time()) . " ago";
			} else {
			the_time('d M Y');
			} ?> in <?php the_category(', '); ?> <?php edit_post_link('(Edit Post)'); ?>
		</div>
		
		<div class="clear"></div>
		
		<?php if((get_post_meta($post->ID, 'ghostpool_thumbnail', true) OR has_post_thumbnail()) && ($theme_thumbnails == "0")) { ?>
		
			<div class="image-preview">
				<a href="<?php the_permalink(); ?>"><?php if(get_post_meta($post->ID, 'ghostpool_thumbnail', true)) { ?><img src="<?php echo(get_post_meta($post->ID, 'ghostpool_thumbnail', true)); ?>" class="wp-post-image" alt="" /><?php } else { ?><?php the_post_thumbnail(('thumbnail'), array('title' => '')); ?><?php } ?></a>
			</div>
			
		<?php } ?>	
			
			<div class="post-excerpt">
		
				<?php //if($theme_homepage_text_display == "1") { ?>
					<?php the_content(); ?>
				<?php //} else {?>
					<!--<p><?php echo excerpt(120); ?></p>-->
				<?php //} ?>

			</div><!--End post excerpt-->
		
		<!--<div class="meta right">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Read More</a> / <?php comments_popup_link('0 Comments', '1 Comment', '% Comment', 'comments-link', '-'); ?>
		</div>-->
	
	</div><!--End post-->
	
<?php endwhile; ?>
		
	<?php wp_pagenavi(); ?>
	
<?php else : ?>	

	<div class="post">
		<h3>Page Not Found</h3>
	</div>

<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>