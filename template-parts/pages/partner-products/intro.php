<section class="section-own-products-intro py-14 md:py-16 lg:py-24">
	<div class="theme-container theme-grid">
		<div class="col-span-2 md:col-span-6 lg:col-span-5">
			<div class="flex items-center gap-4 mb-4">
				<h4 class="text-orange-shade-1"><?php the_field( 'intro_eyebrow' ); ?></h4>
				<hr class="border border-orange-shade-1  w-[4.5rem]" />
			</div>
			<h2 class="text-title-h2 text-blue-shade-4"><?php the_field( 'intro_title' ); ?></h2>
		</div>
		<div class="col-span-2 md:col-span-6 lg:col-start-7 lg:col-span-6">
			<p class="text-p--2"><?php the_field( 'intro_description' ); ?></p>
		</div>
	</div>
</section>
