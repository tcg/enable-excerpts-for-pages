<?php
/*
Plugin Name: Enable Excerpts for Pages
Plugin URI:
Description: Adds the 'Excerpt' field to the Page edit screen, just like the one available for Posts. Fully compatible with themes that utilize that feature.
Author: Tommy George
Contributors: tommygeorge
Author URI: http://www.tommygeorge.com/
Version: 3.8
Requires at least: 3.8.1
License: MIT
License URI: http://opensource.org/licenses/MIT
Donate link: http://sowerofseeds.org/
*/


/**
 * Uses the WordPress 'post type support' API
 * to add the built-in 'excerpt' feature to Post edit pages.
 * This also enables templates to use the WordPress function
 * `the_excerpt()` [https://codex.wordpress.org/Function_Reference/the_excerpt]
 * to get that data.
 *
 * Simple code, taken almost directly from the example provided
 * in the Documentation.
 * See: https://codex.wordpress.org/Function_Reference/add_post_type_support
 *
 * @return null
 */
add_action( 'init', 'enable_excerpts_for_pages_init' );
function enable_excerpts_for_pages_init() {
    add_post_type_support( 'page', 'excerpt' );
}
