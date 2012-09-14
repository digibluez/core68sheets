<?php
//
//Rewrite functions only working,when custom rules are added in .htaccess
//
//RewriteRule ^css/(.*) /.../.../themes/core68sheets/css/$1 [L]
//RewriteRule ^js/(.*) /.../.../themes/core68sheets/js/$1 [L]
//RewriteRule ^img/(.*) /.../.../themes/core68sheets/img/$1 [L]
//
function change_css_js_url($content) {
    $current_path = '/68files/themes/core68sheets/';
    $new_path = '/';
    $content = str_replace($current_path, $new_path, $content);
    return $content;
}
add_filter('bloginfo_url', 'change_css_js_url');
add_filter('bloginfo', 'change_css_js_url');

?>