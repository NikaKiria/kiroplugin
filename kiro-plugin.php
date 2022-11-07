<?php
/**
 * Plugin name: Kiro Plugin
 * Description: Very useful plugin
 * Version: 1.0.0
 * Author: Nika Kiria
*/


// Add topbar
add_action('wp_body_open', 'add_topbar');

function add_topbar() {
    echo '<h3 class="welcome-topbar-text">Welcome to ' . get_bloginfo('name') . " " . get_user() . '</h3>';
}


// Get user
function get_user() {
    if(!is_user_logged_in()) {
        return '';
    } else {
        $user = wp_get_current_user();
        return $user -> user_login;
    }
}


// Add styles
add_action('wp_print_styles', 'add_topbar_css');

function add_topbar_css() {
    echo 
    '
    <style>
        h3.welcome-topbar-text {color: #fff; margin: 0; padding: 30px; text-align: center; background: #343434;}
    </style>
    ';
}