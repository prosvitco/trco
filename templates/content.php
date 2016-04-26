<article <?php post_class(); ?>>
  <header class="title-area">
      <ul class="theme list-inline">
       <?php wp_list_categories('title_li='); ?>
     </ul>   
   <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
   <?php get_template_part('templates/entry-meta'); ?>

   <?php if ( has_post_thumbnail()) { ?>
   <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('next-thumb, img-responsive'); ?>
  </a>
  <?php } ?>
</header>
<div class="entry-summary post-desc">
  <?php the_excerpt(); ?>
 <a href="<?php echo get_permalink()?>" class="btn btn-primary">Read More</a>  
</div>

</article>
