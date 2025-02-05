<section class="section-questions">
    <div class="theme-container theme-grid">
        <div class="col-span-2 md:col-span-6 xl:col-span-12 theme-grid bg-blue-shade-4 invisible fade-in py-11 md:py-[60px] xl:py-[77px] px-6 md:px-[75px] mb-12 md:mb-24 rounded-[20px]">
            <div class="col-span-2 md:col-span-6 xl:col-span-4">
                <h2 class="text-title-h2 max-w-[475px] text-blue-shade-0 mb-6 md:mb-10 xl:mb-0">
                    <?php the_field('questions_title'); ?>
                </h2>
            </div>
            <div class="col-span-2 md:col-span-6 xl:col-span-5">
                <p class="text-p1 text-blue-shade-0 max-w-[414px] mb-9 md:mb-12 xl:mb-0"><?php the_field('questions_description'); ?></p>
            </div>
            <div class="col-span-2 md:col-span-6 xl:col-span-3">
                <?php
                $questions_link = get_field('questions_link');
                if ($questions_link):
                    ?>
                    <a href="<?php echo esc_url($questions_link); ?>" class="btn btn--primary">
                        <?php esc_html_e('JETZT ANFRAGEN', 'gruber-pumpen'); ?>
                    </a>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</section>