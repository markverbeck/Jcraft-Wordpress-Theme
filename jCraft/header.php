<!DOCTYPE html>
<html>
  <head>

    <title><?php wp_title('|', true, right); bloginfo('name');?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

  </head>
  <body id="body" <?php body_class(); ?>>

    <!-- Navbar/Header -->
    <header>

          <div id="nav_div" class="col-md-12">

          <nav class="navbar navbar-expand-lg navbar-light bg-light">

              <!-- <div id="nav_image"> -->
                <?php the_custom_logo(); ?>
              <!-- </div> -->
              <h1 id="nav_name"><?php  bloginfo('name'); ?></h1>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">


                  <?php
                    $defaults = array(
                      'depth' => 2,
                      'container' => false,
                      'theme_location' => 'primary-menu',
                      'menu_class' => 'no-bullet navbar-nav text-center',
                      'walker' => new WP_Bootstrap_Navwalker(),
                    );

                    wp_nav_menu( $defaults );
                  ?>
                  <a href="/J-Craft/cart" style="color: black;" class="hvr-grow cart_link"><?php echo do_shortcode('[wp_compact_cart]'); ?></a>

            </div>
          </nav>
        </div>

  </header>
