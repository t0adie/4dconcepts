<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
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
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,900,300italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<!-- [if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php if (is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_scripts( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <menu>
    <nav class="mainMenu">
      <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
    </nav>
  </menu>
</header>
<section class="recent-posts">
  <ul id="spotlight-articles">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <li <?php post_class() ?> id="post-<?php the_ID(); ?>" <?php set_home_background(); ?>>
      <div id="post-day"> <span><?php echo get_the_date( 'd' ); ?></span> </div>
    </li>
    <?php endwhile; ?>
    <?php else : ?>
    <h2>Not found</h2>
    <?php endif; ?>
  </ul>
</section>
