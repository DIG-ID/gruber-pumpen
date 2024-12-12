<?php
if ( have_rows( 'teasers_boxes' ) ) :
	?>
	<section class="section-teasers py-44 relative overflow-hidden">
		<div class="bg-blue-shade-2 absolute w-full h-full left-0 top-0 flex justify-center items-center -z-[1]">
			<svg xmlns="http://www.w3.org/2000/svg" width="720" height="816" viewBox="0 0 720 816" fill="none" class="opacity-10">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M502.369 565.037C521.695 487.149 571.331 448.927 584.544 403.514C597.668 333.794 547.327 275.423 555.961 204.787C561.812 124.152 623.17 97.9881 619.814 15.4752C607.388 -93.1763 488.982 -40.2059 411.955 -55.9113C335.782 -76.1587 250.95 -175.52 195.331 -80.7421C157.815 -6.56277 199.803 45.3888 176.841 117.819C154.734 185.708 87.8052 215.452 70.232 284.029C62.3658 325.815 92.7636 389.789 78.784 464.051C64.9352 562.393 -6.12916 615.347 1.31974 674.877C14.1016 807.654 147.509 748.074 239.091 762.031C328.065 789.84 430.232 897.452 494.703 780.426C517.123 736.891 479.313 661.502 502.369 565.037ZM479.032 738.557C422.559 837.877 331.44 747.138 256.164 722.121C173.79 710.042 55.3851 763.013 44.6687 645.277C40.0464 620.281 54.2877 594.179 68.4862 568.305C130.349 465.132 228.394 519.08 228.394 519.08C143.78 468.106 118.098 405.094 110.513 369.826C105.891 344.83 101.044 319.788 104.55 301.166C109.808 273.233 128.722 248.32 146.557 227.903C196.15 189.908 322.309 244.4 322.309 244.4C225.974 181.368 206.312 109.915 200.835 89.4611C198.863 50.385 187.641 9.65872 209.837 -33.9225C258.089 -115.582 320.725 27.3609 387.915 45.7767C464.943 61.4821 564.584 -67.7102 578.22 60.5252C579.337 104.143 560.604 129.329 545.284 159.927C544.429 164.469 497.887 237.044 372.121 254.792C372.121 254.792 508.08 258.46 539.108 317.845C548.447 343.803 557.56 369.714 551.447 402.19C547.941 420.812 540.842 433.749 528.129 450.494L528.984 445.952C528.984 445.952 488.817 534.212 348.722 553.754C348.722 553.754 454.545 541.609 473.571 665.991C476.074 670.038 474.598 670.445 473.956 668.899C476.9 701.571 481.202 725.793 478.679 739.192L479.032 738.557Z" fill="#8E827B"/>
			</svg>
		</div>
		<div class="max-w-7xl mx-auto px-4 relative z-50">
			<div class="grid grid-cols-2 md:grid-cols-6 lg:grid-cols-12 gap-8">
				<?php
				while ( have_rows( 'teasers_boxes' ) ) :
					the_row();
					?>
					<div class="col-span-2 md:col-span-6 lg:col-span-6">
						<article class="bg-white md:grid md:grid-cols-6 md:min-h-[430px] relative">
							<span class="absolute left-3 right-3 bottom-3 top-3 border border-white z-0"></span>
							<div class="col-span-2">
								<?php
								$teasers_image = get_sub_field( 'image' );
								if ( $teasers_image ) :
									echo wp_get_attachment_image( $teasers_image, 'full', false, array( 'class' => 'w-full h-full object-cover' ) );
								else :
									echo '<img class="w-full h-full object-cover" src="https://picsum.photos/600/400?random=1" alt="">';
								endif;
								?>
							</div>
							<div class="col-span-4 flex flex-col justify-between px-6 md:px-12 py-9 md:py-16">
								<div class="z-10">
									<h2 class="font-serif text-3xl mb-4 md:mb-6"><?php the_sub_field( 'title' ); ?></h2>
									<p class="text-body"><?php the_sub_field( 'text' ); ?></p>
								</div>
								<?php
								$teasers_btn = get_sub_field( 'button' );
								if ( $teasers_btn ) :
									$teasers_btn_url    = $teasers_btn['url'];
									$teasers_btn_title  = $teasers_btn['title'];
									$teasers_btn_target = $teasers_btn['target'] ? $teasers_btn['target'] : '_self';
									?>
									<a class="btn-custom btn-custom--double-arrows self-start" href="<?php echo esc_url( $teasers_btn_url ); ?>" target="<?php echo esc_attr( $teasers_btn_target ); ?>"><?php echo esc_html( $teasers_btn_title ); ?></a>
									<?php
								endif;
								?>
							</div>
						</article>
					</div>
					<?php
				endwhile;
				?>
			</div>
		</div>
	</section>
	<?php
endif;
