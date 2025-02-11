<section class="section-service-single-intro pb-12 md:pb-14 xl:pb-14 pt-12 md:pt-20 xl:pt-32">
	<div class="theme-container theme-grid items-start">
		<div class="col-span-2 md:col-span-6 xl:col-span-7 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-7 gap-x-6 invisible fade-in--noscroll">
			<div class="col-span-2 md:col-span-6 xl:col-span-7 mb-3 md:mb-4">
				<div class="flex items-center gap-4">
					<h4 class="text-orange-shade-1 text-eyebrow"><?php the_field( 'intro_eyebrow' ); ?></h4>
					<hr class="border border-orange-shade-1 w-[4.5rem]" />
				</div>
			</div>
			<div class="col-span-2 md:col-span-6 xl:col-span-7 mb-7 md:mb-11 xl:mb-24">
				<h2 class="text-title-h2 max-w-80 md:max-w-[475px] text-blue-shade-4"><?php the_field( 'intro_title' ); ?></h2>
			</div>
			<div class="col-span-2 md:col-span-6 xl:col-span-7">
				<h3 class="text-title-h4 text-blue-shade-4 mb-4 md:mb-7"><?php the_field( 'intro_subtitle' ); ?></h3>
				<p class="text-p--2 mb-10 md:mb-14 xl:mb-0"><?php the_field( 'intro_description' ); ?></p>
			</div>
		</div>
		<sidebar class="col-span-2 md:col-span-6 xl:col-start-9 xl:col-span-4 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-4 gap-x-6 invisible fade-in--noscroll">
			<div class="col-span-2 md:col-span-3 xl:col-span-4 md:order-2 xl:order-1 mb-7 md:mb-0 xl:mb-11">
				<?php
				$image = get_field( 'intro_sidebar_image' );
				if ( $image ) :
					echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover max-h-[255px]' ) );
				endif;
				?>
			</div>
			<div class="col-span-2 md:col-span-3 xl:col-span-4 md:order-1 xl:order-2">
				<h3 class="text-title-h4 text-blue-shade-4 mb-4 md:mb-7"><?php the_field( 'intro_sidebar_title' ); ?></h3>
				<p class="text-p--2"><?php the_field( 'intro_sidebar_description' ); ?></p>
			</div>
		</sidebar>
	</div>
</section>
<div class="separator theme-container mb-8 md:mb-14 xl:mb-16">
	<hr>
</div>
