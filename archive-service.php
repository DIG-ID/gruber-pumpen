<?php
get_header();
do_action( 'before_main_content' );
get_template_part( 'template-parts/archives/service/page-header' );
get_template_part( 'template-parts/archives/service/content' );
get_template_part( 'template-parts/archives/service/questions' );
do_action( 'after_main_content' );
get_footer();
