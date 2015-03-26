<?php 
	define('WP_DEBUG', true);

	function theme_styles(){
		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('fa_css', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
		wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
	}

	add_action('wp_enqueue_scripts', 'theme_styles');

	function theme_js(){
		wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
		wp_enqueue_script('snap_js', get_template_directory_uri() . '/js/snap.svg-min.js', '', '', false);
		wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', '', '', false);
	}

	add_action('wp_enqueue_scripts', 'theme_js');

	show_admin_bar(false);


 ?>