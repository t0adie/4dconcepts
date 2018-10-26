<?php
//
// Template Name: Typical Page
//
?>

<?php get_header(); ?>

<div id="contentWrap">
<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php set_post_background(); ?>
          <article>
            <h1 id="home"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	    <?php the_content(); ?>
	    <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
          </article>
	<?php dynamic_sidebar( 'sidebar-article' ); ?>
          <?php endwhile; ?>
		  <?php endif; ?>
    </div> <!-- end content -->
</div> <!-- end contentWrap -->

<?php get_footer(); ?>