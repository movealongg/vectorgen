<footer>
  <div class="container">
    <div class="row">
      <div class="eight columns">
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container-class' => 'menu-footer'
        ));
        ?>
      </div>
    </div>
  </div>
</footer>

  <?php wp_footer(); ?>
  </body>
</html>
