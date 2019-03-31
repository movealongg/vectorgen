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

<div class="container about-bio">
	<h4 class="about_team">About the Team</h4>
	
	<div class="row">
		<div class="three columns">
			<?php dynamic_sidebar('about-team-image'); ?>
		</div>
		<div class="nine columns">
			<?php dynamic_sidebar('about-team-text'); ?>
		</div>
	</div>
</div>



<?php get_footer(); ?>