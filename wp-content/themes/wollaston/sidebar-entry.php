<div class="widget-area">
	<?php if ( function_exists ( dynamic_sidebar(1) ) ) : ?>
    	<?php dynamic_sidebar (1); ?>
        <aside id="archives" class="widget">
            <div class="entry-sidebar">
                <div class="postmetadata">
                    <?php the_tags('Tags: ', ', ', '<br />'); ?>
                    <?php the_category(', ') ?>
                    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;') ?>
                </div>
                <?php comments_template(); ?>
            </div>
        </aside>   
    <?php endif; // end sidebar widget area ?>
</div>