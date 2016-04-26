<?php
/**
 * Template Name: Testimonials Template
 */
?>

<?php if( have_rows('testimonials_all') ):
	while ( have_rows('testimonials_all') ) : the_row();


if( get_row_layout() == 'testimonials_slider' ):
	get_template_part('templates/sections/testimonials/testimonials-slider');

elseif( get_row_layout() == 'testimonials' ):
	get_template_part('templates/sections/testimonials/testimonials');


endif;
endwhile;
endif;?>