<?php
/**
 * Header Template for Gruber Pumpen und Systeme WordPress Theme
 * 
 * This template handles the site's header, navigation, and responsive menu
 */
?>
<header id="header-main" class="header-main absolute top-0 left-0 w-full z-[999] overflow-hidden <?php echo is_admin_bar_showing() ? ' top-8' : ''; ?>" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar relative overflow-hidden" role="navigation" aria-label="<?php esc_attr_e('Main menu', 'gruber-pumpen'); ?>">

		<!-- Top Information Bar -->
		<div class="top-section hidden md:block">
			<div class="theme-container theme-grid md:min-h-[32px] xl:min-h-[45px]">
				<!-- Left Text -->
				<div class="col-span-1 md:col-span-3 lg:col-span-2 xl:col-span-6 flex flex-row items-center z-10 grow">
					<p class="text-[#E2ECF2] font-dm text-[10px] md:text-[12px] xl:text-[16px] font-medium leading-[28px]">
						<?php the_field('header_subtitle', 'options') ?>
					</p>
				</div>

				<!-- Right Content -->
				<div class="col-span-1 md:col-span-3 lg:col-span-4 xl:col-span-6 flex items-center justify-end grow">
					<?php
					$schedules = get_field('header_schedule', 'options');
					if ( $schedules ) :
						foreach ($schedules as $schedule):
							$title = $schedule['title'];
							$description = $schedule['description'];
							if ($title && $description):
								?>
								<p class="hidden lg:inline-block font-dm text-blue-shade-2 font-bold text-[12px] leading-[26px]">
									<?php echo $title ?>:&nbsp;
								</p>
								<p class="hidden lg:inline-block font-dm text-blue-shade-2 text-[12px] leading-[26px] mr-3">
									<?php echo $description ?>
								</p>
								<?php
							endif;
						endforeach;
					endif;
					?>

					<p class="gap-2 text-blue-shade-4 font-outfit text-sm font-medium items-center ml-8 z-10 hidden sm:flex">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M3.21778 6.92444C4.49778 9.44 6.56 11.4933 9.07556 12.7822L11.0311 10.8267C11.2711 10.5867 11.6267 10.5067 11.9378 10.6133C12.9333 10.9422 14.0089 11.12 15.1111 11.12C15.6 11.12 16 11.52 16 12.0089V15.1111C16 15.6 15.6 16 15.1111 16C6.76444 16 0 9.23556 0 0.888889C0 0.4 0.4 0 0.888889 0H4C4.48889 0 4.88889 0.4 4.88889 0.888889C4.88889 2 5.06667 3.06667 5.39556 4.06222C5.49333 4.37333 5.42222 4.72 5.17333 4.96889L3.21778 6.92444Z"
								fill="#063047" />
						</svg>
						<a href="tel:<?php the_field('header_phone', 'options') ?>"><?php the_field('header_phone', 'options') ?></a>
					</p>
				</div>
			</div>
		</div>


		<!-- Main Header Wrapper -->
		<div class="header-wrapper theme-container relative flex items-center justify-between lg:justify-center z-40 xl:z-auto">

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
			<div class="flex flex-row items-center justify-end text-right w-full xl:z-50">
				<?php
				$booking_url = get_field('header_booking_url', 'options');
				if ($booking_url):
					?>
					<a href="<?php echo esc_url($booking_url); ?>" class="!hidden md:!inline-block bot-header btn btn--primary mr-12 xl:mr-0">
						<?php esc_html_e('KONTAKTIEREN SIE UNS', 'gruber-pumpen'); ?>
					</a>
					<?php
				endif;
				?>

				<!-- Mobile Menu Toggle -->
				<div class="menu-toggle-wrapper inline-block item-end lg:hidden">
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
						<div class="bg-blue-shade-3 mt-16 md:mt-[104px] xl:mt-0 min-h-[94vh] xl:min-h-none flex flex-col justify-between">
							<div class="main-menu-container">
								<?php
								wp_nav_menu([
									'theme_location' => 'main-mega-menu',
									'menu_id' => 'main-menu',
									'menu_class' => 'main-menu-top-level pt-20 pt px-4',
									'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'fallback_cb' => '__return_false',
									'walker' => new Custom_Walker_Nav_Menu(),
								]);
								?>
							</div>
							<div class=" pb-14">
								<p class="gap-2 text-blue-shade-0 text-lg font-outfit font-medium items-center px-4 flex">
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M3.21778 6.92444C4.49778 9.44 6.56 11.4933 9.07556 12.7822L11.0311 10.8267C11.2711 10.5867 11.6267 10.5067 11.9378 10.6133C12.9333 10.9422 14.0089 11.12 15.1111 11.12C15.6 11.12 16 11.52 16 12.0089V15.1111C16 15.6 15.6 16 15.1111 16C6.76444 16 0 9.23556 0 0.888889C0 0.4 0.4 0 0.888889 0H4C4.48889 0 4.88889 0.4 4.88889 0.888889C4.88889 2 5.06667 3.06667 5.39556 4.06222C5.49333 4.37333 5.42222 4.72 5.17333 4.96889L3.21778 6.92444Z"
											fill="#F0F7FA" />
									</svg>
									<a href="tel:<?php the_field('header_phone', 'options') ?>"><?php the_field('header_phone', 'options') ?></a>
								</p>
								<div class="px-4">
									<?php
									$schedules = get_field('header_schedule', 'options');
									if ( $schedules ) :
										foreach ($schedules as $schedule):
											$title = $schedule['title'];
											$description = $schedule['description'];
											if ($title && $description):
												?>
												<p class="font-dm text-blue-shade-0 font-bold text-[14px] leading-[28px] inline-block">
													<?php echo $title ?>:&nbsp;
												</p>
												<p class="font-dm text-blue-shade-0 text-[14px] leading-[28px] inline-block">
													<?php echo $description ?>
												</p><br>
												<?php
											endif;
										endforeach;
									endif;
									?>
								</div>
							</div>
						</div>
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