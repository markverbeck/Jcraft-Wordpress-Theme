<?php get_header(); ?>
<!-- Carousel -->
<div class="row">
<div class="col-lg-2 empty_div"></div>
<div class="col-md-12 col-lg-8">

    <div id="carouselExampleControls" class="carousel slide animated fadeInDown" data-ride="carousel">

      <div class="carousel-inner carouselColumn">
        <div class="carousel-item active">
          <div class="row carousel-row">

              <div class="col-md-4 carousel_image_div">
                <img class="d-block carousel_image" src="<?php the_field('carousel_image_one') ?>" alt="First slide"/>
              </div>
              <div class="col-md-8 carousel_text">
                <h1><?php the_field('carousel_text_one') ?></h1>
              </div>

          </div>
        </div>

        <div class="carousel-item">
          <div class="row carousel-row" >

              <div class="col-md-4 carousel_image_div">
                <img class="d-block carousel_image" src="<?php the_field('carousel_image_two') ?>" alt="Second slide"/>
              </div>
              <div class="col-md-8 carousel_text">
                <h1><?php the_field('carousel_text_two') ?></h1>
              </div>

          </div>
        </div>

        <div class="carousel-item">
          <div class="row carousel-row" >

              <div class="col-md-4 carousel_image_div">
                <img class="d-block carousel_image" src="<?php the_field('carousel_image_three') ?>" alt="Third slide"/>
              </div>
              <div class="col-md-8 carousel_text">
                <h1><?php the_field('carousel_text_three') ?></h1>
              </div>

          </div>
        </div>

    </div>
  </div>


</div>

<div class="col-lg-2 empty_div"></div>
</div>

<!--- body -->
  <div id="homepage_body" class="row">
    <div id="left_title_Col" class="col-md-12 col-lg-5 animated fadeInLeft">
      <div class="row title_column">
      <div class="col-lg-12 text-center">
        <i class="fas fa-business-time title_icon"></i>
      </div>
      <div class="col-lg-12 text-center">
        <p class="top_title">Crafted by Central PA's wood master</p>
        <p class="bottom_title">James L. Verebeck II</p>
      </div>
      </div>
      <div class="body_info_div text-center">
        <img class="body_info_pic img-fluid" src="<?php the_field('body_image_one'); ?>"/>
        <div class="body_text">
          <p><?php the_field('body_text_one'); ?><a href="<?php the_field('body_link_one'); ?>">read more..</a></p>
        </div>
      </div>
    </div>

    <div class="col-md-2 empty_div"></div>

    <div class="col-md-12 col-lg-5 animated fadeInRight">
      <div class="row title_column ">
      <div class="col-lg-12 text-center">
        <i id="right_title_icon" class="fas fa-dolly title_icon"></i>
      </div>
      <div class="col-lg-12 text-center">
        <p id="right_body_title" class="top_title">Featured</p>
        <p id="right_body_title" class="bottom_title"> from the shop</p>
      </div>
      </div>
      <div class="body_info_div text-center">
        <img class="body_info_pic img-fluid" src="<?php the_field('body_image_two'); ?>"/>
        <div class="body_text">
          <p><?php the_field('body_text_two'); ?></p>
          <a href="<?php the_field('body_link_two'); ?>">See more at our store!</a>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
