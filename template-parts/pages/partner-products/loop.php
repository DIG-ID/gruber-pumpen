<section class="section-own-products-loop">
	<div class="theme-container theme-grid">
		<?php
		$products_args = array(
			'post_type'      => 'partnerprodukt',
			'post_status'    => 'publish',
			'post__not_in'   => array( 558, 556 ), // hide watts and saniboy posts.
			'posts_per_page' => -1,
			'orderby'        => 'date',
			'order'          => 'DESC',
		);
		$products_query = new WP_Query( $products_args );
		if ( $products_query->have_posts() ) :
			while ( $products_query->have_posts() ) :
				$products_query->the_post();
				$index = $products_query->current_post + 1;
				if ( $index % 2 == 0 ) :
					//Item par.
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-span-2 md:col-span-6 xl:col-span-12 even-post theme-grid my-12 md:my-16' ); ?>>
						<div class="col-span-2 md:col-span-6 xl:col-span-6 mb-6 md:mb-10 xl:mb-0 ">
							<?php
							$gallery = get_field( 'gallery' );
							if ( $gallery ) :
								?>
								<div class="swiper gallery-swiper gallery-<?php echo $index; ?>">
									<div class="swiper-wrapper">
										<?php foreach ( $gallery as $image ) : ?>
											<div class="swiper-slide">
												<figure class="bg-white rounded-[20px] overflow-hidden">
													<?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full h-auto object-cover' ) ); ?>
												</figure>
											</div>
										<?php endforeach; ?>
									</div>
									<div class="swiper-button-next"></div>
									<div class="swiper-button-prev"></div>
									<div class="swiper-pagination"></div>
								</div>
								<?php
							endif;
							?>
						</div>
						<div class="col-span-2 md:col-span-6 xl:col-start-8 xl:col-span-5">
							<h2 class="text-title-h2 text-blue-shade-4 mb-6 md:mb-10 xl:mb-12"><?php the_title(); ?></h2>
							<div class="text-p--2 pb-8 md:pb-14"><?php the_content(); ?></div>
							<?php
							$blink = get_field( 'link' );
							if ( $blink ) :
								$link_url    = $blink['url'];
								$link_title  = $blink['title'];
								$link_target = $blink['target'] ? $blink['target'] : '_self';
								?>
								<a class="text-p--1 partnerprodutk-link-wrapper inline-flex flex-col" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									<?php
									echo '<span class="mb-4">' . esc_html( $link_title ) . '</span>';
									if ( has_post_thumbnail() ) :
										the_post_thumbnail( 'full', array( 'class' => 'max-w-24 xl:max-w-full max-h-full h-auto object-cover' ) );
									endif
									?>
								</a>
								<?php
							endif;
							?>
						</div>
					</article>
					<?php
				else :
					//Item impar.
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-span-2 md:col-span-6 xl:col-span-12 odd-post theme-grid my-12 md:my-16' ); ?>>
						<div class="col-span-2 md:col-span-6 xl:col-span-5 order-2 xl:order-1">
							<h2 class="text-title-h2 text-blue-shade-4 mb-6 md:mb-10 xl:mb-12"><?php the_title(); ?></h2>
							<div class="text-p--2 pb-8 md:pb-14"><?php the_content(); ?></div>
							<?php
							$blink = get_field( 'link' );
							if ( $blink ) :
								$link_url    = $blink['url'];
								$link_title  = $blink['title'];
								$link_target = $blink['target'] ? $blink['target'] : '_self';
								?>
								<a class="text-p--1 partnerprodutk-link-wrapper inline-flex flex-col" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									<?php
									echo '<span class="mb-4">' . esc_html( $link_title ) . '</span>';
									if ( has_post_thumbnail() ) :
										the_post_thumbnail( 'full', array( 'class' => 'max-w-24 xl:max-w-full max-h-full h-auto object-cover' ) );
									endif
									?>
								</a>
								<?php
							endif;
							?>
						</div>
						<div class="col-span-2 md:col-span-6 xl:col-span-6 xl:col-start-7 order-1 xl:order-2 mb-6 md:mb-10 xl:mb-0">
							<?php
							$gallery = get_field( 'gallery' );
							if ( $gallery ) :
								?>
								<div class="swiper gallery-swiper gallery-<?php echo $index; ?>">
									<div class="swiper-wrapper">
										<?php foreach ( $gallery as $image ) : ?>
											<div class="swiper-slide">
												<figure class="bg-white rounded-[20px] overflow-hidden">
													<?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full h-auto object-cover' ) ); ?>
												</figure>
											</div>
										<?php endforeach; ?>
									</div>
									<div class="swiper-button-next"></div>
									<div class="swiper-button-prev"></div>
									<div class="swiper-pagination"></div>
								</div>
								<?php
							endif;
							?>
						</div>
					</article>
					<?php
				endif;
			endwhile;
		endif;
		wp_reset_postdata();
		?>
	</div>
</section>
