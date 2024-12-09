<section class="section-jobs-content bg-brown-shade-4 text-brown-shade-2 pb-28">
	<div class="theme-container">
		<div class="theme-grid">
			<!--<div class="col-12 col-xl-4">
				<p class="d-none d-lg-block"><?php esc_html_e( 'Nach Position filtern:', 'baeren' ); ?></p>
				<div class="job-button-group job-filters-button-group">
					<button class="button is-checked" data-filter="*"><?php esc_html_e( 'Alle', 'baeren' ); ?></button>
					<?php
					$job_positions = get_terms(
						array(
							'taxonomy'   => 'job_position',
							'hide_empty' => true,
						)
					);
					foreach ( $job_positions as $job_position ) :
						echo '<button class="button" data-filter=".' . esc_attr( $job_position->slug ) . '">' . esc_html( $job_position->name ) . '</button>';
					endforeach
					?>
				</div>
			</div>-->
			<div class="col-span-2 lg:col-start-2 lg:col-span-10 grid grid-cols-2 lg:grid-cols-10 gap-6 invisible fade-in--noscroll">
				<?php
				$args = array(
					'post_type'   => 'jobs',
					'post_status' => 'publish',
					/*'tax_query'   => array(
						array(
							'taxonomy' => 'job_position', // Custom taxonomy slug
							'operator' => 'EXISTS', // Check if the post has any term from this taxonomy
						),
					),*/
				);

				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						// Get the terms (categories) the current post belongs to
						/*
						$jobs_cats = get_the_terms( get_the_ID(), 'job_position' );
						$job_slug = '';
						if ( $jobs_cats ) :
							foreach ( $jobs_cats as $jobs_cat ) :
									$job_slug = $jobs_cat->slug;
									break;
							endforeach;
						endif;
						*/
						?>
						<?php 
						$post_card_classes = 'card-job col-span-2 lg:col-span-5  grid-item bg-white rounded-[20px] h-[250px]' . esc_attr( isset( $args['slug'] ) ? $args['slug'] : '*' );
						?>
						<article data-category="<?php echo esc_attr( isset( $args['slug'] ) ? $args['slug'] : '*' ); ?>" id="post-<?php the_ID(); ?>" <?php post_class( $post_card_classes ); ?> >
							<div class="card-job-content  px-16 py-14 flex flex-col justify-between h-full">
								<h2 class="text-title-h3 text-brown-shade-4"><?php the_title(); ?></h2>
								<a href="<?php the_permalink(); ?>" class="card-job-btn btn btn-external btn-external--shade-1"><?php esc_html_e( 'Angebot anzeigen', 'baeren' ); ?></a>
							</div>
						</article>
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
		</div>
	</div>
</section>
