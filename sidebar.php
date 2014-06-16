<?php if ( is_page('contact') ) : ?>

  <div id="contact" class="sidebar small-12 medium-6 columns" role="complementary">

    <div class="flex-video">

      <?php if( get_field('map') ) : ?>
        <?php the_field('map'); ?>
      <?php endif; ?>

    </div>

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

<div id="sidebar1" class="sidebar small-12 medium-4 columns" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

          <iframe class="facebook_like_box" src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FMeat-for-Cats-and-Dogs%2F301482223297980&width&height=558&colorscheme=light&show_faces=true&header=false&stream=true&show_border=false&appId=448978381816922"></iframe>

          <?php if( is_page('home') ) :?>

            <?php if ( get_field('apparel_text', 488) ) : ?>
              <h5><?php the_field('apparel_text', 488); ?></h5>
            <?php endif; ?>

            <?php if ( get_field('apparel_image', 488) ) : ?>
              <img src="<?php the_field('apparel_image', 488); ?>" alt="Apparel" />
            <?php endif; ?>

          <?php endif; ?>

	<?php endif; ?>

</div>

<?php endif; ?>
