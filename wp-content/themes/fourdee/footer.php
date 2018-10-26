
<footer>
  <div id="outerWrapper">
    <div id="social-footer">
      <?php dynamic_sidebar('users') ?>
      <?php dynamic_sidebar('subscribe') ?>
      <?php dynamic_sidebar('social') ?>
    </div>
    <!-- end #social-footer -->
    <nav class="footerMenu">
      <div class="menu-header">Copyright &copy; <?php echo date("Y"); ?> CESCO. All rights Reserved</div>
      <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'footer' ) ); ?>
    </nav>
  </div>
</footer>
<!-- end #outer-wrapper -->
<?php wp_footer(); ?>
</body></html>