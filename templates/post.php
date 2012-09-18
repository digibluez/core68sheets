<article id="post-<?php the_ID();?>" <?php post_class();?>>

 <?php if (is_home() || is_front_page()) { ?>
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }
else {
	
}
?>
<hgroup>
<h1><?php the_title();?></h1>
<h2><?php the_ID();?></h2>
<h2><?php the_time('F jS, Y') ?></h2>
<h2><?php the_author()?></h2>
<h2><?php the_category(', ') ?></h2>
<h2><?php the_tags('Tags: ', ', ', '<br />'); ?></h2>
<h2><?php the_permalink() ?></h2>
<h2><?php edit_post_link('Edit'); ?></h2>
<h2><?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></h2>
</hgroup>

<?php } else { ?>
<hgroup id="single">
  <h1><?php the_title();?></h1>  
</hgroup>
    
<hgroup id="meta">
<h2><?php the_ID();?></h2>
<h2><?php the_time('F jS, Y') ?></h2>
<h2><?php the_author()?></h2>
<h2><?php the_category(', ') ?></h2>
<h2><?php the_tags('Tags: ', ', ', '<br />'); ?></h2>
<h2><?php the_permalink() ?></h2>
<h2><?php edit_post_link('Edit'); ?></h2>
<h2><?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></h2>
</hgroup>
<?php  } ?>


<?php if ( is_home() || is_archive() ) { ?>
 <section>   
<?php the_excerpt(); ?>
 <a href="<?php the_permalink();?>"><?php _e('Continue reading');?></a>
 </section>   
<?php } elseif (is_single() ) { ?>
 <section id="content"> 
<?php the_content();  ?>
 </section>    
<?php if ( comments_open() || '0' != get_comments_number() ) ?>
    
<?php comments_template( '/templates/comments.php', true );  ?>	
    
<?php } ?>

</article>