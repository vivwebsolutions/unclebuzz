<?php

// Sidebars

	register_sidebar(array('name'=>'mplayer', 'id'=>'mplayer',
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>'));

    register_sidebar(array('name'=>'General Sidebar', 'id'=>'general',
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'));

	register_sidebar(array('name'=>'Slider', 'id'=>'slider',
		'before_widget' => '<div id="%1$s" class="slider-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'));

    register_sidebar(array('name'=>'Homepage Sidebar', 'id'=>'homepage',
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'));
        
    register_sidebar(array('name'=>'Post Sidebar', 'id'=>'post',
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'));

    register_sidebar(array('name'=>'Page Sidebar', 'id'=>'page',
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'));
        
    register_sidebar(array('name'=>'Blog Sidebar', 'id'=>'blog',
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'));
        
    register_sidebar(array('name'=>'Contact Sidebar', 'id'=>'contact',
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'));

    register_sidebar(array('name'=>'Portfolio Sidebar', 'id'=>'portfolio',
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'));

    register_sidebar(array('name'=>'Other Sidebar', 'id'=>'other',
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'));
        
    register_sidebar(array('name'=>'Footer 1', 'id'=>'footer-1',
        'before_widget' => '<div id="%1$s" class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'));

    register_sidebar(array('name'=>'Footer 2', 'id'=>'footer-2',
        'before_widget' => '<div id="%1$s" class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'));
        
    register_sidebar(array('name'=>'Footer 3', 'id'=>'footer-3',
        'before_widget' => '<div id="%1$s" class="footer-widget last">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'));

?>