<?php get_header(); ?>
<div class="iv-color">
<div class="container invest-page">
<h3 class="invest">Investment Potential</h3>

<!-- Investment Potential SECTION -->
  <div class="row invest-section">
    <div class="six columns">
      <div class="invest-learn-more-image">
        <?php dynamic_sidebar('investment-potential-image'); ?>
      </div>
    </div>
    <div class="six columns">
      <div class="invest-learn-more">
        <?php dynamic_sidebar('investment-potential'); ?>
      </div>
    </div>
  </div>
</div>  

<!-- Money SECTION --> 
<h3 class="invest">Where Your Money Goes</h3>

  <div class="row money-section-learn-more ">
    <div class="one-third column">
      <div class="money-1">
        <?php dynamic_sidebar('learn-more-money-1'); ?>
      </div>
    </div>
    <div class="one-third column">
       <div class="money-2">
        <?php dynamic_sidebar('learn-more-money-2'); ?>
      </div>
    </div>
    <div class="one-third column">
       <div class="money-3">
        <?php dynamic_sidebar('learn-more-money-3'); ?>
      </div>
    </div>
  </div>

<!-- Budget SECTION -->
<h3 class="invest">Budget</h3>
  <div class="row budget-section">
    <div class="twelve columns">
      <div class="budget-learn-more">
        <?php dynamic_sidebar('learn-more-budget'); ?>
      </div>
    </div>
  </div>














</div>


<?php get_footer(); ?>
