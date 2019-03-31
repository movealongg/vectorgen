<?php /*Template Name: Our Plan Template*/ ?>

<?php get_header(); ?>

 <!--Stage 1 Section -->
<div class="stage1_container">
    
    <div class="container ">
        <h5 class="our_plan">Our Plan</h5>

        <div class="row stage1">
            <div class="six columns">
                <div class="stage1-text">
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
</div>

<div class="triangle-down"></div>

 <!--Stage 2 Section -->
<div class="stage2_container">
    
    <div class="container ">

        <div class="row stage2">
            <div class="six columns">
                <div class="our-plan-stage2-image">
                    <?php dynamic_sidebar('stage2-image'); ?>
                </div>
            </div>
            <div class="six columns">
                <div class="stage2-text">
                    <?php dynamic_sidebar('stage2-text'); ?>
                </div>
            </div>
        </div> 
    </div>
</div>

<div class="triangle-down-2"></div>

<!--Stage 3 Section -->
<div class="stage3_container">
    
    <div class="container ">

        <div class="row stage3">
            <div class="six columns">
                <div class="stage3-text">
                    <?php dynamic_sidebar('stage3-text'); ?>
                </div>
            </div>
            <div class="six columns">
                <div class="our-plan-stage3-image">
                    <?php dynamic_sidebar('stage3-image'); ?>
                </div>
            </div>
        </div> 
    </div>
</div>

<div class="triangle-down-3"></div>

 <!--Stage 4 Section -->
<div class="stage4_container">
    
    <div class="container ">

        <div class="row stage4">
            <div class="six columns">
                <div class="our-plan-stage4-image">
                    <?php dynamic_sidebar('stage4-image'); ?>
                </div>
            </div>
            <div class="six columns">
                <div class="stage4-text">
                    <?php dynamic_sidebar('stage4-text'); ?>
                </div>
            </div>
        </div> 
    </div>
</div>

<div class="triangle-down-4"></div>

 <!--Stage 5 Section -->
<div class="stage5_container">
    
    <div class="container ">

        <div class="row stage5">
            <div class="six columns">
                <div class="stage5-text">
                    <?php dynamic_sidebar('stage5-text'); ?>
                </div>
            </div>
            <div class="six columns">
                <div class="our-plan-stage5-image">
                    <?php dynamic_sidebar('stage5-image'); ?>
                </div>
            </div>
        </div> 
    </div>
</div>


<?php get_footer(); ?>