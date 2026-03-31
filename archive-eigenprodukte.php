<?php
get_header();
do_action( 'before_main_content' );
<main id="main-content">
get_template_part( 'template-parts/archives/product/page-header' );
get_template_part( 'template-parts/archives/product/intro' );
get_template_part( 'template-parts/archives/product/products' );
get_template_part( 'template-parts/archives/product/contact' );
get_template_part( 'template-parts/archives/product/services' );
</main>
do_action( 'after_main_content' );
get_footer();
