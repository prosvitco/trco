<?php
	$content_how_it_works_title = get_sub_field('content_how_it_works_title');
?>

<!-- portfolio -->		
<section id="how-it-works" class="how-it-works-section section">
	<div class="container-fluid">
		<h2 class="section-heading text-center"><?php echo $content_how_it_works_title; ?></h2>
		<div class="hiw-row row">
		<?php if( have_rows('content_how_it_works_list') ): $i=0;?>
		  <?php while ( have_rows('content_how_it_works_list') ) : the_row(); ?>
		    <?php $i++;
		    $content_how_it_works_list_image = get_sub_field('content_how_it_works_list_image');
		    $content_how_it_works_list_title = get_sub_field('content_how_it_works_list_title');
		    $content_how_it_works_list_text = get_sub_field('content_how_it_works_list_text');
		    ?>     
					<div class="col-sm-6 col-md-3" data-animation="fadeIn">
						<div class="hiw-item">
							<img class="hiw-item-picture" src="<?php echo $content_how_it_works_list_image; ?>" alt="">
							<div class="hiw-item-text">
								<span class="hiw-item-icon"><?php echo $i; ?></span>
								<h4 class="hiw-item-title"><?php echo $content_how_it_works_list_title; ?></h4>
								<p class="hiw-item-description"><?php echo $content_how_it_works_list_text; ?></p>
							</div>
						</div>
					</div>
		   <?php endwhile; ?>
		 <?php endif; ?> 	
		</div>
	</div>
</section>