<?php
/*
Plugin Name: Hide Admin Bar
Plugin URI:  http://wordpress-deutschland.org
Description: Set the display status of the admin bar to false
Author:      WordPress Deutschland
Author URI:  http://wordpress-deutschland.org
Version:     1.0.0
Licnce:      GPL
*/

add_filter( 'show_admin_bar', '__return_false' );

?>