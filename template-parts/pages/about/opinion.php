<section class="section-opinion py-14 md:py-16 xl:py-24 overflow-hidden">
	<div class="theme-container theme-grid relative">
		<div class="opinion--title col-span-2 md:col-span-6 xl:col-span-12 z-10 xl:absolute xl:left-[47%] xl:top-10">
			<div class="flex items-center gap-4 mb-4">
				<h4 class="text-orange-shade-1"><?php the_field( 'opinion_eyebrow' ); ?></h4>
				<hr class="border border-orange-shade-1  w-[4.5rem]" />
			</div>
			<h2 class="text-title-h2 text-blue-shade-4 mb-12"><?php the_field( 'opinion_title' ); ?></h2>
		</div>
		<div class="col-span-2 md:col-span-6 xl:col-span-12">
			<?php
			if ( have_rows( 'opinion_items' ) ) :
				echo '<div class="swiper opinionSwiper"><div class="swiper-wrapper">';
				while ( have_rows( 'opinion_items' ) ) :
					the_row();
					$image = get_sub_field( 'image' );
					?>
					<div class="swiper-slide">
						<div class="opinion--wrapper">
							<div class="opinion--img">
								<?php
								if ( $image ) :
									echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover rounded-[30px]' ) );
								endif;
								?>
							</div>
							<div class="opinion--content">
								<p class="text-p--2 italic mb-9 md:mb-11"><?php the_sub_field( 'description' ); ?></p>
								<div class="opinion--content-footer flex justify-between items-center">
									<div class="person">
										<p class="text-title-h4 text-blue-shade-4"><?php the_sub_field( 'name' ); ?></p>
										<p class="text-p--2"><?php the_sub_field( 'position' ); ?></p>
									</div>
									<?php
									$blink = get_sub_field( 'link' );
									if ( $blink ) :
										$link_url    = $blink['url'];
										$link_title  = $blink['title'];
										$link_target = $blink['target'] ? $blink['target'] : '_self';
										?>
										<a class="btn btn--secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php
									endif;
									?>
								</div>
							</div>
							<div class="opinion--bg bg-white rounded-[3.125rem]">

							</div>
						</div>
					</div>
					<?php
				endwhile;
				echo '</div></div>';
			endif;
			?>
		</div>
		<div class="col-span-2 md:col-span-6 xl:col-span-12 flex justify-center gap-x-4 mt-12">
			<div class="btn--arrow opinion-swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
			<div class="btn--arrow opinion-swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
		</div>
	</div>
</section>
