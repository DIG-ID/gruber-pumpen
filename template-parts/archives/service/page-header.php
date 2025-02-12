<?php
$intro_image_id = get_field( 'services_page_header_image', 'option' );
if ( $intro_image_id ) :
	?><section class="page-header page-header--background-image" style="background-image: url(<?php echo esc_url( wp_get_attachment_image_url( $intro_image_id, 'full' ) ); ?>);"><span class="absolute inset-0 bg-overlay"></span><span class="absolute inset-0 bg-overlay-2"></span><?php
else :
	?>
	<section class="page-header">
	<?php
endif;
?>

	<div class="theme-container relative z-10">
		<h1 class="page-header--title xl:py-4"><?php the_field( 'services_page_header_title', 'option' ) ?></h1>
		<?php do_action( 'breadcrumbs' ); ?>
	</div>
</section>
