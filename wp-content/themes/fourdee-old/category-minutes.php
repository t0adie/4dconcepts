<?php get_header(); ?>

<div class="wrapper"> 
  
  <!--Begin Loop-->
  <?php if (have_posts()) : ?>
  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
  <?php /* If this is a category archive */ if (is_category()) { ?>
  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
  <h2 class="pagetitle">Archive for
    <?php the_time('F, Y'); ?>
  </h2>
  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
  <h2 class="pagetitle">Archive for
    <?php the_time('Y'); ?>
  </h2>
  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h2 class="pagetitle">Blog Archives</h2>
    <?php } ?>
  <div class="pagination">
    <div class="alignleft">
      <?php next_posts_link('&laquo; Previous Articles') ?>
    </div>
    <div class="alignright">
      <?php previous_posts_link('Next Articles &raquo;') ?>
    </div>
  </div>
  <?php while ( have_posts() ) : the_post(); ?>
  
  <!--End Loop-->
  <?php endwhile; else: ?>
  <p>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
  </p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
