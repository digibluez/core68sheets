<?php
function change_css_js_url($content) {
    $current_path = '/68files/themes/core68sheets/';
    $new_path = '/'; // No need to add /css or /js here since you're mapping the subdirectories 1-to-1
    $content = str_replace($current_path, $new_path, $content);
    return $content;
}
add_filter('bloginfo_url', 'change_css_js_url');
add_filter('bloginfo', 'change_css_js_url');
?>