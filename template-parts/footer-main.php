<footer class="footer-main">
	<!-- Write US -->
	<section class="contact-bar bg-blue-shade-3">
		<div class="theme-container theme-grid pt-14 pb-16 flex flex-row items-center justify-between">
			<div class="col-span-2 md:col-span-6 xl:col-span-6 mb-10 xl:mb-0">
				<div class="flex items-center mb-3">
					<h4 class="text-orange-shade-1"><?php the_field('footer_write_us_subtitle', 'options'); ?></h4>
					<hr class="border border-orange-shade-1  w-[4.5rem]" />
				</div>
				<h2 class="text-white text-5xl font-outfit font-bold">
					<?php the_field('footer_write_us_title', 'option'); ?>
				</h2>
			</div>

			<div class="col-span-2 md:col-span-6 xl:col-span-6 xl:text-right">
				<?php
				$services_link = get_field('footer_write_us_services', 'option');
				if ($services_link):
					$services_url = $services_link['url'];
					$services_title = $services_link['title'];
					$services_target = $services_link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn btn--primary mr-6" href="<?php echo esc_url($services_url); ?>"
						target="<?php echo esc_attr($services_target); ?>"><?php echo esc_html($services_title); ?></a>
					<?php
				endif;
				?>
				<?php
				$write_us_link = get_field('footer_write_us_link', 'option');
				if ($write_us_link):
					$write_us_url = $write_us_link['url'];
					$write_us_title = $write_us_link['title'];
					$write_us_target = $write_us_link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn btn--transparent" href="<?php echo esc_url($write_us_url); ?>"
					target="<?php echo esc_attr($write_us_target); ?>"><?php echo esc_html($write_us_title); ?></a>
					<?php
				endif;
				?>

			</div>
		</div>
	</section>

	<?php if (is_front_page()): ?>

		<section class="testimonials-section py-40 bg-blue-shade-0">
			<div class="theme-container theme-grid flex flex-col gap-6">
				<div class="col-span-2 md:col-span-6 xl:col-span-12 flex items-center justify-center gap-4 invisible fade-in">
					<hr class="border border-orange-shade-1 w-[4.5rem]" />
					<?php
					$testimonials_eyebrow = get_field('footer_testimonials_eyebrow', 'options');
					if ($testimonials_eyebrow): ?>
						<h4 class="text-orange-shade-1 text-center uppercase"><?php echo $testimonials_eyebrow; ?></h4>
					<?php endif; ?>
					<hr class="border border-orange-shade-1  w-[4.5rem]" />
				</div>
				<div class="col-span-2 md:col-span-6 xl:col-span-12">
					<?php
					$testimonials_title = get_field('footer_testimonials_title', 'options');
					if ($testimonials_title): ?>
						<h2 class="text-title-h2 text-center text-blue-shade-4 invisible fade-in">
							<?php echo $testimonials_title; ?>
						</h2>
					<?php endif; ?>
				</div>
			</div>

			<div class="theme-container theme-grid flex justify-center mt-24">
				<?php
				$testimonials = get_field('footer_testimonials_list', 'options');
				foreach ($testimonials as $testimonial):
					$name = $testimonial['name'];
					$role = $testimonial['role'];
					$review = $testimonial['testimonial'];
					if ($testimonial):
						?>
						<div class="testimonials-card col-span-2 md:col-span-6 xl:col-span-6 px-12 py-6 mb-12 xl:mb-14 invisible fade-in">
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
	<section class="border-b border-orange-shade-1 bg-blue-shade-4">
		<div class="theme-container grid grid-cols-2 md:grid-cols-6 xl:grid-cols-12 xl:min-h-[439px]">
		<!-- Logo && Socials -->
			<div class="top-logo-footer w-full col-span-2 md:col-span-6 xl:col-span-4 order-1 xl:order-2 border-b lg:border-b-0 flex flex-col justify-evenly items-center lg:border-x border-orange-shade-1 lg:mx-auto">
				<div class="flex items-center">
					<?php do_action('footer_theme_logo'); ?>
				</div>

				<p class="hidden xl:inline-block text-white"><?php the_field('footer_any_questions', 'options') ?></p>
				<a class="!hidden xl:!inline-flex btn btn--primary">
					<?php esc_html_e('KONTAKTIEREN SIE UNS', 'gruber-pumpen'); ?>
				</a>
				<div class="hidden xl:inline-block">
					<?php do_action('socials'); ?>
				</div>
			</div>

			<!-- Menu -->
			<div
				class="border-b lg:border-b-0 border-orange-shade-1 col-span-2 md:col-span-3 xl:col-span-4 order-2 xl:order-1 flex flex-col py-8 md:py-20">

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
				class="contact-section border-b md:border-l lg:border-none border-orange-shade-1 col-span-2 md:col-span-3 xl:col-span-4 order-3 xl:order-3 flex flex-col py-8 md:py-20 xl:pl-12">
				<h3 class="text-orange-shade-1 border-b-2 border-orange-shade-1 text-xl font-bold max-w-[4rem] pb-4 mb-6">
					<?php the_field('footer_contact_title', 'options') ?>
				</h3>
				<?php the_field('footer_contact_address', 'options') ?>
				<p class="text-white mt-6"><?php the_field('footer_contact_phone', 'options') ?></p>
				<p class="text-white"><?php the_field('footer_contact_email', 'options') ?></p>
			</div>

			<!-- Mobile socials -->
			<div class="col-span-2 md:col-span-6 p-16 xl:hidden flex flex-col justify-center items-center order-4">
				<p class=" text-white"><?php the_field('footer_any_questions', 'options') ?></p>
				<a class="bot-header btn btn--primary">
					<?php esc_html_e('KONTAKTIEREN SIE UNS', 'gruber-pumpen'); ?>
				</a>
				<div class="lg:hidden">
					<?php do_action( 'socials' ); ?>
				</div>
			</div>

		</div>
	</section>

	<section class="bg-blue-shade-4">
		<p class="p-4 text-center font-dm text-xs text-white"><?php the_field('footer_copyright', 'options') ?></p>
	</section>
</footer>