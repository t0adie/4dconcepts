<aside class="widget-area">

<?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
    	<?php dynamic_sidebar( 'sidebar-main' ); ?>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-article' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-article' ); ?>
<?php endif; ?>

</aside>