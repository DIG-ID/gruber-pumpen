<div class="col-span-2 md:col-span-5 xl:col-span-12 xl:pb-16">
    <h2 class="text-title-h4 !text-base md:!text-3xl text-blue-shade-5 mb-9 md:mb-7"><?php the_field( 'content_3_title' ); ?></h2>
</div>
<?php
    if( have_rows('content_3_list') ):
        while( have_rows('content_3_list') ) : the_row(); ?>
        <div class="col-span-1 md:col-span-2 xl:col-span-2 mb-8 md:mb-6 xl:mb-0">
            <h6 class="inline-block w-[33px] md:w-[56px] font-outfit text-[18px] md:text-[30px] font-semibold leading-[24px] md:leading-[52px] border-b-[3px] md:border-b-[5px] border-blue-shade-3 text-blue-shade-3 mb-4"><?php the_sub_field( 'title' ); ?></h6>
            <p class="text-overline text-blue-shade-5"><?php the_sub_field( 'subtitle' ); ?></p>
        </div>
<?php   endwhile;
    endif; ?>

<div class="col-span-2 md:col-span-6 xl:col-span-8 mt-14 xl:mt-24">
    <?php 
    $table = get_field('content_3_table'); 

    if ( ! empty($table) ) : ?>
        <table class="min-w-full">
            
            <?php if ( ! empty($table['caption']) ) : ?>
                <caption class="text-lg font-semibold mb-2">
                    <?php echo esc_html($table['caption']); ?>
                </caption>
            <?php endif; ?>

            <?php if ( ! empty($table['header']) ) : ?>
                <thead>
                    <tr>
                        <?php foreach ( $table['header'] as $th ) : ?>
                            <th class="border-y border-blue-shade-5 px-4 py-2">
                                <?php echo esc_html($th['c']); ?>
                            </th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
            <?php endif; ?>

            <tbody>
                <?php foreach ( $table['body'] as $tr_index => $tr ) : ?>
                    <tr class="<?php echo $tr_index === 0 ? 'pb-8' : 'border-b border-blue-shade-5'; ?> last:border-b-0">
                        <?php foreach ( $tr as $td_index => $td ) : ?>
                            <td class="px-4 py-2 text-p--2 !text-xs md:!text-base !text-blue-shade-5 <?php echo $tr_index === 0 ? '!font-bold pb-8' : ''; ?> <?php echo $td_index === 0 ? '!font-bold' : ''; ?> <?php echo $td_index === count($tr) - 1 ? '!font-bold' : ''; ?>">
                                <?php echo esc_html($td['c']); ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
    <?php endif; ?>

</div>
<div class="col-span-2 md:col-span-6 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-9 mt-14 xl:mt-24 xl:pt-14">
<?php
    if( have_rows('content_3_water_list') ):
        while( have_rows('content_3_water_list') ) : the_row(); ?>
            <h6 class="text-overline text-blue-shade-5 mb-7 flex flex-row items-center"><span class="pr-[10px] min-w-[52px] flex justify-center"><img src="<?php the_sub_field( 'icon' ); ?>" alt="water-icon" title="Water Icon" /></span><?php the_sub_field( 'description' ); ?></h6>
<?php   endwhile;
    endif; ?>
</div>