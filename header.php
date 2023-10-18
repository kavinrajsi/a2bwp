<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alice&family=Roboto+Serif:opsz,wght@8..144,300;8..144,400;8..144,500;8..144,600;8..144,700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<body class="page-home">
    <!--[if IE]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->
    <div class="announcement-bar">
      <ul class="announcement-list">
        <li class="announcement-text">
          We're revamping our website, so some features may be temporarily unavailable. We appreciate your patience.
        </li>
      </ul>
    </div>
    <header>
      <div class="header">
        <a href="/" class="header__logo--wrapper">
          <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="">
        </a>
        <div class="header__menu--button">
          <div class="menu-icon" id="menuIcon">
            <div class="menu-icon__line menu-icon__line--top"></div>
            <div class="menu-icon__line menu-icon__line--middle"></div>
            <div class="menu-icon__line menu-icon__line--bottom"></div>
          </div>
        </div>
        <div class="header__menu">
          <div class="header__navigation">
          <?php
          wp_nav_menu(array(
    'theme_location' => 'primary',
    'container'      => 'nav',
    'container_id'   => 'custom-menu-container',
    'container_class'   => 'header__navigation--list',
    'menu_class'     => 'custom-menu-items',
));?>

          </div>
          <div class="header__button--special">
            <a href="https://onlineorder.aabsweets.com/" target="_blank">Order Online</a>
          </div>
        </div>
      </div>
    </header>
    <main>