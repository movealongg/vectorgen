<?php /*Template Name: Blog Page Template*/ ?>

<?php get_header(); ?>

	<div class="container blog">
	
		<div class="row blog-row">
	
		<?php 

			if(have_posts()){
				while (have_posts()){
					the_post(); ?>
					<div class="one-third column posts">

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
						<h3><a href="<?php the_permalink(); ?>" class = "blog-title" ><?php the_title();?></a></h3>
						<p class="p"><?php echo "Published: " . get_the_date(); ?></p>
						<p class="p l"><?php echo "Author: " . get_the_author(); ?></p>
					</div>
					
		     <?php	} //ends while loop
			} // end if statement
		?>
		</div> 
	</div>




// <?php get_footer(); ?>
