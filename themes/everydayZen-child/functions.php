<?php
// Load child theme style sheet.
function everyday_zen_enqueue_styles(){
    wp_enqueue_style(
        "everydayzenchild-style",
        get_stylesheet_uri(),
        array("twenty-twenty-one-style"),
        wp_get_theme()->get("version")
    );

    wp_enqueue_style(
        "zenStyle",
        get_stylesheet_directory_uri() . "/zenStyle.css"
    );
}

add_action("wp_enqueue_scripts", "everyday_zen_enqueue_styles");
// Disable theme editor
define("DISALLOW_FILE_EDIT", true);