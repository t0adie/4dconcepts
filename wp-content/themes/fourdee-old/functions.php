<?php

function my_scripts_method() {
	wp_enqueue_script(
		'full_screen',
		get_template_directory_uri() . '/js/fullScreen.js',
		array('jquery') );
	wp_enqueue_script(
		'spotlight-marquee',
		get_template_directory_uri() . '/js/spotlight-marquee.js',
		array('jquery') );
	
	if ( is_page ( 'contact' ) ){
		wp_enqueue_script( 'google_map_API', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&key=AIzaSyA3P7lW0Cub80g-8TWZEB-ZMz6aNrIIDtE' );
		wp_enqueue_script( 'google_map_canvas', get_template_directory_uri(). '/js/google-map.js' ); 
	}

}

add_action('wp_enqueue_scripts', 'my_scripts_method'); 

// Sidebar widgets insertion function

if ( function_exists ('register_sidebar')) {
	register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'sidebar-main',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets' ),
		'before_widget' => '<div id="%1$s" class="idget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
	register_sidebar( array(
		'name' => 'Article Sidebar',
		'id' => 'sidebar-article',
		'description' => __( 'Appears below the article on a single page template' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );	
	register_sidebar( array(
		'name' => 'Local News Feed',
		'id' => 'local',
		'description' => __( 'Appears below the article on a single page template' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
	register_sidebar( array(
		'name' => 'Social Sidebar',
		'id' => 'social',
		'description' => __( 'Appears on the bottom of the page to populate the footer' ),
		'before_widget' => '<aside id="%1$s" class="idget footer">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Subscribe Sidebar',
		'id' => 'subscribe',
		'description' => __( 'Appears on the bottom of the page to populate the footer' ),
		'before_widget' => '<aside id="%1$s" class="idget footer">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Users Sidebar',
		'id' => 'users',
		'description' => __( 'Appears on the bottom of the page to populate the footer' ),
		'before_widget' => '<aside id="%1$s" class="idget footer">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}


// Secondary menu for theme navigation

register_nav_menus( array(
	'primary' => __( 'Main Navigation', 'main' ),
	'meta' => __( 'User Navigation', 'user'),
	'footer' => __( 'Footer Navigation', 'footer')
) );

// Removes <p> tag from around post image

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

// Excerpt function

function new_excerpt_more($more) {
	global $post;
	return '&hellip;';
}

function custom_excerpt_length( $length ) {
	return 55;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_filter('excerpt_more', 'new_excerpt_more');


// Theme support for setting 

add_theme_support( 'custom-background' );


// Theme support for adding post thumbnails

add_theme_support( 'post-thumbnails' );
add_image_size( 'custom', 229, 300, false );
add_image_size( 'query', 100, 100, true );
add_image_size( 'medium', 750, 750, false );
add_image_size( 'large', 900, 900, false );
add_image_size( 'cutout', 250, 500, false );
add_image_size( 'crew', 250, 400, false );


// Admin bar at top of page

if ( !is_admin ) {
	show_admin_bar( true );
}

// Jetpack Share Icons

function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}
 
add_action( 'loop_start', 'jptweak_remove_share' );

// Sets background image to reflect post thumbnail of current post

function set_post_background() {
	global $post;
	$bgimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
	
	if (!empty($bgimage)) {
		echo 'style="background-image: url(' . $bgimage[0] . ')"';
	} else {
		echo 'style="background-image: url(' . get_bloginfo('template_url') . '/images/cesco-logo-small.png)"';
	}
}

function set_home_background() {
	global $post;
	$bgimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
	
	if (!empty($bgimage)) {
		echo ' style="background-image: url(' . $bgimage[0] . ')"';
	} else {
		echo 'style="background-image: url(' . get_bloginfo('template_url') . '/images/cesco-logo-small.png)"';
	}
}

// Convert images to imageData base64

function the_image_data() {

	global $post;
	$bgimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
	
	$image = $bgimage[0];
	
	$imageData = base64_encode(file_get_contents($image));
	$src = 'data:image/jpeg;base64,' . $imageData;
	
	echo '<img id="background" src"' . $src . '" />';
	
}

// Displays tag slugs as images in post.

function get_tag_images() {
	global $post;
	$post_tags = wp_get_post_tags($post->ID);

	if( $post_tags ) {
		foreach($post_tags as $tag) {
		 // Uncomment if being used in table
			echo '<td><img src="'. get_bloginfo('template_url') . '/images/' . $tag->slug . '.png" alt="guests" /></td>';
			
		 // Uncomment if being used list group
		 // echo '<li><img src="'. get_bloginfo('template_url') . '/images/' . $tag->slug . '.png" alt="guests" /></li>';
		
		 // Uncomment if being used as article group
	 	 // echo '<div id="tag"><img src="'. get_bloginfo('template_url') . '/images/' . $tag->slug . '.png" alt="guests" /></div><!-- end tag -->';
		}
	}
}

// Displays an image for each activity listed in posts

function get_useage_info() {
	global $post;
	$mykey_values = get_post_custom_values( 'useage', $page->ID );
	
	if ($mykey_values)
	foreach ( $mykey_values as $value ) {
	 // Displays the image for each value
		echo '<li><img src="' . get_bloginfo('template_url') . '/images/' . $value . '.png" alt="guests" /></li>'; 
	}
}