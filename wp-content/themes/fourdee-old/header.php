<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta charset="utf-8">
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
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="pingba ck" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,900,300italic' rel='stylesheet' type='text/css'>
<!-- [if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php if (is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_scripts( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php include_once("analyticstracking.php") ?>
<header>
  <menu class="sub">
    <nav class="loginMenu">
      <div>
        <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open">
        <label class="menu-open-button" for="menu-open"> <span class="hamburger hamburger-1"></span> <span class="hamburger hamburger-2"></span> <span class="hamburger hamburger-3"></span> </label>
      </div>
      <?php if ( is_home() ) : ?>
      <div id="nothing"><img src="<?php bloginfo(template_url) ?>/images/logo.png" /></div>
      <div id="hidden"> </div>
      <?php elseif ( is_page() ) : ?>
      <div><a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo(template_url) ?>/images/logo.png" /></a> </div>
      <div>
        <pre id="dead"><?php the_title() ?></pre>
      </div>
      <?php elseif ( is_singular('post') || is_category() ) : ?>
      <div><a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo(template_url) ?>/images/logo.png" /></a></div>
      <div>
        <pre id="dead"><?php the_category('</pre> <pre>') ?></pre>
      </div>
      <?php endif; ?>
    </nav>
  </menu>
  <menu class="popOut">
    <nav class="mainMenu">
      <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
    </nav>
  </menu>
</header>
