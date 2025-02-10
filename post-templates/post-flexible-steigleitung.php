<?php 
/*
Template Name: Flexible Stegleitung Template
Template Post Type: eigenprodukte
*/

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/page-header' );
		get_template_part( 'template-parts/posts/flexible-steigleitung/layout');
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();