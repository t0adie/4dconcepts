<?php get_header(); ?>
	<?php query_posts( 'posts_per_page=1' ); ?>
          <div id="contentWrap-home">
		  <div id="content-home">
          <?php echo set_post_background(); ?>
          <?php if ( have_posts() ) : ?>
 	      <?php while ( have_posts() ) : the_post(); ?>
          <article>
            <h1 id="home"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
          </article>
          <?php endwhile; ?>
		  <?php endif; ?>
    </div> <!-- end content -->
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>
</div> <!-- end contentWrap -->
<?php get_footer(); ?>