<?php require_once('wp_bootstrap_navwalker.php'); ?>
<?php 

	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
));
	add_theme_support( 'post-thumbnails' );
	add_image_size('blog-img',1024, 615, true);
	add_image_size('slider-img',1440, 500, true);
	

	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">',
		'after_widget' => '</section">',
		'before_title' => '<h2">',
		'after_title' => '</div">',
		));


add_action( 'init', 'create_post_type' );
function create_post_type() {
  
   register_post_type( 'carone_brands',
    array(
      'labels' => array(
        'name' => __( 'Brands' ),
        'singular_name' => __( 'Brand' )
      ),
      'supports' => array('title','editor','thumbnail', 'author', 'comments'),
      'public' => true,
      'has_archive' => true,
    )
  );
   register_post_type( 'promociones_carone',
    array(
      'labels' => array(
        'name' => __( 'Promotions' ),
        'singular_name' => __( 'Promotion' )
      ),
      'supports' => array('title','editor','thumbnail', 'author', 'comments'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'promociones'),
    )
  );
   register_post_type( 'seminuevos_carone',
    array(
      'labels' => array(
        'name' => __( 'Seminuevos' ),
        'singular_name' => __( 'Seminuevo' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'seminuevos'),
    )
  );
register_post_type( 'quiniela_carone',
    array(
      'labels' => array(
        'name' => __( 'Quinielas' ),
        'singular_name' => __( 'Quiniela' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'quiniela'),
    )
  );

   register_post_type( 'videos_youtube',
    array(
      'labels' => array(
        'name' => __( 'Youtube' ),
        'singular_name' => __( 'Video' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'youtube'),
    )
  );
}
?>