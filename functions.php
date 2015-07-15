<?php 

	add_theme_support('menus');
	function register_theme_menus(){
		register_nav_menus(array( 'primary-menu' => 'Primary Menu' ));
	}

	add_action('init', 'register_theme_menus');

	function theme_styles(){
		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('fa_css', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
		wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
	}

	add_action('wp_enqueue_scripts', 'theme_styles');

	function theme_js(){
		wp_enqueue_script('velocity_js', get_template_directory_uri() . '/js/velocity.min.js', '', '', false);
		wp_enqueue_script('velocity_ui_js', get_template_directory_uri() . '/js/velocity.ui.js', '', '', false);
		wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', false);
		if(is_single()){
			wp_enqueue_script('single_js', get_template_directory_uri() . '/js/single.js', array('jquery'), '', false);
		}
		if(is_page(5)){
			wp_enqueue_script('frontpage_js', get_template_directory_uri() . '/js/frontpage.js', array('jquery'), '', false);
			wp_enqueue_script('treehouse_js', get_template_directory_uri() . '/js/treehouse.js', array('jquery'), '', false);
		}
	}

	add_action('wp_enqueue_scripts', 'theme_js');

	show_admin_bar(false);
	define('WP_DEBUG', true);


 ?>