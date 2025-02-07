<?php
/**
 * Template Name: Partner & Produkte Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/page-header' );
			get_template_part( 'template-parts/pages/partner-&-produkte/partner-products' );
			get_template_part( 'template-parts/pages/partner-&-produkte/own-products' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
