<?php get_header(); ?>

	<div class="top">
		<div class="container single">
			<div class="container-feature">
			<!-- Large Blog Image SECTION --> 
				<div class="hero-image-blog"><?php the_post_thumbnail('large'); ?></div>
			</div>	

				<?php 
					if(have_posts()){
						while(have_posts()){
							the_post();?>
							<!-- Blog Title SECTION --> 
							<h2 class="blog-post-title"><?php the_title(); ?></h2>
							<!-- Published SECTION --> 
							<p class="p"><?php echo "Published: " . get_the_date(); ?></p>
							<!-- Author SECTION --> 
							<p class="p l"><?php echo "Author: " . get_the_author(); 
							?></p>
							<div class="blog-post-content" ><?php the_content(); ?></div>
							
						<?php } // end while loop
					}// end if statement
				?>
		
		</div>

	</div>	
<?php get_footer(); ?>
