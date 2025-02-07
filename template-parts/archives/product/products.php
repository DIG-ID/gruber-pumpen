<section class="section-products">
    <div class="theme-container theme-grid">
        <!-- Services -->
        
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
                    <div class="col-span-1 md:col-span-3 xl:col-span-4 fade-in md:bg-white md:px-9 xl:px-7 pt-6 pb-10 md:pt-10 md:pb-32 mb-10 xl:mb-0 rounded-3xl">
                        <div>
                            <?php
                            $image = get_post_thumbnail_id();
                            if ( $image ) :
                                echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full max-w-[294px] fade-in' ) );
                            endif;
                            ?>
                        </div>
                        <h2 class="text-title-h4 text-blue-shade-4 text-left mt-3 md:mt-6 mb-5 md:mb-6 fade-in"><?php the_title(); ?></h2>
                        <p class="text-p--2 invisible fade-in"><?php the_field( 'description' ); ?></p>
                        <a class="btn btn--secondary uppercase inline-block mt-10 absolute bottom-7" href="<?php the_permalink(); ?>">
                            <?php esc_html_e('MEHR ERFAHREN', 'gruber-pumpen'); ?>
                        </a>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
    </div>
</section>