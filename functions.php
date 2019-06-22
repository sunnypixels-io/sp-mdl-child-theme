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
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function sp_mdl_child_enqueue_parent_style()
{
    // Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
    $theme = wp_get_theme('Material-Design-Lite');
    $version = $theme->get('Version');
    // Load the stylesheet
    // TODO in case I use another methood for load css, perhaps I have to refactor it
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('sp-mdl-style'), $version);

}

add_action('wp_enqueue_scripts', 'sp_mdl_child_enqueue_parent_style');