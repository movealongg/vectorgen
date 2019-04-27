<footer>
  <!--Footer navigation -->
  <div class="container">
    <div class="row">
      <div class="eight columns">
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container-class' => 'menu-footer'
        ));?>
      </div>
    </div>

<!--Footer copyright -->
    <div class="row">
      <div class="eleven columns copy-footer">
        <p>Copyright &copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?></p>
      </div>
    </div>
  </div>
</footer>

  <?php wp_footer(); ?>
    </div>
  </body>
</html>
