<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php bloginfo('name'); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

<?php if(is_page()) { $page_slug = 'page-'.$post->post_name; } ?>

	<body <?php body_class($page_slug); ?>>

	<div class="off-canvas-wrap">
		<div class="inner-wrap">
			<div id="container">

				<header class="header" role="banner">

					<div id="inner-header" class="row">

                                          <div class="show-for-medium-up row header_content">

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

						 <?php get_template_part( 'partials/nav', 'offcanvas' ); ?>

						 <?php // get_template_part( 'partials/nav', 'topbar' ); ?>

						 <?php // get_template_part( 'partials/nav', 'offcanvas-sidebar' ); ?>

						<!-- You only need to use one of the above navigations.
							 Offcanvas-sidebar adds a sidebar to a "right" offcanavas menus. -->

					</div> <!-- end #inner-header -->

				</header> <!-- end header -->
