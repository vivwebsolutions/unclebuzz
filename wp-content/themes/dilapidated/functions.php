<?php

// Featured Image Sizes
add_theme_support('post-thumbnails');
get_option('thumbnail_crop');
add_image_size('slider', 462, 262, true);
add_image_size('thumbnail', 115, 115, true);

// Navigation Menus
if(function_exists('register_nav_menus')) {
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
register_nav_menus(array(
'header-nav' => __( 'Header Navigation' )
));
}
}

// Custom Background
if(function_exists('add_custom_background')) {
add_custom_background();
}
require_once(TEMPLATEPATH. '/dynamic-classes.php');
// Main Theme Options
require_once(TEMPLATEPATH . '/includes/theme-options.php');

// Theme Post Options
require_once(TEMPLATEPATH . '/includes/theme-post-options.php');

// Widgets
require_once(TEMPLATEPATH . '/includes/theme-widgets.php');

// Sidebars
require_once(TEMPLATEPATH . '/includes/theme-sidebars.php');

// WP Pagenavi
require_once(TEMPLATEPATH . '/includes/wp-pagenavi.php');

// WordPress Excerpt Length
function new_excerpt_length($length) {return 500;}
add_filter('excerpt_length', 'new_excerpt_length');

// Custom Excerpt Length
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

// Replace Excerpt Ellipsis
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
remove_filter('the_excerpt', 'wpautop');

// Shorten Review Box Titles (Knowtebook.com)
function posttitle($text)
{
$chars_limit = 40;
$chars_text = strlen($text);
$text = $text." ";
$text = substr($text,0,$chars_limit);
$text = substr($text,0,strrpos($text,' '));
if ($chars_text > $chars_limit)
{
$text = $text."...";
}
return $text;
}

function slidertitle($text)
{
$chars_limit = 28;
$chars_text = strlen($text);
$text = $text." ";
$text = substr($text,0,$chars_limit);
$text = substr($text,0,strrpos($text,' '));
if ($chars_text > $chars_limit)
{
$text = $text."...";
}
return $text;
}

// Comment Template
function comment_template($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>

<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	
	<div id="comment-<?php comment_ID(); ?>" class="comment-body">
		<?php echo get_avatar($comment,$size='60'); ?>
		
		<div class="comment-meta">
			<font class="author"><?php printf(__('%s'), comment_author_link()) ?></font> (<?php if (function_exists('time_since')) {
			echo time_since(abs(strtotime($comment->comment_date_gmt . " GMT")), time()) . " ago";
			} else {
			comment_time('d M Y, G:i');
			} ?>)
			<br/><?php comment_reply_link(array_merge( $args, array('reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?> <?php edit_comment_link('Edit','/ ',''); ?>
		</div>
	
		<div class="clear"></div>
			
		<div class="comment-text">
			<?php if ($comment->comment_approved == '0') : ?>
			<div class="moderation">
				<?php _e('Your comment is awaiting moderation.') ?>
			</div>
			<?php endif; ?>
			<?php comment_text() ?>
		</div>
		
	</div>
	
<?php } ?>
