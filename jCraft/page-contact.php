<?php
/*

  Template Name: Contact Page

*/
?>

<?php get_header(); ?>

<div class="row contact_row">
  <div class="col-lg-12 text-center shop_title">
  <div class="shop_head animated fadeInDown">
    <h1><i class="fas fa-envelope"></i> <?php bloginfo('name'); ?> Contact</h1>
  </div>
  </div>
    <div class="col-lg-12 contact_col">
      <div class="row">
        <div class="col-md 12 col-lg-6 form_div animated fadeInLeft">
          <?php the_field('contact_form'); ?>
        </div>
        <div class="col-md-12 col-lg-6 text-center side_pic_col animated fadeInRight">
          <img class="side_pic img-fluid" src="<?php the_field('side_picture'); ?>"/>
        </div>
    </div>
    </div>
  </div>

<?php get_footer(); ?>
