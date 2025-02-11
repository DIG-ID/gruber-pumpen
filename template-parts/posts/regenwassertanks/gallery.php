<div class="mt-0 mb-20 block xl:hidden">
    <?php
    $product_link = get_field('sidebar_button');
    if ($product_link):
        $product_link_target = $product_link['target'] ? $product_link['target'] : '_self';
        ?>
        <a class="btn btn--secondary uppercase inline-block" href="<?php echo esc_url($product_link['url']); ?>"
            target="<?php echo esc_attr($product_link_target); ?>"><?php echo esc_html($product_link['title']); ?></a>
    <?php endif; ?>
</div>
<h6 class="text-overline text-blue-shade-5 mb-7"><?php esc_html_e( 'Galerie', 'gruber-pumpen' ) ?></h6>
<?php
$images = get_field('gallery'); // ACF gallery field returns an array

if ($images): ?>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <?php foreach ($images as $image): ?>
            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery" data-caption="<?php echo esc_attr($image['caption']); ?>">
                <img src="<?php echo esc_url($image['sizes']['products-gallery-thumbs']); ?>" 
                     alt="<?php echo esc_attr($image['alt']); ?>" 
                     class="h-auto object-cover xl:max-w-[282px] xl:max-h-[187px]" />
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
