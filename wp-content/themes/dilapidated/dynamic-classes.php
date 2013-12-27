<?php

// Generates semantic classes for BODY element
function dynheader( $print = true ) {
	global $wp_query, $current_user;


	// Generic semantic classes for what type of content is displayed
	is_home()                  ? $c[] = 'head-home'    : null; // For the blog posts page, if set
	is_page()                  ? $c[] = 'head-page'   : null;
	is_page('news')            ? $c[] = 'head-news'   : null; 
	is_page('bio')             ? $c[] = 'head-bio'   : null;
	is_page('music')           ? $c[] = 'head-music'   : null;
	is_page('contact')         ? $c[] = 'head-contact'   : null;
	is_page('gallery')         ? $c[] = 'head-gallery'   : null;
	is_single()                ? $c[] = 'head-home'   : null;
	is_archive()               ? $c[] = 'head-home'    : null;
	is_date()                  ? $c[] = 'date'       : null;
	is_search()                ? $c[] = 'head-home'     : null;
	is_paged()                 ? $c[] = 'paged'      : null;
	is_attachment()            ? $c[] = 'head-home' : null;
	is_404()                   ? $c[] = 'head-home'     : null; // CSS does not allow a digit as first character*/



	// Separates classes with a single space, collates classes for BODY
	$c = join( ' ', apply_filters( 'body_class',  $c ) ); // Available filter: body_class

	// And tada!
	return $print ? print($c) : $c;
}

// Generates semantic classes for each post DIV element
function thematic_post_class( $print = true ) {
	global $post, $thematic_post_alt;
}

// Define the num val for 'alt' classes (in post DIV and comment LI)
$thematic_post_alt = 1;


?>