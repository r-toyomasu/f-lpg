<?php
  function custom_enqueue() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '');
  }
  add_action('wp_enqueue_scripts','custom_enqueue');
?>