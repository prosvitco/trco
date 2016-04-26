<?php
/**
 * Template Name: Content Template
 */
?>
<!-- ===========================================================
														Content 
	=========================================================== -->
<?php if( have_rows('content_all') ):
	while ( have_rows('content_all') ) : the_row();


if( get_row_layout() == 'content_simple_text' ):
	get_template_part('templates/sections/content/simple-text');

elseif( get_row_layout() == 'content_about' ):
	get_template_part('templates/sections/content/about');

elseif( get_row_layout() == 'two_cols' ):
	get_template_part('templates/sections/content/two-cols');

elseif( get_row_layout() == 'content_carts' ):
	get_template_part('templates/sections/content/carts');

elseif( get_row_layout() == 'content_faq' ):
	get_template_part('templates/sections/content/faq');

elseif( get_row_layout() == 'content_team' ):
	get_template_part('templates/sections/content/team');

elseif( get_row_layout() == 'content_video' ):
	get_template_part('templates/sections/content/video');

elseif( get_row_layout() == 'content_portfolio' ):
	get_template_part('templates/sections/content/portfolio');

elseif( get_row_layout() == 'content_pricing' ):
	get_template_part('templates/sections/content/pricing');

elseif( get_row_layout() == 'how_it_works' ):
	get_template_part('templates/sections/content/how-it-works');

endif;
endwhile;
endif; ?>
