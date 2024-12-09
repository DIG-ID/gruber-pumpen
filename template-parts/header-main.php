<header id="header-main" class="header-main absolute top-0 left-0 w-full z-[999] overflow-hidden" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar relative overflow-hidden" role="navigation" aria-label="<?php esc_attr_e( 'Main menu', 'gruber-pumpen' ); ?>">
		<div class="header-wrapper relative grid grid-cols-3 px-6 md:px-8 xl:px-16 py-6 md:py-8 xl:py-6 z-40 xl:z-auto">
			<div class="col-span-1 flex justify-end xl:justify-start items-center order-3 xl:order-1 xl:z-50">
				<div class="menu-toggle-wrapper">
					<button class="menu-toggle">
						<span class="menu-toggle__bars">
							<span class="bar"></span>
							<span class="bar"></span>
							<span class="bar"></span>
						</span>
						<span class="menu-toggle__text"><?php esc_html_e( 'Menu', 'baeren' ); ?></span>
					</button>
				</div>
				<div class="hidden xl:block"><?php do_action( 'wpml_add_language_selector' ); ?></div>
			</div>
			<div class="col-span-1 col-start-2 flex justify-center items-center order-2">
				<div class="site-branding">
				<a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
						title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"
						class="navbar-brand custom-logo-link"><?php do_action('theme_logo'); ?></a>
				</div>
			</div>
		</div>
		<div class="menu-app px-6 md:px-8 xl:px-16 py-6 md:py-8 xl:py-3 border-y-[0.5px] border-brown-shade-1 border-opacity-80 hidden xl:block">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-menu',
					'menu_id'         => 'main-menu',
					'container_class' => 'main-menu-container pt-20 xl:pt-0',
					'menu_class'      => 'main-menu-out-top-level',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'     => '__return_false',
				)
			);
			?>
		</div>

		<div id="menu-wrapper" class="menu-wrapper w-full top-0 left-0 bottom-0 hidden fixed">
			<div class="menu-bg"></div>
			<div class="grid grid-cols-12 px-0 py-0 h-full">
				<div class="col-span-8 pl-48 pt-44 hidden xl:block bg-blue-shade-2">
					<div class="site-branding mega-menu__logo">
						<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link">
							<svg width="251" height="38" viewBox="0 0 251 38" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17.0621 23.8364H2.04745V37.6546H0V8.29094H2.04745V21.7637H17.0621V8.29094H19.1095V37.6546H17.0621V23.8364Z" fill="#34302D"/>
								<path d="M44.3615 34.8909C42.3141 36.9636 39.9254 38 37.1954 38C34.4655 38 31.7356 36.9636 30.0293 34.8909C27.2994 32.1272 27.2994 29.7091 27.2994 22.8C27.2994 15.8909 27.2994 13.4727 30.0293 10.7091C32.0768 8.63634 34.4655 7.59998 37.1954 7.59998C39.9254 7.59998 42.6553 8.63634 44.3615 10.7091C47.0914 13.4727 47.0914 15.8909 47.0914 22.8C47.0914 29.7091 47.0914 32.1272 44.3615 34.8909ZM42.6553 12.0909C41.2903 10.7091 39.2429 9.6727 37.1954 9.6727C35.148 9.6727 33.1005 10.3636 31.7356 12.0909C29.6881 14.1636 29.3469 16.5818 29.3469 22.8C29.3469 29.0182 29.3469 31.4363 31.7356 33.5091C33.1005 34.8909 35.148 35.9272 37.1954 35.9272C39.2429 35.9272 41.2903 35.2363 42.6553 33.5091C44.7028 31.4363 45.044 29.0182 45.044 22.8C45.044 16.5818 44.7028 14.5091 42.6553 12.0909Z" fill="#34302D"/>
								<path d="M61.7647 37.6545H59.7172V10.0182H51.1862V7.94544H70.637V10.0182H61.7647V37.6545Z" fill="#34302D"/>
								<path d="M76.0969 8.29094H93.8415V10.3637H78.4856V22.1091H91.794V23.8364H78.4856V35.5819H93.8415V37.6546H76.0969V8.29094Z" fill="#34302D"/>
								<path d="M102.714 8.29094V35.9273H118.07V37.6546H100.325V8.29094H102.714Z" fill="#34302D"/>
								<path d="M135.131 37.6546H122.847V8.29095H134.449C140.25 8.29095 143.321 11.4 143.321 16.5819C143.321 19.691 141.274 22.1091 139.568 22.8C141.274 23.491 143.662 25.5637 143.662 29.3637C144.004 34.891 140.591 37.6546 135.131 37.6546ZM134.449 13.4728H128.989V20.3819H134.449C136.838 20.3819 138.203 19 138.203 16.9273C138.203 14.8546 136.838 13.4728 134.449 13.4728ZM134.79 25.2182H128.989V32.4728H134.79C137.52 32.4728 138.544 30.7455 138.544 28.6728C138.544 26.9455 137.179 25.2182 134.79 25.2182Z" fill="#34302D"/>
								<path d="M166.526 37.6545L164.82 32.4727H154.582L152.876 37.6545H147.075L157.654 8.2909H162.09L172.668 37.6545H166.526ZM152.876 5.18182V0H157.312V5.18182H152.876ZM159.701 16.9273L155.947 27.6364H163.113L159.701 16.9273ZM161.748 5.18182V0H166.185V5.18182H161.748Z" fill="#34302D"/>
								<path d="M191.437 37.6546L185.636 25.9091H181.541V37.6546H175.74V8.29095H187.001C192.802 8.29095 196.555 12.4364 196.555 17.2728C196.555 21.4182 194.167 23.8364 191.095 24.8728L197.579 37.6546H191.437ZM187.001 13.4728H181.541V21.4182H187.001C189.389 21.4182 191.095 19.691 191.095 17.6182C191.095 15.5455 189.73 13.4728 187.001 13.4728Z" fill="#34302D"/>
								<path d="M203.039 37.6546V8.29095H222.149V13.4728H208.499V20.3819H220.101V25.5637H208.499V32.8182H222.149V37.6546H203.039Z" fill="#34302D"/>
								<path d="M245.011 37.6546L233.409 19.691V37.6546H227.608V8.29095H232.727L244.329 26.2546V8.29095H250.13V37.6546H245.011Z" fill="#34302D"/>
							</svg>
						</a>
					</div>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'main-mega-menu',
							'menu_id'         => 'main-menu',
							'container_class' => 'main-menu-container pt-20 xl:pt-0 xl:mt-11',
							'menu_class'      => 'main-menu-top-level relative',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb'     => '__return_false',
							//'walker'          => new Custom_Walker_Nav_Menu(),
						)
					);
					?>
				</div>
				<div class="col-span-12 px-0 py-0 xl:pl-8 xl:pt-12 bg-blue-shade-2 block xl:hidden mobile__nav">
					<nav>
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'main-mega-menu',
								'menu_id'         => 'main-menu',
								'container_class' => 'main-menu-container pt-28 xl:pt-0',
								'menu_class'      => 'main-menu-top-level p-8',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'fallback_cb'     => '__return_false',
								'walker'          => new Custom_Walker_Nav_Menu(),
							)
						);
						?>
					</nav>
					<nav class="side-menu__mobile">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'secondary-menu',
							'menu_id'         => 'secondary-menu',
							'container_class' => 'secondary-menu-container pt-0',
							'menu_class'      => 'secondary-menu-top-level',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb'     => '__return_false',
						)
					);
					?>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'copyright-menu',
							'menu_id'         => 'copyright-menu',
							'container_class' => 'copyright-menu-container pt-0',
							'menu_class'      => 'copyright-menu-top-level',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb'     => '__return_false',
						)
					);
					?>
					</nav>
				</div>
				<div id="menu-secondary-col" class="col-span-4 bg-blue-shade-1 pt-44 text-center hidden xl:block">
					<div class="w-full mb-20 flex justify-center items-center">
						<svg width="64" height="67" viewBox="0 0 64 67" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M34.0014 23.4585C34.6072 20.8013 36.4244 19.3705 36.8282 17.9397C37.232 15.4868 35.6167 13.6472 35.8186 11.1944C36.0206 8.53716 38.0396 7.51515 38.0396 4.65351C37.6358 0.974266 33.5976 2.81389 30.7709 2.20068C28.1461 1.58747 25.1174 -1.88737 23.3002 1.38307C22.0888 3.8359 23.5021 5.67552 22.6945 8.12835C21.8869 10.5812 19.6658 11.6032 19.0601 13.8516C18.6563 15.2824 19.8678 17.3265 19.4639 19.9837C18.8582 23.2541 16.6372 25.0938 16.8391 27.1378C17.2429 31.6346 21.8869 29.795 25.1174 30.2038C28.1461 31.0214 31.7804 34.7007 34.0014 30.817C34.6072 29.3862 33.1938 26.729 34.0014 23.4585Z" fill="#9D372D"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M32.9919 29.5906C33.3957 28.9774 33.3957 27.9554 33.1938 26.9334V26.729C32.5881 22.6409 28.7518 22.8453 28.7518 22.8453C33.5976 22.2321 35.011 19.1661 35.011 19.1661V19.3705C35.4148 18.7573 35.6167 18.3485 35.8187 17.7353C36.0206 16.7133 35.8186 15.6913 35.4148 14.8736C34.4053 12.8296 29.5594 12.8296 29.5594 12.8296C33.7995 12.2164 35.4148 9.76358 35.6167 9.55918C36.2225 8.53717 36.8282 7.51516 36.8282 6.08434C36.4244 1.58748 32.79 6.08434 30.1652 5.67553C27.9442 5.06232 25.5212 0.156664 23.906 3.0183C23.3002 4.44912 23.5021 5.87993 23.5021 7.31075C23.7041 7.92396 24.5117 10.5812 27.7423 12.6252C27.7423 12.6252 23.3002 10.7856 21.685 12.2164C21.0792 13.034 20.4735 13.6472 20.2716 14.6692C20.0697 15.2824 20.2716 16.1001 20.4735 17.1221C20.6754 18.3485 21.685 20.3925 24.5117 22.2321C24.5117 22.2321 21.0792 20.3925 18.8582 24.0718C18.2525 25.0938 17.8487 25.9114 18.0506 26.729C18.4544 30.6126 22.4926 28.9774 25.3193 29.3862C27.9442 29.795 30.9728 33.0655 32.9919 29.5906Z" fill="#B63939"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M61.4613 54.1189C61.6632 50.6441 63.4804 48.6001 63.6823 46.556C63.6823 43.49 61.0575 41.446 60.8555 38.3799C60.4517 34.9051 62.8746 33.2699 62.067 29.795C60.6536 25.2982 56.0097 28.5686 52.5772 28.5686C49.1448 28.3642 44.7028 24.8894 43.0875 29.3862C42.0779 32.8611 44.2989 34.7007 43.8951 37.9711C43.4913 41.0372 40.8665 42.8768 40.6646 45.9428C40.6646 47.7824 42.4817 50.2353 42.4817 53.5057C42.6837 57.7982 40.0588 60.6598 40.8665 63.1126C42.4817 68.6315 47.7314 64.9523 51.7696 64.7479C55.8078 65.1567 61.0575 68.8359 62.8746 63.317C63.4804 61.273 61.2594 58.4114 61.4613 54.1189Z" fill="#79973A"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M61.0574 58.6158C59.2402 53.5057 54.7982 54.9365 54.7982 54.9365C60.6536 52.8925 61.6631 48.8045 61.6631 48.8045V49.0089C62.067 48.1913 62.2689 47.5781 62.2689 46.7604C62.2689 45.3296 61.6631 44.3076 61.0574 43.2856C59.2402 41.0372 53.3848 42.0592 53.3848 42.0592C58.6345 40.2196 60.0479 36.7447 60.0479 36.5403C60.4517 35.1095 61.0574 33.8831 60.6536 32.0435C59.0383 26.729 55.8078 33.0655 52.3753 33.0655C49.3466 32.8611 45.5103 27.3422 44.097 31.2259C43.4912 33.2699 44.2989 34.9051 44.7027 36.5403C45.1065 37.3579 46.5199 40.2196 51.1638 42.0592C51.1638 42.0592 45.3084 40.8328 43.4912 42.8768C42.8855 43.8988 42.2798 45.1252 42.2798 46.3516C42.2798 47.1693 42.6836 48.1913 43.0874 49.2133C43.6932 50.6441 45.3084 53.0969 49.3466 54.5277C49.3466 54.5277 44.7027 53.0969 42.8855 58.0026C42.4817 59.229 42.0779 60.4554 42.4817 61.4774C43.8951 66.3831 48.539 63.1126 52.1734 62.9082C55.6058 63.3171 60.2498 66.3831 61.865 61.6818C61.865 61.0686 61.4612 60.0466 61.0574 58.6158C61.2593 58.8202 61.0574 58.8202 61.0574 58.6158Z" fill="#95BE49"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M27.7424 40.6284C26.1271 37.7667 26.7328 34.9051 25.7233 33.2699C24.108 30.6126 21.0794 30.4082 19.2622 27.9554C17.2431 25.2982 18.2526 22.6409 15.8297 20.3925C12.3972 17.3265 10.1762 22.4365 7.55139 24.2762C4.72466 25.9114 -0.726915 25.2982 0.080725 29.795C1.09027 33.0655 3.7151 33.4743 5.12847 36.3359C6.33993 39.1975 5.12848 41.8548 6.54184 44.512C7.55139 46.1472 10.1762 46.9648 11.7915 49.8265C14.0125 53.3013 13.4068 56.9806 15.224 58.6158C19.2622 62.295 21.887 56.5718 25.1176 54.3233C28.55 52.4837 34.8092 52.8925 33.5978 47.578C32.992 45.3296 29.5596 44.3076 27.7424 40.6284Z" fill="#BA8031"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M31.5785 46.9648C31.3766 45.9428 30.569 45.3296 29.7613 44.512H29.5594C25.5212 41.2416 22.4926 44.7164 22.4926 44.7164C26.3289 40.0152 25.1174 36.1315 25.1174 36.1315V36.3359C24.9155 35.5183 24.9155 34.7007 24.5117 34.2919C23.906 33.2699 22.8964 32.4523 21.8869 31.8391C19.262 31.0214 15.0219 34.9051 15.0219 34.9051C18.4544 30.6126 17.8487 27.1378 17.8487 26.9334C17.4448 25.5026 17.2429 24.0718 16.0315 22.8453C11.9933 19.3705 12.599 26.1158 9.77226 27.9554C7.34934 29.3862 1.29204 26.729 2.09968 30.817C2.70541 32.6567 3.91687 33.6787 5.12833 34.9051C5.73406 35.3139 8.5608 36.9491 13.2047 36.1315C13.2047 36.1315 7.75316 37.9711 7.34934 40.8328C7.34934 42.0592 7.34934 43.2856 8.15698 44.3076C8.5608 45.1252 9.36844 45.534 10.1761 46.3516C11.3875 47.1693 14.0124 48.3957 18.0506 47.5781C18.0506 47.5781 13.6085 48.8045 14.4162 53.7101C14.6181 54.9365 15.0219 56.163 15.8296 56.7762C19.262 60.0466 21.6849 55.1409 24.5117 53.0969C27.3384 51.4617 32.79 51.6661 31.5785 46.9648Z" fill="#D7903B"/>
						</svg>

					</div>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'secondary-menu',
							'menu_id'         => 'secondary-menu',
							'container_class' => 'secondary-menu-container pt-20 xl:pt-0',
							'menu_class'      => 'secondary-menu-top-level',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb'     => '__return_false',
						)
					);
					?>
					<?php do_action( 'wpml_add_language_selector' ); ?>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'copyright-menu',
							'menu_id'         => 'copyright-menu',
							'container_class' => 'copyright-menu-container pt-20 xl:pt-12',
							'menu_class'      => 'copyright-menu-top-level',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb'     => '__return_false',
						)
					);
					?>
				</div>
			</div>
		</div>
	</nav>

</header>