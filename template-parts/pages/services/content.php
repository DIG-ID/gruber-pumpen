<section class="section-services-content p-24 overflow-hidden bg-blue-shade-0">
    <div class="theme-container flex flex-col gap-16">
        <!-- Intro -->
        <div class="flex justify-between invisible fade-in--noscroll">
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

        <div class="flex flex-wrap gap-8 justify-center mt-20">
            <?php
            $services_list = get_field('services_list');
            if (have_rows('services_list')): ?>

                <?php while (have_rows('services_list')):
                    the_row(); ?>
                    <div class="service-card fade-in">
                        <div class="flex px-6 gap-6 py-8">
                            <div>
                                <?php
                                $icon = get_sub_field('title');
                                if ($icon):
                                    echo theme_service_svg_icon($icon);
                                endif;
                                ?>
                            </div>
                            <div class="flex gap-4 flex-col">
                                <h2 class="text-title-h2 lg:text-2xl text-left"><?php the_sub_field('title'); ?>
                                </h2>
                                <?php the_sub_field('description'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>

        <!------>

        <!-- Questions -->

        <div class="flex justify-between items-start bg-blue-shade-4 invisible fade-in p-20 mt-12 rounded-[20px]">
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