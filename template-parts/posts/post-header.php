<?php
$intro_image_id = get_field( 'page_header_image' );
if ( $intro_image_id ) :
	?><section class="page-header page-header--background-image" style="background-image: url(<?php echo esc_url( wp_get_attachment_image_url( $intro_image_id, 'full' ) ); ?>);"><span class="absolute inset-0 bg-overlay"></span><span class="absolute inset-0 bg-overlay-2"></span><?php
else :
	?>
	<section class="page-header">
	<?php
endif;
?>

	<div class="theme-container relative z-10">
		<h1 class="page-header--title text-blue-shade-4 xl:py-4"><?php the_field( 'page_header_title' ) ?></h1>
		<?php do_action( 'breadcrumbs' ); ?>
	</div>
</section>
