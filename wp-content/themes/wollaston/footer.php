<footer>
	<nav class="footerMenu"><div class="menu-header">&copy; <?php echo date("Y"); echo " " ; bloginfo('name'); ?></div><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'footer' ) ); ?></nav>
</footer>
</div> <!-- end outerWrapper -->
 <?php wp_footer(); ?>
</body>
</html>