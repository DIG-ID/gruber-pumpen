<section class="section-intro pt-10 md:pt-20 xl:pt-24 pb-24 xl:pb-8 overflow-hidden bg-blue-shade-0">
    <div class="theme-container theme-grid">
        <!-- Intro -->
        <div class="col-span-2 md:col-span-6 xl:col-span-12 theme-grid flex justify-between invisible fade-in--noscroll">
            <div class="col-span-2 md:col-span-6 xl:col-span-12">
                <div class="flex items-center gap-4">
                    <?php
                    $services_eyebrow = get_field('services_eyebrow');
                    if ($services_eyebrow): ?>
                        <h4 class="text-orange-shade-1 text-eyebrow"><?php echo $services_eyebrow; ?></h4>
                    <?php endif; ?>
                    <hr class="border border-orange-shade-1  w-[4.5rem]" />
                </div>
            </div>
            <div class="col-span-2 md:col-span-6 xl:col-span-6">
                <?php
                $services_title = get_field('services_title');
                if ($services_title): ?>
                    <h2 class="text-title-h2 max-w-80 md:max-w-[475px] text-blue-shade-4 mb-6 md:mb-10 xl:mb-0">
                        <?php echo $services_title; ?>
                    </h2>
                <?php endif; ?>
            </div>
            <div class="col-span-2 md:col-span-6 xl:col-span-6">
                <div class="text-p--2 max-w-[575px]">
                    <?php the_field('services_description'); ?>
                </div>
            </div>
        </div>

        <!------>

        <!-- Services -->

        <div class="col-span-2 md:col-span-6 xl:col-span-12 grid grid-cols-2 md:grid-cols-6 lg:grid-cols-12 gap-x-6 mt-20 md:mt-16 xl:mt-20">
            <?php
            $training_args = array(
                'post_type'   => 'training',
                'post_status' => 'publish',
                'nopaging'    => true,
                'orderby'     => 'date',
                'order'       => 'ASC',
            );

            $training_query = new WP_Query($training_args);
            if ($training_query->have_posts()) :
                while ($training_query->have_posts()) :
                    $training_query->the_post();
                    ?>
                    <div class="bg-transparent md:bg-white pt-0 pb-16 md:pt-10 md:pb-20 xl:py-10 md:px-7 md:rounded-[1.25rem] col-span-2 md:col-span-6 lg:col-span-6 grid grid-cols-2 gap-x-6">
                        <div class="col-span-2">
                            <h3 class="text-title-h4 text-[#063047] mb-4 md:mb-7 xl:mb-8"><?php the_title(); ?></h3>
                        </div>
                        <div class="col-span-2">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="featured-image">
                                    <?php 
                                    the_post_thumbnail('training-featured-img', [
                                        'class' => 'training_featured_image rounded-[1.25rem] w-full lg:w-auto',
                                        'alt' => get_the_title()
                                    ]); 
                                    ?>
                                </div>
                            <?php else : ?>
                                <div class="featured-image-placeholder bg-gray-200 w-full h-40 flex items-center justify-center rounded-lg">
                                    <span class="text-gray-500">No Image Available</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-span-1 pt-6 md:pt-10 md:pb-6 flex flex-col justify-between">
                            <p class="text-p--2"><?php the_field( 'description' ); ?></p>
                            <?php
                            $sust_btn = get_field( 'button' );
                            if ( $sust_btn ) :
                                $sust_btn_url    = $sust_btn['url'];
                                $sust_btn_title  = $sust_btn['title'];
                                $sust_btn_target = $sust_btn['target'] ? $sust_btn['target'] : '_self';
                                ?>
                                <a class="btn btn--secondary self-start uppercase" href="<?php echo esc_url( $sust_btn_url ); ?>" target="<?php echo esc_attr( $sust_btn_target ); ?>"><?php echo esc_html( $sust_btn_title ); ?></a>
                                <?php
                            endif;
                            ?>
                        </div>
                        <div class="col-span-1 pt-6 md:pt-10 pl-5 md:pl-12 md:pr-5">
                            <p class="text-p--2 mb-9"><span class="font-bold text-xl text-[#063047] mb-4"><?php echo esc_html_e( 'Preis:', 'gruber pumpen' ) ?></span><br><?php the_field( 'price' ); ?></p>
                            <p class="text-p--2 mb-9"><span class="font-bold text-xl text-[#063047] mb-4"><?php echo esc_html_e( 'Termine:', 'gruber pumpen' ) ?></span><br><?php the_field( 'appointments' ); ?></p>
                            <p class="text-p--2 mb-9"><span class="font-bold text-xl text-[#063047] mb-4"><?php echo esc_html_e( 'Dauer:', 'gruber pumpen' ) ?></span><br><?php the_field( 'length' ); ?></p>
                            <p class="text-p--2"><span class="font-bold text-xl text-[#063047] mb-4"><?php echo esc_html_e( 'Anzahl:', 'gruber pumpen' ) ?></span><br><?php the_field( 'number' ); ?></p>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

    </div>
</section>
        <!------>

<?php get_template_part( 'template-parts/components/questions'); ?> 