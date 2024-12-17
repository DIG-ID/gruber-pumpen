<section class="section-about-us py-28 overflow-hidden">
    <div class="theme-container flex gap-8">


        <?php
        $image = get_field('homepage_about_us_image');
        if ($image):
            echo wp_get_attachment_image($image, 'full', false, array('class' => 'max-w-[491px] max-h-[502px] rounded-[2rem]'));
        endif;
        ?>
        <div class="flex flex-col">
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
                <h1 class="text-title text-blue-shade-4 py-4"><?php echo $about_title; ?></h1>
            <?php endif; ?>
            <div>
                <?php
                $about_us_description = get_field('about_us_description');
                if ($about_us_description): ?>
                    <h1 class="text-blue-shade-4 py-4"><?php echo $about_us_description; ?></h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>