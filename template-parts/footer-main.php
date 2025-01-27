<footer class="footer-main">
	<!-- Write US -->
	<section class="flex flex-col lg:flex-row justify-between gap-12 items-start lg:items-center bg-blue-shade-3 p-16">
		<div class="flex flex-col gap-6">
			<div class="flex items-center gap-4 ">
				<h4 class="text-orange-shade-1"><?php the_field('footer_write_us_subtitle', 'options'); ?></h4>
				<hr class="border border-orange-shade-1  w-[4.5rem]" />
			</div>
			<h2 class="text-white text-5xl font-outfit font-bold">
				<?php the_field('footer_write_us_title', 'options'); ?>
			</h2>
		</div>

		<div class="flex flex-col md:flex-row gap-6">
			<?php
			$services_link = get_field('footer_write_us_services', 'options');
			if ($services_link):
				$services_url = $services_link['url'];
				$services_title = $services_link['title'];
				$services_target = $services_link['target'] ? $link['target'] : '_self';
				?>
				<a class="btn btn--primary" href="<?php echo esc_url($services_url); ?>"
					target="<?php echo esc_attr($services_target); ?>"><?php echo esc_html($services_title); ?></a>
				<?php
			endif;
			?>
			<?php
			$write_us_link = get_field('footer_write_us_link', 'options');
			if ($write_us_link):
				$write_us_url = $services_link['url'];
				$write_us_title = $services_link['title'];
				$write_us_target = $services_link['target'] ? $link['target'] : '_self';
				?>
				<a class="btn btn--transparent" href="<?php echo esc_url($write_us_url); ?>"
				target="<?php echo esc_attr($write_us_target); ?>"><?php echo esc_html($write_us_title); ?></a>
				<?php
			endif;
			?>

		</div>
	</section>

	<?php if (is_front_page()): ?>

		<section class="testimonials-section py-40 px-12 bg-blue-shade-0">
			<div class="flex flex-col gap-6">
				<div class="flex items-center justify-center gap-4 invisible fade-in">
					<hr class="border border-orange-shade-1 w-[4.5rem]" />
					<?php
					$testimonials_eyebrow = get_field('footer_testimonials_eyebrow', 'options');
					if ($testimonials_eyebrow): ?>
						<h4 class="text-orange-shade-1 text-center uppercase"><?php echo $testimonials_eyebrow; ?></h4>
					<?php endif; ?>
					<hr class="border border-orange-shade-1  w-[4.5rem]" />
				</div>
				<?php
				$testimonials_title = get_field('footer_testimonials_title', 'options');
				if ($testimonials_title): ?>
					<h2 class="text-title-h2 text-center text-blue-shade-4 invisible fade-in">
						<?php echo $testimonials_title; ?>
					</h2>
				<?php endif; ?>
			</div>

			<div class="flex gap-8 justify-center mt-24">
				<?php
				$testimonials = get_field('footer_testimonials_list', 'options');
				foreach ($testimonials as $testimonial):
					$name = $testimonial['name'];
					$role = $testimonial['role'];
					$review = $testimonial['testimonial'];
					if ($testimonial):
						?>
						<div class="testimonials-card flex flex-col justify-between px-12 py-6 invisible fade-in">
							<p
								class="text-blue-shade-2 p-4 [leading-trim:both] [text-edge:cap] font-dm-sans text-base italic font-normal leading-[26px]">
								<?php echo $review ?>
							</p>
							<div>
								<h4 class="text-title-h4 mt-4 text-blue-shade-4">
									<?php echo $name ?>
								</h4>
								<p class="text-blue-shade-2 text-sm font-normal leading-[24px]">
									<?php echo $role ?>
								</p>
							</div>
						</div>
						<?php
					endif;
				endforeach;
				?>
			</div>
		</section>
	<?php endif; ?>
	<section
		class="grid grid-rows-4 grid-cols-1 md:grid-rows-3 md:grid-cols-2 lg:grid-rows-1 lg:grid-cols-3 border-b border-orange-shade-1 bg-blue-shade-4">

		<!-- Logo && Socials -->
		<div
			class="top-logo-footer row-start-1 row-span-1 col-span-2 lg:order-2 lg:col-span-1 lg:max-h-auto border-b lg:border-b-0 flex flex-col gap-8 items-center md:p-8 lg:p-16 xl:px-28 lg:border-x border-orange-shade-1 lg:mx-auto">
			<div class="flex items-center my-auto">
				<?php do_action('footer_theme_logo'); ?>
			</div>

			<p class="hidden lg:inline-block text-white mt-16"><?php the_field('footer_any_questions', 'options') ?></p>
			<a class="hidden lg:inline-flex btn btn--primary">
				<?php esc_html_e('KONTAKTIEREN SIE UNS', 'gruber-pumpen'); ?>
			</a>
			<div class="hidden lg:inline-block">
				<?php do_action('socials'); ?>
			</div>
		</div>

		<!-- Menu -->
		<div
			class="border-b lg:border-b-0 border-orange-shade-1 row-start-2 md:row-start-2 md:row-span-2 md:col-span-1 lg:row-start-1 lg:order-1 lg:col-span-1 lg:row-span-1 flex flex-col py-8 md:py-20 pl-20">

			<h4 class="text-orange-shade-1 border-b-2 border-orange-shade-1 text-xl font-bold max-w-[4rem] pb-4 mb-6">
				<?php the_field('footer_menu_title', 'options'); ?>
			</h4>
			<nav>
				<?php
				wp_nav_menu([
					'theme_location' => 'footer-menu',
					'menu_id' => 'footer-menu',
					'container_class' => 'footer-menu-container pt-0',
					'menu_class' => 'footer-menu',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb' => '__return_false',
				]);
				?>
			</nav>

		</div>

		<!-- Contact -->
		<div
			class="contact-section border-b md:border-l lg:border-none border-orange-shade-1 row-start-3 md:row-start-2 md:row-span-2 md:col-span-1 lg:row-span-1 lg:row-start-1 lg:order-3 lg:col-span-2 flex flex-col py-8 md:py-20 pl-20 pr-4">
			<h3 class="text-orange-shade-1 border-b-2 border-orange-shade-1 text-xl font-bold max-w-[4rem] pb-4 mb-6">
				<?php the_field('footer_contact_title', 'options') ?>
			</h3>
			<?php the_field('footer_contact_address', 'options') ?>
			<p class="text-white mt-6"><?php the_field('footer_contact_phone', 'options') ?></p>
			<p class="text-white"><?php the_field('footer_contact_email', 'options') ?></p>
		</div>

		<!-- Mobile socials -->
		<div class="row-span-1 col-span-2 gap-4 p-16 lg:hidden flex flex-col justify-center items-center">
			<p class=" text-white"><?php the_field('footer_any_questions', 'options') ?></p>
			<a class="bot-header btn btn--primary">
				<?php esc_html_e('KONTAKTIEREN SIE UNS', 'gruber-pumpen'); ?>
			</a>
			<div class="lg:hidden">
				<?php do_action( 'socials' ); ?>
			</div>
		</div>


	</section>

	<section class="bg-blue-shade-4">
		<p class="p-4 text-center font-dm text-xs text-white"><?php the_field('footer_copyright', 'options') ?></p>
	</section>
</footer>