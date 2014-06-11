<?php
/*
Template Name: Half Width
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="small-12 medium-6 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                            <h2><?php the_title(); ?></h2>
					
                                            <?php the_content(); ?>

					    <?php endwhile; endif; ?>
			
    				</div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

