<?php get_header(); ?>
<div id="contentWrap">
	<div id="content">
    <?php echo 'This is the search page' ?>
    	<?php if ( have_posts() ) : ?>
        	<h2 id="pageTitle">Search Result</h2>
            <h3 class="query">Found&nbsp;<?php echo count($posts); ?>&nbsp;items for:&nbsp;<?php the_search_query(); ?></h3>
			<?php while ( have_posts() ) : the_post(); ?>
            	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <table border="0" class="search-request">
                    	<tr>
                        	<td>
                            	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('query'); ?></a>
                            </td>
                            <td>
                              <h2 class="query"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                              <div class="query">
                                <?php the_excerpt(30, '...'); ?>
                                <span id="permalink"><?php the_permalink() ?></span>
                              </div>
                            </td>
                        </tr>
                    </table>
                </article>
			<?php endwhile; ?>
			<?php else : ?>
            <h2>No search results found</h2>
        <?php endif; ?>
    </div> <!-- end content -->
    <aside class="widget-area">
	<?php dynamic_sidebar( 'sidebar-main' ); ?>
</aside>
</div> <!-- end contentWrap -->
<?php get_footer(); ?>
