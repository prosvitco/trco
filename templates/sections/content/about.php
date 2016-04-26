<?php
	$content_about_title = get_sub_field('content_about_title');
	$content_about_description = get_sub_field('content_about_description');
	$content_about_text = get_sub_field('content_about_text');
	$content_about_image = get_sub_field('content_about_image');
?>

    <!-- about -->

<section id="about" class="about-section section">
	<div class="container">
		<h2 class="section-heading text-center"><?php echo $content_about_title; ?></h2>
		<div class="about-row row">
			<div class="about-image col-md-6" data-animation="fadeIn">
				<img src="<?php echo $content_about_image; ?>" alt="Description Image">
			</div>
			<div class="about-text col-md-6">
				<p class="lead"><?php echo $content_about_description; ?></p>
				<p><?php echo $content_about_text; ?></p>
				<ul class="icon-list">
        <?php if( have_rows('content_about_list') ): $i=0;?>
          <?php while ( have_rows('content_about_list') ) : the_row(); ?>
            <?php $i++;
            $content_about_list_title = get_sub_field('content_about_list_title');
            $content_about_list_text = get_sub_field('content_about_list_text');
            ?>         
            <li>
             <?php if ($i==1) { ?>
             <span class="icon-list-icon fa fa-hand-o-up" data-animation="bounceIn"></span>
             <?php } ?>
             <?php if ($i==2) { ?>
             <span class="icon-list-icon fa fa-heart-o" data-animation="bounceIn"></span>
             <?php } ?> 
             <?php if ($i==3) { ?>
             <span class="icon-list-icon fa fa-lightbulb-o" data-animation="bounceIn"></span>
             <?php } ?>       
             <h4 class="icon-list-title"><?php echo $content_about_list_title; ?></h4>
						<p><?php echo $content_about_list_text; ?></p>
           </li>
         <?php endwhile; ?>
       <?php endif; ?> 							
				</ul>
			</div>
		</div>
	</div>
</section>