<section class="section-products">
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
        <?php get_template_part( 'template-parts/components/own-products-loop' ); ?>
    </div>
</section>