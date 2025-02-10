<section class="section-content-1 pt-10 md:pt-20 xl:pt-24 pb-24 xl:pb-40 overflow-hidden bg-blue-shade-0">
	<div class="theme-container theme-grid">
		<div id="content-1" class="col-span-2 md:col-span-6 xl:col-span-7 col-start-1 border-b border-blue-shade-2 pb-12 md:pb-7 xl:pb-12">
			<?php get_template_part( 'template-parts/posts/pe-behalter/content-1'); ?>
		</div>
		<div id="content-button" class="col-span-2 md:col-span-6 xl:col-span-7 col-start-1 my-12">
				<?php
				$product_link = get_field( 'button' );
				if ( $product_link ) :
					$product_link_target = $product_link['target'] ? $product_link['target'] : '_self';
					?>
					<a class="btn btn--secondary uppercase inline-block" href="<?php echo esc_url( $product_link['url'] ); ?>"target="<?php echo esc_attr( $product_link_target ); ?>"><?php echo esc_html( $product_link['title'] ); ?>
					</a>
				<?php endif; ?>
		</div>
		<div id="gallery" class="col-span-2 md:col-span-6 xl:col-span-12 col-start-1">
			<?php get_template_part( 'template-parts/posts/pe-behalter/gallery'); ?>
		</div>
	</div>
</section>
