<?php
/*
Plugin Name: Kupietools CLI Mode
Description: Adds a Terminal
Version: 1.0
Author: Michael Kupietz
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Add the control panel HTML and required scripts/styles
function cli_enqueue_assets() {
    wp_enqueue_style('cli-styles', plugins_url('css/style.css', __FILE__));
  //  wp_enqueue_script('cli-script', plugins_url('js/script.js', __FILE__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'cli_enqueue_assets');

// Add the control panel HTML to the footer
function cli_add_cli_tab() {
    ?>
    <div id="cli-control" class="cli-control">
       <div class="cli-icon"><a href="/cli.html" style="cursor:point">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 103.53" style="enable-background:new 0 0 122.88 103.53" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M5.47,0h111.93c3.01,0,5.47,2.46,5.47,5.47v92.58c0,3.01-2.46,5.47-5.47,5.47H5.47 c-3.01,0-5.47-2.46-5.47-5.47V5.47C0,2.46,2.46,0,5.47,0L5.47,0z M31.84,38.55l17.79,18.42l2.14,2.13l-2.12,2.16L31.68,80.31 l-5.07-5l15.85-16.15L26.81,43.6L31.84,38.55L31.84,38.55z M94.1,79.41H54.69v-6.84H94.1V79.41L94.1,79.41z M38.19,9.83 c3.19,0,5.78,2.59,5.78,5.78s-2.59,5.78-5.78,5.78c-3.19,0-5.78-2.59-5.78-5.78S35,9.83,38.19,9.83L38.19,9.83z M18.95,9.83 c3.19,0,5.78,2.59,5.78,5.78s-2.59,5.78-5.78,5.78c-3.19,0-5.78-2.59-5.78-5.78S15.75,9.83,18.95,9.83L18.95,9.83z M7.49,5.41 h107.91c1.15,0,2.09,0.94,2.09,2.09v18.32H5.4V7.5C5.4,6.35,6.34,5.41,7.49,5.41L7.49,5.41z"/></g></svg>
		   <span class="hover-text">Command Line Browser</span></a>
</div>

   
    </div>
    <?php
}
add_action('wp_footer', 'cli_add_cli_tab');

