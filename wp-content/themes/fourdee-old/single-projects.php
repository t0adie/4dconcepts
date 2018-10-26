<?php get_header(); ?>

<div class="wrapper">
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <div>
    <?php the_category() ?>
    <h2>
      <?php the_title(); ?>
    </h2>
    <div class="meta"> <span id="author"> By:
      <?php the_author(); ?>
      </span> <span id="date">
      <?php the_date(); ?>
      </span></div>
  </div>
  <?php sharing_display() ?>
  <?php 
		  	  if ( function_exists( 'sharing_display' ) ) {
			  sharing_display( '', true );
			  }
			  
			  if ( class_exists( 'Jetpack_Likes' ) ) {
			  $custom_likes = new Jetpack_Likes;
			  echo $custom_likes->post_likes( '' );
			  }
		  ?>
  <section class="content">
    <?php the_permalink(); ?>
    <div class="entry">
      <?php the_content(); ?>
    </div>
    <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
    <?php comments_template(); ?>
    <?php endwhile; ?>
    <?php else : ?>
    <h2>Not found</h2>
    <?php endif; ?>
    </article>
  </section>
  <section class="sidebar">
    <?php dynamic_sidebar( 'sidebar-article' ); ?>
  </section>
</div>
<?php get_footer(); ?>
