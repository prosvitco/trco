<?php
$content_pricing_title = get_sub_field('content_pricing_title');
$content_pricing_subtitle = get_sub_field('content_pricing_subtitle');
?>

<!-- pricing -->		

<section id="pricing" class="pricing-section section">
	<div class="container">
		<h2 class="section-heading text-center"><?php echo $content_pricing_title; ?></h2>
		<div class="row text-center">
			<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<p><?php echo $content_pricing_subtitle; ?></p>
			</div>
		</div>
		<!-- PRICING TABLE -->
		<div class="pricing-table row">
			<?php if( have_rows('content_pricing_list') ): $i=0;?>
				<?php while ( have_rows('content_pricing_list') ) : the_row(); ?>
					<?php $i++;

					$content_pricing_list_title = get_sub_field('content_pricing_list_title');
					$content_pricing_list_price = get_sub_field('content_pricing_list_price');
					$content_pricing_list_price_decimal = get_sub_field('content_pricing_list_price_decimal');
					$content_pricing_list_subprice = get_sub_field('content_pricing_list_subprice');
					$content_pricing_list_popular = get_sub_field('content_pricing_list_popular');
					?>     
					<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0" data-animation="fadeInUp">
						<div class="pricing-package 
						<?php if( $content_pricing_list_popular ) { ?>
						<?php echo 'pricing-package-featured'; ?>
						<?php } else {  } ?>
						">
						<div class="pricing-package-header">
							<h4 class="price-title"><?php echo $content_pricing_list_title; ?></h4>
							<div class="price">
								<span class="price-currency">$</span>
								<span class="price-number"><?php echo $content_pricing_list_price; ?></span>
								<span class="price-decimal"><?php echo $content_pricing_list_price_decimal; ?></span>
							</div>
							<div class="price-description"><?php echo $content_pricing_list_subprice; ?></div>
							<?php if( $content_pricing_list_popular ) { ?><div class="price-featured">
							<?php echo $content_pricing_list_popular; ?></div>
							<?php } else {  } ?>
						</div>
						<ul class="pricing-package-items">
							<?php if( have_rows('content_pricing_list_package_items') ): $i=0;?>
								<?php while ( have_rows('content_pricing_list_package_items') ) : the_row(); ?>
									<?php $content_pricing_list_package_item = get_sub_field('content_pricing_list_package_item'); ?>
									<?php $content_pricing_list_package_item_shadow = get_sub_field('content_pricing_list_package_item_shadow'); ?>
									<li>
										<?php if( $content_pricing_list_package_item_shadow ) { ?><del>
										<?php echo $content_pricing_list_package_item; ?></del>
										<?php } else { echo $content_pricing_list_package_item; } ?>
									</li>

								<?php endwhile; ?>
							<?php endif; ?> 									
						</ul>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?> 	
	</div>
</div>
</section>