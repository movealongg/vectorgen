<?php get_header(); ?>

<div class="hero-section hero">
	<?php dynamic_sidebar('hero-image-about'); ?>
		<div class="centered">
        </div>
</div>

<div class="row about-page">
	<div class="six columns">
		<!-- <div class="inner"> -->
			<?php dynamic_sidebar('image-about'); ?>
		<!-- </div> -->
	</div>

	<div class="three columns">
		<div class="row">
			<?php dynamic_sidebar('about-counter-one'); ?>
			<?php dynamic_sidebar('about-counter-two'); ?>		
		</div>
	</div>

	<div class="three columns">
		<div class="row">
			<?php dynamic_sidebar('about-counter-three'); ?>
			<?php dynamic_sidebar('about-counter-four'); ?>		
		</div>
	</div>
</div>


<?php get_footer(); ?>