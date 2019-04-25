<?php get_header(); ?>
<div class="top">
   <div class="iv-color">
      <div class="container invest-page">
         <div class="invest">
            <?php dynamic_sidebar('investment-potential-title'); ?>
         </div>
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
   </div>
   
   <!-- Money SECTION --> 
   <div class="money-color">
      <div class="container invest-page">
         <div class="invest">
            <?php dynamic_sidebar('learn-more-money-title'); ?>
         </div>
         <div class="row money-section-learn-more ">
            <div class="one-third column">
               <div class="money-1 money-text">
                  <?php dynamic_sidebar('learn-more-money-1'); ?>
               </div>
            </div>
            <div class="one-third column">
               <div class="money-2 money-text">
                  <?php dynamic_sidebar('learn-more-money-2'); ?>
               </div>
            </div>
            <div class="one-third column">
               <div class="money-3 money-text">
                  <?php dynamic_sidebar('learn-more-money-3'); ?>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Invest Button -->
        <div class="blue-background"> 
         <div class="row">
            <div class="twelve columns">
               <div class="invest-button">
                  <?php dynamic_sidebar('investment-button'); ?>
               </div>
            </div>
         </div>
        </div> 

   <!-- Budget SECTION -->
   <div class="bu-color">
      <div class="container invest-page">
         <div class="invest">
            <?php dynamic_sidebar('learn-more-budget-title'); ?>
         </div>
         <div class="row budget-section">
            <div class="twelve columns">
               <div class="budget-learn-more">
                  <?php dynamic_sidebar('learn-more-budget'); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Another SECTION -->
   <div class="money-color another-section">
      <div class="container invest-page">
         <div class="invest">
            <?php dynamic_sidebar('another-title'); ?>
         </div>
         <div class="row invest-section">
            <div class="six columns">
               <div class="invest-learn-more-image">
                  <?php dynamic_sidebar('another-image'); ?>
               </div>
            </div>
            <div class="six columns">
               <div class="invest-learn-more">
                  <?php dynamic_sidebar('another-content'); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- More Resources  -->
        <div class="resource-background"> 
         <div class="row">
            <div class="twelve columns">
               <div class="invest-button">
                  <?php dynamic_sidebar('investment-resources'); ?>
               </div>
            </div>
         </div>
        </div> 
</div>
</div>
<?php get_footer(); ?>