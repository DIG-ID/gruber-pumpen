<section class="section-partners-content pb-16 lg:pb-24">
	<div class="theme-container">
		<div class="theme-grid mt-28">
			<?php
			if (have_rows('partners')):
				while (have_rows('partners')):
					the_row();
					?>
					<div
						class="flex flex-col bg-blue-shade-1 col-span-2 lg:col-span-6 overflow-hidden mb-8 lg:mb-16 invisible fade-in--noscroll">
						<div class="partner-card-img">
							<?php
							if (get_sub_field('image')):
								echo wp_get_attachment_image(get_sub_field('image'), 'full', false, array('class' => 'w-full h-full object-cover lg:h-[225px]'));
							endif;
							?>
						</div>
						<div class="card-partner-content py-11 px-9 lg:py-16 lg:px-24">
							<h2 class="text-title-h3 text-brown-shade-3 mb-4"><?php the_sub_field('title'); ?></h2>
							<?php
							if (get_sub_field('description')):
								echo '<p class="text-body text-brown-shade-4 mb-6 lg:max-w-[414px]">' . get_sub_field('description') . '</p>';
							endif;
							$tlink = get_sub_field('link');
							if ($tlink):
								$link_url = $tlink['url'];
								$link_title = $tlink['title'];
								$link_target = $tlink['target'] ? $tlink['target'] : '_self';
								?>
								<a href="<?php echo esc_url($link_url); ?>"
									class="flex gap-x-4 items-center mb-4 lg:mb-0" target="_blank">
									<h3 class="text-body text-brown-shade-4 hover:transform-scale">
										<?php echo esc_html($link_title); ?></h3>
									<svg class="" width="19" height="10" viewBox="0 0 19 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M1 1L8 5L1 9M11 1L18 5L11 9" stroke="#34302D" />
									</svg>
								</a>
								<?php
							endif;
							?>
						</div>

					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>