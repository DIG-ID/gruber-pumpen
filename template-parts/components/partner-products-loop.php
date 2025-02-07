<?php
$products_args = array(
	'post_type'      => 'partnerprodukt',
	'post_status'    => 'publish',
	'posts_per_page' => -1,
	'orderby'        => 'date',
	'order'          => 'DESC',
);

$products_query = new WP_Query( $products_args );
if ( $products_query->have_posts() ) :
	while ( $products_query->have_posts() ) :
		$products_query->the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-span-1' ); ?>>
			<div class="box box--sm w-full flex justify-center items-center min-h-32">
				<?php
				if ( has_post_thumbnail() ) :
					the_post_thumbnail( 'full', array( 'class' => 'max-w-full max-h-full h-auto object-cover' ) );
				endif
				?>
			</div>
		</article>
		<?php
	endwhile;
endif;
wp_reset_postdata();
