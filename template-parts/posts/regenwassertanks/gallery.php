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
