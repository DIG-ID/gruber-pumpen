<section class="section-media-corner-content py-28">
	<div class="theme-container">
		<div class="theme-grid invisible fade-in--noscroll">
			<div class="lg:col-start-2 col-span-2 lg:col-span-4">
				<h2 class="text-title-h2 text-brown-shade-4 mb-10 lg:mb-16"><?php the_field( 'releases_title' ); ?></h2>
				<?php
				if ( have_rows( 'releases' ) ) :
					while ( have_rows( 'releases' ) ) :
						the_row();
						?>
						<div class="card-media mb-8 lg:mb-16">
							<p class="text-body mb-4"><?php the_sub_field( 'date' ); ?></p>
							<a href="<?php echo esc_html( get_sub_field( 'link' ) ); ?>" target="_blank"><h3 class="text-title-h3 text-brown-shade-4 underline"><?php the_sub_field( 'title' ); ?></h3></a>
						</div>
						<?php
					endwhile;
				endif;
				?>
			</div>
			<div class="lg:col-start-8 col-span-2 lg:col-span-4">
			<h2 class="text-title-h2 text-brown-shade-4 mb-10 mt-10 lg:mt-0 lg:mb-16"><?php the_field( 'results_title' ); ?></h2>
				<?php
				if ( have_rows( 'results' ) ) :
					while ( have_rows( 'results' ) ) :
						the_row();
						?>
						<div class="card-media mb-8 lg:mb-16">
							<p class="text-body mb-4"><?php the_sub_field( 'date' ); ?></p>
							<a href="<?php echo esc_html( get_sub_field( 'link' ) ); ?>" target="_blank"><h3 class="text-title-h3 text-brown-shade-4 underline"><?php the_sub_field( 'title' ); ?></h3></a>
						</div>
						<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
</section>
