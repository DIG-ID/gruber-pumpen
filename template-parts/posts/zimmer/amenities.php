<section class="section-amenities bg-brown-shade-1 pt-10">
	<div class="theme-container fade-in">
		<div class="theme-grid px-0 lg:px-6 xl:px-0">
			<div class="col-span-2 lg:col-span-7">
				<h2 class="text-title-h3 text-brown-shade-4 mb-10"><?php the_field( 'amenities_title' ); ?></h2>
				<ul class="section-amenities-lists">
					<li>
						<?php
						if ( have_rows( 'amenities_lists_list_1' ) ) :
							?><h3 class="font-poppins font-bold text-sm text-brown-shade-4 tracking-[0.14px] mb-3"> <?php the_field( 'amenities_lists_list_1_name' ); ?></h3><?php
							echo '<ul class="amenities-list">';
							while ( have_rows( 'amenities_lists_list_1' ) ) :
								the_row();
								echo '<li>' . get_sub_field( 'item' ) . '</li>';
							endwhile;
							echo '</ul>';
						endif;
						if ( have_rows( 'amenities_lists_list_2' ) ) :
							?><h3 class="font-poppins font-bold text-sm text-brown-shade-4 tracking-[0.14px] mb-3"> <?php the_field( 'amenities_lists_list_2_name' ); ?></h3><?php
							echo '<ul class="amenities-list">';
							while ( have_rows( 'amenities_lists_list_2' ) ) :
								the_row();
								echo '<li>' . get_sub_field( 'item' ) . '</li>';
							endwhile;
							echo '</ul>';
						endif;
						?>
					</li>
					<li>
						<?php
						if ( have_rows( 'amenities_lists_list_3' ) ) :
							?><h3 class="font-poppins font-bold text-sm text-brown-shade-4 tracking-[0.14px] mb-3"> <?php the_field( 'amenities_lists_list_3_name' ); ?></h3><?php
							echo '<ul class="amenities-list">';
							while ( have_rows( 'amenities_lists_list_3' ) ) :
								the_row();
								echo '<li>' . get_sub_field( 'item' ) . '</li>';
							endwhile;
							echo '</ul>';
						endif;
						if ( have_rows( 'amenities_lists_list_4' ) ) :
							?><h3 class="font-poppins font-bold text-sm text-brown-shade-4 tracking-[0.14px] mb-3"> <?php the_field( 'amenities_lists_list_4_name' ); ?></h3><?php
							echo '<ul class="amenities-list">';
							while ( have_rows( 'amenities_lists_list_4' ) ) :
								the_row();
								echo '<li>' . get_sub_field( 'item' ) . '</li>';
							endwhile;
							echo '</ul>';
						endif;
						?>
					</li>
					<li>
						<?php
						if ( have_rows( 'amenities_lists_list_5' ) ) :
							?><h3 class="font-poppins font-bold text-sm text-brown-shade-4 tracking-[0.14px] mb-3"> <?php the_field( 'amenities_lists_list_5_name' ); ?></h3><?php
							echo '<ul class="amenities-list">';
							while ( have_rows( 'amenities_lists_list_5' ) ) :
								the_row();
								echo '<li>' . get_sub_field( 'item' ) . '</li>';
							endwhile;
							echo '</ul>';
						endif;
						if ( have_rows( 'amenities_lists_list_6' ) ) :
							?><h3 class="font-poppins font-bold text-sm text-brown-shade-4 tracking-[0.14px] mb-3"> <?php the_field( 'amenities_lists_list_6_name' ); ?></h3><?php
							echo '<ul class="amenities-list">';
							while ( have_rows( 'amenities_lists_list_6' ) ) :
								the_row();
								echo '<li>' . get_sub_field( 'item' ) . '</li>';
							endwhile;
							echo '</ul>';
						endif;
						?>
					</li>
				</ul>
			</div>
			<div class="col-span-2 lg:col-span-4 col-start-1 lg:col-start-9">
				<h2 class="text-title-h3 text-brown-shade-4 mb-10"><?php the_field( 'single_zimmer_breakfast_title', 'options' ); ?></h2>
				<p class="text-body text-brown-shade-4 mb-10"><?php the_field( 'single_zimmer_breakfast_description', 'options' ); ?></p>
				<div class="note flex gap-x-2">
					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20" fill="none">
						<path d="M8.54273 15H10.4411V9H8.54273V15ZM9.49192 7C9.76085 7 9.98645 6.904 10.1687 6.712C10.3509 6.52 10.4417 6.28267 10.4411 6C10.4411 5.71667 10.35 5.47933 10.1677 5.288C9.9855 5.09667 9.76022 5.00067 9.49192 5C9.22298 5 8.9977 5.096 8.81609 5.288C8.63448 5.48 8.54336 5.71733 8.54273 6C8.54273 6.28333 8.63385 6.521 8.81609 6.713C8.99834 6.905 9.22361 7.00067 9.49192 7ZM9.49192 20C8.17887 20 6.94492 19.7373 5.79007 19.212C4.63522 18.6867 3.63066 17.9743 2.77639 17.075C1.92211 16.175 1.24597 15.1167 0.747963 13.9C0.249954 12.6833 0.000632794 11.3833 0 10C0 8.61667 0.249321 7.31667 0.747963 6.1C1.24661 4.88333 1.92275 3.825 2.77639 2.925C3.63066 2.025 4.63522 1.31267 5.79007 0.788C6.94492 0.263333 8.17887 0.000666667 9.49192 0C10.805 0 12.0389 0.262667 13.1938 0.788C14.3486 1.31333 15.3532 2.02567 16.2074 2.925C17.0617 3.825 17.7382 4.88333 18.2368 6.1C18.7355 7.31667 18.9845 8.61667 18.9838 10C18.9838 11.3833 18.7345 12.6833 18.2359 13.9C17.7372 15.1167 17.0611 16.175 16.2074 17.075C15.3532 17.975 14.3486 18.6877 13.1938 19.213C12.0389 19.7383 10.805 20.0007 9.49192 20ZM9.49192 18C11.6118 18 13.4073 17.225 14.8786 15.675C16.3498 14.125 17.0855 12.2333 17.0855 10C17.0855 7.76667 16.3498 5.875 14.8786 4.325C13.4073 2.775 11.6118 2 9.49192 2C7.37206 2 5.5765 2.775 4.10525 4.325C2.63401 5.875 1.89838 7.76667 1.89838 10C1.89838 12.2333 2.63401 14.125 4.10525 15.675C5.5765 17.225 7.37206 18 9.49192 18Z" fill="#0E324A"/>
					</svg>
					<p class="text-body text-brown-shade-4"><?php the_field( 'single_zimmer_breakfast_note', 'options' ); ?></p>
				</div>
			</div>
		</div>
		<span class="w-full h-[1px] bg-brown-shade-3 block mt-20"></span>
		<div class="back-to-archive flex items-center gap-x-2 pt-4 pb-20">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="8" viewBox="0 0 24 8" fill="none">
				<path d="M0.646447 3.64645C0.451184 3.84171 0.451184 4.15829 0.646447 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.976311 4.7308 0.659728 4.53553 0.464466C4.34027 0.269204 4.02369 0.269204 3.82843 0.464466L0.646447 3.64645ZM24 3.5H1V4.5H24V3.5Z" fill="#3E6C8A"/>
			</svg>
			<a class="font-poppins font-semibold text-sm text-brown-shade-3 tracking-[0.14px] uppercase" href="<?php echo esc_url( get_post_type_archive_link( 'zimmer' ) ); ?>"><?php esc_html_e( 'Zurück zu den zimmern', 'baeren' ); ?></a>
		</div>
	</div>
</section>
