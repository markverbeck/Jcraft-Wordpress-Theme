<?php get_header(); ?>
<div class="row shop_heading_row">
    <div class="col-lg-12 text-center shop_title">
    <div class="shop_head animated fadeInDown">
      <h1><i class="fas fa-tag"></i> <?php the_title(); ?></h1>
    </div>
    </div>
  </div>

  <div class="row single-product-row">

    <!-- Modal Images -->
    <div class="col-sm-12 col-md-6 col-lg-3 modal_div text-center animated">
      <button type="button" class="modal-btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
        <img class="img-fluid" src="<?php the_field('img_thumbnail_1'); ?>">
      </button>
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content modal-btn">
            <div class="modal-body text-center">
              <img class="img-fluid" src="<?php the_field('popup_image_1'); ?>">
            </div>

          </div>
        </div>
      </div>

    </div>

    <div class="col-sm-12 col-md-6 col-lg-3 modal_div_sm_screen text-center animated">
      <button type="button" class="modal-btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
        <img class="img-fluid" src="<?php the_field('img_thumbnail_2'); ?>">
      </button>
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content modal-btn">
            <div class="modal-body text-center">
              <img class="img-fluid" src="<?php the_field('popup_image_2'); ?>">
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3 modal_div_bottom text-center animated">
      <button type="button" class="modal-btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
        <img class="img-fluid" src="<?php the_field('img_thumbnail_3'); ?>">
      </button>
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content modal-btn">
            <div class="modal-body text-center">
              <img class="img-fluid" src="<?php the_field('popup_image_3'); ?>">
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3 modal_div_bottom text-center animated">
      <button type="button" class="modal-btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
        <img class="img-fluid" src="<?php the_field('img_thumbnail_4'); ?>">
      </button>
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content modal-btn">
            <div class="modal-body text-center">
              <img class="img-fluid" src="<?php the_field('popup_image_4'); ?>">
            </div>

          </div>
        </div>
      </div>
    </div>

    </div>

    <div class="row single-product-row">
      <div class="col-lg-12 text-center product_description animated fadeInUp">
      <div class="product_description_div">
        <p><?php the_field('full_description'); ?></p>
        <h4><?php the_field('price'); ?></h4>
        <div id="add_to_cart"><?php the_field('add_to_cart_button'); ?></div>
        <a href="/J-Craft/contact/"><button type="button" class="shop_btn btn btn-success new_product_button">Contact Us</button></a>
      </div>

      </div>
    </div>
<?php get_footer(); ?>
