<?php
//
//Adds custom read more link to all excerpts
//@todo change more link style
//
function core68sheets_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}

add_filter('excerpt_more', 'core68sheets_excerpt_more');
//
//Adds target blank to author links in comments,rel=nofollow added by default.
//
add_filter( "get_comment_author_link", "wpse_63316_modifiy_comment_author_anchor" );

function wpse_63316_modifiy_comment_author_anchor( $author_link ){
    return str_replace( "<a", "<a target='_blank'", $author_link );
}
//
// Changes wordpress page title to dyniamic
//@todo add meta and keywords
//
function core68sheets_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;
	
	$title .= get_bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'core68sheets' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'core68sheets_wp_title', 10, 2 );
//
//Removes wordpress ?v=1.7 strings from includes js and css files
//
function _remove_script_version( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
//
//Changes wordpress nav_menu,removeing some classes,for less clutter in code
//
add_filter('nav_menu_css_class', 'cssattr_filter', 100, 1);

function cssattr_filter($var) {
	if(!is_array($var)) return;

	$current_indicators = array('current-menu-item', 'current-menu-parent', 'current_page_item', 'current_page_parent');
	
	$newArr = array();
	foreach($var as $el){
		
		if ((preg_match('#[0-9]#',$el))||in_array($el, $current_indicators)){ 
			array_push($newArr, $el);
		}
	}
	
	return $newArr;
}

?>