<?php

function everyday_zen_enqueue_styles(){
    wp_enqueue_style(
        "everydayzenchild-style",
        get_stylesheet_uri(),
        array("twenty-twenty-one-style"),
        wp_get_theme()->get("version")
    );
}

add_action("wp_enqueue_scripts", "everyday_zen_enqueue_styles");