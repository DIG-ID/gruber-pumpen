<section class="section-cta bg-blue-shade-2 py-16 relative overflow-hidden">
	<div class="theme-container">
		<div class="flex justify-between">
			<div class="text max-w-96">
				<h2 class="font-poppins font-normal text-2xl tracking-wider text-blue-shade-4"><?php the_field( 'call_to_action_text' ); ?></h2>
			</div>
			<?php
			$blink = get_field( 'call_to_action_button' );
			if ( $blink ) :
				$link_url    = $blink['url'];
				$link_title  = $blink['title'];
				$link_target = $blink['target'] ? $link['target'] : '_self';
				?>
				<a class="btn-custom btn-custom--double-arrows self-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
