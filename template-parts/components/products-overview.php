<section class="section-products py-8 xl:py-40">
    <div class="theme-container theme-grid">
        <!-- Services -->
        <div class="col-span-2 md:col-span-6 xl:col-span-12 flex flex-col">
            <div class="flex items-center justify-between invisible fade-in">
                <?php
                $products_title = get_field('products_title');
                if ($products_title): ?>
                    <h2 class="text-title-h2 text-blue-shade-4 py-8 invisible fade-in max-w-[500px]">
                        <?php echo $products_title; ?>
                    </h2>
                <?php endif; ?>

                <?php
                $products_link = get_field('products_link');
                if ($products_link):
                    $products_link_target = $products_link['target'] ? $products_link['target'] : '_self';
                    ?>
                    <a class="btn btn--secondary uppercase inline-block" href="<?php echo esc_url($products_link['url']); ?>"
                        target="<?php echo esc_attr($products_link_target); ?>"><?php echo esc_html($products_link['title']); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php
        $products_args = array(
            'post_type'   => 'product',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby'     => 'date',
            'order'       => 'ASC',
        );

        $products_query = new WP_Query($products_args);
        if ($products_query->have_posts()) :
            while ($products_query->have_posts()) :
                $products_query->the_post();
                ?>
                <div class="col-span-1 md:col-span-3 xl:col-span-4 fade-in md:bg-white md:px-9 xl:px-7 pt-6 pb-10 md:pt-10 md:pb-16 mb-10 xl:mb-0 rounded-3xl">
                    <div>
                    <?php
                    $image = get_post_thumbnail_id(); 
                    if ($image):
                        echo wp_get_attachment_image($image, 'full', false, array('class' => 'w-full max-w-[294px] fade-in'));
                    endif;
                    ?>

                    </div>
                    <h2 class="text-title-h4 text-blue-shade-4 text-left mt-3 md:mt-6 mb-5 md:mb-6 fade-in"><?php the_title(); ?>
                    </h2>
                    <p class="text-p--2 invisible fade-in"><?php the_field('description'); ?></p>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>