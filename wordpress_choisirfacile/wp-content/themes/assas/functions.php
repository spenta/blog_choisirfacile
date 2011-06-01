<?php
register_sidebar(array('name'=>'Sidebar Right',
	        'before_widget' => '<div class="side-widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
register_sidebar(array('name'=>'Footer Widget 1',
	        'before_widget' => '<div class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
register_sidebar(array('name'=>'Footer Widget 2',
	        'before_widget' => '<div class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
register_sidebar(array('name'=>'Footer Widget 3',
	        'before_widget' => '<div class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
register_sidebar(array('name'=>'Footer Widget 4',
	        'before_widget' => '<div class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
// add feed links to header
if (function_exists('automatic_feed_links')) {
	automatic_feed_links();
} else {
	return;
}
// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
//register the sidebar
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="sidepanel">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'Footer',
		'before_widget' => '<div class="sidepanel">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
//include the admin controlpanel
include(TEMPLATEPATH.'/includes/themeoptions.php');
include(TEMPLATEPATH.'/includes/themeoptions2.php');
require_once(TEMPLATEPATH . '/backend/controlpanel.php');
$cpanel = new ControlPanel();
require_once(TEMPLATEPATH . '/backend/customfields.php');
?>