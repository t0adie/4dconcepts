<?php
/*
Plugin Name: Image Marquee Slideshow
Plugin URI: http://4dconcepts.ca/marquee-slideshow/
Description: Creates a banner image marquee with media images contained in the post content.
Version: 1.0a
Author: Derek Naulls
Author URI: http://4dconcepts.ca/
License: GPL2
*/

/*  Copyright 2014  Image Marquee Slideshow - 4D Concepts  
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 1, as
    published by the Free Software Foundation.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function marquee_slideshow( $content ){
    
	return $content;
	
}

function marquee_slideshow_scripts(){
	
	// Registers the marquee slideshow javascript file.
	wp_enqueue_style( 'style-name',  plugins_url( '/marquee-slideshow.css' ,  __FILE__ )  );
	wp_enqueue_script( 'script-name', plugins_url( '/js/marquee-slideshow.js' ,  __FILE__ ), array('jquery') );
	wp_enqueue_script( 'script-name', plugins_url( '/js/image-preload.js' ,  __FILE__ ), array('jquery') );

}



add_filter( 'the_content', 'marquee_slideshow');
add_action( 'wp_enqueue_scripts', 'marquee_slideshow_scripts' );

?>
