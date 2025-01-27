<section class="section-intro py-24 overflow-hidden bg-blue-shade-0">
    <div class="theme-container theme-grid">
        <!-- Intro -->
        <div class="col-span-2 md:col-span-6 xl:col-span-12 flex justify-between invisible fade-in--noscroll">
            <div class="flex flex-col gap-6">
                <div class="flex items-center gap-4">
                    <hr class="border border-orange-shade-1 w-[4.5rem]" />
                    <?php
                    $services_eyebrow = get_field('services_eyebrow');
                    if ($services_eyebrow): ?>
                        <h4 class="text-orange-shade-1 uppercase"><?php echo $services_eyebrow; ?></h4>
                    <?php endif; ?>
                    <hr class="border border-orange-shade-1  w-[4.5rem]" />
                </div>
                <?php
                $services_title = get_field('services_title');
                if ($services_title): ?>
                    <h2 class="text-title-h2 max-w-[475px] text-blue-shade-4">
                        <?php echo $services_title; ?>
                    </h2>
                <?php endif; ?>
            </div>

            <div class="text-description max-w-[575px]">
                <?php the_field('services_description'); ?>
            </div>
        </div>

        <!------>

        <!-- Services -->

        <div class="col-span-2 md:col-span-6 xl:col-span-12 theme-grid mt-20">
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
                    <div class="box box--sm !py-10 col-span-2 md:col-span-6 xl:col-span-6 grid grid-cols-2">
                        <div class="col-span-2">
                            <h3 class="text-title-h4 text-[#063047] mb-5 md:mb-7 xl:mb-8"><?php the_title(); ?></h3>
                        </div>
                        <div class="col-span-2">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="featured-image">
                                    <?php 
                                    the_post_thumbnail('training-featured-img', [
                                        'class' => 'training_featured_image',
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
                            <p class="text-p1"><?php the_field( 'description' ); ?></p>
                            <?php
                            $sust_btn = get_field( 'button' );
                            if ( $sust_btn ) :
                                $sust_btn_url    = $sust_btn['url'];
                                $sust_btn_title  = $sust_btn['title'];
                                $sust_btn_target = $sust_btn['target'] ? $sust_btn['target'] : '_self';
                                ?>
                                <a class="btn--secundary self-start uppercase" href="<?php echo esc_url( $sust_btn_url ); ?>" target="<?php echo esc_attr( $sust_btn_target ); ?>"><?php echo esc_html( $sust_btn_title ); ?></a>
                                <?php
                            endif;
                            ?>
                        </div>
                        <div class="col-span-1 pt-6 md:pt-10 md:pl-12 pr-3 md:pr-5">
                            <p class="text-p1 mb-9"><span class="font-bold text-xl text-[#063047] mb-4"><?php echo esc_html_e( 'Preis:', 'gruber pumpen' ) ?></span><br><?php the_field( 'price' ); ?></p>
                            <p class="text-p1 mb-9"><span class="font-bold text-xl text-[#063047] mb-4"><?php echo esc_html_e( 'Termine:', 'gruber pumpen' ) ?></span><br><?php the_field( 'appointments' ); ?></p>
                            <p class="text-p1 mb-9"><span class="font-bold text-xl text-[#063047] mb-4"><?php echo esc_html_e( 'Dauer:', 'gruber pumpen' ) ?></span><br><?php the_field( 'length' ); ?></p>
                            <p class="text-p1"><span class="font-bold text-xl text-[#063047] mb-4"><?php echo esc_html_e( 'Anzahl:', 'gruber pumpen' ) ?></span><br><?php the_field( 'number' ); ?></p>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>


        <!------>

        <!-- Questions -->

        <div class="col-span-2 md:col-span-6 xl:col-span-12 flex justify-between items-start bg-blue-shade-4 invisible fade-in p-20 mt-12 rounded-[20px]">
            <h2 class="text-title-h2 max-w-[475px] text-blue-shade-0">
                <?php the_field('questions_title'); ?>
            </h2>
            <p class="text-p1 text-blue-shade-0 max-w-[414px]"><?php the_field('questions_description'); ?></p>
            <div>
                <?php
                $questions_link = get_field('questions_link');
                if ($questions_link):
                    ?>
                    <a href="<?php echo esc_url($questions_link); ?>" class="btn--primary">
                        <?php esc_html_e('JETZT ANFRAGEN', 'gruber-pumpen'); ?>
                    </a>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</section>