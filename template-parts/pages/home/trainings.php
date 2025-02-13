<section class="section-trainings pt-16 pb-5 md:py-28 overflow-hidden bg-blue-shade-0">
    <div class="theme-container theme-grid">
            <div class="col-span-2 md:col-span-6 xl:col-span-12 flex items-center justify-center gap-4 invisible fade-in">
                <hr class="border border-orange-shade-1 w-[4.5rem]" />
                <?php
                $trainings_eyebrow = get_field('trainings_eyebrow');
                if ($trainings_eyebrow): ?>
                    <h4 class="text-orange-shade-1 text-center text-eyebrow"><?php echo $trainings_eyebrow; ?></h4>
                <?php endif; ?>
                <hr class="border border-orange-shade-1  w-[4.5rem]" />
            </div>
            <div class="col-span-2 md:col-span-6 xl:col-span-12">
                <?php
                $trainings_title = get_field('trainings_title');
                if ($trainings_title): ?>
                    <h2 class="text-title-h2 text-center text-blue-shade-4 invisible fade-in">
                        <?php echo $trainings_title; ?>
                    </h2>
                <?php endif; ?>
            </div>

            <div class="col-span-2 md:col-span-6 xl:col-span-12 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-12 gap-x-6 mt-12 md:mt-16 xl:mt-20">
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
                        <div class="bg-transparent md:bg-white pt-4 pb-0 md:py-7 md:px-7 md:rounded-[1.25rem] col-span-2 md:col-span-6 xl:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-x-6 mb-0 md:mb-14 xl:mb-0">
                            <div class="col-span-2 md:col-span-3">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="featured-image mb-4 md:mb-0">
                                        <?php 
                                        the_post_thumbnail('training-overview-img', [
                                            'class' => 'training-overview-img rounded-[1.25rem] w-4/5 md:w-auto',
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
                            <div class="col-span-2 md:col-span-3">
                                <h3 class="text-title-h4 text-[#063047] mb-4 md:mb-6 xl:mb-7"><?php the_title(); ?></h3>
                                <div class="text-p--2 mb-6 md:mb-4 xl:mb-6"><?php the_excerpt(); ?></div>
                                <?php
                                $sust_btn = get_field( 'button' );
                                if ( $sust_btn ) :
                                    $sust_btn_url    = $sust_btn['url'];
                                    $sust_btn_title  = $sust_btn['title'];
                                    $sust_btn_target = $sust_btn['target'] ? $sust_btn['target'] : '_self';
                                    ?>
                                    <a class="btn btn--transparent-inverted self-start uppercase mb-11 md:mb-0" href="/schulungen/" target="_self"><?php echo esc_html_e( 'Mehr Erfahren', 'gruber pumpen' ) ?></a>
                                    <?php
                                endif;
                                ?>
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