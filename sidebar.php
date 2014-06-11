<?php if ( is_page('contact') ) : ?>

  <div id="contact" class="sidebar small-12 medium-6 columns" role="complementary">

    <div class="flex-video">

      <?php if( get_field('map') ) : ?>
        <?php the_field('map'); ?>
      <?php endif; ?>

    </div>

<?php elseif ( is_page('about') ) : ?>

<?php

   $args = array('pagename' => 'about');
   $category_posts = new WP_Query($args);

   if($category_posts->have_posts()) : 
      while($category_posts->have_posts()) : 
         $category_posts->the_post();
?>

  <div class="sidebar show-for-medium-up medium-4 columns" role="complementary">
    <?php the_post_thumbnail(); ?>
   </div>
      
<?php
    endwhile;
    endif;
    ?>


<?php else : ?>

<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php endif; ?>

</div>

<?php endif; ?>
