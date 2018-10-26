<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();?>

<article>
  <div id="banner">
    <section class="isotopes"> 
      <!-- end #spotlight_articles -->
    </section>
    <nav>
        <button class="spotlight-navigation" id="left-bracket"></button>
        <button class="spotlight-navigation" id="right-bracket"></button>
      </nav>
  </div>
  <div class="content" role="main">
    <?php 
	
	get_template_part( 'content', get_post_format() );
	
	if ( comments_open() ) {
		comments_template();
	} ?>
  </div>
</article>
<?php endwhile; ?>
<?php get_footer(); ?>
