<section class="section-team py-14 md:py-16 lg:py-24 overflow-hidden">
		<div class="theme-container theme-grid">
			<div class="col-span-2 md:col-span-6 xl:col-span-12 flex flex-col items-center mb-8 md:mb-20">
				<div class="flex items-center lg:gap-x-4 invisible fade-in">
					<hr class="border border-orange-shade-1 w-[4.5rem]" />
					<h3 class="text-orange-shade-1 text-center uppercase"><?php the_field( 'team_eyebrow' ); ?></h3>
					<hr class="border border-orange-shade-1 w-[4.5rem]" />
				</div>
				<h2 class="text-title-h2 text-blue-shade-4 py-4 md:py-6 text-center invisible fade-in"><?php the_field( 'team_title' ); ?></h2>
			</div>
			<div class="col-span-2 md:col-span-6 xl:col-span-12">
				<?php
				$team_posts = get_field( 'team_members' );
				if ( $team_posts ) :
					?><ul class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-7 md:gap-6 xl:gap-8 invisible fade-in"><?php
					foreach ( $team_posts as $team_member ) :
						?>
						<li class="team-member--card box box--sm !px-5 col-span-1">
							<?php
							if ( has_post_thumbnail( $team_member->ID ) ) :
								echo get_the_post_thumbnail( $team_member->ID, 'full', array( 'class' => 'max-w-full w-full h-auto object-cover rounded-[1.25rem]' ) );
							endif;
							?>
							<div class="flex justify-between items-center py-4">
								<p class="text-subtitle text-blue-shade-4"><?php echo esc_html( get_the_title( $team_member->ID ) ); ?></p>
								<?php
								$email = get_field( 'email', $team_member->ID );
								if ( $email ) :
									echo '<a href="mailto:' . esc_attr( $email ) . '"><svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.5 0.875H11.25C9.875 0.875 8.75 2 8.75 3.375V14.625C8.75 15.288 9.01339 15.9239 9.48223 16.3928C9.95107 16.8616 10.587 17.125 11.25 17.125H27.5C28.8875 17.125 30 16.0125 30 14.625V3.375C30 2.71196 29.7366 2.07607 29.2678 1.60723C28.7989 1.13839 28.163 0.875 27.5 0.875ZM27.5 14.625H11.25V5.4625L19.375 9.625L27.5 5.4625V14.625ZM19.375 7.5125L11.25 3.375H27.5L19.375 7.5125ZM6.25 14.625C6.25 14.8375 6.2875 15.0375 6.3125 15.25H1.25C0.56 15.25 0 14.6875 0 14C0 13.3125 0.56 12.75 1.25 12.75H6.25V14.625ZM3.75 2.75H6.3125C6.2875 2.9625 6.25 3.1625 6.25 3.375V5.25H3.75C3.0625 5.25 2.5 4.6875 2.5 4C2.5 3.3125 3.0625 2.75 3.75 2.75ZM1.25 9C1.25 8.3125 1.8125 7.75 2.5 7.75H6.25V10.25H2.5C1.8125 10.25 1.25 9.6875 1.25 9Z" fill="#688494"/></svg></a>';
								endif;
								?>
							</div>
							<p class="text-p--2"><?php echo esc_html( get_field( 'position', $team_member->ID ) ); ?></p>
							<p class="text-p--2"><?php echo esc_html( get_field( 'description', $team_member->ID ) ); ?></p>
						</li>
						<?php
					endforeach;
					?></ul><?php
				endif;
				?>
			</div>
		</div>
</section>
