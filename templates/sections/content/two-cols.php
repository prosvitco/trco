<?php
	$content_two_cols_title = get_sub_field('content_two_cols_title');
	$content_two_cols_description = get_sub_field('content_two_cols_description');
	$content_two_cols_image = get_sub_field('content_two_cols_image');
?>

    <!-- two-cols -->

<section id="two-cols-description" class="two-cols-description-section section-accent section">
    <div class="container-fluid two-cols-description-row">111111111111111111111111
        <div class="two-cols-description-text" data-animation="fadeInLeft">
            <div class="two-cols-description-text-inner">
                <h2 class="section-heading text-left"><?php echo $content_two_cols_title; ?></h2>
                <p><?php echo $content_two_cols_description; ?></p>
                <ul class="nice-list">
                <?php if( have_rows('content_two_cols_list') ): $i=0;?>
                  <?php while ( have_rows('content_two_cols_list') ) : the_row(); ?>
                    <?php $i++;
                    $content_two_cols_list_text = get_sub_field('content_two_cols_list_text');
                    ?>         
                    <li><?php echo $content_two_cols_list_text; ?></li>
                 <?php endwhile; ?>
               <?php endif; ?> 
                </ul>
            </div>
        </div>
        <div class="two-cols-description-image" data-animation="fadeInRight">
            <img src="<?php echo $content_two_cols_image; ?>" alt="">
        </div>
    </div>
</section>