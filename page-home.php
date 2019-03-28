<?php /*Template Name: Home Template*/ ?>

<?php get_header(); ?>

<div class="hero-section">
			<?php dynamic_sidebar('hero-image'); ?>
			<div class="centered">
          		<h1><?php the_title(); ?></h1>
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


<?php get_footer(); ?>
