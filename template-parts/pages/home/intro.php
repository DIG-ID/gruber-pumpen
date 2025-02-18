<section class="section-homepage-intro flex items-end bg-black  text-blue-shade-0 min-h-[464px] relative">
    <?php
    $video_field = get_field('intro_video_file'); // This will return an array
    $video_url = $video_field['url']; // Extract the URL from the array
    ?>

    <div class="video-background absolute inset-0 w-full h-full overflow-hidden">
        <video 
            class="absolute top-0 left-0 w-full h-full object-cover" 
            src="<?php echo esc_url($video_url); ?>" 
            autoplay 
            muted 
            loop 
            playsinline>
        </video>
        <div class="absolute inset-0 bg-black opacity-60"></div>
    </div>


    <div class="relative theme-container theme-grid">
        <div class="col-span-2 md:col-span-6 xl:col-span-12 flex flex-col w-full">
            <div class="flex items-center gap-4 invisible fade-in--noscroll">
                <?php
                $intro_eyebrow = get_field('intro_eyebrow');
                if ($intro_eyebrow): ?>
                    <h4 class="text-orange-shade-1 text-eyebrow uppercase"><?php echo $intro_eyebrow; ?></h4>
                <?php endif; ?>
                <hr class="border border-orange-shade-1  w-[4.5rem]" />
            </div>
            <div class="page-header--title xl:max-w-[60%] invisible fade-in--noscroll">
                <?php
                $intro_title = get_field('intro_title');
                if ($intro_title): ?>
                    <h1 class="page-header--title py-4"><?php echo $intro_title; ?></h1>
                <?php endif; ?>
            </div>

            <div class="page-header--description invisible fade-in--noscroll md:w-2/3 xl:w-1/3 pt-4">
                <?php
                $intro_description = get_field('intro_description');
                if ($intro_description):
                    ?>
                    <p class="page-header--desc"><?php echo $intro_description; ?></p>
                    <?php
                endif;
                ?>
            </div>

            <div class="flex flex-col md:flex-row gap-6 mt-10 invisible fade-in--noscroll">
                <?php
                $know_more_link = get_field('intro_know_more_link');
                $contact_link = get_field('intro_contact_link');

                if ($know_more_link):
                    $know_more_link_target = $know_more_link['target'] ? $know_more_link['target'] : '_self';
                    ?>
                    <a class="btn btn--secondary uppercase self-start" href="<?php echo esc_url($know_more_link['url']); ?>"
                        target="<?php echo esc_attr($know_more_link_target); ?>"><?php echo esc_html($know_more_link['title']); ?></a>
                    <?php
                endif;

                if ($contact_link):
                    $contact_link_target = $contact_link['target'] ? $contact_link['target'] : '_self';
                    ?>
                    <a class="btn btn--primary uppercase self-start" href="<?php echo esc_url($contact_link['url']); ?>"
                        target="<?php echo esc_attr($contact_link_target); ?>"><?php echo esc_html($contact_link['title']); ?></a>
                    <?php
                endif;
                ?>
            </div>
        </div>
        
    </div>

    

    </div>
</section>