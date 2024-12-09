<section class="section-zimmer-archive-info relative bg-brown-shade-3 lg:bg-white">
	<div class="theme-container">
		<div class="theme-grid fade-in">
			<div class="zimmer-info col-span-2 lg:col-span-12 bg-brown-shade-3 flex flex-col lg:flex-row lg:justify-between lg:rounded-[20px] pt-14 pb-20 lg:pt-20 lg:pb-16 xl:pt-24 xl:pb-16 lg:px-10 xl:px-28">
				<div class="w-full mb-20">
					<h2 class="text-title-h2 text-brown-shade-1 mb-9 lg:mb-16 text-center lg:text-left"><?php the_field( 'archive_zimmer_info_equipment_title', 'options' );?></h2>
					<?php
					if ( have_rows( 'archive_zimmer_info_equipment_list', 'options' ) ) :
						?><ul class="list__include-services flex flex-col"><?php
						while ( have_rows( 'archive_zimmer_info_equipment_list', 'options' ) ) :
							the_row();
							?>
							<li class="text-body--serif text-brown-shade-1"><?php the_sub_field( 'text' ); ?></li>
							<?php
						endwhile;
						?></ul><?php
					endif;
					?>
				</div>
				<div class="hidden invisible lg:block lg:visible">
					<span class="w-[1px] h-full bg-brown-shade-2 block mx-28"></span>
				</div>
				<div class="w-full mt-10 lg:mt-0">
					<div class="flex flex-col items-center lg:items-start mb-16">
						<h2 class="text-title-h2 text-brown-shade-1 mb-8 lg:mb-10 text-center lg:text-left"><?php the_field( 'archive_zimmer_info_services_title', 'options' ); ?></h2>
						<p class="text-body text-brown-shade-1 w-full lg:w-3/5 mb-9 text-center lg:text-left"><?php the_field( 'archive_zimmer_info_services_description', 'options' ); ?></p>
						<?php
						$slink = get_field( 'archive_zimmer_info_services_link', 'options' );
						if ( $slink ) :
							$link_url    = $slink['url'];
							$link_title  = $slink['title'];
							$link_target = $slink['target'] ? $slink['target'] : '_self';
							?>
							<a class="btn-internal btn-internal--shade-2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php
						endif;
						?>
					</div>
					<div class="flex flex-col items-center lg:items-start">
						<h2 class="text-title-h2 text-brown-shade-1 mb-8 lg:mb-10 text-center lg:text-left"><?php the_field( 'archive_zimmer_info_sustainability_title', 'options' ); ?></h2>
						<p class="text-body text-brown-shade-1 w-full lg:w-3/5 mb-9 text-center lg:text-left"><?php the_field( 'archive_zimmer_info_sustainability_description', 'options' ); ?></p>
						<?php
						$slink = get_field( 'archive_zimmer_info_sustainability_link', 'options' );
						if ( $slink ) :
							$link_url    = $slink['url'];
							$link_title  = $slink['title'];
							$link_target = $slink['target'] ? $slink['target'] : '_self';
							?>
							<a class="btn-internal btn-internal--shade-2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
