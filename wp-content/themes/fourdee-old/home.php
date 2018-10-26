<?php get_header(); ?>

<section class="isotopes">
  <?php query_posts( 'pagename=makerspace' );
  	  if ( have_posts ) : 
		  while ( have_posts() ) : the_post(); ?>
  <dl class="isotope">
    <dt <?php set_home_background() ?>></dt>
    <dd>
      <div class="padding" id="left">
        <hgroup>
          <h1> <?php echo get_post_meta($post->ID, 'headline', true); ?> </h1>
          <p><?php echo get_post_meta($post->ID, 'caption', true); ?></p> </hgroup>
        <div class="more"><a href="<?php the_permalink() ?>">Learn More</a></div>
      </div>
    </dd>
  </dl>
  <?php endwhile; ?>
  <div class="marquee-nav"></div>
  <?php endif; ?>
</section>
<!-- .banner -->
<div class="outerWrapper">
  <div class="wrapper">
    <div id="center" class="padding">
    <hgroup>
      <h1>Design, develop, and create something.</h1>
      <p>With multiple tools available - from 3D printers to programing software - you can build almost anything imaginable. So, go ahead and show us what's on your mind.</p> </hgroup>
    <div class="more"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Services' ) ) ); ?>">What We Do</a></div>
    </div>
  </div>
  <!-- .wrapper --> 
</div>
<!-- .outterWrapper -->
<?php get_footer(); ?>
