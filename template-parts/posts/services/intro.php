<section class="section-service-single-intro pb-12 md:pb-14 xl:pb-14 pt-12 md:pt-20 xl:pt-32 invisible fade-in--noscroll">
	<div class="theme-container theme-grid">

		<div class="col-span-2 md:col-span-6 xl:col-span-7 order-1 md:order-1 xl:order-1">
			<div class="flex items-center gap-4 mb-3 md:mb-4">
				<h4 class="text-orange-shade-1 text-eyebrow"><?php the_field( 'intro_eyebrow' ); ?></h4>
				<hr class="border border-orange-shade-1 w-[4.5rem]" />
			</div>
			<h2 class="text-title-h2 max-w-ful md:max-w-[595px] text-blue-shade-4 mb-7 md:mb-11 xl:mb-0"><?php the_field( 'intro_title' ); ?></h2>
		</div>

		<div class="col-span-2 md:col-span-3 xl:col-span-4 xl:col-start-9 order-3 md:order-4 xl:order-2">
			<?php
			$image = get_field( 'intro_sidebar_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover max-h-[255px]  mb-7 md:mb-0 xl:mb-11' ) );
			endif;
			?>
		</div>

		<div class="col-span-2 md:col-span-6 xl:col-span-7 order-2 md:order-3 xl:order-3">
			<h3 class="text-title-h4 text-blue-shade-4 mb-4 md:mb-7"><?php the_field( 'intro_subtitle' ); ?></h3>
			<p class="text-p--2 mb-10 md:mb-14 xl:mb-0"><?php the_field( 'intro_description' ); ?></p>
		</div>

		<div class="col-span-2 md:col-span-3 xl:col-span-4 xl:col-start-9 order-4 md:order-3">
			<h3 class="text-title-h4 text-blue-shade-4 mb-4 md:mb-7"><?php the_field( 'intro_sidebar_title' ); ?></h3>
			<p class="text-p--2"><?php the_field( 'intro_sidebar_description' ); ?></p>
		</div>

	</div>
</section>
<hr class="separator theme-container mb-8 md:mb-14 xl:mb-16">
