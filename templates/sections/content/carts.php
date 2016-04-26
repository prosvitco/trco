<?php
	$content_carts_title = get_sub_field('content_carts_title');
?>

    <!-- carts -->

<section id="carts" class="benefits-section section-gray section">
	<div class="container">
		<h2 class="section-heading text-center"><?php echo $content_carts_title; ?></h2>
		<div class="benefits-row row">
      <?php if( have_rows('content_carts_list') ): $i=0;?>
        <?php while ( have_rows('content_carts_list') ) : the_row(); ?>
          <?php $i++;
          $content_carts_list_title = get_sub_field('content_carts_list_title');
          $content_carts_list_text = get_sub_field('content_carts_list_text');
          ?>     
					<!-- cart <?php echo $i; ?> -->
					<div class="col-sm-6 col-md-4">
						<div class="benefit">
	             <?php if ($i==1) { ?>
	             <span class="benefit-icon fa fa-bicycle" data-animation="bounceIn"></span>
	             <?php } ?>
	             <?php if ($i==2) { ?>
	             <span class="benefit-icon fa fa-code" data-animation="bounceIn"></span>
	             <?php } ?> 
	             <?php if ($i==3) { ?>
	             <span class="benefit-icon fa fa-code" data-animation="bounceIn"></span>
	             <?php } ?> 
	             <?php if ($i==4) { ?>
	             <span class="benefit-icon fa fa-smile-o" data-animation="bounceIn"></span>
	             <?php } ?> 
	             <?php if ($i==5) { ?>
	             <span class="benefit-icon fa fa-pagelines" data-animation="bounceIn"></span>
	             <?php } ?> 
	             <?php if ($i==6) { ?>
	             <span class="benefit-icon fa fa-paperclip" data-animation="bounceIn"></span>
	             <?php } ?> 							
							<h4 class="benefit-title"><?php echo $content_carts_list_title; ?></h4>
							<p class="benefit-description"><?php echo $content_carts_list_text; ?></p>
						</div>
					</div>
       <?php endwhile; ?>
     <?php endif; ?> 	
		</div>
	</div>
</section>