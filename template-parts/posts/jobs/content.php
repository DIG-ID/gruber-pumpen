<section class="section-jobs-content bg-brown-shade-4 text-brown-shade-2 pb-28">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-6 px-7 lg:px-24 py-16 lg:py-28 bg-white rounded-[20px] self-start order-2 lg:order-1">
				<p class="text-body--serif text-brown-shade-4 !font-semibold mb-11 lg:mb-28 !leading-8"><?php the_field( 'single_jobs_note_1', 'options' ); ?></p>
				<p class="text-body--serif text-brown-shade-4 !leading-8 "><?php the_field( 'single_jobs_note_2', 'options' ); ?></p>
			</div>
			<div class="col-span-2 lg:col-span-6 px-7 lg:px-24 py-16 lg:py-28 bg-white rounded-[20px] order-1 lg:order-2 mb-8 lg:mb-0">
				<h1 class="text-title text-brown-shade-4 mb-10"><?php the_title(); ?></h1>
				<div class="section-jobs-content-wrapper">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
