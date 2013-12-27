<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<?php if(is_page_template('template-page-fullwidth.php') OR 
is_page_template('template-page-columns.php') OR 
is_single() && (get_post_meta($post->ID, 'post_template', true) == "Two Columns" OR get_post_meta($post->ID, 'post_template', true) == "Full Width")) { ?><?php } else { ?>
	</div><!--End main-content-->

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div>
<?php } ?>

</div><!--End overall-container-->

<div class="clear"></div>

<div id="footer">

	<?php dynamic_sidebar('footer-1'); ?>

	<?php dynamic_sidebar('footer-2'); ?>

	<?php dynamic_sidebar('footer-3'); ?>

	<div class="clear"></div>

	<div class="copyright"><?php if($theme_footer_content) { echo stripslashes($theme_footer_content); } else { ?>Copyright &copy; <?php echo date('Y'); ?> Designed and developed by ViV Web Solutions<?php } ?></div>
	
</div>

</div><!--End page-wrap-->

<?php wp_footer(); ?>

<?php echo stripslashes($theme_scripts); ?>

</body>
</html>