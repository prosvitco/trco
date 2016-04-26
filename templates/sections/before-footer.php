<!-- before-footer -->
<?php 
  $above_footer_background_image = get_field('above_footer_background_image', 'option'); 
  $above_footer_text = get_field('above_footer_text', 'option'); 
  $above_footer_button_text = get_field('above_footer_button_text', 'option'); 
?>
<?php if ($above_footer_background_image && $above_footer_text && $above_footer_button_text) { ?>
  <section id="closing" class="closing-section section-dark section">
    <div class="section-background">
      <!-- IMAGE BACKGROUND -->
      <div class="section-background-image parallax" data-stellar-ratio="0.4" style="top: -168.938px;">
        <img src="<?php echo $above_footer_background_image;?>" alt="<?php echo $above_footer_background_image;?>" style="opacity: 0.15; width: 1288px; height: 858.935px; margin-top: -258.968px; margin-left: 0px;">
        
      </div>
    </div>
    <div class="container text-center">
      <h3 class="closing-shout"><?php echo $above_footer_text;?></h3>
      <div class="closing-buttons tada animated done-animation" data-animation="tada"><a href="#header-top" class="anchor-link btn btn-lg btn-primary"><?php echo $above_footer_button_text;?></a></div>
    </div>
  </section>
<?php } ?>