<section class="section-homepage-info-bar bg-blue-shade-4 py-12 px-16 overflow-hidden">
    <div class="text-white flex justify-center items-center">
        <?php
        $general_info = get_field('general_info');
        $length = count($general_info);
        if (have_rows('general_info')):
            $counter = 1;
            while (have_rows('general_info')):
                the_row(); ?>
                <div class="flex flex-col gap-2 px-16 <?php echo $counter < $length ? 'border-r' : ''?>">
                    <div class="flex">
                        <h1 class="count-animation text-title-h2 text-orange-shade-1" data-target="<?php the_sub_field('value')?>">0</h1>
                        <h1 class="text-title-h2 text-orange-shade-1">+</h1>
                    </div>

                    <p><?php the_sub_field('description') ?></p>
                </div>
                <?php $counter++; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>