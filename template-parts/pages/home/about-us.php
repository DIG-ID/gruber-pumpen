<section class="section-about-us py-28 overflow-hidden">
    <div class="theme-container theme-grid">
        <div class="col-span-2 md:col-span-6 xl:col-span-5 col-start-1 md:col-start-1 xl:col-start-2 relative">
            <?php
            $image = get_field('about_us_image');
            if ($image):
                echo wp_get_attachment_image($image, 'full', false, array('class' => 'max-w-[491px] max-h-[502px] rounded-[2rem] fade-in'));
            endif;
            ?>
            <span class="flex flex-col gap-4 justify-center items-center max-w-[188px] bg-blue-shade-3 rounded-[30px] h-[205px] absolute left-[-7rem] top-6 p-4 fade-in">
                <?php
                $minicard_value = get_field('about_us_minicard_value');
                if ($minicard_value): ?>
                    <p class="text-title-h2 text-center text-blue-shade-0">
                        <?php echo $minicard_value; ?>
                    </p>
                <?php endif; ?>
                <?php
                $minicard_description = get_field('about_us_minicard_description');
                if ($minicard_description): ?>
                    <p class="text-center text-blue-shade-1 [leading-trim:both] [text-edge:cap] font-dm-sans text-[14px] font-normal leading-[23px]">
                        <?php echo $minicard_description; ?>
                    </p>
                <?php endif; ?>
            </span>
        </div>
        <div class="col-span-2 md:col-span-6 xl:col-span-6 max-w-[575px]">
            <div class="flex items-center gap-4  invisible fade-in">
                <?php
                $about_eyebrow = get_field('about_us_eyebrow');
                if ($about_eyebrow): ?>
                    <h4 class="text-orange-shade-1 uppercase"><?php echo $about_eyebrow; ?></h4>
                <?php endif; ?>
                <hr class="border border-orange-shade-1  w-[4.5rem]" />
            </div>
            <?php
            $about_title = get_field('about_us_title');
            if ($about_title): ?>
                <h2 class="text-title-h2 text-blue-shade-4 py-4 invisible fade-in"><?php echo $about_title; ?></h2>
            <?php endif; ?>
            <div>
                <?php
                $about_us_subtitle = get_field('about_us_subtitle');
                if ($about_us_subtitle): ?>
                    <h3 class="text-description text-blue-shade-4 px-[14px] my-4 border-l-4 border-blue-shade-3 invisible fade-in"><?php echo $about_us_subtitle; ?></h3>
                <?php endif; ?>
            </div>
            <div>
                <?php
                $about_us_description = get_field('about_us_description');
                if ($about_us_description): ?>
                    <p class="text-p1 pt-4 pb-8 invisible fade-in"><?php echo $about_us_description; ?></p>
                <?php endif; ?>

                <?php
                $about_us_link = get_field('about_us_link');

                if ($about_us_link):
                    $about_us_link_target = $about_us_link['target'] ? $about_us_link['target'] : '_self';
                    ?>
                    <a class="btn btn--secondary uppercase inline-block" href="<?php echo esc_url($about_us_link['url']); ?>"
                        target="<?php echo esc_attr($about_us_link_target); ?>"><?php echo esc_html($about_us_link['title']); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>