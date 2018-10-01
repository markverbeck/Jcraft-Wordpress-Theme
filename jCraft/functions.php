<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );

function register_theme_menus(){
  register_nav_menus(
    array(
      'primary-menu' => __('Primary Menu'),
      'footer-menu' => __('Footer Menu'),
    )
  );

}

add_action('init', 'register_theme_menus');

function jc_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<ul class="prod_cat_list">',
		'after_widget' => '</ul>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}
jc_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
jc_create_widget('Product Sidebar', 'product', 'Displays on the side of pages with a sidebar' );
jc_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );



function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

function jc_theme_styles() {
  wp_enqueue_style('google_font_css', 'https://fonts.googleapis.com/css?family=Cabin+Sketch|Monoton|Sigmar+One|Gloria+Hallelujah|Chicle|Poppins|Roboto');
  wp_enqueue_style('font_awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
  wp_enqueue_style('style_css', get_template_directory_uri() .'/style.css');
  wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'bootstrap.min' );
  wp_enqueue_style('hover_min_css', get_template_directory_uri() .'/hover-min.css');
  wp_enqueue_style('animate_css', get_template_directory_uri() .'/animate.css');


}

add_action('wp_enqueue_scripts', 'jc_theme_styles');

function jc_theme_js() {



  // wp_register_script('popper_min_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js','', '1.12.9', true);
  // wp_enqueue_script('popper_min_js');

  wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
  wp_enqueue_script('jquery.bootstrap.min');
  wp_register_script('app_js', get_template_directory_uri() . '/app.js', array('jquery'),'',true);
  wp_enqueue_script('app_js');

}

add_action('wp_enqueue_scripts', 'jc_theme_js');

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


?>
