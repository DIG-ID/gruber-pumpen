<div class="box--info rounded-[20px] border border-blue-shade-5 flex flex-col justify-between invisible fade-in relative mb-14 xl:mb-24 max-w-[385px] xl:max-w-none">
    <p class="text-p--2"><?php the_field( 'sidebar_text' ); ?></p>
    <div class="absolute left-0 top-0">
        <svg width="58" height="55" viewBox="0 0 58 55" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 20C0 8.95431 8.95431 0 20 0H58V23.4654C58 28.9173 55.7743 34.1329 51.8381 37.9051L39.802 49.4398C36.0787 53.008 31.1209 55 25.9639 55H0V20Z" fill="#0D6394"/>
        <path d="M27.25 26.25C26.75 26.7188 26.2344 26.7188 25.7031 26.25L21.9531 22.5C21.5156 22 21.5156 21.4844 21.9531 20.9531C22.4844 20.5156 23.0156 20.5156 23.5469 20.9531L26.5 23.9062L33.2031 17.2031C33.7344 16.7656 34.25 16.7656 34.75 17.2031C35.2188 17.7344 35.2188 18.2656 34.75 18.7969L27.25 26.25ZM27.25 36.75C26.75 37.2188 26.2344 37.2188 25.7031 36.75L19.3281 30.375C18.8906 29.875 18.8906 29.3594 19.3281 28.8281C19.8594 28.3906 20.3906 28.3906 20.9219 28.8281L26.5 34.4062L38.0781 22.8281C38.6094 22.3906 39.125 22.3906 39.625 22.8281C40.0938 23.3594 40.0938 23.875 39.625 24.375L27.25 36.75Z" fill="white"/>
        </svg>
    </div>
</div>

<?php 
    if( have_rows('sidebar_water_graph') ) : ?>
        <div>
            <?php while( have_rows('sidebar_water_graph') ) : the_row(); 
                $title = get_sub_field('title');
                $quantity = get_sub_field('quantity'); 
                
                $max_quantity = 45; 
                $bar_width = ($quantity / $max_quantity) * 100;
            ?>
                <div class="mb-2">
                    <h3 class="text-overline text-blue-shade-5 mb-0"><?php echo esc_html($title); ?></h3>
                    <div class="flex items-center space-x-4">
                        <div class="relative h-5 rounded-full w-full">
                            <div 
                                class="absolute left-0 top-0 h-full rounded-full bg-orange-shade-2" 
                                style="width: <?php echo esc_attr($bar_width); ?>%; border-radius: 50px;">
                            </div>
                        </div>
                        <span class="text-p--2 w-1/4">
                            <?php echo esc_html($quantity); ?> Liter
                        </span>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
<?php endif; ?>

<div class="mt-10 md:mt-12 xl:mt-24 hidden xl:block">
    <?php
    $product_link = get_field('sidebar_button');
    if ($product_link):
        $product_link_target = $product_link['target'] ? $product_link['target'] : '_self';
        ?>
        <a class="btn btn--secondary uppercase inline-block" href="<?php echo esc_url($product_link['url']); ?>"
            target="<?php echo esc_attr($product_link_target); ?>"><?php echo esc_html($product_link['title']); ?></a>
    <?php endif; ?>
</div>