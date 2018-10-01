<?php



  $args = array(
    'post_type' => 'products',

  );
  $query = new WP_Query( $args );

?>



<div class="row shop_row">
  <div class="col-lg-12">
    <div class="col-lg-2">

    </div>
    <div class="col-lg-10">
      <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>

</div>
