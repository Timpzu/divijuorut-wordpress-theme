<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo('name') ?></title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Righteous|Work+Sans:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div id="header-container">
      <div id="main-header">
        <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <button id="nav-button"><i class="material-icons">menu</i></button>
      </div>
      <nav id="main_nav">
        <?php
          $args = array(
            'theme_location' => 'primary'
          );
         ?>
        <?php wp_nav_menu( $args ); ?>
      </nav>
    </div>
  </header>
