<section class="section-intro pt-10 md:pt-20 xl:pt-24 pb-24 xl:pb-40 overflow-hidden bg-blue-shade-0">
    <div class="theme-container theme-grid">
        <!-- Intro -->
        <div class="col-span-2 md:col-span-6 xl:col-span-12 theme-grid flex justify-between invisible fade-in--noscroll">
            <div class="col-span-2 md:col-span-6 xl:col-span-12">
                <div class="flex items-center gap-4">
                    <?php
                    $intro_eyebrow = get_field('products_intro_eyebrow', 'option');
                    if ($intro_eyebrow): ?>
                        <h4 class="text-orange-shade-1 text-eyebrow"><?php echo $intro_eyebrow; ?></h4>
                    <?php endif; ?>
                    <hr class="border border-orange-shade-1  w-[4.5rem]" />
                </div>
            </div>
            <div class="col-span-2 md:col-span-6 xl:col-span-6">
                <?php
                $intro_title = get_field('products_intro_title', 'option');
                if ($intro_title): ?>
                    <h2 class="text-title-h2 max-w-80 md:max-w-[475px] text-blue-shade-4 mb-6 md:mb-10 xl:mb-0">
                        <?php echo $intro_title; ?>
                    </h2>
                <?php endif; ?>
            </div>
            <div class="col-span-2 md:col-span-6 xl:col-span-6">
                <div class="text-p--2 max-w-[575px]">
                    <?php the_field('products_intro_description', 'option'); ?>
                </div>
            </div>
        </div>
    </div>
</section>