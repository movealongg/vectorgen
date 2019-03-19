<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?></title>

    <!--Link to our style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>
  </head>

  <body>

    <header>
      <div class="container">
        <div class="row">
          <div class="five columns">
            <a href="<?php echo bloginfo('url'); ?>"><img src ="http://rcolecreative.com/vectorgen/wp-content/uploads/2019/03/logo.png" class="logo" alt="Home"></a>
          </div>

          <div class="seven columns">
            <?php wp_nav_menu(array(
              'theme_location' => 'header-menu',
              'container-class' => 'menu-header'
            ));
            ?>
          </div>

        </div>
      </div>
    </header>
