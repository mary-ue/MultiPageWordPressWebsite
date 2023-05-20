<?php 
  add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles');
  add_action( 'after_setup_theme', 'add_features');
  add_action( 'after_setup_theme', 'add_menu');
  function add_scripts_and_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
  }
  function add_features() {
    add_theme_support( 'custom-logo', array(
      'height'               => 50,
      'width'                => 100,
      'flex-height'          => false,
      'flex-width'           => false,
      'header-text'          => '',
      'unlink-homepage-logo' => false,
    ) );
  }
  function add_menu() {
    register_nav_menu( 'top', 'Главное меню сайта' );
    register_nav_menu( 'bottom', 'Политика конфиденциальности' );
  }
?>
