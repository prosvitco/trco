<?php

if( have_rows('sections_all') ):

	while ( have_rows('sections_all') ) : the_row();


		if( get_row_layout() == 'hero_simple' ):
			get_template_part('templates/sections/hero/hero-simple');
			get_template_part('templates/sections/hero/hero-slideshow');
			get_template_part('templates/sections/hero/hero-slider'); /*NOT AVALIABLE*/

			elseif( get_row_layout() == 'hero_features' ): 
			get_template_part('templates/sections/hero/hero-features-and-form');

			get_template_part('templates/sections/hero/hero-layout');
			get_template_part('templates/sections/hero/hero-layout2');
			get_template_part('templates/sections/hero/hero-layouts');

			get_template_part('templates/sections/headline');
			get_template_part('templates/sections/description');
			get_template_part('templates/sections/benefits');
			get_template_part('templates/sections/faq');
			get_template_part('templates/sections/team');
			get_template_part('templates/sections/pricing-section');
			get_template_part('templates/sections/video-section');
			get_template_part('templates/sections/how-it-works');
			get_template_part('templates/sections/portfolio');
			get_template_part('templates/sections/contact2');
			get_template_part('templates/sections/testimonials2');
			get_template_part('templates/sections/two-cols-description');
			//get_template_part('templates/sections/before-footer');


			elseif( get_row_layout() == 'hero_layout_subscribe' ): 
			get_template_part('templates/sections/hero/hero-layout-subscribe');


			elseif( get_row_layout() == 'flexible_content_gallery_section' ): 
				get_template_part('templates/sections/gallery');


			elseif( get_row_layout() == 'simple_testimonials' ): 
				get_template_part('templates/sections/testimonials');


			elseif( get_row_layout() == 'contact_section' ): 
				get_template_part('templates/sections/contact');

		endif;

	endwhile;

endif;

?>