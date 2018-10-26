<?php get_header(); ?>

<div id="outerWrapper">
  <div id="wrapper">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post();  get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>
    <?php else : ?>
    <h2>Not found</h2>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
