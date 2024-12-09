<section class="single-zimmer-header text-brown-shade-1 pt-28 lg:pt-64">
	<div class="theme-container relative">
		<div class="flex flex-col w-full text-center">
			<div class="page-header--breadcrumbs mb-14 invisible fade-in--noscroll">
				<?php do_action( 'breadcrumbs' ); ?>
			</div>
		</div>
		<?php
		$gallery = get_field( 'gallery' );
		if ( $gallery ) :
			?>
			<div class="swiper zimmerSwiper invisible fade-in--noscroll">
				<div class="swiper-wrapper">
					<?php
					foreach ( $gallery as $gallery_id ) :
						?>
						<div class="swiper-slide">
							<?php echo wp_get_attachment_image( $gallery_id, 'zimmer-image', false, array( 'class' => 'w-full object-cover max-h-[700px]' ) ); ?>
						</div>
						<?php 
					endforeach;
					?>
					</div>
				</div>
				<div class="swiper-button-next zimmerSwiper-button-next -right-3 hidden xl:block"></div>
				<div class="swiper-button-prev zimmerSwiper-button-prev -left-3 hidden xl:block"></div>
			</div>
			<?php
		endif;
		?>
	</div>
</section>
<div class="separator">
	<span class="separator__diamond separator__diamond--red"></span>
</div>
