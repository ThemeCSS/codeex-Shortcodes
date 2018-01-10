<?php
	/*
	Plugin Name: codeex Shortcodes
	Plugin URI: https://github.com/ThemeCSS/codeex-Shortcodes
	Description: Simple and minimalist typography shortcode plugin for WordPress Themes.
	Version: 2.1.5
	Author: codeex	
	Author URI: https://themeforest.net/user/codeex
	License: GPL
	*/

	include 'inc/main.php';
	include 'inc/tinymce/tinymce.php';


	/* Enqueue Styles and Scripts */

	function typo_enqueue_style() {
		if( ! is_admin() ) :
			wp_enqueue_style( 'typo-style', plugin_dir_url(__FILE__) . 'typo-style.css' );
			wp_enqueue_script( 'jquery-custom', plugin_dir_url(__FILE__) . 'typo-custom.js', array( 'jquery' ), '', true );
		endif;
	}
	add_action( 'wp_enqueue_scripts', 'typo_enqueue_style' );

	function typo_enqueue_admin_style() {
		wp_enqueue_style( 'typo-popup', plugin_dir_url(__FILE__) . 'typo-popup.css' );
	}
	add_action( 'admin_init', 'typo_enqueue_admin_style' );


	/* Localisation */

	function typo_load_textdomain() {
	  load_plugin_textdomain( 'typo_codeex_plugin', false, basename( dirname( __FILE__ ) ) . '/languages' );
	}
	add_action( 'plugins_loaded', 'typo_load_textdomain' );


	/* Add Custom Quicktags */

	function typo_my_custom_quicktags() {
		wp_enqueue_script( 
			'typo_my_custom_quicktags', 
			plugin_dir_url(__FILE__) . 'inc/tinymce/quicktags.js', 
			array('quicktags')	
		);
	}
	add_action( 'admin_print_scripts', 'typo_my_custom_quicktags' );


	/* Empty Paragraph */

	function typo_shortcode_empty_paragraph_fix( $typo_content ) {   
    $typo_array = array (
      '<p>[' => '[', 
      ']</p>' => ']', 
      ']<br />' => ']'
    );
    $typo_content = strtr($typo_content, $typo_array);
		return $typo_content;
	}
	add_filter( 'the_content', 'typo_shortcode_empty_paragraph_fix' );


	function typo_content_filter( $typo_content ) {	 
		$typo_block = join("|",array("alert","blockquote","a","ul","li","div","dropcap","columns","image","tabgroup","tab","toggle","video","googlemap", "skills"));	 
		$typo_rep = preg_replace("/(<p>)?\[($typo_block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$typo_content);
		$typo_rep = preg_replace("/(<p>)?\[\/($typo_block)](<\/p>|<br \/>)?/","[/$2]",$typo_rep);	 
		return $typo_rep;	 
	}
	add_filter( 'the_content', 'typo_content_filter' ); 
?>