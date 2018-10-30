<?php
//Add widgets area
function review_theme_widgets_init(){ 
	register_sidebar(array(
		'id' => 'sidebar',
		'name' => __('Sidebar for Post', 'review-theme'),
		//'description' => __('Add widgets here to appear in your Left SideBar', 'review-theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		'after_widget' => '</div>'
	));	
	register_sidebar(array(
		'id' => 'sidebar-page',
		'name' => __('Sidebar for Page', 'review-theme'),
		//'description' => __('Add widgets here to appear in your Left SideBar', 'review-theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		'after_widget' => '</div>'
	));	
	register_sidebar(array(
		'id' => 'footer_1',
		'name' => __('Footer Column 1', 'review-theme'),
		'description' => __('Add widgets here to appear in your Footer Column 1', 'review-theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
		'after_widget' => '</div>'
	));	
	register_sidebar(array(
		'id' => 'footer_2',
		'name' => __('Footer Column 2', 'review-theme'),
		'description' => __('Add widgets here to appear in your Footer Column 2', 'review-theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
		'after_widget' => '</div>'
	));	
	register_sidebar(array(
		'id' => 'footer_3',
		'name' => __('Footer Column 3', 'review-theme'),
		'description' => __('Add widgets here to appear in your Footer Column 3', 'review-theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
		'after_widget' => '</div>'
	));	
	register_sidebar(array(
		'id' => 'footer_4',
		'name' => __('Footer Column 4', 'review-theme'),
		'description' => __('Add widgets here to appear in your Footer Column 4', 'review-theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
		'after_widget' => '</div>'
	));		
}
add_action('widgets_init', 'review_theme_widgets_init');

