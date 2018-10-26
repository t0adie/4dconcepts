<?php
/*
Template Name: Minutes
*/

get_header(); ?>
<?php query_posts( 'category=21'  ); ?>

<div class="wrapper">
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <section class="minutes">
  	<a href="<?php the_permalink() ?>"><img id="file" width="100" height="100" /></a>
  </section>
      <?php endwhile; ?>
    <?php endif; ?>
    </article>
</div>
<?php get_footer(); ?>
