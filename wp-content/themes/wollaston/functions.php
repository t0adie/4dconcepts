<?php

// Sidebar widgets insertion function
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Widgets',
		'id' => 'sidebar-widgets',
		'description' => 'Widgets for the sidebar.',
		'before_widget' => '<aside id="$1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
// Secondary menu for theme navigation
register_nav_menus( array(
	'primary' => __( 'Main Navigation', 'news' ),
	'secondary' => __( 'Login Navigation', 'subscribe'),
	'footer' => __( 'Footer Navigation', 'footer')
) );
// Excerpt function
function new_excerpt_more($more) {
	global $post;
	return '&hellip;';
}
function custom_excerpt_length( $length ) {
	return 55;
}
function custom_excerpt($new_length = 20, $new_more = '...') {
  add_filter('excerpt_length', function () use ($new_length) {
    return $new_length;
  }, 999);
  add_filter('excerpt_more', function () use ($new_more) {
    return $new_more;
  });
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_filter('excerpt_more', 'new_excerpt_more');

// Additional sidebar function
if ( function_exists ('register_sidebar')) { 
	register_sidebar ('custom');
}
// Theme support for setting background
add_theme_support( 'custom-background' );
// Theme support for adding post thumbnails

add_theme_support( 'post-thumbnails' );
add_image_size( 'custom', 300, 300, true );
add_image_size( 'query', 100, 100, true );
add_image_size( 'large', 620, 620, true );
add_image_size( 'featured', 200, 200, true );
// Admin bar at top of page
show_admin_bar( false );
?>