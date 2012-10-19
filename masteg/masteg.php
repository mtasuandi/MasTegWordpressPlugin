<?php
/*
Plugin Name: MasTeg
Plugin URI: http://mtasuandi.wordpress.com
Description: Integration MasTeg activities on Wordpress.
Version: 1.0
Author: M Teguh A Suandi
Author URI:  http://mtasuandi.wordpress.com
License: Free, Copyright 2012, All rights reserved
*/

add_action('admin_menu', 'masteg_add_page');
function masteg_add_page()
{
	add_menu_page('MasTeg', 'MasTeg', 'manage_options', 'masteg', 'masteg_options_page', plugins_url('masteg/images/icon.jpg'));
}

function masteg_options_page(){
	?>
		<div class="wrap">
			<?php
				screen_icon('options-general');
				$tab = isset( $_GET['tab'] ) ? $_GET['tab'] : "masteg_bio";
			?>
			<h2 class="nav-tab-wrapper">
				<a class="nav-tab <?php if($tab == "masteg_bio") echo "nav-tab-active"; ?>" href="?page=masteg&tab=masteg_bio">Bio</a>
				<a class="nav-tab <?php if($tab == "masteg_twitter") echo "nav-tab-active"; ?>" href="?page=masteg&tab=masteg_twitter">Twitter</a>
				<a class="nav-tab <?php if($tab == "masteg_fiksiana") echo "nav-tab-active"; ?>" href="?page=masteg&tab=masteg_fiksiana">Fiksiana</a>
				<a class="nav-tab <?php if($tab == "masteg_gmaps") echo "nav-tab-active"; ?>" href="?page=masteg&tab=masteg_gmaps">GMaps</a>
			</h2>
			<form action="options.php" enctype="multipart/form-data" method="post">
			<?php
				settings_fields($tab);
				do_settings_sections($tab);
				$submitbutton = true;
				if($tab == "masteg_bio") $submitbutton = false;
				if($tab == "masteg_twitter") $submitbutton = false;
				if($tab == "masteg_fiksiana") $submitbutton = false;
				if($tab == "masteg_gmaps") $submitbutton = false;
			?>
			</form>
		</div>
	<?php
}

add_action('admin_init', 'masteg_admin_init');
function masteg_admin_init()
{

	register_setting('masteg_bio', 'masteg_bio');
	add_settings_section('masteg_bio', 'Personal Information', 'masteg_bio_text', 'masteg_bio');

	register_setting('masteg_twitter', 'masteg_twitter', 'masteg_twitter_validate');
	add_settings_section('masteg_twitter', 'Twitter Feeds', 'masteg_twitter_text', 'masteg_twitter');
	add_settings_field('masteg_twitter_tweet', 'Compose New Tweet', 'masteg_twitter_tweet', 'masteg_twitter', 'masteg_twitter');
	add_settings_field('masteg_twitter_images', 'Images', 'masteg_twitter_images', 'masteg_twitter', 'masteg_twitter');
	
	register_setting('masteg_fiksiana', 'masteg_fiksiana');
	add_settings_section('masteg_fiksiana', 'Fiksiana Recent Article', 'masteg_fiksiana_text', 'masteg_fiksiana');

	register_setting('masteg_gmaps', 'masteg_gmaps');
	add_settings_section('masteg_gmaps', 'Google Maps', 'masteg_gmaps_text', 'masteg_gmaps');
}
require_once('includes/simple_html_dom.php');
require_once('includes/masteg_fiksiana.php');
require_once('includes/masteg_twitter.php');
require_once('includes/masteg_bio.php');
require_once('includes/masteg_gmaps.php');

function masteg_styles(){

	wp_enqueue_style('css3-buttons.css', plugins_url('masteg/css/css3-buttons.css',dirname(__FILE__)), false, 'screen');
	wp_enqueue_style('tiptip.css', plugins_url('masteg/css/tiptip.css',dirname(__FILE__)), false, 'screen');
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery.min.js', plugins_url('masteg/js/jquery.min.js',dirname(__FILE__)), array('jquery'), '1.6.2');
	wp_enqueue_script('jquery.tiptip.js', plugins_url('masteg/js/jquery.tiptip.js',dirname(__FILE__)), array('jquery'), '1.3');
}
add_action( 'admin_enqueue_scripts', 'masteg_styles' );
