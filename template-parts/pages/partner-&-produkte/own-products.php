<section class="section-own-products py-14 md:py-16 lg:py-24">
	<div class="theme-container theme-grid partner-wrapper">
		<div class="col-span-2 md:col-span-6 lg:col-span-5">
			<div class="flex items-center gap-4 mb-4">
				<h4 class="text-orange-shade-1"><?php the_field( 'eigenprodukte_eyebrow' ); ?></h4>
				<hr class="border border-orange-shade-1  w-[4.5rem]" />
			</div>
			<h2 class="text-title-h2 text-blue-shade-4"><?php the_field( 'eigenprodukte_title' ); ?></h2>
		</div>
		<div class="col-span-2 md:col-span-6 lg:col-start-7 lg:col-span-6">
			<p class="text-p--1 mb-8"><?php the_field( 'eigenprodukte_description_1' ); ?></p>
			<p class="text-p--2"><?php the_field( 'eigenprodukte_description_2' ); ?></p>
		</div>
		<div class="col-span-2 md:col-span-6 lg:col-span-12 theme-grid pt-24 pb-12">
			<?php get_template_part( 'template-part/components/own-products-loop' ); ?>
		</div>
		<div class="col-span-2 md:col-span-6 lg:col-span-12 flex justify-center items-center">
			<?php
			$blink = get_field( 'eigenprodukte_link' );
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
</section>
