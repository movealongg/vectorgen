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

  //Home Text Block Widget
  register_sidebar( array(
    'name'          => ('Home Text Block'),
    'id'            => 'home-block',
    'description'   => 'Widget area for home section',
    'before_widget' => '<div class="home-block">',
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

// LEARN MORE - Investment Potential
  register_sidebar( array(
    'name'          => ('Investment Potential'),
    'id'            => 'investment-potential',
    'description'   => 'Widget area for investment potential on Learn More',
    'before_widget' => '<div class="investment-potential">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));  

//  LEARN MORE - Money Area 1
    register_sidebar( array(
      'name'          => ('Money Section - 1'),
      'id'            => 'learn-more-money-1',
      'description'   => 'Learn More - Money 1.',
      'before_widget' => '<div class="learn-more-money-1">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));

 // LEARN MORE - Money Area 2
    register_sidebar( array(
      'name'          => ('Money Section - 2'),
      'id'            => 'learn-more-money-2',
      'description'   => 'Learn More - Money 2.',
      'before_widget' => '<div class="learn-more-money-2">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));

// LEARN MORE - Money Area 3
    register_sidebar( array(
      'name'          => ('Money Section - 3'),
      'id'            => 'learn-more-money-3',
      'description'   => 'Learn More - Money 3.',
      'before_widget' => '<div class="learn-more-money-3">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));

// LEARN MORE - BUDGET
    register_sidebar( array(
      'name'          => ('Budget Section'),
      'id'            => 'learn-more-budget',
      'description'   => 'Learn More - Budget Section.',
      'before_widget' => '<div class="learn-more-budget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));    

} 

add_action('widgets_init', 'blank_widgets_init');



 ?>
