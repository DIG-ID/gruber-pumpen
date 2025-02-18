<?php 
/*
Template Name: PE- Behalter Template
Template Post Type: eigenprodukte
*/

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/page-header' );
		get_template_part( 'template-parts/posts/pe-behalter/layout');
		?>
		<div class="theme-container py-12">
			<a class="font-outfit font-medium text-lg text-blue-shade-5" href="<?php echo esc_url( get_post_type_archive_link( 'eigenprodukte' ) ); ?>"><?php esc_html_e( '< Zurück zur Übersicht', 'gruber-pumpen' ); ?></a>
		</div>
		<?php
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
