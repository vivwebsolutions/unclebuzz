<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.cycle.min.js"></script>
<script type="text/javascript">
jQuery('#slider') 
.cycle({ 
    fx: 'fade', 
    speed:  <?php echo($theme_slider_transition_speed); ?>,
    pause: <?php if($theme_slider_pause == "1") { ?>false<?php } else { ?>true<?php } ?>,
    timeout: <?php if($theme_slider_auto_rotation == "1") { ?>0<?php } else { ?><?php echo($theme_slider_rotation_speed); ?><?php } ?>,
    delay:  0,
    prev:   '#prev', 
    next:   '#next',
    cleartypeNoBg: true
});
</script>

<?php
if($theme_slider_selection == "0") {
$slider_selection = 'post_type=any&meta_key=main_slider&meta_value='.get_post_meta($post->ID, 'main_slider', true).'&meta_compare==';
} else {
$slider_selection = 'cat='.$theme_slider_cats;
}
?>

<div id="slider-container-outer">

	<div id="slider-container-inner">
	
		<div id="slide-box">
			<?php dynamic_sidebar('slider'); ?>
		</div>

		<div id="slider">
			<?php query_posts($slider_selection.'&caller_get_posts=1&posts_per_page=-1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<div class="contentdiv">
				
					<?php if((get_post_meta($post->ID, 'ghostpool_slider_image', true)) OR has_post_thumbnail()) { ?>
					<div class="slider-image">
						<div class="overlay"><a href="<?php the_permalink() ?>"></a></div>
						<?php if(get_post_meta($post->ID, 'ghostpool_slider_image', true)) { ?><img src="<?php echo(get_post_meta($post->ID, 'ghostpool_slider_image', true)); ?>" class="wp-post-image" alt="" /><?php } else { ?><?php the_post_thumbnail(('slider'), array('title' => '')); ?><?php } ?>
					</div>
					<?php } ?>
					
					<div class="slider-excerpt">
						<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
						<?php echo excerpt(80); ?>
					</div>				

				</div>
				
			<?php endwhile; endif; wp_reset_query(); ?>
		</div>
	

	</div><!--End slider container inner-->
	
</div><!--End slider container outer-->
