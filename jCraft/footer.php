<footer>
  <div id="footer_row" class="row">
    <div class="col-lg-2 footer_image text-center">
      <?php the_custom_logo(); ?>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-8 text-center">

      <?php
        $defaults = array(
          'depth' => 0,
          'container' => false,
          'theme_location' => 'footer-menu',
          'menu_class' => 'no-bullet footLink',


        );

        wp_nav_menu( $defaults );
      ?>

      <?php
          $args = array(
          'post_type' => 'social_media_links',


        );
        $links = new WP_Query( $args );
      ?>

    <?php if( $links->have_posts() ) : while( $links->have_posts() ) : $links->the_post(); ?>

      <a href="<?php the_field('facebook_link'); ?>" target="_blank"><i class="fab fa-facebook-square social_footer hvr-grow"></i></a>
      <a href="<?php the_field('instagram_link'); ?>" target="_blank"><i class="fab fa-instagram social_footer hvr-grow"></i></a>
      <a href="<?php the_field('youtube_link'); ?>" target="_blank"><i class="fab fa-youtube social_footer hvr-grow"></i></a>

    <?php endwhile; endif; wp_reset_postdata(); ?>

			<p class="TM text-center">™James L. Verbeck II.  All Rights Reserved. </p>
    </div>

    <div class="col-lg-2 footer_image text-center">
      <?php the_custom_logo(); ?>
    </div>
  </div>
</footer>

    <?php wp_footer();?>

  </body>
</html>
