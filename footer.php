<?php if( is_page('home') ) : ?>

  <div class="row">
    <hr />
  </div>

  <section class="row reviews">

  <?php

     $args = array('post_type' => 'meat_press', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC');
        $category_posts = new WP_Query($args);

        if($category_posts->have_posts()) : ?>
        <h3 class="small-12 columns"><?php the_field('reviews_header'); ?></h3>
        <?php while($category_posts->have_posts()) : ?>

        <?php $category_posts->the_post(); ?>

        <div class="small-12 medium-4 columns meat_press">
          <h6><a href="<?php if ( get_field('publication_link') ) : the_field('publication_link'); endif; ?>" rel="bookmark" target="_blank" title="<?php the_title_attribute(); ?>"><?php the_title(); ?><img class="launch_tab" src="<?php echo get_template_directory_uri(); ?>/library/images/launch_tab.svg" alt="" /></a></h6>
          <?php if( get_field('publication_name') ) : ?>
            <?php the_field('publication_name'); ?>&nbsp;|&nbsp;
          <?php endif; ?>
          <?php if( get_field('publication_date') ) : ?>
            <?php the_field('publication_date'); ?>
          <?php endif; ?>
        </div>
        
  <?php
      endwhile;
      endif;
      wp_reset_query();
  ?>

  </section>

  <div class="row">
    <hr />
  </div>

  <section class="row supporter_list">

  <?php

     $args = array('post_type' => 'supporters', 'posts_per_page' => -1, 'orderby' => 'name', 'order' => 'ASC');
        $category_posts = new WP_Query($args);

        if($category_posts->have_posts()) : ?>
          <h3 class="small-12 columns"><?php the_field('supporter_header'); ?></h3>
        <?php while($category_posts->have_posts()) : 

        $category_posts->the_post();
  ?>

  <div class="small-6 medium-4 columns left supporter">
      <?php the_title() ?>
      </div>
        
  <?php
      endwhile;
      endif;
  ?>

  </section>

<?php endif; ?>

<div class="row">
  <hr />
</div>

<div id="footer_branding">
                                          <div class="show-for-medium-up row">

                                            <div class="small-5 columns address_and_hours">

                                              <ul>
                                                <a href="/contact">
                                                  <li><?php the_field('address', '11'); ?></li>
                                                  <li><?php the_field('address_line_2', '11'); ?></li>
                                                </a>
                                              </ul>
                                              <ul>
                                                <li><?php the_field('hours', '11'); ?></li>
                                                <li><?php the_field('hours_line_2', '11'); ?></li>
                                              </ul>

                                            </div>


                                            <div class="small-2 columns">

                                              <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/library/images/meat_logo.svg" alt="Meat for Cats and Dogs" /></a>
                                            </div>

                                            <div class="small-5 columns phone_and_email">

                                              <ul>
                                                <li>ph: <a href="tel:<?php the_field('phone', '11'); ?>"><?php the_field('phone', '11'); ?></a></li>
                                                <li>fax: <?php the_field('fax', '11'); ?></li>
                                                <li><a href="mailto:<?php the_field('email_obfuscated', '11'); ?>"><?php the_field('email', '11'); ?></a></li>
                                              </ul>

                                            </div>

                                          </div>
                                          </div>
					<footer class="footer" role="contentinfo">
					
						<div id="inner-footer" class="row clearfix">
						
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
			               
			                <div class="large-12 medium-12 columns">		
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Site by <a href="http://velograph.net">Velograph</a></p>
							</div>		
						</div> <!-- end #inner-footer -->			
					</footer> <!-- end .footer -->
				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		</div> <!-- end .off-canvas-wrap -->
						
				<!-- all js scripts are loaded in library/joints.php -->
				<?php wp_footer(); ?>
	</body>

</html> <!-- end page -->
