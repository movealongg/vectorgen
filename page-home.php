<?php /*Template Name: Home Template*/ ?>

<?php get_header(); ?>

<div class="hero-section hero">
			<?php dynamic_sidebar('hero-image'); ?>
			<div class="centered">
          		<?php dynamic_sidebar('hero-image-text'); ?>
        	</div>
</div>

<div class="home-block-color">
	<div class="container">
	  <!--Home Text Block Section-->
	  <div class="row home-page">
	    <div class="eleven columns">
	      <?php dynamic_sidebar('home-block'); ?>
	    </div>
	  </div>
	</div>
</div>

<div class="home-image-section">
		<?php dynamic_sidebar('home-image'); ?>
</div>


<?php get_footer(); ?>
