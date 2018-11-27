<footer>
  <div class="footer-inner">
    <div class="footer-nav-area">

<!-- Add footer elements -->
    <?php wp_nav_menu(array(
      'theme_location' => 'footer-nav',
      'container' => 'nav',
      'container-class' => 'footer-nav',
      'container-id' => 'footer-nav',
      'fallback_cb' => ' '
    )); ?>

    </div>
  	
<div class="copyright">
  <p>copyright ©<?php bloginfo('name'); ?> All Rights Reserved.</p>
</div>
  </div>
</footer>
<?php wp_footer(); ?><!--システム・プラグイン用-->
</body>
</html>
