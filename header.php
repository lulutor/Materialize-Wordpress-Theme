<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>


  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
  <?php wp_head(); ?>
  <!-- <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
</head>
<body <?php body_class(); ?>>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo"><?php bloginfo('name'); ?></a>
      <ul class="right hide-on-med-and-down">
        <li><?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
