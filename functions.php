<?php

//Add Custom Menus
function custom_menus(){
  register_nav_menus(array(
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu')
  ));
}
add_action('init', 'custom_menus');

//Custom header
$custom_image_header = array(
  'width'   => 100,
  'height'  => 78,
  'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);

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

  //Hero Image Text Widget
  register_sidebar( array(
    'name'          => ('Hero Image Text'),
    'id'            => 'hero-image-text',
    'description'   => 'Hero image text on home page',
    'before_widget' => '<div class="hero-image-text">',
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

  //Home Image Widget Bottom
  register_sidebar( array(
    'name'          => ('Home Image'),
    'id'            => 'home-image',
    'description'   => 'Home image on bottom of home page',
    'before_widget' => '<div class="home-image">',
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
  // register_sidebar( array(
  //     'name'          => ('Half Block'),
  //     'id'            => 'half-block',
  //     'description'   => 'Widget area for half text block',
  //     'before_widget' => '<div class="half-block">',
  //     'after_widget'  => '</div>',
  //     'before_title'  => '<h3 class="widget-title">',
  //     'after_title'   => '</h3>'
  //   ));

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

// LEARN MORE - Investment Potential IMAGE
  register_sidebar( array(
    'name'          => ('Investment Potential Image'),
    'id'            => 'investment-potential-image',
    'description'   => 'Widget area for investment potential IMAGE on Learn More',
    'before_widget' => '<div class="investment-potential-image">',
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

  // OUR PLAN - STAGE 1
    register_sidebar( array(
      'name'          => ('Our Plan Stage 1'),
      'id'            => 'stage1-text',
      'description'   => 'Our Plan - Stage 1 Section',
      'before_widget' => '<div class="stage1-text">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="our-plan-stage1">',
      'after_title'   =>  '</h3>'
    ));

//   OUR PLAN - STAGE 1 IMAGE
    register_sidebar( array(
      'name'          => ('Our Plan Stage 1 Image'),
      'id'            => 'stage1-image',
      'description'   => 'Widget area for Our Plan Stage 1 IMAGE',
      'before_widget' => '<div class="stage1-image">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="stage1-image">',
      'after_title'   => '</h3>'
  ));

//  OUR PLAN - STAGE 2
    register_sidebar( array(
      'name'          => ('Our Plan Stage 2'),
      'id'            => 'stage2-text',
      'description'   => 'Our Plan - Stage 2 Section',
      'before_widget' => '<div class="stage2-text">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="our-plan-stage2">',
      'after_title'   =>  '</h3>'
  ));

//  OUR PLAN - STAGE 2 IMAGE
    register_sidebar( array(
      'name'          => ('Our Plan Stage 2 Image'),
      'id'            => 'stage2-image',
      'description'   => 'Widget area for Our Plan Stage 2 IMAGE',
      'before_widget' => '<div class="stage2-image">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="our-plan">',
      'after_title'   => '</h3>'
));

//  OUR PLAN - STAGE 3
    register_sidebar( array(
      'name'          => ('Our Plan Stage 3'),
      'id'            => 'stage3-text',
      'description'   => 'Our Plan - Stage 3 Section',
      'before_widget' => '<div class="stage3-text">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="our-plan-stage3">',
      'after_title'   =>  '</h3>'
));

//  OUR PLAN - STAGE 3 IMAGE
    register_sidebar( array(
      'name'          => ('Our Plan Stage 3 Image'),
      'id'            => 'stage3-image',
      'description'   => 'Widget area for Our Plan Stage 3 IMAGE',
      'before_widget' => '<div class="stage3-image">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="our-plan">',
      'after_title'   => '</h3>'
));

//  OUR PLAN - STAGE 4
    register_sidebar( array(
      'name'          => ('Our Plan Stage 4'),
      'id'            => 'stage4-text',
      'description'   => 'Our Plan - Stage 4 Section',
      'before_widget' => '<div class="stage4-text">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="our-plan-stage4">',
      'after_title'   =>  '</h3>'
));

//  OUR PLAN - STAGE 4 IMAGE
    register_sidebar( array(
      'name'          => ('Our Plan Stage 4 Image'),
      'id'            => 'stage4-image',
      'description'   => 'Widget area for Our Plan Stage 4 IMAGE',
      'before_widget' => '<div class="stage4-image">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="our-plan">',
      'after_title'   => '</h3>'
));

//  OUR PLAN - STAGE 5
    register_sidebar( array(
      'name'          => ('Our Plan Stage 5'),
      'id'            => 'stage5-text',
      'description'   => 'Our Plan - Stage 5 Section',
      'before_widget' => '<div class="stage5-text">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="our-plan-stage5">',
      'after_title'   =>  '</h3>'
));

//  OUR PLAN - STAGE 5 IMAGE
    register_sidebar( array(
      'name'          => ('Our Plan Stage 5 Image'),
      'id'            => 'stage5-image',
      'description'   => 'Widget area for Our Plan Stage 5 IMAGE',
      'before_widget' => '<div class="stage5-image">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="our-plan">',
      'after_title'   => '</h3>'
));
// ABOUT PAGE
  //Hero Image Widget
    register_sidebar( array(
      'name'          => ('Hero Image About'),
      'id'            => 'hero-image-about',
      'description'   => 'Hero image on about page',
      'before_widget' => '<div class="hero-image-about">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
));
    register_sidebar( array(
      'name'          => ('Image About'),
      'id'            => 'image-about',
      'description'   => 'Image on about page',
      'before_widget' => '<div class="image-about">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
));
    register_sidebar( array(
      'name'          => ('About Counters One'),
      'id'            => 'about-counter-one',
      'description'   => 'Counters on About Page',
      'before_widget' => '<div class="about-counter">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
));
    register_sidebar( array(
      'name'          => ('About Counters Two'),
      'id'            => 'about-counter-two',
      'description'   => 'Counters on About Page',
      'before_widget' => '<div class="about-counter">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
));
}

add_action('widgets_init', 'blank_widgets_init');



 ?>
