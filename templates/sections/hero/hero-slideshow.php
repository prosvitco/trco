<?php 
$hero_layout_classic_title = get_sub_field('hero_layout_classic_title');
$hero_slideshow_title = get_sub_field('hero_slideshow_title');
$hero_slideshow_subtitle = get_sub_field('hero_slideshow_subtitle');
$hero_slideshow_button_ancor = get_sub_field('hero_slideshow_button_ancor');
?>  
<!--HERO_SLIDESHOW-->


<style>
  .owl-stage-outer {
    height: 785px;
  }
</style>


<!-- section-slider -->
<section id="section-slider" class="hero-section hero-layout-simple hero-fullscreen hero-slider section section-dark" style="
    height: 700px;
">
  <ul class="section-slider owl-carousel parallax">

          <!-- SECTION SLIDE 1 -->
          <li class="section-slide">

            <div class="section-background">

              <!-- IMAGE BACKGROUND -->
              <div class="section-background-image parallax" data-stellar-ratio="0.4">
                <img src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/hero-bg-slideshow-1.jpg" alt="" style="opacity: 0.3;">
              </div>

            </div>

            <div class="container">

              <div class="hero-content parallax">
                <div class="hero-content-inner">

                  <div class="row">
                    <div class="col-md-6">

                      <div class="hero-heading" data-animation="fadeIn">

                        <h1 class="hero-subtitle">Hi, Welcome to Drew</h1>

                        <p class="hero-tagline">A robust Landing Page Template which solves all your landing page needs, fit for any business / marketing landing page.</p>

                      </div>

                      <p class="hero-buttons">
                        <a href="https://wrapbootstrap.com/theme/drew-all-in-one-marketing-landing-page-WB0350PTJ" class="btn btn-lg btn-primary">Buy This Template</a>
                      </p>

                    </div>
                  </div>
                  
                </div>
              </div>

            </div>

          </li>

          <!-- SECTION SLIDE 2 -->
          <li class="section-slide">

            <div class="section-background">

              <!-- VIDEO BACKGROUND -->
              <div class="section-background-image parallax" data-stellar-ratio="0.4">
                <img src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/hero-bg-slideshow-2.jpg" alt="" style="opacity: 0.3;">
              </div>

            </div>

            <div class="container">

              <div class="hero-content">
                <div class="hero-content-inner">

                  <div class="row">
                    <div class="col-md-6 col-md-offset-6">

                      <div class="hero-heading" data-animation="fadeIn">

                        <h1 class="hero-subtitle">High Quality Design</h1>

                        <p class="hero-tagline"><strong>DREW</strong> is developed with both design and high convertion in mind, making it perfectly fit any landing page purpose.</p>

                      </div>

                      <p class="hero-buttons">
                        <a href="https://wrapbootstrap.com/theme/drew-all-in-one-marketing-landing-page-WB0350PTJ" class="btn btn-lg btn-primary">Buy This Template</a>
                      </p>

                    </div>
                  </div>
                  
                </div>
              </div>

            </div>

          </li>

          <!-- SECTION SLIDE 3 -->
          <li class="section-slide">

            <div class="section-background">

              <!-- VIDEO BACKGROUND -->
              <div class="section-background-image parallax" data-stellar-ratio="0.4">
                <img src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/hero-bg-slideshow-3.jpg" alt="" style="opacity: 0.3;">
              </div>

            </div>

            <div class="container">

              <div class="hero-content">
                <div class="hero-content-inner">

                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                      <div class="hero-heading text-center" data-animation="fadeIn">

                        <h1 class="hero-subtitle">Easy as having a cup of coffee</h1>

                        <p class="hero-tagline">Provided with a complete documentation and modular CSS classes, <strong>DREW</strong> is ready to rocks your new landing page in minutes!</p>

                      </div>

                      <p class="hero-buttons text-center">
                        <a href="https://wrapbootstrap.com/theme/drew-all-in-one-marketing-landing-page-WB0350PTJ" class="btn btn-lg btn-primary">Buy This Template</a>
                      </p>

                    </div>
                  </div>
                  
                </div>
              </div>

            </div>

          </li>
  </ul>

</section>


          <script type="text/javascript">
            jQuery(document).ready(function(){
              jQuery('.owl-carousel').owlCarousel({
                items: 1,
                loop:true,
                margin:0,
                autoplayHoverPause: true,
                autoplay:true,
                auto: true,             // Boolean: Animate automatically, true or false
                speed: 1000,            // Integer: Speed of the transition, in milliseconds
                timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
                pager: true,           // Boolean: Show pager, true or false
                nav: true,             // Boolean: Show navigation, true or false
                
                random: false,          // Boolean: Randomize the order of the slides, true or false
                pause: false,           // Boolean: Pause on hover, true or false
                pauseControls: true,    // Boolean: Pause when hovering controls, true or false
                      
              });
            });
          </script>