<?php // Themes Options Menu

$themename = "Dilapidated";
$dirname = "dilapidated";
$themeurl = "http://themeforest.net/item/dilapidated-blog-cms-grunge-wordpress-theme/63538?ref=GhostPool";
$shortname = "theme";
$options = array (

array(	"name" => "General Settings",
      	"type" => "title"),
      	
		array(	"type" => "open",
      	"id" => $shortname."_general"),

		array(  
		"name" => "Theme Skin",
        "desc" => "Choose the desired theme skin from the drop down list.",
        "id" => $shortname."_skin",
        "std" => "Classic",
		"options" => array('Classic', 'Purple Haze', 'Steel', 'Blue Grunge', 'Haemoglobin', 'Regal Light', 'Grunge Green'),
        "type" => "select"),

		array("type" => "divider"),  
		
        array(
		"name" => "Custom Logo URL",
        "desc" => "Enter your custom logo image URL here (e.g. http://www.example.com/images/logoname.jpg).",
        "id" => $shortname."_custom_logo",
        "std" => "",
        "type" => "text"),
        
        array(
		"name" => "Text Title",
        "desc" => "If you do not intend to use an image as a logo, type the text you want to display as your title",
        "id" => $shortname."_text_title",
        "std" => "",
        "type" => "text"),

		array("type" => "divider"),  
		
        array(
		"name" => "Collapsible Link",
        "desc" => "Checking this hides the link to the collapsible panel",
        "id" => $shortname."_collapsible_link",
        "std" => "Enable",
		"options" => array('Enable', 'Disable'),
        "type" => "radio"),

		array(
		"name" => "Collapsible Link Text",
        "desc" => "Enter the text you want to display for the collapsible panel link",
        "id" => $shortname."_slidelinktext",
        "std" => "Chat",
        "type" => "text"),

		array("type" => "divider"),  
		
		array(
		"name" => "RSS URL",
        "id" => $shortname."_rss",
        "std" => "",
        "type" => "text"),
        
        array(
		"name" => "Twitter URL",
        "id" => $shortname."_twitter",
        "std" => "",
        "type" => "text"),
		
        array(
		"name" => "Email URL",
        "id" => $shortname."_email",
        "std" => "",
        "type" => "text"),

        array(
		"name" => "Myspace URL",
        "id" => $shortname."_myspace",
        "std" => "",
        "type" => "text"),
        
        array(
		"name" => "Facebook URL",
        "id" => $shortname."_facebook",
        "std" => "",
        "type" => "text"),
        
        array(
		"name" => "Digg URL",
        "id" => $shortname."_digg",
        "std" => "",
        "type" => "text"),
        
        array(
		"name" => "Youtube URL",
        "id" => $shortname."_youtube",
        "std" => "",
        "type" => "text"),
       
        array(
		"name" => "Vimeo URL",
        "id" => $shortname."_vimeo",
        "std" => "",
        "type" => "text"),

		array("type" => "divider"),  
		
		array(
		"name" => "Footer Content",
        "desc" => "Enter the content you want to display in your theme's footer",
        "id" => $shortname."_footer_content",
        "std" => "",
        "type" => "textarea"),

		array("type" => "divider"),  
		
		array(
		"name" => "Scripts",
        "desc" => "Enter any scripts that need to be embedded into your theme (e.g. Google Analytics)",
        "id" => $shortname."_scripts",
        "std" => "",
        "type" => "textarea"),
        
		array("type" => "close"),

array(	"name" => "Style Settings",
      	"type" => "title"),

		array(	"type" => "open",
      	"id" => $shortname."_style"),

		array(
		"name" => "Custom CSS",
        "desc" => "If you want to modify the theme style in some way add your own code here instead of editing the style sheets. <em>Note: You may have to add !important to your tags in some cases so it overwrites the default settings e.g. body {background: #000000 !important;}.</em>",
        "id" => $shortname."_custom_css",
        "std" => "",
        "type" => "textarea"),

        array(
		"name" => "Custom Text Header Colour",
        "desc" => "Enter you colour code (e.g. #ff0000).",
        "id" => $shortname."_header_colour",
        "std" => "",
        "type" => "text"),
        
		array("type" => "close"),
		
array(	"name" => "Navigation Settings<br/><small>For use with WordPress 2.9 and lower only</small>",
		"type" => "title"),

		array(	"type" => "open",
      	"id" => $shortname."_navigation"),

		array(
		"name" => "Pages To Exclude",
        "desc" => "Type the IDs of the pages you want to exclude from the navigation menu, separating each with a comma (e.g. 23,51,102,65)",
        "id" => $shortname."_exclude_nav_pages",
        "std" => "",
        "type" => "text"),
        
		array(
		"name" => "Categories To Exclude",
        "desc" => "Type the IDs of the categories you want to exclude from the navigation menu, separating each with a comma (e.g. 23,51,102,65)",
        "id" => $shortname."_exclude_nav_cats",
        "std" => "",
        "type" => "text"),       

		array("type" => "close"),

array(	"name" => "Homepage Settings",
		"type" => "title"),

		array(	"type" => "open",
      	"id" => $shortname."_homepage"),
		
		array(  
		"name" => "Exclude/Include Categories",
        "desc" => "To exclude or include posts from the latest posts section enter the category IDs these posts are from, separating each with a comma (e.g. 23,51,102,65) or (e.g. -23,-51,-102,-65). <em>Note: You can only exclude OR include posts, not both</em>.",
        "id" => $shortname."_home_cats",
        "std" => "",
        "type" => "text"),

		array("type" => "close"),
		
array(	"name" => "Slider Settings",
		"type" => "title"),

		array(	"type" => "open",
      	"id" => $shortname."_slider"),

		array(  
		"name" => "Display Slider",
        "desc" => "",
        "id" => $shortname."_display_slider",
        "std" => "Enable",
		"options" => array('Enable', 'Disable'),
        "type" => "radio"),
        
		array(  
		"name" => "Slider Selection",
        "desc" => "Choose where to get your posts and pages from for the slider.",
        "id" => $shortname."_slider_selection",
        "std" => "Individual Selection (select from posts/pages themselves)",
		"options" => array('Individual Selection (select from posts/pages themselves)', 'Categories'),
        "type" => "radio"),

        array(
		"name" => "Slider Categories",
        "desc" => "If you have chosen Categories above enter your category IDs, separating each with a comma (e.g. 23,51,102,65), leave blank to display all categories.",
        "id" => $shortname."_slider_cats",
        "std" => "",
        "type" => "text"),
        
		array(  
		"name" => "Show Slider On Every Page",
        "desc" => "",
        "id" => $shortname."_slider_all",
        "std" => "Disable",
		"options" => array('Disable', 'Enable'),
        "type" => "radio"),

		array(  
		"name" => "Slider Pause On Hover",
        "desc" => "",
        "id" => $shortname."_slider_pause",
        "std" => "Enable",
		"options" => array('Enable', 'Disable'),
        "type" => "radio"),

		array(  
		"name" => "Slider Rotation Speed",
        "desc" => "",
        "id" => $shortname."_slider_rotation_speed",
        "std" => "8000",
        "type" => "text"),

		array(  
		"name" => "Slider Transition Speed",
        "desc" => "",
        "id" => $shortname."_slider_transition_speed",
        "std" => "1500",
        "type" => "text"),
        
		array("type" => "close"),
		
array(	"name" => "Post Settings",
		"type" => "title"),

		array(	"type" => "open",
      	"id" => $shortname."_posts"),

		array(  
		"name" => "Homepage Text Display",
        "desc" => "Choose how to display your post text on the homepage.",
        "id" => $shortname."_homepage_text_display",
        "std" => "Excerpt",
		"options" => array('Excerpt', 'Full Content (insert <xmp><!--more--></xmp> where you manually want to cut off the text)'),
        "type" => "radio"),

		array(  
		"name" => "Blog Pages Text Display",
        "desc" => "Choose how to display your post text on your blog pages.",
        "id" => $shortname."_blog_text_display",
        "std" => "Excerpt",
		"options" => array('Excerpt', 'Full Content (insert <xmp style="display: inline;"><!--more--></xmp> where you manually want to cut off the text)'),
        "type" => "radio"),

		array(  
		"name" => "Categories, Archives and Tag Pages Text Display",
        "desc" => "Choose how to display your post text on the category, archive and tag pages.",
        "id" => $shortname."_other_text_display",
        "std" => "Excerpt",
		"options" => array('Excerpt', 'Full Content (insert <xmp><!--more--></xmp> where you manually want to cut off the text)'),
        "type" => "radio"),

		array(  
		"name" => "Thumbnails",
        "desc" => "",
        "id" => $shortname."_thumbnails",
        "std" => "Enable",
		"options" => array('Enable', 'Disable'),
        "type" => "radio"),
        
		array(  
		"name" => "Prev/Next Post Links",
        "desc" => "",
        "id" => $shortname."_prev_next_links",
        "std" => "Enable",
		"options" => array('Enable', 'Disable'),
        "type" => "radio"),
		
		array("type" => "close"),

array(	"name" => "Sidebar Settings",
		"type" => "title"),

		array(	"type" => "open",
      	"id" => $shortname."_sidebar"),

		array(  
		"name" => "Homepage Sidebar",
        "desc" => "Choose whether to use this sidebar or the general sidebar on the homepage.",
        "id" => $shortname."_homepage_sidebar",
        "std" => "Homepage Sidebar",
		"options" => array('Homepage Sidebar', 'General Sidebar'),
        "type" => "radio"),
        
		array(  
		"name" => "Post Sidebar",
        "desc" => "Choose whether to use this sidebar or the general sidebar on posts.",
        "id" => $shortname."_post_sidebar",
        "std" => "Post Sidebar",
		"options" => array('Post Sidebar', 'General Sidebar'),
        "type" => "radio"),

		array(  
		"name" => "Page Sidebar",
        "desc" => "Choose whether to use this sidebar or the general sidebar on pages.",
        "id" => $shortname."_page_sidebar",
        "std" => "Page Sidebar",
		"options" => array('Page Sidebar', 'General Sidebar'),
        "type" => "radio"),
        
		array(  
		"name" => "Blog Sidebar",
        "desc" => "Choose whether to use this sidebar or the general sidebar on pages using the blog page template.",
        "id" => $shortname."_blog_sidebar",
        "std" => "Blog Sidebar",
		"options" => array('Blog Sidebar', 'General Sidebar'),
        "type" => "radio"),
        
		array(  
		"name" => "Contact Sidebar",
        "desc" => "Choose whether to use this sidebar or the general sidebar on pages using the contact page template.",
        "id" => $shortname."_contact_sidebar",
        "std" => "Contact Sidebar",
		"options" => array('Contact Sidebar', 'General Sidebar'),
        "type" => "radio"),
        
		array(  
		"name" => "Other Sidebar",
        "desc" => "Choose whether to use this sidebar or the general sidebar on categories, tags, search pages etc.",
        "id" => $shortname."_other_sidebar",
        "std" => "Other Sidebar",
		"options" => array('Other Sidebar', 'General Sidebar'),
        "type" => "radio"),
        
		array("type" => "close"),
		
array(	"name" => "Import/Export Settings",
		"type" => "title"),
		
		array(  
		"name" => "Export",
        "id" => $shortname."_import_export",
        "type" => "import_export"),
        
		array("type" => "close"),
	
);

function mytheme_add_admin() {

    global $themename, $dirname, $themeurl, $shortname, $options;

			
    if ( $_GET['page'] == basename(__FILE__) ) {

        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=theme-options.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=theme-options.php&reset=true");
            die;

        }

		else if( 'export' == $_REQUEST['action'] ) export_settings();
		else if( 'import' == $_REQUEST['action'] ) import_settings();

    }

    add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $dirname, $themeurl, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated"><p><strong>Options Saved</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated"><p><strong>Options Reset</strong></p></div>';

?>

		
<?php
echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/includes/admin/admin.css" type="text/css" media="screen" />
<script type="text/javascript" src="'.get_bloginfo('template_url').'/includes/admin/jquery.tabs.js"></script>';
?>

<div id="theme_options_container" class="wrap">
	
<?php screen_icon('options-general'); ?>
<h2><?php echo $themename; ?> Options</h2>

<ul id="theme_option_links">
	<li><a href="<?php echo $themeurl; ?>" target="_blank">Theme Updates</a></li>
	<li><a href="http://www.ghostpool.com/help/<?php echo $dirname; ?>/help.html" target="_blank">Documentation</a></li>
	<li><a href="http://www.themeforest.net/user/GhostPool/portfolio?ref=GhostPool" target="_blank">More Themes</a></li>
</ul>

<form method="post">
	
<div class="theme_buttons_top submit">	
	<input name="save" type="submit" value="Save changes" />
	<input type="hidden" name="action" value="save" />
</div>

<div class="clear"></div>

<div id="panels">

<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "open":
?>

<?php break;
case "close":
?>

</div>

<?php break;
case "title":
?>

<div class="panel option_tab" title="<?php echo $value['name']; ?>">

<?php break;
case "divider":
?>

<div class="divider"></div>

<?php break;
case 'text':
?>

<div class="option">
	<h3><?php echo $value['name']; ?></h3>
	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" class="theme_input" />
	<div class="option_desc"><?php echo $value['desc']; ?></div>
</div>

<?php break;
case 'dimension':
?>

<div class="option dimensions">
	<h3><?php echo $value['name']; ?></h3>
	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" class="theme_input" /><span>px</span>
	<div class="option_desc"><?php echo $value['desc']; ?></div>
</div>

<?php
break;

case 'textarea':
?>

<div class="option">
	<h3><?php echo $value['name']; ?></h3>
	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows="" class="theme_textarea"><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?></textarea>
	<div class="option_desc"><?php echo $value['desc']; ?></div>
</div>

<?php
break;

case 'select':
?>

<div class="option">
	<h3><?php echo $value['name']; ?></h3>
	<select class="theme_select" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option value="<?php echo $option; ?>" <?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select>
	<div class="option_desc"><?php echo $value['desc']; ?></div>
</div>

<?php
break;

case "checkbox":
?>
   
<div class="option">
	<h3><?php echo $value['name']; ?></h3>
	<? if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?><input class="theme_checkbox" type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
	<div class="theme_checkbox_desc"><?php echo $value['desc']; ?></div>
</div>

<?php        
break;

case "radio":
?>

<div class="option">
	<h3><?php echo $value['name']; ?></h3>	
	<?php foreach ($value['options'] as $key=>$option) {
	$radio_setting = get_option($value['id']);
	if($radio_setting != ''){
		if ($key == get_option($value['id']) ) {
			$checked = "checked=\"checked\"";
			} else {
				$checked = "";
			}
	}else{
		if($key == $value['std']){
			$checked = "checked=\"checked\"";
		}else{
			$checked = "";
		}
	}?>
		<div class="theme_radio_wrapper">
		<input type="radio" name="<?php echo $value['id']; ?>" id="<?php echo $value['id'] . $key; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><label for="<?php echo $value['id'] . $key; ?>"><?php echo $option; ?></label>
		</div>	
	<?php } ?>
	<div class="option_desc"><?php echo $value['desc']; ?></div>
</div>

<?php        
break;

case "import_export":
?>

</form>

<div class="option submit">

	<h3>Import Theme Settings</h3>
	<div class="option_desc">If you have a back up of your theme settings you can import them below.</div>
	
	<form method="post" enctype="multipart/form-data">
	<p><input type="file" name="file" id="file" />
	<input type="submit" name="import" value="Upload" /></p>
	<input type="hidden" name="action" value="import" />
	</form>

</div>

<div class="divider"></div>

<div class="option submit">

	<h3>Export Theme Settings</h3>
	<div class="option_desc">If you want to create a back up of all your theme settings click the Export button below. <em>Note: This option only backs up your theme settings and not your post/page data.</em></div>
	
	<form method="post">
	<p><input name="export" type="submit" value="Export Theme Settings" /></p>
	<input type="hidden" name="action" value="export" />
	</form>	

</div>

<?php        
break;
}}
?>

</div>

<div class="clear"></div>

<div class="theme_buttons_bottom submit">
	
	<form method="post" onSubmit="if(confirm('Are you sure you want to reset all the theme settings?')) return true; else return false;">
	<input name="reset" type="submit" value="Reset" />
	<input type="hidden" name="action" value="reset" />
	</form>

</div>

<div class="clear"></div>

<?php } 

if (function_exists('wp_enqueue_style')) {
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-sortable');		
	wp_enqueue_script('thickbox');
	wp_enqueue_style('thickbox');
}

add_action('admin_menu', 'mytheme_add_admin'); 

// Export Theme Settings
function export_settings() {
	global $options;
	header("Cache-Control: public, must-revalidate");
	header("Pragma: hack");
	header("Content-Type: text/plain");
	header('Content-Disposition: attachment; filename="theme-options-'.date("dMy").'.dat"');
	foreach ($options as $value) $theme_settings[$value['id']] = get_settings( $value['id'] );	
	echo serialize($theme_settings);
}

// Import Theme Settings
function import_settings() {
	global $options;
	if ($_FILES["file"]["error"] > 0) {
		echo "Error: " . $_FILES["file"]["error"] . "<br />";
	} else {
		$rawdata = file_get_contents($_FILES["file"]["tmp_name"]);		
		$theme_settings = unserialize($rawdata);		
		foreach ($options as $value) {
			if ($theme_settings[$value['id']]) {
				update_option( $value['id'], $theme_settings[$value['id']] );
				$$value['id'] = $theme_settings[$value['id']];
			} else {
				if ($value['type'] == 'checkbox_multiple') $$value['id'] = array();
				else $$value['id'] = $value['std'];
			}
		}
		
	}
	if (in_array('cacheStyles', get_option('theme_misc'))) cache_settings();
	wp_redirect($_SERVER['PHP_SELF'].'?page=theme-options.php');
}

?>