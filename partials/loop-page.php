<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
    <section class="entry-content clearfix" itemprop="articleBody">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </section> <!-- end article section -->
					
</article> <!-- end article -->
