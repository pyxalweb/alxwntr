<?php

function theme_files() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400&display=swap');
    wp_enqueue_style('main-styles', get_theme_file_uri('/css/main.css'));

    wp_enqueue_script('font-awesome', '//kit.fontawesome.com/9a167720af.js', NULL, '1.0', true);
    wp_enqueue_script('main-scripts', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_files');

function theme_features() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_features');

function theme_favicon(){ ?>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/icon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/site.webmanifest">
    <?php }
add_action('wp_head','theme_favicon');

?>