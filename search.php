<?php /* Template Name: Search Page */

get_header(); 
?>

<div class="container search">
  <div class="row">
    <div class="twelve columns">
      <?php if(have_posts){ ?>
            <h2><?php printf(__('Search results for : %s'), '<span>' . get_search_query() . '</span>'); ?></h2>
            <?php while(have_posts()){
              the_post();?>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?>
              <a href="<?php the_permalink()?>">Read More...</a><?php
             }//end while loop
            }else{?> 
              <h2>Nothing was found.</h2>
              <p>Sorry, Nothing matched your search criteria. Please try again with a new search term.</p><?php
            }
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>