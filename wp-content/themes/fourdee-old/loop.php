<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();?>

<section class="section-isotope" id="post-<?php the_ID(); ?>" <?php set_home_background(); ?> data-type="background" data-speed="-2"></section>
<div class="outerWrapper">
  <div class="wrapper">
    <?php 
	
	get_template_part( 'content', get_post_format() );
	
	if ( comments_open() ) {
		comments_template();
	} ?>
  </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>