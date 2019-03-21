<?php

//Add Custom Menus
function custom_menus(){
  register_nav_menus(array(
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu')
  ));
}
add_action('init', 'custom_menus');

// BLOG PICTURES
	add_theme_support('post-thumbnails');

//Add Widget Areas
function blank_widgets_init(){
  //Contact Text Block Widget
  register_sidebar( array(
    'name'          => ('Contact Text Block'),
    'id'            => 'contact-us',
    'description'   => 'Widget area for Contact Us section',
    'before_widget' => '<div class="contact-us">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar( array(
    'name'          => ('Contact Form'),
    'id'            => 'contact-form',
    'description'   => 'Widget area for contact form',
    'before_widget' => '<div class="contact-form">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar( array(
    'name'          => ('Collaborators Text Block'),
    'id'            => 'collaborators',
    'description'   => 'Widget area for Collaborators section',
    'before_widget' => '<div class="collaborators">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

}

add_action('widgets_init', 'blank_widgets_init');



 ?>
