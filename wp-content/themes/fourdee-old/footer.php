
<footer>
  <div id="outerWrapper">
    <div id="social-footer">
      <?php dynamic_sidebar('users') ?>
      <?php dynamic_sidebar('subscribe') ?>
    </div>
    <!-- end #social-footer -->
    <nav class="footerMenu">
      <div class="menu">Copyright &copy; <?php echo date("Y"); ?> Fourdee. All rights Reserved</div>
      <div class="menu"><?php dynamic_sidebar('social') ?></div>
    </nav>
  </div>
</footer>
<!-- end #outer-wrapper -->
<?php wp_footer(); ?>
</body></html>