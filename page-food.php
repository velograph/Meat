<?php
/*
Template Name: Food
-- Essentially a half width template
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content">

                                  <div class="row raw_food">

                                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
                                    <div class="small-12 columns">
                                      <h3><?php the_field('food_overview'); ?></h3>
                                      <hr />
                                    </div>

                                    <div class="small-12 medium-6 columns" role="main">

                                      <?php
                                       
                                      $images = get_field('raw_food_gallery');
                                       
                                        if( $images ): ?>
                                          <div class="home_page_gallery">
                                              <ul class="" data-orbit data-options="timer_speed:5000;pause_on_hover:false;timer:false;bullets:false;slide_number:false;">
                                                  <?php foreach( $images as $image ): ?>
                                                      <li class="">
                                                          <img class="" src="<?php echo $image['sizes']['home_page_gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
                                                      </li>
                                                  <?php endforeach; ?>
                                              </ul>
                                          </div>

                                      <?php endif; ?>

                                    </div>

                                    <div class="small-12 medium-6 columns" role="main">

                                      <h5><?php the_field('raw_food_overview'); ?></h5>
                                      <div class="food_brands">
                                        <?php the_field('raw_food'); ?>
                                      </div>
			
                                    </div> <!-- end #main -->

                                  </div>

                                  <div class="row dry_food">

                                    <div class="small-12 medium-6 columns" role="main">
                                      <?php
                                       
                                      $images = get_field('dry_food_gallery');
                                       
                                        if( $images ): ?>
                                          <div class="home_page_gallery">
                                              <ul class="" data-orbit data-options="timer_speed:5000;pause_on_hover:false;timer:false;bullets:false;slide_number:false;">
                                                  <?php foreach( $images as $image ): ?>
                                                      <li class="">
                                                          <img class="" src="<?php echo $image['sizes']['home_page_gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
                                                      </li>
                                                  <?php endforeach; ?>
                                              </ul>
                                          </div>

                                      <?php endif; ?>

                                    </div>

                                    <div class="small-12 medium-6 columns" role="main">

                                      <h5><?php the_field('dry_canned_overview'); ?></h5>
                                      <div class="food_brands">
                                        <?php the_field('dry_canned'); ?>
                                      </div>
			
                                    </div> <!-- end #main -->

                                  <?php endwhile; endif; ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

