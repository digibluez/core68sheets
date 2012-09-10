<article id="post-<?php the_ID(); ?>">
		
	<hgroup>

		<h1><?php the_title(); ?></h1>
		<h2><?php the_ID(); ?></h2>
		<h2><?php the_time('F jS, Y') ?></h2>
		<h2><?php the_author() ?></h2>
		<h2><?php the_category(', ') ?></h2>
		<h2><?php the_tags('Tags: ', ', ', '<br />'); ?></h2>
		<h2><?php the_permalink() ?></h2>
		<h2><?php edit_post_link('Edit'); ?></h2>
		<h3><?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></h3>

	</hgroup>




</article>