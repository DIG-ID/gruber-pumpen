<section class="section-about-us py-28 px-20 overflow-hidden bg-blue-shade-0">
    <div class="theme-container flex flex-col justify-center gap-12">
        <div class="flex flex-col gap-6">
            <div class="flex items-center justify-center gap-4 invisible fade-in">
                <hr class="border border-orange-shade-1 w-[4.5rem]" />
                <?php
                $trainings_eyebrow = get_field('trainings_eyebrow');
                if ($trainings_eyebrow): ?>
                    <h4 class="text-orange-shade-1 text-center uppercase"><?php echo $trainings_eyebrow; ?></h4>
                <?php endif; ?>
                <hr class="border border-orange-shade-1  w-[4.5rem]" />
            </div>
            <?php
            $trainings_title = get_field('trainings_title');
            if ($trainings_title): ?>
                <h2 class="text-title-h2 text-center text-blue-shade-4 invisible fade-in">
                    <?php echo $trainings_title; ?>
                </h2>
            <?php endif; ?>
        </div>


        <?php
        $trainings_list = get_field('trainings_list');
        if (have_rows('trainings_list')): ?>
            <div class="flex flex-wrap gap-8 justify-center">
                <?php while (have_rows('trainings_list')):
                    the_row(); ?>
                    <div class="flex gap-8 fade-in bg-white p-12 rounded-3xl">
                        <?php
                        if (get_sub_field('image')):
                            echo wp_get_attachment_image(get_sub_field('image'), 'full', false, array('class' => 'w-full h-full object-cover lg:h-[270px] lg:w-[250px] rounded-2xl'));
                        endif;
                        ?>
                        <div class="flex flex-col w-[250px]">
                            <h2 class="text-title-h2 text-xl lg:text-2xl text-left fade-in"><?php the_sub_field('title'); ?>
                            </h2>
                            <p class="text-p1 py-4 invisible fade-in"><?php the_sub_field('description'); ?></p>
                            
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>


    </div>
</section>