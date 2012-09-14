<?php 
function core68sheets_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment;
extract($args, EXTR_SKIP);
if ( 'div' == $args['style'] ) {
$tag = 'div';
$add_below = 'comment';
} else {
$tag = 'div';
$add_below = 'div-comment';
}
?>
<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
<?php if ( 'div' != $args['style'] ) : ?>

<ol id="div-comment-<?php comment_ID() ?>">

<?php endif; ?>
<li>
<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
</li>

<?php if ($comment->comment_approved == '0') : ?>
<?php _e('Your comment is awaiting moderation.') ?>

<?php endif; ?>

<li><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
<?php
printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
?>
</li>

<?php comment_text() ?>

<li class="reply">
<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
</li>
<?php if ( 'div' != $args['style'] ) : ?>
</ol>
</div>
<?php endif; ?>
<?php  } ?>