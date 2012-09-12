<?php get_template_part('templates/head'); ?>

  <section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('templates/post', get_post_format()); ?>

	<?php endwhile; ?> 

	<?php core68sheets_content_nav( 'nav-below' ); ?>
	
	<?php else: ?>

	<?php _e('Sorry, no posts matched your criteria.'); ?>

<?php endif; ?>

  </section>

<?php get_template_part('templates/footer'); ?>