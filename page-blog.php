<?php /*Template Name: Blog Page Template*/ ?>

<?php get_header(); ?>

	<div class="container blog">
		<div class="row">
		<h1> HELLO This is A TEST! <h1>

		<?php



			if(have_posts()){
				while (have_posts()){
					the_post(); ?>
					<div class="three column posts">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
						<p class="p"><?php echo "Published: " . get_the_date(); ?></p>
						<p class="p l"><?php echo "Article written by: " . get_the_author(); ?></p>
						<?php the_excerpt(); ?>
					</div>

		     <?php	} //ends while loop
			} // end if statement
		?>
		</div>
	</div>




<?php get_footer(); ?>
