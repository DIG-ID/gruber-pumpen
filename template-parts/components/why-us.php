<section class="section-why-us py-12 md:py-20 xl:py-28 overflow-hidden">
	<div class="theme-container theme-grid relative">
		<div class="col-span-2 md:col-span-4 xl:col-span-12 col-start-1 md:col-start-2 xl:col-start-1 flex flex-col items-center">
			<div class="flex items-center gap-4 invisible fade-in">
				<hr class="border border-orange-shade-1 w-[4.5rem]" />
				<h3 class="text-orange-shade-1 text-center uppercase"><?php the_field( 'why_us_eyebrow', 'options' ); ?></h3>
				<hr class="border border-orange-shade-1 w-[4.5rem]" />
			</div>
			<h2 class="text-title-h2 text-blue-shade-4 py-8 text-center invisible fade-in"><?php the_field( 'why_us_title', 'options' ); ?></h2>
		</div>
		<div class="col-span-2 md:col-span-6 xl:col-span-12">
			<?php
			$strengths = get_field( 'why_us_strengths', 'options' );
			if ( have_rows( 'why_us_strengths', 'options' ) ) :
				?><div class="theme-grid flex flex-wrap gap-y-10 md:gap-y-14 xl:gap-24 mt-12 justify-center"><?php
				while ( have_rows( 'why_us_strengths', 'options' ) ) :
					the_row();
					?>
					<div class="col-span-2 md:col-span-6 xl:col-span-6 flex gap-3 md:gap-6 fade-in">
						<div class="w-[36px] h-[36px] md:w-[55px] md:h-[55px]">
							<svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[36px] h-[36px] md:w-[55px] md:h-[55px]">
								<circle cx="27.5" cy="27.5" r="27.5" fill="#063047" />
								<path d="M22.8621 38L14 29.2085L18.0386 25.2021L22.8621 30.0013L36.9614 16L41 20.0064L22.8621 38Z" fill="#D3594A" />
							</svg>
						</div>
						<div class="flex flex-col max-w-[488px]">
							<h3 class="text-subtitle !text-[1rem] md:!text-[1.25rem] xl:!text-[1.25rem] text-blue-shade-4 text-left fade-in"><?php the_sub_field( 'title' ); ?></h3>
							<p class="text-p--2 py-4 invisible fade-in"><?php the_sub_field( 'description' ); ?></p>
						</div>
					</div>
					<?php
				endwhile;
				?></div><?php
			endif;
			?>
		</div>
	</div>
</section>
