<section class="page-header flex items-end bg-black text-blue-shade-0 min-h-[464px] mt-32 relative py-11 px-8 <?php
$intro_image_id = get_field('page_header_image');
if ($intro_image_id):
    echo '';
else:
    echo 'pt-28 lg:pt-64 pb-20 lg:pb-40';
endif;
?>" style="<?php
if ($intro_image_id):
    echo 'background-image: url(' . wp_get_attachment_image_url($intro_image_id, 'full') . '); background-size: cover; background-position: center;';
endif;
?>">

    <!-- Overlay -->
    <?php if ($intro_image_id): ?>
        <div class="absolute inset-0 bg-overlay"></div>
    <?php endif; ?>

    <div class="relative">
        <div class="flex flex-col w-full mx-24">
            <div class="page-header--title max-w-[60%]  invisible fade-in--noscroll">
                <?php
                $page_header_title = get_field('page_header_title');
                if ($page_header_title): ?>
                    <h1 class="page-header--title py-4"><?php echo $page_header_title; ?></h1>
                <?php endif; ?>
            </div>

            <div class="page-header--breadcrumbs invisible fade-in--noscroll">
                <?php do_action('breadcrumbs'); ?>
            </div>

        </div>
    </div>

    <script>

    </script>
</section>