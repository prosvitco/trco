<?php
	$content_faq_title = get_sub_field('content_faq_title');
?>

    <!-- faq -->

			<section id="faq" class="faq-section section">
				<div class="container">
					<h2 class="section-heading text-center"><?php echo $content_faq_title; ?></h2>
					<div class="faq-row row">
			      <?php if( have_rows('content_faq_list') ): $i=0;?>
			        <?php while ( have_rows('content_faq_list') ) : the_row(); ?>
			          <?php $i++;
			          $content_faq_list_title = get_sub_field('content_faq_list_title');
			          $content_faq_list_text = get_sub_field('content_faq_list_text');
			          ?>     
									<div class="col-md-6">
										<div class="faq-item">
											<span class="faq-item-icon fa fa-question-circle"></span>
											<h4 class="faq-item-heading"><?php echo $content_faq_list_title; ?></h4>
											<div class="faq-item-text"><?php echo $content_faq_list_text; ?></div>
										</div>
									</div>					
			       <?php endwhile; ?>
			     <?php endif; ?> 	
					</div>
				</div>
			</section>
