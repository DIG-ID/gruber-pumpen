<div class="col-span-2 md:col-span-5 xl:col-span-7 pb-14 xl:pb-16">
    <h2 class="text-title-h4 !text-base md:!text-3xl text-blue-shade-5 mb-9 md:mb-7"><?php the_field( 'content_2_title' ); ?></h2>
    <p class="text-p--2"><?php the_field( 'content_2_text' ); ?></p>
</div>
<div class="col-span-2 md:col-span-6 xl:col-span-7">
    <h2 class="text-title-h4 !text-base md:!text-3xl text-blue-shade-5 mb-9 md:mb-7 xl:mb-10"><?php the_field( 'content_2_roto_title' ); ?></h2>
    <div class="w-full md:w-1/2 float-left">
        <?php
            if( have_rows('content_2_list_left_column') ):
                while( have_rows('content_2_list_left_column') ) : the_row(); ?>
                <h6 class="text-overline text-blue-shade-5 max-w-[312px] mb-4 flex flex-row items-center"><span class="pr-[10px]"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/prefix.svg" alt="prefix" title="Prefix Icon" /></span><?php the_sub_field( 'title' ); ?></h6>
                <p class="text-p--2 max-w-[312px] mb-12"><?php the_sub_field( 'text' ); ?></p>
        <?php   endwhile;
            endif; ?>
    </div>
    <div class="w-full md:w-1/2 float-left md:pl-5">
        <?php
            if( have_rows('content_2_list_right_column') ):
                while( have_rows('content_2_list_right_column') ) : the_row(); ?>
                <h6 class="text-overline text-blue-shade-5 max-w-[312px] mb-4 flex flex-row items-center"><span class="pr-[10px]"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/prefix.svg" alt="prefix" title="Prefix Icon" /></span><?php the_sub_field( 'title' ); ?></h6>
                <p class="text-p--2 max-w-[312px] mb-12"><?php the_sub_field( 'text' ); ?></p>
        <?php   endwhile;
            endif; ?>
    </div>
</div>
<div class="col-span-2 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-9 xl:row-start-1 xl:row-span-2">
    <?php get_template_part( 'template-parts/posts/regenwassertanks/sidebar'); ?>
</div>