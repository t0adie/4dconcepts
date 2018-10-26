<?php get_header(); ?>
	
    	<?php if ( have_posts() ) : ?>
          <div id="contentWrap">
		  <div id="content-parent">
  	      <?php while ( have_posts() ) : the_post(); ?>
           	<?php
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'custom' );
			?>
            	<article <?php post_class() ?> id="post-<?php the_ID(); ?>" style="background: url('<?php bloginfo('template_directory'); ?>/images/gray_back.jpg');">
                  <div class="border">
                    <div class="image" style="width: 300px; height: 300px; background-image: url(<?php echo $src[0]; ?>); "></div>
                    <div id="meta">
                        <div id="title">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_excerpt(); ?></p>
                            <div class="postmetadata">
                            <ul>
                                <li>
                                    <?php the_category(', ') ?>
                                </li>
                                <li>
                                    <?php comments_popup_link('No Comments', '1 Comment', '% Comments') ?>
                                </li>
                                <li>
                                    <div class="read-more"><a href="<?php the_permalink() ?>">Read More</a></div>
                                </li>
                            </ul>
                        </div>
                        </div>
                        <div id="tags"><?php $post_tags = wp_get_post_tags($post->ID);
                        if( $post_tags ) : ?>
                        <table class="post-tag">
                            <tr>
                            
                            <?php foreach( $post_tags as $tag ) { ?>
                            <td>
                            <a href="<?php echo get_tag_link($tag->term_id); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/<?php echo $tag->slug; ?>.png" /></a>
                            </td>
                            <?php } ?>
                          </tr>
                        </table>
                        <?php endif; ?>
                    </div>
                    </div>
                  </div>
                </article>                
			<?php endwhile; ?>
			<?php else : ?>
            <h2>Not found</h2>
        <?php endif; ?>
    </div> <!-- end content -->

</div> <!-- end contentWrap -->
<?php get_footer(); ?>