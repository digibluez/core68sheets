<?php
/* START Post Content specific changes */
function core68sheets_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'core68sheets_excerpt_more');
add_filter( "get_comment_author_link", "wpse_63316_modifiy_comment_author_anchor" );
function wpse_63316_modifiy_comment_author_anchor( $author_link ){
    return str_replace( "<a", "<a target='_blank'", $author_link );
}
/* END Post Content specific changes */

?>