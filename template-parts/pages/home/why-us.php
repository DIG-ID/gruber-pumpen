<section class="section-why-us py-28 overflow-hidden">
    <div class="theme-container relative">

    <?php
    $intro_video = get_field('intro_video'); // Fetch your oEmbed ACF field
    if ($intro_video):
        $video_url = esc_url($intro_video);
        ?>
        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline>
            <source src="https://vimeo.com/1040092227" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    <?php endif; ?>
    </div>
</section>