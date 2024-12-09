<section class="section-langzeitaufenthalt-teaser text-brown-shade-4 pt-9 pb-11 lg:py-40">
	<div class="theme-container">
		<h2 class="text-title text-center mb-6 lg:mb-20 fade-in"><?php the_field( 'archive_zimmer_langzeitaufenthalt_title', 'options' ); ?></h2>
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-4 lg:col-start-2 order-2 lg:order-1 fade-in">
				<h3 class="text-title-h3 mb-5"><?php the_field( 'archive_zimmer_langzeitaufenthalt_subtitle', 'options' ); ?></h3>
				<p class="text-body mb-8 lg:mb-16"><?php the_field( 'archive_zimmer_langzeitaufenthalt_description', 'options' ); ?></p>
				<?php
				$zlink = get_field( 'archive_zimmer_langzeitaufenthalt_link', 'options' );
				if ( $zlink ) :
					$link_url    = $zlink['url'];
					$link_title  = $zlink['title'];
					$link_target = $zlink['target'] ? $zlink['target'] : '_self';
					?>
					<a class="btn-internal btn-internal--shade-transparent " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-start-7 lg:col-span-5 order-1 lg:order-2 fade-in">
			<?php
				$limage = get_field( 'archive_zimmer_langzeitaufenthalt_image', 'options' );
				if ( $limage ) :
					echo wp_get_attachment_image( $limage, 'long-term-image', false, array( 'class' => 'w-full object-cover rounded-[20px] mb-10 lg:mb-0' ) );
				endif;
				?>
			</div>
		</div>
	</div>
</section>
