<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/posts/post-header' );
				get_template_part( 'template-parts/posts/services/intro' );
				get_template_part( 'template-parts/posts/services/content' );
				get_template_part( 'template-parts/posts/services/gallery'  );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
