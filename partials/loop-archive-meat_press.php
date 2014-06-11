<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix meat_press_article'); ?> role="article">
						
	<header class="article-header">
		<h3><a href="<?php if ( get_field('publication_link') ) : the_field('publication_link'); endif; ?>" rel="bookmark" target="_blank" title="<?php the_title_attribute(); ?>"><?php the_title(); ?><img class="launch_tab" src="<?php echo get_template_directory_uri(); ?>/library/images/launch_tab.svg" alt="" /></a></h3>
                <?php if( get_field('publication_name') ) : ?>
                  <?php the_field('publication_name'); ?>&nbsp;|&nbsp;
                <?php endif; ?>
                <?php if( get_field('publication_date') ) : ?>
                  <?php the_field('publication_date'); ?>
                <?php endif; ?>
	</header> <!-- end article header -->
					
	<section class="entry-content clearfix" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->
						    
		<?php // comments_template(); // uncomment if you want to use them ?>
					
</article> <!-- end article -->
