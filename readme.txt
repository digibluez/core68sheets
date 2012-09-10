welcome to 68 core style sheets theme developement
---------------------------------------------------
INSPIRATION!! NOTES!!! RESPONSE!! COMMENT!!! FOLLOW!!
!!!FOCUS FORUMS!! DOCS!!!
<*How to post: write - edit - images - format - publish*>

(((((((((((((((((wordpress functions))))))))))))))))))
------------------------------------------------------
<?php bloginfo('url'); ?> 
<?php bloginfo('name'); ?>
<?php bloginfo('description'); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; else: ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php endif; ?>

<?php the_time('F jS, Y') ?>
<?php the_author() ?>
<?php the_tags('Tags: ', ', ', '<br />'); ?>
<?php the_category(', ') ?>
<?php edit_post_link('Edit', ', ' | '); ?>
<?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
<?php next_posts_link('&laquo; Older Entries') ?>
<?php previous_posts_link('Newer Entries &raquo;') ?>
<?php the_title(); ?>
<?php the_permalink() ?>
<?php get_header(); ?>
<?php get_footer(); ?>
<?php get_sidebar(); ?>
<?php get_template_part(); ?>
<?php comments_template(); ?>

function core68sheets_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'core68sheets_excerpt_more');
<?php the_content('<span class="moretext">...on the edge of
your seat? Click here to solve the mystery.</span>'); ?>