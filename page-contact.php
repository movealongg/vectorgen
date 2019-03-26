<?php /*Template Name: Contact Template*/ ?>

<?php get_header(); ?>

<div class="container">
  <!--Contact Text Block Section-->
  <div class="row contact-page">
    <div class="eleven columns">
      <?php dynamic_sidebar('contact-us'); ?>
    </div>
  </div>
</div>

<div class="container form-bg">
  <!--Contact Form Section-->
  <div class="row contact-page">
    <div class="eleven columns">
      <?php dynamic_sidebar('contact-form'); ?>
    </div>
  </div>
</div>

<div class="container">
  <!--Collaborators Text Block Section-->
  <div class="row contact-page">
    <div class="eleven columns">
      <?php dynamic_sidebar('collaborators'); ?>
    </div>
  </div>
</div>






<?php get_footer(); ?>
