<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: material-design-lite
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package Material_Design_Lite_Child
 */

/**
 * Load the styles and scripts of Child theme
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function sp_mdl_child_enqueue_scripts()
{
    // Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
    $theme = wp_get_theme('material-design-lite');
    $version = $theme->get('Version');

    // Load the stylesheet
    wp_enqueue_style('sp-mdl-child-style', get_stylesheet_directory_uri() . '/style.css', array('sp-mdl-style'), $version);

    // Load the scripts
    wp_enqueue_script('sp-mdl-child-scripts', get_stylesheet_directory_uri() . '/scripts.js', array('sp-mdl-scripts'), $version, true);
}

// TODO: uncomment the line below to enable load child scripts and styles
//add_action('wp_enqueue_scripts', 'sp_mdl_child_enqueue_scripts');