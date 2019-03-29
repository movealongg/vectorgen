<?php get_header(); ?>

<div class="hero-section hero">
	<?php dynamic_sidebar('hero-image-about'); ?>
		<div class="centered">
        </div>
</div>

<div class="row">
	<div class="six columns">
		<!-- <div class="inner"> -->
			<?php dynamic_sidebar('image-about'); ?>
		<!-- </div> -->
	</div>
	<div class="three columns">
		<?php dynamic_sidebar('about-counter-one'); ?>	
	</div>
	<div class="three columns">
		<?php dynamic_sidebar('about-counter-two'); ?>	
	</div>
</div>


<?php get_footer(); ?>