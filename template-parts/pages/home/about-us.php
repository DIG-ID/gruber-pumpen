<section class="section-about-us py-28 px-32 overflow-hidden">
    <div class="theme-container flex gap-8">
        <div class="relative">

            <?php
            $image = get_field('homepage_about_us_image');
            if ($image):
                echo wp_get_attachment_image($image, 'full', false, array('class' => 'max-w-[491px] max-h-[502px] rounded-[2rem]'));
            endif;
            ?>
            <span class="max-w-[188px] bg-blue-shade-3 rounded-[30px] h-[205px] absolute left-[-7rem] top-6 p-8">
                <?php
                $minicard_value = get_field('about_us_minicard_value');
                if ($minicard_value): ?>
                    <p class="text-title-h2 text-center text-blue-shade-1">
                        <?php echo $minicard_value; ?>
                    </p>
                <?php endif; ?>
                <?php
                $minicard_description = get_field('about_us_minicard_description');
                if ($minicard_description): ?>
                    <p class="text-sm text-center text-blue-shade-1 py-4">
                        <?php echo $minicard_description; ?>
                    </p>
                <?php endif; ?>
            </span>
        </div>
        <div class="flex flex-col max-w-[575px]">
            <div class="flex items-center gap-4  invisible fade-in--noscroll">
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
                <h2 class="text-title-h2 text-blue-shade-4 py-4"><?php echo $about_title; ?></h2>
            <?php endif; ?>
            <div>
                <?php
                $about_us_subtitle = get_field('about_us_subtitle');
                if ($about_us_subtitle): ?>
                    <h3 class="text-description text-blue-shade-4 py-4"><?php echo $about_us_subtitle; ?></h3>
                <?php endif; ?>
            </div>
            <div>
                <?php
                $about_us_description = get_field('about_us_description');
                if ($about_us_description): ?>
                    <p class="text-body py-4"><?php echo $about_us_description; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>