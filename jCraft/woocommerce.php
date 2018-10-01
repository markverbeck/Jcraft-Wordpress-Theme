<?php
/*

  Template Name: Products Page

*/
?>

<?php get_header(); ?>
<div class="row shop_heading_row">
    <div class="col-lg-12 text-center shop_title">
    <div class="shop_head">
      <h1><i class="fas fa-shopping-cart"></i> <?php bloginfo('name'); ?> Shop</h1>
    </div>
    </div>
  </div>

  <div class="row shop_row">
    <div class="col-md-12 col-lg-3 category_div text-center">

      <?php if( !dynamic_sidebar( 'product' ) ): ?>

  <h2 class="module-heading">Sidebar Setup</h2>
  <p>Please add widgets via the admin area!</p>

<?php endif; ?>
        <h2 class="feature-heading">Featured Products</h2>

        <?php
            $args = array(
            'post_type' => 'products',
            'category_name' => 'Featured',

          );
          $featured = new WP_Query( $args );
        ?>

        <?php if( $featured->have_posts() ) : while( $featured->have_posts() ) : $featured->the_post(); ?>
        <div class="featured_info">
          <h3 class="feature_name"><?php the_title(); ?></h3>
          <img class="img-fluid featured_image" src="<?php the_field('featured_image')?>"/>
            <div class="feature_text_box">
              <p><?php the_field('short_description'); ?></p>
              <div class="col-lg-12 feature_price">
                <h4 id="old_price" ><?php the_field('price'); ?></h4>
                <a href="<?php the_permalink(); ?>"><h4><?php the_field('sale_price'); ?></h4></a>
              </div>
            </div>

        </div>

        <button id="add_to_cart" type="button" class="shop_btn btn btn-success">Add To Cart</button>
        <a href="<?php the_permalink(); ?>"><button type="button" class=" shop_btn btn btn-success">View Product</button></a>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
    <div class="col-lg-1 empty_div"></div>
    <div class="col-md-12 col-lg-8 ">
      <div class="row text-center new_product_div">
        <div class="col-lg-12">
          <h2 class="new_product_title"><?php woocommerce_page_title(); ?></h2>
        </div>


    <?php woocommerce_content(); ?>

    </div>
    </div>
  </div>
<?php get_footer(); ?>
