<?php
$hero_title = get_sub_field('hero_simple_title');
$hero_subtitle = get_sub_field('hero_simple_subtitle', false, false);
$hero_image = get_sub_field('hero_simple_background_image');
$hero_ancor = get_sub_field('hero_simple_button_ancor');
?>

<!--HERO_SIMPLE-->

<section id="hero-simple" class="hero-section hero-layout-simple hero-fullscreen section section-dark">

      <div class="section-background">
        <div class="section-background-image parallax" data-stellar-ratio="0.4">
          <img src="<?php echo $hero_image; ?>" alt="" style="opacity: 0.3;">
        </div>
      </div>

  <div class="container">
    <div class="hero-content">
      <div class="hero-content-inner">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="hero-heading text-center" data-animation="fadeIn">

              <h1 class="hero-title"><?php echo $hero_title; ?></h1>

              <p class="hero-tagline"><?php echo $hero_subtitle; ?></p>

            </div>

            <p class="hero-buttons text-center">
              <?php if( have_rows('hero_simple_button') ): ?>
                <?php while ( have_rows('hero_simple_button') ) : the_row(); ?>
                  <?php $hero_simple_button_title = get_sub_field('hero_simple_button_title'); ?>
                  <?php $hero_simple_button_link = get_sub_field('hero_simple_button_link'); ?>
                  <?php $hero_simple_button_color = get_sub_field('hero_simple_button_color'); ?>
        <?php
            if ($hero_simple_button_color == 'default') { 
              $btn_class = "btn-default";
            } else { 
              $btn_class = "btn-primary";
            }
        ?>
                  <a href="<?php echo $hero_simple_button_link; ?>" class="btn btn-lg <?php echo $btn_class; ?>"><?php echo $hero_simple_button_title; ?></a>
                  
                <?php endwhile; ?>
              <?php endif; ?>
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="#<?php echo $hero_ancor; ?>" class="hero-start-link anchor-link"><span class="fa fa-angle-double-down"></span></a>

</section>