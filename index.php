<?php get_template_part('templates/head'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; else: ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php endif; ?>

<?php get_template_part('templates/footer'); ?>