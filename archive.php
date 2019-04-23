<?php /* Template Name: Archive Page */

get_header(); 
?>


  <div class="container">
      <div class="row">
        <div class="twelve columns">
              <h2 class="archive-title">Category: <?php
                    if(is_category()){
                      single_cat_title();
                    }elseif(is_tag()){
                      single_tag_title();
                    }elseif(is_day()){
                      echo "Daily Archives: " . get_the_date();
                    }elseif(is_month()){
                      echo "Monthly Archives: " . get_the_date('F Y');
                    }elseif(is_year()){
                      echo "Yearly Archives: " . get_the_date('Y');
                    }else{
                      echo "Archives";
                    }
                 ?>
              </h2>
         </div>
       </div>
       <?php if(have_posts()){
            while(have_posts()){
                the_post();?>
                <div class="row">
                    <div class="twelve columns">
                        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <?php
              }//ends while loop
          }//ends if statement
        ?>
  </div>
</div>

<?php get_footer(); ?>
