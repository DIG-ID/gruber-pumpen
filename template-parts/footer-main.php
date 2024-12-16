<footer class="footer-main">
	<!-- Write US -->
	<section class="flex flex-col lg:flex-row justify-between gap-12 items-start lg:items-center bg-blue-shade-3 p-16">
		<div class="flex flex-col gap-6">
			<div class="flex items-center gap-4 ">
				<h4 class="text-orange-shade-1"><?php the_field('footer_write_us_subtitle', 'options'); ?></h4>
				<hr class="border border-orange-shade-1  w-[4.5rem]" />
			</div>
			<h2 class="text-white text-5xl font-outfit font-bold"><?php the_field('footer_write_us_title', 'options'); ?></h2>
		</div>

		<div class="flex flex-col md:flex-row gap-6">
		<?php
			$services_url = get_field('footer_write_us_services', 'options');
			if ($services_url):
				?>
				<a href="<?php echo esc_url($services_url); ?>" class="btn--primary">
					<?php esc_html_e('UNSERE SERVICES', 'gruber-pumpen'); ?>
				</a>
				<?php
			endif;
			?>
			<?php
			$write_us_link = get_field('footer_write_us_link', 'options');
			if ($write_us_link):
				?>
				<a href="<?php echo esc_url($write_us_link); ?>" class="btn--transparent">
					<?php esc_html_e('SCHREIBEN SIE UNS', 'gruber-pumpen'); ?>
				</a>
				<?php
			endif;
			?>

		</div>
	</section>

	<section
		class="grid grid-rows-4 grid-cols-1 md:grid-rows-3 md:grid-cols-2 lg:grid-rows-1 lg:grid-cols-3 border-b border-orange-shade-1 bg-blue-shade-4">

		<!-- Logo && Socials -->
		<div
			class="row-start-1 row-span-1 col-span-2 lg:order-2 lg:col-span-1 lg:max-h-auto border-b lg:border-b-0 flex flex-col gap-8 items-center md:p-8 lg:p-16 xl:px-28 lg:border-x border-orange-shade-1 lg:mx-auto">
			<div class="flex items-center my-auto">
				<?php do_action('footer_theme_logo'); ?>
			</div>

			<p class="hidden lg:inline-block text-white mt-16"><?php the_field('footer_any_questions', 'options') ?></p>
			<a class="hidden lg:inline-block bot-header btn--primary">
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
			class="border-b md:border-l lg:border-none border-orange-shade-1 row-start-3 md:row-start-2 md:row-span-2 md:col-span-1 lg:row-span-1 lg:row-start-1 lg:order-3 lg:col-span-2 flex flex-col py-8 md:py-20 pl-20 pr-4">
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
			<a class="bot-header btn--primary">
				<?php esc_html_e('KONTAKTIEREN SIE UNS', 'gruber-pumpen'); ?>
			</a>
			<div class="lg:hidden">
				<?php do_action('socials'); ?>
			</div>
		</div>


	</section>

	<section class="bg-blue-shade-4">
		<p class="p-4 text-center font-dm text-xs text-white"><?php the_field('footer_copyright', 'options') ?></p>
	</section>
</footer>