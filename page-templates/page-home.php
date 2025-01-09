<?php
/**
 * Template Name: Home Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/home/intro');
		get_template_part( 'template-parts/pages/home/about-us');
		get_template_part( 'template-parts/pages/home/why-us');
		get_template_part( 'template-parts/pages/home/services-and-brands');
		get_template_part( 'template-parts/pages/home/info-bar');
		get_template_part( 'template-parts/pages/home/trainings');
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
