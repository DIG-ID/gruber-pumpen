<section class="section-contact pt-10 md:pt-20 xl:pt-16 pb-10 md:pb-24 xl:pb-16 px-4 md:px-8 xl:px-0 overflow-hidden bg-blue-shade-0">
    <div class="theme-container theme-grid fade-in bg-white px-4 md:px-8 xl:px-9 pt-4 pb-4 md:pt-10 md:pb-10 mb-10 xl:mb-0 rounded-3xl">
        <div class="col-span-1 md:col-span-3 xl:col-span-5 relative">
            <?php
            $contact_title = get_field('products_contact_title', 'option');
            if ($contact_title): ?>
                <h2 class="text-title-h2 text-blue-shade-4 pb-2 md:pb-10 xl:pb-11 invisible fade-in xl:max-w-[350px]">
                    <?php echo $contact_title; ?>
                </h2>
            <?php endif; ?>
            <p class="text-p--2 !text-[11px] sm:!text-[1rem] md:!text-[1rem] xl:!text-[1rem] xl:max-w-[360px] !leading-[0.95rem] sm:!leading-[1.625rem] invisible fade-in"><?php the_field('products_contact_text', 'option'); ?></p>
            <?php
            $contact_link = get_field('products_contact_link', 'option');
            if ($contact_link):
                $contact_link_target = $contact_link['target'] ? $contact_link['target'] : '_self';
                ?>
                <a class="btn btn--primary uppercase !px-3 md:!px-7 absolute bottom-0 left-0 inline-block" href="<?php echo esc_url($contact_link['url']); ?>"
                    target="<?php echo esc_attr($contact_link_target); ?>"><?php echo esc_html($contact_link['title']); ?></a>
            <?php endif; ?>
        </div>
        <div class="col-span-1 md:col-span-3 xl:col-span-7 md:flex flex-row justify-end xl:justify-between">
            <?php
            $image = get_field( 'products_contact_image_1', 'option' );
            if ($image):
                echo wp_get_attachment_image($image, 'full', false, array('class' => 'w-full max-w-[354px] rounded-3xl hidden xl:block fade-in'));
            endif;
            ?>
            <?php
            $image_2 = get_field( 'products_contact_image_2', 'option' );
            if ($image_2):
                echo wp_get_attachment_image($image_2, 'full', false, array('class' => 'w-full h-auto max-w-[265px] rounded-3xl fade-in'));
            endif;
            ?>
        </div>
    </div>
</section>