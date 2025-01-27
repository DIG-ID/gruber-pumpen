<section class="testimonials-section py-24 md:py-40 bg-blue-shade-0">
    <div class="theme-container theme-grid">
        <div class="col-span-2 md:col-span-6 xl:col-span-12">
            <div class="flex items-center justify-center gap-4 invisible fade-in">
                <hr class="border border-orange-shade-1 w-[4.5rem]" />
                <?php
                $testimonials_eyebrow = get_field('testimonials_eyebrow');
                if ($testimonials_eyebrow): ?>
                    <h4 class="text-orange-shade-1 text-center uppercase"><?php echo $testimonials_eyebrow; ?></h4>
                <?php endif; ?>
                <hr class="border border-orange-shade-1  w-[4.5rem]" />
            </div>
            <?php
            $testimonials_title = get_field('testimonials_title');
            if ($testimonials_title): ?>
                <h2 class="text-title-h2 text-center text-blue-shade-4 invisible fade-in">
                    <?php echo $testimonials_title; ?>
                </h2>
            <?php endif; ?>
        </div>
        <div class="col-span-2 md:col-span-6 xl:col-span-12">
            <div class="theme-grid mt-12 md:mt-24">
                <?php
                $testimonials = get_field('testimonials_list');
                foreach ($testimonials as $testimonial):
                    $name = $testimonial['name'];
                    $role = $testimonial['role'];
                    $review = $testimonial['quote'];
                    if ($testimonial):
                        ?>
                        <div class="testimonial-box col-span-2 md:col-span-4 xl:col-span-4 bg-white rounded-[20px] flex flex-col justify-between mb-14 md:mb-12 xl:mb-0 px-9 md:px-10 py-6 md:py-10 invisible fade-in relative">
                            <p
                                class="text-p--2 italic leading-[26px]">
                                <?php echo $review ?>
                            </p>
                            <div>
                                <h4 class="text-title-h4 mt-4 text-blue-shade-4">
                                    <?php echo $name ?>
                                </h4>
                                <p class="text-p--2">
                                    <?php echo $role ?>
                                </p>
                            </div>
                            <div class="absolute right-0 bottom-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70" fill="none">
                                <path d="M70 70V0L55 20V55H20L0 70H70Z" fill="#0D6394"/>
                                </svg>
                            </div>
                        </div>
                        <?php
                    endif;
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>