<section class="section-services py-8 xl:py-40">
	<div class="theme-container theme-grid">
		<!-- Services -->
		<div class="col-span-2 md:col-span-6 xl:col-span-12 flex flex-col">
			<div class="flex items-center gap-4 invisible fade-in">
				<?php
				$services_eyebrow = get_field('services_eyebrow');
				if ($services_eyebrow): ?>
					<h4 class="text-orange-shade-1 text-center text-eyebrow"><?php echo $services_eyebrow; ?></h4>
				<?php endif; ?>
				<hr class="border border-orange-shade-1 w-[4.5rem]" />
			</div>
			<div class="flex items-center justify-between invisible fade-in">
				<?php
				$services_title = get_field('services_title');
				if ($services_title): ?>
					<h2 class="text-title-h2 text-blue-shade-4 py-8 invisible fade-in max-w-[500px]">
						<?php echo $services_title; ?>
					</h2>
				<?php endif; ?>

				<?php
				$services_link = get_field('services_link');
				if ($services_link):
					$services_link_target = $services_link['target'] ? $services_link['target'] : '_self';
					?>
					<a class="btn btn--secondary uppercase inline-block" href="<?php echo esc_url($services_link['url']); ?>"
						target="<?php echo esc_attr($services_link_target); ?>"><?php echo esc_html($services_link['title']); ?></a>
				<?php endif; ?>
			</div>
		</div>
		<?php
		$services_args = array(
			'post_type'   => 'service',
			'post_status' => 'publish',
			'nopaging'    => true,
			'orderby'     => 'date',
			'order'       => 'ASC',
		);

		$services_query = new WP_Query($services_args);
		if ($services_query->have_posts()) :
			while ($services_query->have_posts()) :
				$services_query->the_post();
				?>
				<div class="col-span-1 md:col-span-3 xl:col-span-3 fade-in md:bg-white md:px-9 xl:px-7 pt-6 pb-10 md:pt-10 md:pb-16 rounded-3xl">
					<div class="min-h-[55px]">
						<?php
						$image = get_field('icon');
						if ($image):
							echo wp_get_attachment_image($image, 'full', false, array('class' => 'fade-in'));
						endif;
						?>
					</div>
					<h2 class="text-title-h4 text-blue-shade-4 text-left mt-3 md:mt-6 mb-5 md:mb-6 fade-in"><?php the_field('title'); ?>
					</h2>
					<p class="text-p--2 invisible fade-in"><?php the_field('text'); ?></p>
				</div>
			<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>
	</div>
</section>