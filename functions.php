<?php

//Add custom menus
function custom_menus(){
  register_nav_menus(array(
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu')
  ));
}

add_action('init', 'custom_menus');





 ?>



<?php 
// BLOG PICTURES
	add_theme_support('post-thumbnails');

?>