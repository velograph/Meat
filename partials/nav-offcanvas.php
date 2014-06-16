<div class="large-12 columns show-for-medium-up">
	<div class="sticky">
	
		<!-- If you want to use the more traditional "fixed" navigation.
		 simply replace "sticky" with "fixed" -->
	
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<!-- Title Area -->
				<li class="toggle-topbar menu-icon">
					<a href="#"><span>Menu</span></a>
				</li>
			</ul>		
			<section class="top-bar-section">
                                <a class="sticky_nav_logo" href="<?php echo home_url(); ?>">
                                  <img src="<?php echo get_template_directory_uri(); ?>/library/images/meat_text_logo.svg" alt="Meat for Cats and Dogs" />
                                </a>
				<?php joints_main_nav(); ?>
			</section>
		</nav>
	</div>
</div>

<div class="small-12 columns show-for-small-only">
	<div class="contain-to-grid">
		<nav class="tab-bar">
			<section class="middle tab-bar-section">
                                              <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/library/images/meat_logo.svg" alt="Meat for Cats and Dogs" /></a>
			</section>
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
		</nav>
                  
	</div>
</div>

<div class="small-12 columns show-for-small-only">

  <ul class="mobile_contact_section">
    <li><a href="/contact"><?php the_field('address', '11'); ?></a></li>
    <li><a href="/contact"><?php the_field('address_line_2', '11'); ?></a></li>
    <li><?php the_field('hours', '11'); ?></li>
    <li><?php the_field('hours_line_2', '11'); ?></li>
  </ul>
  <ul class="mobile_contact_section">
    <li>ph: <a href="tel:<?php the_field('phone', '11'); ?>"><?php the_field('phone', '11'); ?></a></li>
    <li>fax: <?php the_field('fax', '11'); ?></li>
    <li><a href="mailto:<?php the_field('email', '11'); ?>"><?php the_field('email', '11'); ?></a></li>
  </ul>

</div>
						
<aside class="left-off-canvas-menu show-for-small-only">
	<ul class="off-canvas-list">
		<li class="off-canvas-list-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/library/images/meat_text_logo.svg" alt="Meat for Cats and Dogs" /></a></li>
			<?php joints_main_nav(); ?>    
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>
