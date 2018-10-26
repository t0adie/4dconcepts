<?php
//
// Template Name: Template Page
//
?>
<?php get_header(); ?>
<div class="main" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
<section class="isotope" <?php set_post_background(); ?> > </section>
<!-- .isotope -->
<div class="page-info">
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
  </div>
  <!-- .contact-info -->
</article>
<?php endwhile; ?>
<?php endif; ?>
</div>
<!-- .main -->
<?php get_footer(); ?>
