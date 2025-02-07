<section class="section-partner-products py-14 md:py-16 lg:py-24">
	<div class="theme-container theme-grid partner-wrapper">
		<div class="col-span-2 md:col-spn-6 lg:col-span-5">
			<div class="flex items-center gap-4 mb-4">
				<h4 class="text-orange-shade-1"><?php the_field( 'partnerprodukte_eyebrow' ); ?></h4>
				<hr class="border border-orange-shade-1  w-[4.5rem]" />
			</div>
			<h2 class="text-title-h2 text-blue-shade-4 mb-10"><?php the_field( 'partnerprodukte_title' ); ?></h2>
			<p class="text-p--1 mb-8"><?php the_field( 'partnerprodukte_description_1' ); ?></p>
			<p class="text-p--2 mb-14"><?php the_field( 'partnerprodukte_description_2' ); ?></p>
			<?php
			$blink = get_field( 'partnerprodukte_link' );
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
		<div class="col-span-2 md:col-span-6 lg:col-start-7 lg:col-span-6">
			<div class="grid grid-cols-2 gap-8">
				<div class="col-span-1">
					<div class="box box--sm w-full flex justify-center items-center">
						logo 1
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
