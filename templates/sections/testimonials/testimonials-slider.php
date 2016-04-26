<?php
  $testimonials_slider_background_image = get_sub_field('testimonials_slider_background_image');
  $testimonials_slider_title = get_sub_field('testimonials_slider_title');
?>

<!-- testimonials slider -->

<section id="testimonial-slider" class="testimonial-slider-section section-dark section">
    <div class="section-background">
        <div class="section-background-image parallax" data-stellar-ratio="0.4">
            <img src="<?php echo $testimonials_slider_background_image; ?>" style="opacity: 0.15;">
        </div>
    </div>
    <div class="container">
        <h2 class="section-heading text-center hidden"><?php echo $testimonials_slider_title; ?></h2>
        <div class="testimonial-slider-row row">
            <div class="col-sm-offset-1 col-sm-10 col-md-8 col-md-offset-2">
                <ul class="testimonial-slider rslides" data-speed="800" data-timeout="4000" data-auto="false">
          <?php
          $args = array(
            'post_type' => 'post_type_review',
            'posts_per_page' => 0
            );
          $new_query = new WP_Query($args); 
          ?>
          <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
                    <li class="testimonial-slide">
                        <span class="testimonial-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </span>
                        <blockquote class="testimonial-quote">
                            <?php the_content(); ?>
                        </blockquote>
                        <cite class="testimonial-cite"><?php the_title(); ?></cite>
                    </li>


        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>

                </ul>
            </div>
        </div>
<?php $picture_testimonials = get_sub_field('picture_testimonials'); ?>
        <div class="sponsors-row" data-animation="bounceIn">
              <?php if( have_rows('testimonials_images_list') ): $i=0;?>
                <?php while ( have_rows('testimonials_images_list') ) : the_row(); ?>
                  <?php $i++;
                  $testimonials_images_list_image = get_sub_field('testimonials_images_list_image');
                  ?>         
                <img src="<?php echo $testimonials_images_list_image; ?>" alt="">
               <?php endwhile; ?>
             <?php endif; ?> 
        </div>
    </div>
</section>
<section class="portfolio-gallery">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="owl-carousel">
          <?php
                        $posts = get_posts( array(
                          'numberposts'     =>  0, //posts_per_page
                          'orderby'         => 'post_date',
                          'order'           => 'DESC',
                          'post_type'       => 'asbestos_post_type',
                          'taxonomy'        => 'asbestos_post_type',
          ) );
                        foreach($posts as $post){ setup_postdata($post); ?>
                <a href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('thumbnail', array( 'class' => 'img-responsive' )); ?>
                  <?php } ?>
                </a>
          <?php }
                              wp_reset_postdata();
                              ?>
        </div>
      </div>
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>
          <script type="text/javascript">
            jQuery(document).ready(function(){
              jQuery( '.testimonial-slider' ).responsiveSlides({
                auto: true,             // Boolean: Animate automatically, true or false
                speed: 1000,            // Integer: Speed of the transition, in milliseconds
                timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
                pager: true,           // Boolean: Show pager, true or false
                nav: false,             // Boolean: Show navigation, true or false
                random: false,          // Boolean: Randomize the order of the slides, true or false
                pause: true,           // Boolean: Pause on hover, true or false
                pauseControls: true,    // Boolean: Pause when hovering controls, true or false
                dotsEach:true,
                prevText: "Previous",   // String: Text for the "previous" button
                nextText: "Next",       // String: Text for the "next" button
                maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
                navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
                manualControls: "",     // Selector: Declare custom pager navigation
                namespace: "rslides",   // String: Change the default namespace used
              });
              jQuery( '.owl-carousel' ).responsiveSlides({
                auto: true,             // Boolean: Animate automatically, true or false
                speed: 1000,            // Integer: Speed of the transition, in milliseconds
                timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
                pager: true,           // Boolean: Show pager, true or false
                nav: true,             // Boolean: Show navigation, true or false
                random: false,          // Boolean: Randomize the order of the slides, true or false
                pause: true,           // Boolean: Pause on hover, true or false
                pauseControls: true,    // Boolean: Pause when hovering controls, true or false
                responsive:{
                  0:{
                    items:1
                  },
                  600:{
                    items:2
                  },
                  1000:{
                    items:3
                  }
                },
              });
            });

          </script>