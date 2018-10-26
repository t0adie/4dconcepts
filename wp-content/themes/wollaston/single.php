<?php get_header(); ?>
<div id="contentWrap">
	<div id="content">
    	<?php if ( have_posts() ) : ?>
        	
			<?php while ( have_posts() ) : the_post(); ?>
            	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                	<div class="postmetadata">
                        <?php the_tags('Tags: ', ', ', '<br />'); ?>
                        <?php the_category(', '); ?>
                    </div>
                    <h2><?php the_title(); ?></h2>
                    <div class="meta">
                    	<em>By</em> <?php the_author() ?>&emsp;<?php the_time('m.d.y') ?>&emsp;<?php the_time('g:i') ?>&ensp;<?php the_time('a') ?>
                    </div>
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                    <div>
                    	<h2>Recent Posts</h2>
                        <ul>
                        <?php
                            $args = array( 'numberposts' => '5' );
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){
                                echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                            }
                        ?>
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