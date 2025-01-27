<?php
/**
 * Template Name: About Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/page-header' );
			get_template_part( 'template-parts/components/why-us' );
			get_template_part( 'template-parts/pages/about/specialist' );
			get_template_part( 'template-parts/pages/about/team' );
			get_template_part( 'template-parts/pages/about/opinion' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
