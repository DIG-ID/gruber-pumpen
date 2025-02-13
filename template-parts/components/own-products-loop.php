<div class="products-slider relative col-span-2 md:col-span-6 xl:col-span-12">
    <div class="swiper-wrapper">
        <?php
        $products_args = array(
            'post_type'      => 'eigenprodukte',
            'post_status'    => 'publish',
            'posts_per_page' => 3,
            'orderby'        => 'date',
            'order'          => 'ASC',
        );

        $products_query = new WP_Query( $products_args );
        if ( $products_query->have_posts() ) :
            while ( $products_query->have_posts() ) :
                $products_query->the_post();
                ?>
                <div class="swiper-slide fade-in bg-white md:px-9 xl:px-7 pt-6 md:pt-10 pb-20 md:pb-32 mb-10 xl:mb-0 rounded-3xl">
                    <div>
                        <?php
                        $image = get_post_thumbnail_id();
                        if ( $image ) :
                            echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full max-w-[294px] fade-in' ) );
                        endif;
                        ?>
                    </div>
                    <h2 class="text-title-h4 text-blue-shade-4 text-left mt-3 md:mt-6 mb-5 md:mb-6 px-4 md:px-0 fade-in"><?php the_title(); ?></h2>
                    <p class="text-p--2 px-4 md:px-0 invisible fade-in"><?php the_field( 'description' ); ?></p>
                    <div class="px-4 md:px-0">
                        <a class="btn btn--secondary uppercase inline-block mt-10 absolute bottom-7" href="<?php the_permalink(); ?>">
                            <?php esc_html_e('MEHR ERFAHREN', 'gruber-pumpen'); ?>
                        </a>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
	
</div>
<div class="col-span-2 md:col-span-6 xl:col-span-12 theme-grid block lg:hidden">
	<div class="col-span-2 md:col-span-6 xl:col-span-12 flex justify-start gap-x-4 mt-5">
		<div class="btn--arrow products-swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
		<div class="btn--arrow products-swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
	</div>
</div>