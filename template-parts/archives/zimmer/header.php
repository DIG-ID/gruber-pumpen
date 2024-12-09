<section class="page-header bg-brown-shade-4 text-brown-shade-1 pt-28 lg:pt-64 pb-20 lg:pb-40">
	<div class="theme-container">
		<div class="flex flex-col w-full text-center">
			<div class="page-header--breadcrumbs invisible fade-in--noscroll">
				<?php do_action( 'breadcrumbs' ); ?>
			</div>
			<div class="page-header--title invisible fade-in--noscroll">
				<?php
				$page_header_title = get_field( 'archive_zimmer_header_title', 'options' );
				if ( $page_header_title ) :
					?>
					<h1 class="text-title py-5 lg:py-10"><?php the_field( 'archive_zimmer_header_title', 'options' ); ?></h1>
					<?php
				else :
					?>
					<h1 class="text-title py-5 lg:py-10"><?php the_archive_title(); ?></h1>
					<?php
				endif;
				?>
			</div>
			<div class="page-header--description w-3/4 lg:w-[40%] mx-auto invisible fade-in--noscroll">
				<?php
				$page_header_desc = get_field( 'archive_zimmer_header_description', 'options' );
				if ( $page_header_desc ) :
					?>
					<p class="text-description"><?php the_field( 'archive_zimmer_header_description', 'options' ); ?></p>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
