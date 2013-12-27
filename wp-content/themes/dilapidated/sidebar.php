<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<?php if(is_home()) { ?>

	<?php if($theme_homepage_sidebar == "1") { dynamic_sidebar('general'); } else { dynamic_sidebar('homepage'); } ?>

<?php } elseif(is_page_template('template-blog.php')) { ?>

	<?php if($theme_blog_sidebar == "1") { dynamic_sidebar('general'); } else { dynamic_sidebar('blog'); } ?>
	
<?php } elseif(is_page_template('template-contact.php')) { ?>

	<?php if($theme_contact_sidebar == "1") { dynamic_sidebar('general'); } else { dynamic_sidebar('contact'); } ?>	
	
<?php } elseif(is_page() && (!is_page_template('template-blog.php') OR !is_page_template('template-contact.php'))) { ?>

	<?php if($theme_page_sidebar == "1") { dynamic_sidebar('general'); } else { dynamic_sidebar('page'); } ?>	

<?php } elseif(is_single()) { ?>

	<?php if($theme_post_sidebar == "1") { dynamic_sidebar('general'); } else { dynamic_sidebar('post'); } ?>	

<?php } else { ?>

	<?php if($theme_other_sidebar == "1") { dynamic_sidebar('general'); } else { dynamic_sidebar('other'); } ?>
	
<?php } ?>	