<section class="section-intro pb-10 pt-10 md:pt-20 xl:pt-24 xl:pb-20 overflow-hidden bg-blue-shade-0">
	<div class="theme-container theme-grid">
		<!-- Intro -->
		<div class="col-span-2 md:col-span-6 xl:col-span-12 theme-grid flex justify-between invisible fade-in--noscroll">
			<div class="col-span-2 md:col-span-6 xl:col-span-12">
				<div class="flex items-center gap-4">
					<?php
					$services_eyebrow = get_field( 'services_eyebrow', 'option' );
					if ( $services_eyebrow ) : ?>
						<h4 class="text-orange-shade-1 text-eyebrow"><?php echo $services_eyebrow; ?></h4>
					<?php endif; ?>
					<hr class="border border-orange-shade-1  w-[4.5rem]" />
				</div>
			</div>
			<div class="col-span-2 md:col-span-6 xl:col-span-6">
				<?php
				$services_title = get_field( 'services_title', 'option' );
				if ( $services_title ) : ?>
					<h2 class="text-title-h2 max-w-80 md:max-w-[475px] text-blue-shade-4 mb-6 md:mb-10 xl:mb-0">
						<?php echo $services_title; ?>
					</h2>
				<?php endif; ?>
			</div>
			<div class="col-span-2 md:col-span-6 xl:col-span-6">
				<div class="text-p--2 max-w-[575px]">
					<?php the_field( 'services_description', 'option' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!------>

<!-- Services -->
<section class="section-services pb-8 xl:pb-40">
	<div class="theme-container theme-grid">
		<div class="col-span-2 md:col-span-6 xl:col-span-12 grid grid-cols-2 md:grid-cols-6 lg:grid-cols-12 gap-x-6">
			<?php
			$services_args = array(
				'post_type'      => 'service',
				'post_status'    => 'publish',
				'posts_per_page' => 4,
				'orderby'        => 'date',
				'order'          => 'ASC',
			);

			$services_query = new WP_Query( $services_args );
			if ( $services_query->have_posts() ) :
				while ( $services_query->have_posts() ) :
					$services_query->the_post();
					?>
					<div class="col-span-2 md:col-span-6 xl:col-span-6 grid grid-cols-2 md:grid-cols-6 mb-7 fade-in md:bg-white md:px-9 xl:px-7 pt-6 pb-10 md:pt-10 md:pb-16 rounded-3xl">
						<div class="min-h-[55px] col-span-2 md:col-span-1">
							<?php
							$image = get_field(  'icon' );
							if ( $image ) :
								echo wp_get_attachment_image( $image, 'full', false, array('class' => 'fade-in') );
							endif;
							?>
						</div>
						<div class="col-span-2 md:col-span-5">
							<h2 class="text-title-h4 text-blue-shade-4 text-left mb-5 md:mb-6 fade-in"><?php the_field('title' ); ?></h2>
							<div class="text-p--2 invisible fade-in"><?php the_field( 'text_complete'  ); ?></div>
							<a class="btn btn--secondary uppercase inline-block mt-10" href="<?php the_permalink(); ?>">
							<?php esc_html_e( 'MEHR ERFAHREN', 'gruber-pumpen' ); ?>
							</a>
						</div>
					</div>
				<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</div>
</section>

<section class="section-oficial-partners bg-blue-shade-0 pb-8 xl:pb-40">
	<div class="theme-container theme-grid">
		<div class="col-span-1 md:col-span-3 xl:col-span-3 xl:col-start-4 mb-9">
			<div class="box box--sm w-full flex justify-center items-center min-h-32 ">
				<?php
				$extra_image_1 = get_field( 'services_partner_logo_01', 'options' );
				if ( $extra_image_1 ) :
					echo wp_get_attachment_image( $extra_image_1, 'full', false, array( 'class' => 'w-full max-w-full h-auto object-cover' ) );
				endif;
				?>
			</div>
		</div>
		<div class="col-span-1 md:col-span-3 xl:col-span-3 mb-9">
			<div class="box box--sm w-full flex justify-center items-center min-h-32">
				<?php
				$extra_image_2 = get_field( 'services_partner_logo_2', 'options' );
				if ( $extra_image_2 ) :
					echo wp_get_attachment_image( $extra_image_2, 'full', false, array( 'class' => 'w-full max-w-full h-auto object-cover' ) );
				endif;
				?>
			</div>
		</div>
	</div>
</section>