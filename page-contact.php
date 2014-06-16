<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="contact" class="small-12 medium-6 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                            <?php the_content(); ?>
                                              <ul>
                                                <li><?php the_field('address'); ?></li>
                                                <li><?php the_field('address_line_2'); ?></li>
                                                <li><?php the_field('hours'); ?></li>
                                                <li><?php the_field('hours_line_2'); ?></li>
                                              <ul>
                                              </ul>
                                                <li><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></li>
                                                <li><?php the_field('fax'); ?></li>
test
                                                <li><a href="mailto:<?php the_field('email_obfuscated'); ?>"><?php the_field('email'); ?></a></li>
                                              </ul>

					    					
					    <?php endwhile; endif; ?>
			
    				</div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
					
				</div> <!-- end #inner-content -->
    
                                    <?php

                                       $args = array('pagename' => 'links');
                                          $query = new WP_Query($args);

                                          if($query->have_posts()) : ?>

                                          <?php while($query->have_posts()) : 

                                          $query->the_post();
                                    ?>

                                      <div class="row">

                                        <div class="small-12 columns contact_links">

                                          <h3><?php the_title(); ?></h3>
                                          <?php the_content() ?>

                                        </div>

                                      </div>
                                          
                                    <?php
                                        endwhile;
                                        endif;
                                        wp_reset_query();
                                    ?>
			</div> <!-- end #content -->

<?php get_footer(); ?>

