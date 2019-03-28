<?php /*Template Name: Our Plan Template*/ ?>

<?php get_header(); ?>

<div class="container">
    <h5 class="our_plan">Our Plan</h5>


<!--Stage 1 Section -->
    <div class="row stage1">
        <div class="six columns">
            <div class="our-plan-stage1-text">
                <?php dynamic_sidebar('stage1-text'); ?>
            </div>
        </div>
        <div class="six columns">
            <div class="our-plan-stage1-image">
                <?php dynamic_sidebar('stage1-image'); ?>
            </div>
        </div>
    </div>  





</div>



// <?php get_footer(); ?>