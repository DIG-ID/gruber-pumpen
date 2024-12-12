<section class="page-header flex items-center bg-blue-shade-4 text-blue-shade-1 relative <?php
$intro_image_id = get_field('intro_image');
if ($intro_image_id):
    echo 'min-h-[100vh]';
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

    <div class="theme-container relative z-10">
        <div class="flex flex-col w-full text-center items-center">
            <div class="page-header--breadcrumbs invisible fade-in--noscroll">
                <?php do_action('breadcrumbs'); ?>
            </div>
            <div class="page-header--title invisible fade-in--noscroll">
                <?php
                $page_header_title = get_field('intro_title');
                if ($page_header_title): ?>
                    <h1 class="page-header--title max-w-[840px] mx-auto py-4"><?php echo $page_header_title; ?></h1>
                <?php endif; ?>
            </div>
            <div class="page-header--description w-3/4 mx-auto invisible fade-in--noscroll pt-4">
                <?php
                $page_header_desc = get_field('intro_subtitle');
                if ($page_header_desc):
                    ?>
                    <p class="page-header--subtitle"><?php echo $page_header_desc; ?></p>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
    <?php if ($intro_image_id): ?>
        <a href="javascript:void(0);" id="scroll-down-link"
            class="scroll-down-arrows absolute left-1/2 -translate-x-1/2 bottom-20"></a>
    <?php endif; ?>
    <script>

    </script>
</section>