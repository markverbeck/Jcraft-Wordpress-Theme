<?php
/*

  Template Name: About Page

*/
?>

<?php get_header(); ?>
<!-- Body -->

<div id="homepage_body" class="row">
<div class="col-lg-2 empty_div"></div>
<div class="col-md-12 col-lg-8 pic_quote_column">
  <div class="row inner_row">
    <div class="col-md-12 col-lg-6 text-center">
      <img class="about_image img-fluid animated fadeInLeft" src="<?php the_field('bio_image'); ?>"/>
    </div>
    <div class="col-md-12 col-lg-6 about_quote_col animated fadeInRight">
      <div id="about_quote" >
        <h2 class="top_about text-center"><?php the_field('bio_quote_bold'); ?> <span class="about_bottom"><?php the_field('bio_quote_cursive'); ?></span></h2>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-2 empty_div"></div>
</div>

<div class="row bio_row">
  <div class="col-lg-12 bio_col animated fadeInUp">
    <div class="bio text-center">
      <p><?php the_field('bio'); ?></p>
</div>
  </div>
</div>
<?php get_footer(); ?>
