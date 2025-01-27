<section class="section-specialists py-28">
	<div class="theme-container theme-grid">
		<div class="col-span-2 md:col-span-6 order-2 xl:order-1">
			<div class="flex flex-col xl:justify-between xl:h-full">
				<h2 class="text-title-h3 text-blue-shade-4 mb-4 md:mb-12 xl:mb-0 invisible fade-in"><?php the_field( 'specialist_title' ); ?></h2>
				<p class="text-p--2 invisible fade-in"><?php the_field( 'specialist_description' ); ?></p>
			</div>
		</div>
		<div class="col-span-2 md:col-span-4 xl:col-span-5 xl:col-start-8 order-1 xl:order-2 mb-8 md:mb-16 xl:mb-0">
			<?php
			$image = get_field( 'specialist_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'max-w-full w-full h-auto object-cover rounded-[1.875rem] overlflow-hidden invisible fade-in' ) );
			endif;
			?>
		</div>
	</div>
</section>
