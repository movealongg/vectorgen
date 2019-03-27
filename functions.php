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
  //Hero Image Widget
  register_sidebar( array(
    'name'          => ('Hero Image'),
    'id'            => 'hero-image',
    'description'   => 'Hero image on home page',
    'before_widget' => '<div class="hero-image">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

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

//Contact Form Section
  register_sidebar( array(
    'name'          => ('Contact Form'),
    'id'            => 'contact-form',
    'description'   => 'Widget area for contact form',
    'before_widget' => '<div class="contact-form">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
//Contact Half Text Block section
  register_sidebar( array(
      'name'          => ('Half Block'),
      'id'            => 'half-block',
      'description'   => 'Widget area for half text block',
      'before_widget' => '<div class="half-block">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

//Collaborators Section
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
