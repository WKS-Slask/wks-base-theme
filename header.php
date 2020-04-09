<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>
<body >
  <header>
    <?php if (wp_is_mobile()) { ?>
        <nav class="navbar-container--mobile">
          <div class="navbar--mobile">
            <a href="<?php echo site_url('/'); ?>">
              <img src="<?php echo get_theme_file_uri('./images/wks-logo.png'); ?>" alt="WKS Śląsk Wrocław" class="navbar-logo--mobile" />
            </a>
            <div id="menu-btn">
              <?php wks_echo_svg(get_theme_file_uri('/icons/menu.svg')); ?>
            </div>
          </div>
          <?php wp_nav_menu(array(
              'theme_location' => "main_menu",
              'items_wrap' => '<div class="navbar-content--mobile">%3$s</div>',
              "container" => "",
              'walker' => new Walker_Nav_Primary_mobile()
          )); ?>
        </nav>
      <?php } else { ?>
      <div class="navbar-title">
       Wojskowy Klub Sportowy "Śląsk"
      </div>
      <nav class="navbar">
      <a href="<?php echo site_url('/'); ?>">
          <img src="<?php echo get_theme_file_uri('./images/wks-logo.png'); ?>" alt="WKS Śląsk Wrocław" class="navbar-logo" />
        </a>
      <?php wp_nav_menu(array(
          'theme_location' => "main_menu",
          "container" => "",
          'items_wrap' => '<div class="navbar-menu">%3$s</div>',
          'walker' => new Walker_Nav_Primary()
      )); ?>
      </nav>


  <?php } ?>
  </header>