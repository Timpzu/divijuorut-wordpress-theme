<?php
  function getStyle() {
    wp_enqueue_style('style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'getStyle' );

  function getJs() {
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() .
    '/custom-script.js', array('jquery')
    );
  }
  add_action('wp_enqueue_scripts', 'getJs' );

  // Get first p of the_content
  function get_first_lines() {
    global $post;
    $dots = '';
    $str = wpautop(get_the_content());
    $str = strip_tags($str, '<p>');
    $str = substr($str, 0, 150);
    if (strlen($str) > 149) {
      $dots = '...';
    }
    return '<p>' . $str . $dots . '</p>';
  }

  // Theme setup
  function divijuorutSetup() {
    // Navigation
    register_nav_menus(array(
      'primary' => __('Primary'),
    ));
    // News header image
    add_theme_support('post-thumbnails');
    add_image_size('frontpage-thumb', 768, 432, array('center','center'));
    add_image_size('article-thumb', 768, 432, array('center','center'));
  }
  add_action('after_setup_theme', 'divijuorutSetup');

  // Theme path
  if (!defined(THEME_IMG_PATH)) {
    define('THEME_IMG_PATH', get_stylesheet_directory_uri() . '/img');
  };
?>
