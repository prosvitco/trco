<?php 
  $testimonials_title = get_sub_field('testimonials_title');
?>
<!-- testimonials -->

<section id="testimonial" class="testimonial-section section-gray section">
    <div class="container">
        <h2 class="section-heading text-center"><?php echo $testimonials_title; ?></h2>
        <div class="sponsors-row row-image" data-animation="bounceIn">
            
              <?php if( have_rows('testimonials_images_list') ): $i=0;?>
                <?php while ( have_rows('testimonials_images_list') ) : the_row(); ?>
                  <?php $i++;
                  $testimonials_images_list_image = get_sub_field('testimonials_images_list_image');
                  ?>         
                <img src="<?php echo $testimonials_images_list_image; ?>" alt="">
               <?php endwhile; ?>
             <?php endif; ?> 
        </div>
        <div class="testimonial-row row">
          <?php
          $args = array(
            'post_type' => 'post_type_review',
            'posts_per_page' => 2
            );
          $new_query = new WP_Query($args); 
          ?>
          <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>

            <div class="col-sm-6">
                <div class="testimonial">
                    <blockquote class="testimonial-quote">
                        <p><?php the_content(); ?></p>
                    </blockquote>
                    <span class="testimonial-ratings">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </span>
                    <cite class="testimonial-cite"><?php the_title(); ?></cite>
                </div>
            </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>
        </div>
    </div>
</section>