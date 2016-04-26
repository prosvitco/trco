<?php
  $simple_testimonials = get_sub_field('simple_testimonials', false, false);
  $hero_image = get_sub_field('testimonials_background_image');
?>



<!-- TESTIMONIAL SLIDER
			================================= -->
			<section id="testimonial-slider" class="testimonial-slider-section section-dark section">

				<div class="section-background">

					<!-- IMAGE BACKGROUND -->
					<div class="section-background-image parallax" data-stellar-ratio="0.4">
						<img src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/testimonial-slider-bg.jpg" style="opacity: 0.15;">
					</div>

				</div>

				<div class="container">

					<h2 class="section-heading text-center hidden">Trusted by Thousands</h2>

					<div class="testimonial-slider-row row">

						<div class="col-sm-offset-1 col-sm-10 col-md-8 col-md-offset-2">

							<ul class="testimonial-slider rslides" data-speed="800" data-timeout="4000" data-auto="false">

    <?php if( have_rows('simple_testimonials') ): ?>
      <?php while ( have_rows('simple_testimonials') ) : the_row(); ?>  
      	<?php $simple_testimonial = get_sub_field('simple_testimonial'); ?>
								<!-- TESTIMONIAL ITEM 1 -->
								<li class="testimonial-slide">
									<span class="testimonial-ratings">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</span>
									<blockquote class="testimonial-quote">
										<?php echo $simple_testimonial; ?>
									</blockquote>
									<cite class="testimonial-cite">John Doe, Company Inc.</cite>
								</li>
      <?php endwhile; ?>
    <?php endif; ?>  
							</ul>

						</div>

					</div>

      	<?php $picture_testimonials = get_sub_field('picture_testimonials'); ?>
      	
					<div class="sponsors-row" data-animation="bounceIn">
						<img src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/sponsor-1a.png" alt="">
						<img src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/sponsor-2a.png" alt="">
						<img src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/sponsor-3a.png" alt="">
						<img src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/sponsor-4a.png" alt="">
					</div>
 
				</div>

			</section>



			<!-- 

	<div id="myCarousel" class="carousel slide">
    
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

 
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill"></div>
                <div class="carousel-caption">
                </div>
            </div>
        </div>

    </div> -->