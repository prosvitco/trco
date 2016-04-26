<?php
/**
 * Template Name: Hero Template
 */
?>
<?php

if( have_rows('hero_sections') ):

	while ( have_rows('hero_sections') ) : the_row();


if( get_row_layout() == 'hero_simple' ):
	get_template_part('templates/sections/hero/hero-simple');

elseif( get_row_layout() == 'hero_slideshow' ):
	get_template_part('templates/sections/hero/hero-slideshow');

elseif( get_row_layout() == 'hero_features' ): 
	get_template_part('templates/sections/hero/hero-features-and-form');

elseif( get_row_layout() == 'hero_layout_subscribe' ): 
	get_template_part('templates/sections/hero/hero-layout-subscribe');

elseif( get_row_layout() == 'hero_layout_hi' ): 
	get_template_part('templates/sections/hero/hero-layout-hi');

elseif( get_row_layout() == 'hero_layout_classic' ): 
	get_template_part('templates/sections/hero/hero-layout-classic');


endif;

endwhile;

endif;

?>
