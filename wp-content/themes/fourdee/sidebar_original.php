<div class="widget-area">
	<?php if ( ! dynamic_sidebar( 'Sidebar Widgets' ) ) : ?>
        <aside id="archives" class="widget">
        	<h3 class="widget-title">Archives<img src="<?php bloginfo('template_url');?>/images/elegant_back_white.png" /></h3>
            <ul>
            	<?php wp_get_archives('type=monthly&limit=12'); ?>
            </ul>
        </aside>   
    <?php endif; // end sidebar widget area ?>
</div>