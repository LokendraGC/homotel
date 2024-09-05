<?php 
/**
 * Enqueue scripts and styles.
 */
function homotel_scripts() {
	// wp_enqueue_style( 'homotel-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'homotel-style', 'rtl', 'replace' );

	wp_enqueue_script( 'homotel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_localize_script( 'homotel-mainjs', 'HOMOTELobj', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'token'  => wp_create_nonce( '%HOMOTEL%' ),
	));

	// importing css files
	wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null, 'all');
	wp_enqueue_style('plugins', get_template_directory_uri() . '/assets/css/plugins.css', array(), null, 'all');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.css', array(), null, 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), null, 'all');
	wp_enqueue_style('coloring', get_template_directory_uri() . '/assets/css/coloring.css', array(), null, 'all');
	wp_enqueue_style('custom-mountain-hotel', get_template_directory_uri() . '/assets/css/custom-mountain-hotel.css', array(), null, 'all');


	// importing js files
	wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), null, true);
	wp_enqueue_script('designesia', get_template_directory_uri() . '/assets/js/designesia.js', array(), null, true);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js', array(), null, true);
	wp_enqueue_script('custom-marquee', get_template_directory_uri() . '/assets/js/custom-marquee.js', array(), null, true);
	wp_enqueue_script('custom-swiper-2', get_template_directory_uri() . '/assets/js/custom-swiper-2.js', array(), null, true);



}
add_action( 'wp_enqueue_scripts', 'homotel_scripts' );


