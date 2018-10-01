<?php
/*

  Template Name: Cart Page

*/
?>

<?php get_header(); ?>

<section class="row contact_row">
  <div class="small-12 columns text-center cart_col animated fadeInDown">
    <div class="leader">


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php $shortcode_content = do_shortcode( '[show_wp_shopping_cart]' );
         if(!empty($shortcode_content)) {
           echo the_content();
         }else{
           echo "<h1>Your cart is empty...</h1>";
         }

      ?>



  	<?php endwhile; else : ?>
      <p><?php echo 'bob'; ?></p>

  	<?php endif; ?>




    </div>
  </div>
</section>

<?php get_footer(); ?>
