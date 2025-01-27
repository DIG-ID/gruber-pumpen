<section class="section-why-us py-28 overflow-hidden">
    <div class="theme-container theme-grid relative">
        <div class="col-span-2 md:col-span-6 xl:col-span-12 flex flex-col items-center">
            <div class="flex items-center gap-4 invisible fade-in">
                <hr class="border border-orange-shade-1 w-[4.5rem]" />
                <?php
                $eyebrow = get_field('why_us_eyebrow');
                if ($eyebrow): ?>
                    <h4 class="text-orange-shade-1 text-center uppercase"><?php echo $eyebrow; ?></h4>
                <?php endif; ?>
                <hr class="border border-orange-shade-1  w-[4.5rem]" />
            </div>
            <?php
            $why_us_title = get_field('why_us_title');
            if ($why_us_title): ?>
                <h2 class="text-title-h2 text-blue-shade-4 py-8 text-center invisible fade-in max-w-[500px]">
                    <?php echo $why_us_title; ?>
                </h2>
            <?php endif; ?>
        </div>
        <div class="col-span-2 md:col-span-6 xl:col-span-12">
            <?php
            $strengths = get_field('why_us_strengths');
            if (have_rows('why_us_strengths')): ?>
                <div class="theme-grid flex flex-wrap gap-24 mt-12 justify-center">
                    <?php while (have_rows('why_us_strengths')):
                        the_row(); ?>
                        <div class="col-span-2 md:col-span-6 xl:col-span-6 flex gap-6 fade-in">
                            <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="27.5" cy="27.5" r="27.5" fill="#063047" />
                                <path d="M22.8621 38L14 29.2085L18.0386 25.2021L22.8621 30.0013L36.9614 16L41 20.0064L22.8621 38Z"
                                    fill="#D3594A" />
                            </svg>
                            <div class="flex flex-col max-w-[488px]">
                                <h3 class="text-title-h3 lg:text-2xl text-left fade-in"><?php the_sub_field('title'); ?></h3>
                                <p class="text-p1 py-4 invisible fade-in"><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>