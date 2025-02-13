<section class="contact-section pt-12 md:pt-16 xl:pt-40 pb-11 md:pb-24 xl:pb-28">
	<div class="theme-container theme-grid">

		<div class="col-span-2 md:col-span-6 xl:col-span-6">
			<h2 class="text-title-h2 text-blue-shade-4 mb-10"><?php the_field( 'intro_title' ); ?></h2>
			<p class="text-p--2 mb-12"><?php the_field( 'intro_description' ); ?></p>
			<div class="grid grid-cols-6 md:gap-6 gap-7">
				<div class="col-span-6 md:col-span-3 box box--sm !pr-3">
					<h3 class="text-subtitle text-blue-shade-4 mb-2"><?php the_field( 'address_title' ); ?></h3>
					<p class="text-p--2"><?php the_field( 'address_description' ); ?></p>
				</div>
				<div class="col-span-6 md:col-span-3 box box--sm">
					<h3 class="text-subtitle text-blue-shade-4 mb-2"><?php the_field( 'contacts_title' ); ?></h3>
					<div class="flex flex-col">
						<a class="text-p--2 inline-block" href="tel:">+41 61 511 80 18</a>
						<a class="text-p--2 inline-block underline" href="mailto:">info@gruber-pumpen.ch</a>
					</div>
				</div>
				<div class="col-span-6 box box--sm">
					<h3 class="text-subtitle text-blue-shade-4 mb-2"><?php the_field( 'hours_title' ); ?></h3>
					<p class="text-p--2 mb-4"><?php the_field( 'hours_description' ); ?></p>
				</div>
				<div class="col-span-6">
					<h3 class="text-title-h4 text-blue-shade-4 mb-2"><?php esc_html_e( 'Folgen Sie uns auf', 'gruber-pumpen' ) ?></h3>
					<?php do_action( 'socials', 'light' ); ?>
				</div>
			</div>
		</div>
		<div class="col-span-2 md:col-span-5 xl:col-start-8 xl:col-span-5 box box--xl xl:-ml-6 mt-24 xl:mt-0">
			<h3 class="text-title-h3 text-blue-shade-4 mb-4 xl:mb-10"><?php the_field( 'contact_form_title' ); ?></h3>
			<?php
			$form_sc = get_field( 'contact_form_form' );
			if ( $form_sc ):
				echo do_shortcode( $form_sc );
			endif;
			?>
		</div>
	</div>

</section>
<section class="map-wrapper">
	<?php
	$location = get_field( 'map' );
	if ( $location ) :
		?>
		<div class="acf-map w-full h-[474px] xl:h-[714px]" data-zoom="16">
			<div class="marker" data-lat="<?php echo esc_attr( $location['lat'] ); ?>" data-lng="<?php echo esc_attr( $location['lng'] ); ?>"></div>
		</div>
		<?php
	endif;
	?>
</section>
