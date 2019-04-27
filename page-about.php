<?php get_header(); ?>

<div class="top">  <!--For Mobile-->
	<!-- Header Image -->
	<div class="hero-section hero">
		<?php dynamic_sidebar('hero-image-about'); ?>
		<div class="seven columns">
			<!-- Header Info Box -->
			<div class="right">
				<?php dynamic_sidebar('hero-image-about-text'); ?>
			</div>
		</div>
	</div>

<!-- Image and Counter Section-->
	<div class="row about-page">
		<div class="six columns">
			<!-- <div class="inner"> -->
				<?php dynamic_sidebar('image-about'); ?>
			<!-- </div> -->
		</div>

		<!-- Counter widgets -->
		<div class="three columns">
			<div class="row">
				<?php dynamic_sidebar('about-counter-one'); ?>
				<?php dynamic_sidebar('about-counter-two'); ?>		
			</div>
		</div>
		<!-- Counter widgets -->
		<div class="three columns">
			<div class="row">
				<?php dynamic_sidebar('about-counter-three'); ?>
				<?php dynamic_sidebar('about-counter-four'); ?>		
			</div>
		</div>
	</div>

	<!-- Bio Section -->
	<div class="about-bio">

		<div class="container about-bio">
			<h4 class="about_team">About the Team</h4>
			
			<!-- Bio 1 -->
			<div class="row">
				<!-- Bio Image -->
				<div class="three columns">
					<?php dynamic_sidebar('about-team-image'); ?>
				</div>
				<!-- Bio Text -->
				<div class="nine columns">
					<?php dynamic_sidebar('about-team-text'); ?>
				</div>
			</div>

			<!-- Bio 2 -->
			<div class="row">
				<!-- Bio Image -->
				<div class="three columns">
					<?php dynamic_sidebar('about-team-image-2'); ?>
				</div>
				<!-- Bio Text -->
				<div class="nine columns">
					<?php dynamic_sidebar('about-team-text-2'); ?>
				</div>
			</div>

		</div>
	</div>

</div>


<?php get_footer(); ?>