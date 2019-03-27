<?php /*Template Name: Home Template*/ ?>

<?php get_header(); ?>

<div class="hero-section">
			<?php dynamic_sidebar('hero-image'); ?>
</div>

<div class="container">
  <!--Contact Text Block Section-->
  <div class="row">
    <div class="eleven columns">
      <?php dynamic_sidebar('home-block'); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
