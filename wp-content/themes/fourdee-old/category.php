<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="isotope current" <?php set_post_background(); ?>>
		<div>
		    <?php get_template_part( 'content', 'category' ); ?>
		</div>
	</section>
      <?php endwhile; ?>
   <?php endif; ?>

<?php get_footer(); ?>