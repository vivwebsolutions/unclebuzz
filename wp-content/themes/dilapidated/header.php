<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<meta name="description" content="<?php if ( is_single() ) { single_post_title('', true); } else { bloginfo('name'); echo " - "; bloginfo('description'); } ?>" /> 

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php include('css/style.php'); ?>

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/prettyPhoto.css" type="text/css" media="screen" />
<!--[if IE 7]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style-ie7.css" type="text/css" media="screen" /><![endif]-->
<!--[if lt IE 7]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style-ie6.css" type="text/css" media="screen" /><![endif]-->
<?php if($theme_custom_css) { ?><style type="text/css"><?php echo stripslashes($theme_custom_css); ?></style><?php } ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom.js"></script>
<style type="text/css">

a:hover, h1, h1 a, h2, h2 a, #collapsible-link li a:hover, #nav .current_page_item a, #nav .current-cat a, #nav .current-menu-item a, #nav .current_page_ancestor a, #nav .current-cat-ancestor a, #nav .current-menu-ancestor a {
color: #ffffff;
}

</style>



<script type="text/javascript">
<!--
	var popup_width = 500; var silence_mp3 = "mp3/silence.mp3"; var foxPP_bodycolour = "#B8964F"; var foxPP_bodyimg = ""; var foxPP_stylesheet = "http://173.192.120.99/~unclebuz/wp-content/plugins/mp3-jplayer/css/player-darkgrey.css"; var foxPP_fixedcss = "true"; var popup_maxheight = "600";
//-->
</script>


<SCRIPT TYPE="text/javascript">
<!--
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=400,height=200,scrollbars=yes');
return false;
}
//-->
</SCRIPT>


</head>
<body>

<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<div id="page-wrap">

	<!--Begin Header-->
	<div id="header">
		<!--Begin Logo-->
		<?php if($theme_text_title) { ?>
			<div id="text-logo">
				<a href="<?php bloginfo('url'); ?>"><?php echo($theme_text_title); ?></a>
			</div>
		<? } else { ?>
			<div id="logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php if($theme_custom_logo) { ?><?php echo($theme_custom_logo); ?><?php } else { ?><?php bloginfo('stylesheet_directory'); ?>/images/logo.gif<?php } ?>" alt="" /></a>
			</div>
		<?php } ?>
		<!--End Logo-->
    <div class="mplayer">
		<?php dynamic_sidebar('mplayer'); ?>
    </div>
    <!--End player-->

  
  
  
  
  </div>
	<!--Begin Slider-->
  <div id="slider" class="<?php dynheader() ?>"></div>
	<!--End Slider-->
		<!--Begin Navigation-->
		<div id="nav">
			<?php if(function_exists('wp_nav_menu')) { wp_nav_menu('sort_column=menu_order&container=ul&theme_location=header-nav&menu_class='); } else { ?>
			<ul>
				<li class="<?php if(is_home()) { ?>current-cat<?php } else { ?>cat-item<?php } ?>"><a href="<?php bloginfo('url') ?>">Home</a></li>
				<?php wp_list_pages('orderby=menu_order&depth=3&title_li=&exclude='.$theme_exclude_nav_pages);?>
				<?php $cats = wp_list_categories('echo=0&hide_empty=0&depth=3&title_li=&exclude='.$theme_exclude_nav_cats); if (!strpos($cats,'No categories') ){ echo $cats; }?>		
			</ul>
			<?php } ?>
		</div>
		<!--End Navigation-->
	<!--End Header-->
	<div class="clear"></div>
	<div id="overall-container">
		<?php if(is_page_template('template-page-fullwidth.php') OR 
		is_page_template('template-page-columns.php') OR 
		is_single() && (get_post_meta($post->ID, 'post_template', true) == "Two Columns" OR get_post_meta($post->ID, 'post_template', true) == "Full Width")) { ?><?php } else { ?><div id="main-content"><?php } ?>