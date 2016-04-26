<section class="band band--light-gray light-gray-sm">
  <div class="container container--800">
    <ul class="list-inline">
      <?php if (get_sub_field('flexible_content_4_section_media_use_default')) { ?>
        <?php if( have_rows('content_4_media', 'option') ): ?>
          <?php while ( have_rows('content_4_media', 'option') ) : the_row(); ?>
            <?php
            $content_4_media_img = get_sub_field('content_4_media_img', 'option');
            $content_4_media_img_alt = get_post_meta($content_4_media_img , '_wp_attachment_image_alt', true);
            $content_4_media_text = wpautop(get_sub_field('content_4_media_text', 'option'));
            ?>
            <li>
              <figure class="media-left">
                <img class="media-object" src="<?php echo wp_get_attachment_image_src( $content_4_media_img, 'thumbnail' )[0] ?>" alt="<?php echo $content_4_media_img_alt; ?>">
              </figure>
              <?php echo $content_4_media_text ?>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      <?php } else { ?>
        <?php if( have_rows('flexible_content_4_section_media') ): ?>
          <?php while ( have_rows('flexible_content_4_section_media') ) : the_row(); ?>
            <?php
            $content_4_media_img = get_sub_field('flexible_content_4_section_media_img');
            $content_4_media_img_alt = get_post_meta($content_4_media_img , '_wp_attachment_image_alt', true);
            $content_4_media_text = get_sub_field('flexible_content_4_section_media_text', false, false);
            ?>
            <li>
              <figure class="media-left">
                <img class="media-object" src="<?php echo wp_get_attachment_image_src( $content_4_media_img, 'thumbnail' )[0] ?>" alt="<?php echo $content_4_media_img_alt; ?>">
              </figure>
              <p class="media-body"><?php echo $content_4_media_text ?></p>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      <?php } ?>



    </ul>
  </div>
</section>