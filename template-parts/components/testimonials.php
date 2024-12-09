<section class="section-testimonials bg-brown-shade-3 pt-12 xl:pt-24 pb-28 relative overflow-hidden">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-12 pb-12 lg:pb-20">
				<h2 class="font-ubuntu font-light text-2xl xl:text-5xl leading-7 w-[40%] xl:w-full mx-auto xl:mx-0 text-brown-shade-2 text-center"><?php esc_html_e( 'Testimonials', 'baeren' ); ?></h2>
			</div>
			<div class="col-span-2 lg:col-span-10 lg:col-start-2 grid grid-cols-2 lg:grid-cols-10 gap-x-6">
				<?php
				$testimonials_args = array(
					'post_type'   => 'testimonials',
					'post_status' => 'publish',
					'nopaging'    => true,
					'orderby'     => 'date',
					'order'       => 'DESC',
				);

				$testimonials_query = new WP_Query( $testimonials_args );
				if ( $testimonials_query->have_posts() ) :
					while ( $testimonials_query->have_posts() ) :
						$testimonials_query->the_post();
						?>
						<div class="testimonials-box col-span-2 lg:col-span-5 rounded-[22px] bg-brown-shade-1 mb-12 lg:mb-0">
							<div class="px-8 py-7 lg:py-16 lg:px-24">
								<p class="text-body text-brown-shade-4 mb-2 italic"><?php echo esc_html( get_field( 'date' ) ); ?></p>
								<h3 class="text-bullets--primary text-brown-shade-4 mb-7"><?php the_field( 'name' ); ?></h3>
								<p class="text-body text-brown-shade-4 italic"><?php the_field( 'text' ); ?></p>
							</div>
						</div>
						<?php
					endwhile;
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-12 pt-9">
				<div class="w-full text-center flex flex-col items-center justify-center">
					<!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Trustpilot.svg" class="mx-auto w-[186px] lg:w-[186px] mb-6" alt="Tustpilot" title="Trustpilot" /> -->
					<!-- TrustYou Widget -->
					<!-- <div class="bg-white py-3 px-4 rounded-[22px]"> -->
						<iframe src="https://api.trustyou.com/hotels/b31b1d45-89ea-4497-a19f-5bb0d187b447/trust_score.html?key=70d7d02a-d79a-45f4-8908-d2e7454de0e8&size=m&scale=5" scrolling="no" height="56" width="205" style="border:none;"></iframe>
					<!-- </div> -->
					<!-- /TrustYou Widget -->
				</div>
			</div>
		</div>
	</div>
</section>
