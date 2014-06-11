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
                                                <li><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></li>
                                              </ul>

					    					
					    <?php endwhile; endif; ?>
			
    				</div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

