<?php
	$content_team_title = get_sub_field('content_team_title');
?>

    <!-- faq -->

			<section id="team" class="team-section section">
				<div class="container-fluid">					
					<h2 class="section-heading text-center"><?php echo $content_team_title; ?></h2>
					<div class="team-row row">					
			      <?php if( have_rows('content_team_list') ): $i=0;?>
			        <?php while ( have_rows('content_team_list') ) : the_row(); ?>
			          <?php $i++;
			          $content_team_list_photo = get_sub_field('content_team_list_photo');
			          $content_team_list_name = get_sub_field('content_team_list_name');
			          $content_team_list_position = get_sub_field('content_team_list_position');
			          $content_team_list_description = get_sub_field('content_team_list_description');
			          ?>     

							<div class="col-sm-6 col-md-4 col-lg-2" data-animation="fadeIn">
								<div class="team-member <?php if($i%2==0) echo 'even'; ?>">
									<img class="team-member-picture" src="<?php echo $content_team_list_photo; ?>" alt="">
									<div class="team-member-text">
										<h4 class="team-member-name"><?php echo $content_team_list_name; ?></h4>
										<div class="team-member-position"><?php echo $content_team_list_position; ?></div>
										<p class="team-member-description"><?php echo $content_team_list_description; ?></p>
									</div>
								</div>
							</div>

			       <?php endwhile; ?>
			     <?php endif; ?> 	
					</div>
				</div>
			</section>			