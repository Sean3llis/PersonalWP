<?php
	add_theme_support( 'post-thumbnails' ); 
	add_theme_support('menus');
	function register_theme_menus(){
		register_nav_menus(array( 'primary-menu' => 'Primary Menu' ));
	}

	add_action('init', 'register_theme_menus');

	function theme_styles(){
		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('slick_css', get_template_directory_uri() . '/css/slick.css');
		wp_enqueue_style('fa_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
		wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
	}

	add_action('wp_enqueue_scripts', 'theme_styles');

	function theme_js(){
		wp_enqueue_script('velocity_js', get_template_directory_uri() . '/js/velocity.min.js', '', '', false);
		wp_enqueue_script('velocity_ui_js', get_template_directory_uri() . '/js/velocity.ui.js', '', '', false);
		wp_enqueue_script('slick_js', get_template_directory_uri() . '/js/slick.min.js',  array('jquery'), '', true);
		wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
		// if(is_single()){
		// 	wp_enqueue_script('single_js', get_template_directory_uri() . '/js/single.js', '', '', true);
		// }
		// if( is_front_page() ){
		// 	wp_enqueue_script('frontpage_js', get_template_directory_uri() . '/js/frontpage.js', array(), '', true);
		// 	wp_enqueue_script('treehouse_js', get_template_directory_uri() . '/js/treehouse.js', '', '', true);
		// }
	}

	add_action('wp_enqueue_scripts', 'theme_js');

	show_admin_bar(false);


// remove wp version param from any enqueued scripts
function remove_ver_arg( $src ) {
  if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
      $src = remove_query_arg( 'ver', $src );
  return $src;
}
add_filter( 'style_loader_src', 'remove_ver_arg', 9999 );
add_filter( 'script_loader_src', 'remove_ver_arg', 9999 );

define( 'WP_DEBUG', true );
?>