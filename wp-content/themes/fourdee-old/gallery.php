<?php get_header(); ?>

<banner>
<div id="marquee">
  <div id="marquee-photos">
    <?php set_post_background() ?>
  </div>
  <div class="marquee-nav"></div>
</div>
</banner>
<div id="contentWrap-home">
  <div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
      <h1>
        <?php the_title(); ?>
      </h1>
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
      <div class="right-sidebar">
        <?php if ( in_category('2') ) {
  		      	get_sidebar( 'entry' );
			  }
		?>
      </div>
      <!-- end #right-sidebar --> 
    </article>
    <?php endwhile; ?>
    <?php endif; ?>
    <div class="entry-sidebar">
      <?php dynamic_sidebar( 'sidebar-article' ); ?>
    </div>
    <!-- end #sidebar-main --> 
  </div>
  <!-- end #content -->
    <div id="content">
	<div class="spotlight-navigation" id="left-bracket"><img src="<?php bloginfo('template_url') ?>/images/prev-arrow.png" /></div>
  <div id="spotlight-marquee">
    <div id="spotlight-articles">
    	<?php echo do_shortcode('[gallery option1="value1"]'); ?>
    </div>
    <!-- end #spotlight_articles --> 
  </div>
  <!-- end #spotlight_marquee -->
  <div class="spotlight-navigation" id="right-bracket"><img src="<?php bloginfo('template_url') ?>/images/next-arrow.png" /></div>
</div>
  <div id="content">
    <div class="next-prev">
      <div class="prev-link">
        <?php previous_post_link( '%link', '<img src="' . get_bloginfo('stylesheet_directory') . '/images/prev-arrow.png" />' ); ?>
        <div id="prev">
          <?php previous_post_link('<h3>Previous Project:</h3> %link'); ?>
        </div>
      </div>
      <div class="next-link">
        <div id="next">
          <?php next_post_link('<h3>Next Project:</h3> %link'); ?>
        </div>
        <?php next_post_link( '%link', '<img src="' . get_bloginfo('stylesheet_directory') . '/images/next-arrow.png" />' ); ?>
      </div>
    </div>
    <!-- end .next-prev --> 
  </div>
  <!-- end #content --> 
</div>
<!-- end contentWrap-home -->

<?php get_footer(); ?>
