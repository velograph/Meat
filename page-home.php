<?php
/*
Template Name: Home Page!
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-8 medium-8 columns first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
                                              <?php
                                               
                                              $images = get_field('home_page_gallery');
                                               
                                                if( $images ): ?>
                                                  <div class="home_page_gallery">
                                                      <ul class="" data-orbit data-options="timer_speed:5000;bullets:false;slide_number:false;">
                                                          <?php foreach( $images as $image ): ?>
                                                              <li class="">
                                                                  <img class="" src="<?php echo $image['sizes']['home_page_gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
                                                              </li>
                                                          <?php endforeach; ?>
                                                      </ul>
                                                  </div>

                                              <?php endif; ?>

                                              <?php get_template_part( 'partials/loop', 'page_home' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
	
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
                                      <div class="row">

                                        <div class="small-12 columns sponsored">
                                          <?php if ( get_field('sponsor_text', 488) ) : ?>
                                            <h3><?php the_field('sponsor_text', 488); ?></h3>
                                          <?php endif; ?>
                                        </div>

                                      </div>

                                      <div class="row sponsored">

                                        <div class="small-12 medium-5 columns">
                                          <?php if ( get_field('bta_logo', 488) ) : ?>
                                            <a href="http://btaoregon.org/" target="_blank">
                                              <img src="<?php the_field('bta_logo', 488); ?>" alt="BTA" />
                                            </a>
                                          <?php endif; ?>
                                        </div>

                                          <div class="small-12 medium-2 columns sponsored_break">AND</div>

                                        <div class="small-12 medium-5 columns">
                                          <?php if ( get_field('team_beer_logo', 488) ) : ?>
                                            <a href="http://www.teambeerpdx.com/" target="_blank">
                                              <img class="team_beer" src="<?php the_field('team_beer_logo', 488); ?>" alt="Team Beer" />
                                            </a>
                                          <?php endif; ?>
                                        </div>
                                      </div>

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
