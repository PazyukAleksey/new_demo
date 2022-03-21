<?php

add_action('wp_enqueue_scripts', function() {

	wp_enqueue_style( "metaminder-fonts", get_stylesheet_directory_uri() . '/assets/css/font.css', array(), '1.0.0' );
	wp_enqueue_style( "metaminder-global-styles", get_stylesheet_directory_uri() . '/assets/css/global.css', array(), '1.0.0' );
	wp_enqueue_style( "metaminder-header-styles", get_stylesheet_directory_uri() . '/assets/css/header.css', array(), '1.0.0' );
	wp_enqueue_style( "metaminder-footer-styles", get_stylesheet_directory_uri() . '/assets/css/footer.css', array(), '1.0.0' );

	if(is_front_page()) {
		wp_enqueue_style( "metaminder-front-page-styles", get_stylesheet_directory_uri() . '/assets/css/page-home.css', array(), '1.0.0' );
		wp_enqueue_style( "metaminder-front-animation-page-styles", get_stylesheet_directory_uri() . '/assets/css/page-home-animate.css', array(), '1.0.0' );
		wp_enqueue_style( "swiper-styles", get_stylesheet_directory_uri() . '/assets/swiper/swiper-bundle.min.css', array(), '1.0.0' );
		wp_enqueue_script( "swiper-js", get_stylesheet_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array(), '1.0.0' );
		wp_enqueue_style( "metaminder-test-drive-styles", get_stylesheet_directory_uri() . '/assets/css/section-test-drive.css', array(), '1.0.0' );

	}

	if(get_the_ID() == 13) {
		wp_enqueue_style( "metaminder-key-features-page-styles", get_stylesheet_directory_uri() . '/assets/css/key-features.css', array(), '1.0.0' );
		wp_enqueue_style( "metaminder-test-drive-styles", get_stylesheet_directory_uri() . '/assets/css/section-test-drive.css', array(), '1.0.0' );
	}
	if(get_the_ID() == 20) {
		wp_enqueue_style( "metaminder-contact-page-styles", get_stylesheet_directory_uri() . '/assets/css/contact-us.css', array(), '1.0.0' );
	}
	if(get_the_ID() == 28) {
		wp_enqueue_style( "metaminder-schedule-demo-page-styles", get_stylesheet_directory_uri() . '/assets/css/schedule-demo.css', array(), '1.0.0' );
	}
	if(get_the_ID() == 42) {
		wp_enqueue_style( "swiper-styles", get_stylesheet_directory_uri() . '/assets/swiper/swiper-bundle.min.css', array(), '1.0.0' );
		wp_enqueue_style( "metaminder-Success-Cases-page-styles", get_stylesheet_directory_uri() . '/assets/css/page-Success-Cases.css', array(), '1.0.0' );
		wp_enqueue_style( "metaminder-test-drive-styles", get_stylesheet_directory_uri() . '/assets/css/section-test-drive.css', array(), '1.0.0' );
	}
	if(get_the_ID() == 44) {
		wp_enqueue_style( "swiper-styles", get_stylesheet_directory_uri() . '/assets/swiper/swiper-bundle.min.css', array(), '1.0.0' );
		wp_enqueue_style( "metaminder-pricing-styles", get_stylesheet_directory_uri() . '/assets/css/page-pricing.css', array(), '1.0.0' );
	}
	if(is_404()) {
		wp_enqueue_style( "404-page", get_stylesheet_directory_uri() . '/assets/css/404.css', array(), '1.0.0' );
	}
});


function deregister_styles() {
	wp_dequeue_style('wp-block-library');
    wp_deregister_style('wp-block-library');
}
add_action( 'wp_enqueue_scripts', 'deregister_styles', 9999 );
add_action( 'wp_head', 'deregister_styles', 9999 );