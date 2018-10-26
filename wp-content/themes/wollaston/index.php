<?php get_header(); ?>
<div id="contentWrap">
	<div id="content">
    	<?php if ( have_posts() ) : ?>
        	
            <?php while ( have_posts() ) : the_post(); ?>
            	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <div class="meta">
                    	<em>By</em> <?php the_author() ?>&emsp;<?php the_time('m.d.y') ?>&emsp;<?php the_time('g:i') ?>&ensp;<?php the_time('a') ?>
                    </div>
                    <div class="entry">
                    	<?php the_excerpt('', false,'');?>
                    </div>
                    <div class="postmetadata">
						<?php the_tags('Tags: ', ', ', '<br />'); ?>
                        <ul>
                            <li>
                            	<?php the_category(', ') ?>&ensp;|
                            </li>
                            <li>
                            	<?php comments_popup_link('No Comments', '1 Comment', '% Comments') ?>&ensp;|
                            </li>
                            <li>
                            	<div class="read-more"><div class="info-button"><img src="http://127.0.0.1/whw_wordpress/wp-content/themes/wollaston/images/info_block.png" />&nbsp;</div><div class="the-jump"><a href="<?php the_permalink() ?>">Read More</a></div>
                            </li>
                        </ul>
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