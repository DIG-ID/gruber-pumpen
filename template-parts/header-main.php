<?php
/**
 * Header Template for Gruber Pumpen und Systeme WordPress Theme
 * 
 * This template handles the site's header, navigation, and responsive menu
 */
?>
<header id="header-main" class="header-main absolute top-0 left-0 w-full z-[999] overflow-hidden" itemscope
	itemtype="http://schema.org/WebSite">
	<nav class="navbar relative overflow-hidden" role="navigation"
		aria-label="<?php esc_attr_e('Main menu', 'gruber-pumpen'); ?>">

		<!-- Top Information Bar -->
		<div class="hidden sm:flex top-section justify-start lg:justify-end gap-8 items-end px-12 py-2">

			<!-- Left Text -->
			<div class="z-10 grow">
				<p class="text-white text-sm lg:text-center">
					<?php the_field('header_subtitle', 'options') ?>
				</p>
			</div>

			<!-- Right Content -->
			<div class="flex gap-2 justify-end xl:justify-center grow">
				<?php
				$schedules = get_field('header_schedule', 'options');
				foreach ($schedules as $schedule):
					$title = $schedule['title'];
					$description = $schedule['description'];
					if ($title && $description):
						?>
						<p class="hidden lg:inline-block text-blue-shade-4 font-bold text-[10px]">
							<?php echo $title ?>:
						</p>
						<p class="hidden lg:inline-block text-blue-shade-4 text-[10px]">
							<?php echo $description ?>
						</p>
						<?php
					endif;
				endforeach;
				?>

				<p class="flex gap-2 text-blue-shade-4 text-sm font-bold ml-8 z-10">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M3.21778 6.92444C4.49778 9.44 6.56 11.4933 9.07556 12.7822L11.0311 10.8267C11.2711 10.5867 11.6267 10.5067 11.9378 10.6133C12.9333 10.9422 14.0089 11.12 15.1111 11.12C15.6 11.12 16 11.52 16 12.0089V15.1111C16 15.6 15.6 16 15.1111 16C6.76444 16 0 9.23556 0 0.888889C0 0.4 0.4 0 0.888889 0H4C4.48889 0 4.88889 0.4 4.88889 0.888889C4.88889 2 5.06667 3.06667 5.39556 4.06222C5.49333 4.37333 5.42222 4.72 5.17333 4.96889L3.21778 6.92444Z"
							fill="#063047" />
					</svg>
					<?php the_field('header_phone', 'options') ?>
				</p>
			</div>
		</div>


		<!-- Main Header Wrapper -->
		<div
			class="header-wrapper relative flex items-center justify-between lg:justify-center px-6 gap-4 md:px-8 xl:px-16 z-40 xl:z-auto">

			<!-- Left Side: Logo and Main Menu -->
			<div class="flex justify-start lg:justify-center gap-8 items-center">
				<!-- Site Branding / Logo -->
				<div class="site-branding">
					<a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
						title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"
						class="navbar-brand custom-logo-link">
						<?php do_action('theme_logo'); ?>
					</a>
				</div>

				<!-- Desktop Main Menu -->
				<div class="hidden lg:block">
					<?php
					wp_nav_menu([
						'theme_location' => 'main-menu',
						'menu_id' => 'main-menu',
						'container_class' => 'main-menu-container',
						'menu_class' => 'main-menu-out-top-level',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb' => '__return_false',
					]);
					?>
				</div>
			</div>

			<!-- Right Side: Contact and Mobile Menu Toggle -->
			<div class="flex justify-end items-center gap-8 md:gap-16 xl:z-50">
				<?php
				$booking_url = get_field('header_booking_url', 'options');
				if ($booking_url):
					?>
					<a href="<?php echo esc_url($booking_url); ?>" class="hidden md:inline-block bot-header btn--primary">
						<?php esc_html_e('KONTAKTIEREN SIE UNS', 'gruber-pumpen'); ?>
					</a>
					<?php
				endif;
				?>

				<!-- Mobile Menu Toggle -->
				<div class="menu-toggle-wrapper item-end lg:hidden">
					<button class="menu-toggle">
						<span class="menu-toggle__bars">
							<span class="bar"></span>
							<span class="bar"></span>
							<span class="bar"></span>
						</span>
					</button>
				</div>

				<!-- Language Selector (Desktop) -->
				<div class="hidden xl:block">
					<?php do_action('wpml_add_language_selector'); ?>
				</div>
			</div>
		</div>

		<!-- Full-Screen Mobile Menu Wrapper -->
		<div id="menu-wrapper" class="menu-wrapper w-full top-0 left-0 bottom-0 hidden fixed">
			<div class="menu-bg"></div>

			<div class="grid grid-cols-12 px-0 py-0 h-full">
				<!-- Mobile Navigation Column -->
				<div class="col-span-12 px-0 py-0 xl:pl-8 xl:pt-12 bg-blue-shade-0 block xl:hidden mobile__nav">
					<!-- Mobile Main Menu -->
					<nav>
						<?php
						wp_nav_menu([
							'theme_location' => 'main-mega-menu',
							'menu_id' => 'main-menu',
							'container_class' => 'main-menu-container pt-28 xl:pt-0',
							'menu_class' => 'main-menu-top-level p-8',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb' => '__return_false',
							'walker' => new Custom_Walker_Nav_Menu(),
						]);
						?>
					</nav>

					<!-- Additional Mobile Menus -->
					<nav class="side-menu__mobile">
						<?php
						// Secondary Menu
						wp_nav_menu([
							'theme_location' => 'secondary-menu',
							'menu_id' => 'secondary-menu',
							'container_class' => 'secondary-menu-container pt-0',
							'menu_class' => 'secondary-menu-top-level',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb' => '__return_false',
						]);

						// Copyright Menu
						wp_nav_menu([
							'theme_location' => 'copyright-menu',
							'menu_id' => 'copyright-menu',
							'container_class' => 'copyright-menu-container pt-0',
							'menu_class' => 'copyright-menu-top-level',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb' => '__return_false',
						]);
						?>
					</nav>
				</div>

				<!-- Secondary Menu Column (Desktop) -->
				<div id="menu-secondary-col" class="col-span-4 bg-blue-shade-0 pt-44 text-center hidden xl:block">
					<!-- Decorative SVG -->
					<div class="w-full mb-20 flex justify-center items-center">
						<svg width="64" height="67" viewBox="0 0 64 67" fill="none" xmlns="http://www.w3.org/2000/svg">
							<!-- SVG Path Details Omitted for Brevity -->
						</svg>
					</div>

					<!-- Secondary and Copyright Menus -->
					<?php
					// Secondary Menu
					wp_nav_menu([
						'theme_location' => 'secondary-menu',
						'menu_id' => 'secondary-menu',
						'container_class' => 'secondary-menu-container pt-20 xl:pt-0',
						'menu_class' => 'secondary-menu-top-level',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb' => '__return_false',
					]);

					// Language Selector
					do_action('wpml_add_language_selector');

					// Copyright Menu
					wp_nav_menu([
						'theme_location' => 'copyright-menu',
						'menu_id' => 'copyright-menu',
						'container_class' => 'copyright-menu-container pt-20 xl:pt-12',
						'menu_class' => 'copyright-menu-top-level',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb' => '__return_false',
					]);
					?>
				</div>
			</div>
		</div>
	</nav>
</header>