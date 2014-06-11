<?php
/*
Template Name: Food
-- Essentially a half width template
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">

                                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
                                    <div class="small-12 columns">
                                      <?php the_field('food_overview'); ?>
                                      <hr />
                                    </div>

                                    <div class="small-12 medium-6 columns" role="main">

                                      <h5><?php the_field('raw_food_overview'); ?></h5>
                                      <div class="food_brands">
                                        <?php the_field('raw_food'); ?>
                                      </div>

			
                                    </div> <!-- end #main -->

                                  <?php endwhile; endif; ?>
    
                                    <div class="small-12 medium-6 columns" role="main">

                                      <h5><?php the_field('dry_canned_overview'); ?></h5>
                                      <div class="food_brands">
                                        <?php the_field('dry_canned'); ?>
                                      </div>
			
                                    </div> <!-- end #main -->

				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

