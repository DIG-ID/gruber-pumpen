<section class="section-homepage-info-bar bg-blue-shade-4 py-12 overflow-hidden">
    <div class="theme-container grid grid-cols-2 md:grid-cols-8 xl:grid-cols-12 text-white">
    <?php
    $general_info = get_field('general_info');
    $length = count($general_info);
    if (have_rows('general_info')):
        $counter = 1;
        while (have_rows('general_info')):
            the_row(); ?>
            <div class="col-span-1 md:col-span-2 xl:col-span-3 flex flex-col gap-2 py-12 items-center border-[#688494] <?php echo $counter < $length ? 'md:border-r' : '' ?>">
                <div class="flex">
                    <h1 class="count-animation text-title-h2 text-orange-shade-1" data-target="<?php the_sub_field('value'); ?>">0</h1>
                    <?php if ($counter < $length): // Show "+" only if it's NOT the last element ?>
                        <h1 class="text-title-h2 text-orange-shade-1">+</h1>
                    <?php endif; ?>
                </div>
                <p><?php the_sub_field('description'); ?></p>
            </div>
            <?php $counter++; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>