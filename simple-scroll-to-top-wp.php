<?php
/**
 * Plugin Name: Simple Scroll To Top WP
 * Plugin URI: https://wordpress.org/plugins/simple-scroll-to-top-wp/
 * Description: Simple Scroll To Top Plugin will help to you enable Back to top button to your wordpress website.
 * Version: 1.0.0
 * Requires al least: 5.2
 * Requires PHP: 7.2
 * Author: Faysal hossain
 * Author URI: https://faysal-hossain11.github.io/portfolio-website/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Update URI: https://github.com/faysal-hossain11/
 * Text Domain: sstt
*/


// Including css
function sstt_enqueue_style(){
    wp_enqueue_style('sstt-style', plugins_url('css/sstt-style.css', __FILE__));
}
add_action("wp_enqueue_scripts", "sstt_enqueue_style");


// Including javaScript
function sstt_enqueue_scripts(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('sstt-plugin-script', plugins_url('js/sstt-plugin.js', __FILE__), array(), '1.0.0', 'true');
}
add_action("wp_enqueue_scripts", "sstt_enqueue_scripts");


// jquery plugin setting activation
function sstt_scroll_script(){?>
    <script>
    jQuery(document).ready(function () {
        jQuery.scrollUp();
    });
    </script>
    <?php }

add_action("wp_footer", "sstt_scroll_script");


?>