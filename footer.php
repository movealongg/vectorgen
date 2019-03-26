<footer>
  <div class="container">
    <div class="row">
      <div class="eight columns">
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container-class' => 'menu-footer'
        ));?>
      </div>
    </div>

    <div class="row">
      <div class="four columns">
        <p>Copyright &copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?></p>
      </div>
    </div>
  </div>
</footer>

  <?php wp_footer(); ?>
  </body>
</html>
