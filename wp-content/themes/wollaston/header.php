<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title>
<?php 
	global $page, $pageed;
	wp_title( '|', true, 'right');
	bloginfo( 'name' );
	$site = get_bloginfo( 'description', 'display' );
	if ($site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >=2 || $page >= 2 )
		echo ' | ' . sprintf(__( 'Page %s' ), max( $paged, $page ) );
?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- [if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php if (is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_scripts( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php  ?>
<div class="header">
	<header>
        <nav class="mainMenu">
        	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
        </nav>
        <nav class="metaMenu">
            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'secondary' ) ); ?>
        </nav>
        <div class="search-container">    
			<div class="magnify"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/search.png"></a></div>
			<div class="search-pop-up"><?php get_search_form(); ?></div>
        </div>
	</header>
</div>
<div id="outerWrapper">
	<div class="site-title">
    	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    </div>    