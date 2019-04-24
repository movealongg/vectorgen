<?php get_header(); ?>

<div class="container single">
	<div class="centered">
		<div class="hero-image-blog"><?php the_post_thumbnail('large'); ?></div>
	</div>	

		<?php 
			if(have_posts()){
				while(have_posts()){
					the_post();?>
					<h2 class="blog-post-title"><?php the_title(); ?></h2>
					<p class="p"><?php echo "Published: " . get_the_date(); ?></p>
					<p class="p l"><?php echo "Author: " . get_the_author(); 
					?></p>
					<div class="blog-post-content" ><?php the_content(); ?></div>
					
				<?php } // end while loop
			}// end if statement
		?>
</div>
<?php get_footer(); ?>
