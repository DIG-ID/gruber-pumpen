<h4 class="text-title-h4 !text-base md:!text-3xl text-blue-shade-5 mb-9 md:mb-11"><?php the_field( 'sidebar_title' ); ?></h4>
<h6 class="text-p--1 !text-blue-shade-5 mb-4 md:mb-7"><?php the_field( 'sidebar_subtitle_1' ); ?></h6>
<p class="text-p--2 pb-9 md:pb-0 xl:pb-9 xl:max-w-[320px]"><?php the_field( 'sidebar_text_1' ); ?></p>
<h6 class="text-p--1 !text-blue-shade-5 mb-4 md:mb-7"><?php the_field( 'sidebar_subtitle_2' ); ?></h6>
<p class="text-p--2 xl:max-w-[320px]"><?php the_field( 'sidebar_text_2' ); ?></p>
<div class="mt-10 md:mt-12 xl:mt-14">
    <?php
    $product_link = get_field('button');
    if ($product_link['title']):
        $product_link_target = $product_link['target'] ? $product_link['target'] : '_self';
        ?>
        <a class="btn btn--secondary uppercase inline-block" href="<?php echo esc_url($product_link['url']); ?>"
            target="<?php echo esc_attr($product_link_target); ?>"><?php echo esc_html($product_link['title']); ?></a>
    <?php endif; ?>
</div>