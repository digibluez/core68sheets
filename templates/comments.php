<?php	if ( post_password_required() )	return;?>

<section id="comments">

<?php if ( have_comments() ) : ?>

<?php
printf( _n( '%2$s comment;', '%1$s comments', get_comments_number(), 'core68sheets' ),
number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
?>


<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
<nav role="navigation" id="comment-nav-above">
<h1><?php _e( 'Comment navigation', 'core68sheets' ); ?></h1>
<h1><?php previous_comments_link( __( '&larr; Older Comments', 'core68sheets' ) ); ?></h1>
<h1><?php next_comments_link( __( 'Newer Comments &rarr;', 'core68sheets' ) ); ?></h1>
</nav>
<?php endif; ?>


<?php wp_list_comments( array( 'callback' => 'core68sheets_comment' ) ); ?>


<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
<nav role="navigation" id="comment-nav-below">
<h1><?php _e( 'Comment navigation', 'core68sheets' ); ?></h1>
<h1><?php previous_comments_link( __( '&larr; Older Comments', 'core68sheets' ) ); ?></h1>
<h1><?php next_comments_link( __( 'Newer Comments &rarr;', 'core68sheets' ) ); ?></h1>
</nav>
<?php endif;  ?>
<?php endif; ?>

<?php	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :	?>
<p><?php _e( 'Comments are closed.', 'core68sheets' ); ?></p>
<?php endif; ?>

<?php core68sheets_comment_form();?>
</section>