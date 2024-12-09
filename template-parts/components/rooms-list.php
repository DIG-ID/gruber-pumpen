<?php

$args = array(
	'post_type'      => 'zimmer',
	'post_status'    => 'published',
	'orderby'        => 'date',
	'order'          => 'ASC',
	'posts_per_page' => -1,
	'post__not_in'   => array( get_the_ID() ),
);

$rooms_query = new WP_Query( $args );

if ( $rooms_query->have_posts() ) :
	echo '<ul class="rooms-list">';
	while ( $rooms_query->have_posts() ) :
		$rooms_query->the_post();
		$room_title   = get_the_title();
		$room_link    = get_the_permalink();
		$room_excerpt = get_the_excerpt();
		?>
		<li class="room__item">
			<div class="room__item--body">
				<div class="room__item--wrapper">
					<div class="room__item--details">
						<div class="room__item--content">
							<h2><?php echo $room_title; ?></h2>
							<?php
							do_action( 'stay_room_features' );
							if ( $room_excerpt ) :
								echo '<p>' . $room_excerpt . '</p>';
							endif;
							?>
						</div>
						<a href="<?php echo esc_url( $room_link ); ?>" class="room__item--link">
							<?php esc_html_e( 'zu den Zimmern', 'baeren' ); ?>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" viewBox="0 0 20 10" fill="none">
								<path d="M1 0.785156L8.37584 4.99992L1 9.21469M11.5369 0.785156L18.9128 4.99992L11.5369 9.21469"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
			<div class="room__item--body room__item--clone">
				<div class="room__item--bg">
					<?php
					if ( has_post_thumbnail() ) :
						the_post_thumbnail( 'zimmer-thumbnail', array( 'class' => 'w-full h-full object-cover' ) );
					else :
						echo '<img src="https://picsum.photos/1920/600?random" alt="" class="w-full max-w-full h-full object-cover">';
					endif;
					?>
				</div>
				<div class="room__item--wrapper">
					<div class="room__item--details">
						<div class="room__item--content">
							<h2><?php echo $room_title; ?></h2>
							<?php
							do_action( 'stay_room_features' );
							if ( $room_excerpt ) :
								echo '<p>' . $room_excerpt . '</p>';
							endif;
							?>
						</div>
						<a href="<?php echo esc_url( $room_link ); ?>" class="room__item--link">
							<?php esc_html_e( 'zu den Zimmern', 'baeren' ); ?>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" viewBox="0 0 20 10" fill="none">
								<path d="M1 0.785156L8.37584 4.99992L1 9.21469M11.5369 0.785156L18.9128 4.99992L11.5369 9.21469"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</li>
		<?php
	endwhile;
	echo '</ul>';
endif;

wp_reset_postdata();
