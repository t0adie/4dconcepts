<?php
/*
Template Name: Subscribe Page
*/
?>

<?php get_header(); ?>
<div id="contentWrap">
	<div id="content">
    	<?php if ( have_posts() ) : ?>
        	
			<?php while ( have_posts() ) : the_post(); ?>
            	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                	<h2><?php the_title(); ?></h2>
                    <div class="entry">
                    	<?php the_content(); ?>
                    </div>
                </article>
			<?php endwhile; ?>
			<?php else : ?>
            <h2>Not found</h2>
        <?php endif; ?>
    </div> <!-- end content -->
    <?php get_sidebar(); ?>
</div> <!-- end contentWrap -->
<?php get_footer(); ?>