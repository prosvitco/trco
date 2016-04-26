<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="title-area">
      <ol class="breadcrumb">
        <?php echo breadcrumbs(); ?>
      </ol>
      <ul class="theme list-inline">
       <?php wp_list_categories('title_li='); ?>
     </ul>   
     <h1 class="entry-title"><?php the_title(); ?></h1>
     <?php get_template_part('templates/entry-meta'); ?>    
     <?php if ( has_post_thumbnail()) { ?>
     <?php the_post_thumbnail('large', array( 'class' => 'aligncenter' )); ?>
     <?php } ?>
   </header>
   <div class="entry-content">
    <?php the_content(); ?>
  </div>
  <?php 
      $tags = get_tags();
      $html = '<div class="tags"><h4>Tags</h4>';
      foreach ($tags as $tag){
        $tag_link = get_tag_link($tag->term_id);

        $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
        $html .= "{$tag->name}</a>";
      }
      $html .= '</div>';
      echo $html; 
  ?>
  <footer>
    <?php// wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    <?php 
    if (function_exists("wp_bs_pagination"))
    {
         //wp_bs_pagination($the_query->max_num_pages);
     wp_bs_pagination();
   }
   ?>     
 </footer>
 <?php comments_template('/templates/comments.php'); ?>
</article>
<?php setPostViews(get_the_ID()); ?>
<?php endwhile; ?>
