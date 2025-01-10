<?php
get_header();
do_action( 'before_main_content' );
?>
<section class="page-header pt-28 lg:pt-64 pb-0 lg:-mb-[70px]">
	<div class="theme-container">
		<div class="flex flex-col w-full text-center">
			<div class="page-header--title">
				<h1 class="font-outfit font-light text-5xl xl:text-[250px] py-5 lg:py-10 invisible"><?php echo esc_html__( '404', 'gruber-pumpen' ) ?></h1>
			</div>
		</div>
	</div>
</section>
<section class="section-error-404 not-found pt-32 pb-48">
	<div class="theme-container text-center">
            <h3 class="text-title-h3 !font-light mb-12"><?php esc_html_e( 'Page not found', 'gruber-pumpen' ) ?></h3>
            <?php
            $booking_url = get_field( 'booking_url', 'options' );
            if ( $booking_url ) :
                ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-internal btn-internal--shade-4 !py-3 !px-32 !font-light tracking-[0.2px]"><?php esc_html_e( 'Homepage', 'gruber-pumpen' ); ?></a><?php
            endif;
            ?>
    </div>
</section>

<?php
do_action( 'after_main_content' );
get_footer();