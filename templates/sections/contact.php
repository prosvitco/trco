<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<section id="contact-maps" class="contact-maps-section section">
  <div class="row">

        <div class="col-xs-12 section-background">
          <!-- MAPS BACKGROUND -->
          <div class="section-background-maps">

          <?php 
              $location = get_sub_field('contact_section_map');
              $marker_image = get_field('marker_image');
            if( !empty($location) ): ?>
            <div class="acf-map">
              <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-icon="<?php echo get_field('marker_image'); ?>">
                <p class="address"><?php echo $location['address']; ?></p>
              </div>
            </div>
          <?php endif; ?>

          </div>
        </div>

        <div class="col-xs-12 col-md-6 col-md-offset-5 contact-maps-row">
          <div class="contact-maps-box" >
            <?php 
            $location_title = get_sub_field('location_title');
            $location_text = get_sub_field('location_text');    
            ?>
            <div class="map-container2">
              <h2 class="text-left"><?php echo $location_title ?></h2>
              <hr>
              <div class="scroll-text un-cl"> 
                <?php echo $location_text; ?>
              </div>      
            </div>     
          </div>
        </div>

  </div><!-- Row -->
</section>