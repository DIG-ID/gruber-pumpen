<section class="section-services bg-blue-shade-3 relative overflow-hidden">
	<h2 class="text-subtitle text-blue-shade-0 absolute top-24 left-1/2 -translate-x-1/2 z-20"><?php the_field( 'services_title', 'options' ); ?></h2>
	<div class="services-teaser flex">
		<?php
		if ( have_rows( 'services_list', 'options' ) ) :

			while ( have_rows( 'services_list', 'options' ) ) :
				the_row();
				$image = get_sub_field( 'image' );
				if ( $image ) :
					$image = wp_get_attachment_image_url( $image, 'full' );
				else :
					$image = 'https://picsum.photos/800/1000?random=1';
				endif;
				?>

				<?php ?>
				<div class="service-box bg-no-repeat bg-center" style="background-image: url(<?php echo esc_url( $image ); ?>);">
					<div class="z-10">
						<h2 class="font-poppins font-normal text-3xl text-white tracking-[2.56px] uppercase text-center mb-8"><?php the_sub_field( 'title' ); ?></h2>
						<p class="font-poppins font-normal text-base text-white leading-7 tracking-[0.96px] text-center"><?php the_sub_field( 'description' ); ?></p>
					</div>
				</div>
				<?php
			endwhile;
		endif;
		?>
	</div>
</section>
