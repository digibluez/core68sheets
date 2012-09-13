<?php
//
//Adds pagination links to index.php for displaying on all pages
//TODO clean up html and add style
//
if ( ! function_exists( 'core68sheets_content_nav' ) ):
function core68sheets_content_nav( $nav_id ) {
global $wp_query;
$nav_class = 'site-navigation paging-navigation';
if ( is_single() )
$nav_class = 'site-navigation post-navigation';
?>
<nav>
<?php if ( is_single() ) : ?>
<?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'core68sheets' ) . '</span> %title' ); ?>
<?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'core68sheets' ) . '</span>' ); ?>
<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : ?>
<?php if ( get_next_posts_link() ) : ?>
<?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'core68sheets' ) ); ?>
<?php endif; ?>
<?php if ( get_previous_posts_link() ) : ?>
<?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'core68sheets' ) ); ?>
<?php endif; ?>
<?php endif; ?>
</nav>
<?php } endif;?>