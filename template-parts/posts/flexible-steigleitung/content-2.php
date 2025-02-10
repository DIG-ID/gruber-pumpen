<h4 class="text-title-h4 !text-base md:!text-3xl text-blue-shade-4 mb-9 md:mb-7"><?php the_field( 'content_2_title' ); ?></h4>
<p class="text-p--2 mb-12 md:mb-16"><?php the_field( 'content_2_text_1' ); ?></p>

<div class="border-b border-blue-shade-2 w-full"></div>

<p class="text-p--2 mb-8 md:mb-16 pt-6 md:pt-9"><?php the_field( 'content_2_text_2' ); ?></p>

<?php 
$table = get_field('content_2_table'); 

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
                        <th class="border-y border-blue-shade-2 px-4 py-2">
                            <?php echo esc_html($th['c']); ?>
                        </th>
                    <?php endforeach; ?>
                </tr>
            </thead>
        <?php endif; ?>

        <tbody>
            <?php foreach ( $table['body'] as $tr_index => $tr ) : ?>
                <tr class="border-b border-blue-shade-2 last:border-b-0">
                    <?php foreach ( $tr as $td_index => $td ) : ?>
                        <td class="px-4 py-2 text-p--2 <?php echo $tr_index === 0 ? '!font-bold' : ''; ?> <?php echo $td_index === 0 ? '!font-bold' : ''; ?>">
                            <?php echo esc_html($td['c']); ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
        
    </table>
<?php endif; ?>
