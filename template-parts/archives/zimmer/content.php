<section class="section-zimmer-list bg-brown-shade-2 pt-9 lg:pt-32">
	<div class="theme-container">
		<div class="theme-grid">
			<?php
			$featured_posts = get_field( 'archive_zimmer_rooms', 'options' );
			if ( $featured_posts ) :
				$i = 0;
				foreach ( $featured_posts as $post ) :
					setup_postdata( $post );
					$fade_class = '';
					if ( 0 === $i ) :
						$fade_class = 'invisible fade-in--noscroll';
					else :
						$fade_class = 'invisible fade-in';
					endif;
					if ( 1 === $i ) :
						?>
						<article class="card-zimmer col-span-2 lg:col-start-2 lg:col-span-10 grid grid-cols-2 lg:grid-cols-10 mb-24 xl:mb-32 <?php echo esc_attr( $fade_class ); ?>">
							<div class="card-studio__content col-span-2 lg:col-span-4 flex flex-col lg:justify-between order-2 lg:order-1">
								<h2 class="text-title-h2 text-brown-shade-4 invisible hidden lg:visible lg:block"><?php the_title(); ?></h2>
								<p class="text-body text-brown-shade-4 pr-16 mb-6"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
								<?php do_action( 'room_features' ); ?>
								<a class="btn-internal btn-internal--shade-1 self-start mt-8 xl:mt-0" href="<?php the_permalink(); ?>"><?php esc_html_e( 'zu den Zimmern', 'baeren' ); ?></a>
							</div>
							<div class="card-studio__swiper col-span-2 lg:col-start-6 lg:col-span-5 order-1 lg:order-2 mb-8 lg:mb-0 <?php echo esc_attr( $fade_class ); ?>">
								<h2 class="text-title-h2 text-brown-shade-4 text-center mb-6 lg:invisible lg:hidden"><?php the_title(); ?></h2>
								<?php
								if ( has_post_thumbnail() ) :
									echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'w-full object-cover rounded-[20px]' ) );
								endif;
								?>
							</div>
						</article>

						<?php
					else :
						?>
						<article class="card-zimmer col-span-2 lg:col-start-2 lg:col-span-10 grid grid-cols-2 lg:grid-cols-10 mb-24 xl:mb-32 <?php echo esc_attr( $fade_class ); ?>">
							<div class="card-studio__swiper col-span-2 lg:col-span-5 mb-8 lg:mb-0">
								<h2 class="text-title-h2 text-brown-shade-4 text-center mb-6 lg:invisible lg:hidden"><?php the_title(); ?></h2>
								<?php
								if ( has_post_thumbnail() ) :
									echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'w-full object-cover rounded-[20px]' ) );
								endif;
								?>
							</div>
							<div class="card-studio__content col-span-2 lg:col-span-4 lg:col-start-7 flex flex-col lg:justify-between">
								<h2 class="text-title-h2 text-brown-shade-4 invisible hidden lg:visible lg:block"><?php the_title(); ?></h2>
								<p class="text-body text-brown-shade-4 pr-16 mb-6"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
								<?php do_action( 'room_features' ); ?>
								<a class="btn-internal btn-internal--shade-1 self-start mt-8 xl:mt-0" href="<?php the_permalink(); ?>"><?php esc_html_e( 'zu den Zimmern', 'baeren' ); ?></a>
							</div>
						</article>
						<?php
					endif;

					$i++;
				endforeach;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</div>
</section>
