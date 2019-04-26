<?php /*Template Name: Blog Page Template*/ ?>

<?php get_header(); ?>
	<div class="top-news">
		<div class="container blog">
			<div class="row">
	        	<?php dynamic_sidebar('blog-title'); ?>
	      	</div>

				<div class="row blog-row">

				<?php

					if(have_posts()){
						while (have_posts()){
							the_post(); ?>
							<!-- Blog Image SECTION --> 
							<div class="one-third column posts">

								<div class="animated fadeIn duration2"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
								<!-- Blog Title SECTION --> 
								<h3><a href="<?php the_permalink(); ?>" class = "blog-title animated fadeIn duration2" ><?php the_title();?></a></h3>
								<!-- Published SECTION --> 
								<p class="p hide"><?php echo "Published: " . get_the_date(); ?></p>
								<!-- Author SECTION --> 
								<p class="p l hide"><?php echo "Author: " . get_the_author(); ?></p>
							</div>

				     <?php	} //ends while loop
					} // end if statement
				?>
				</div>
		</div>
	</div>	




<?php get_footer(); ?>
