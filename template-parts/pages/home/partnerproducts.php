<section class="section-products relative z-10">
    <div class="theme-container theme-grid">
        
        <div class="col-span-2 md:col-span-6 xl:col-span-12 pt-8 md:pt-16 xl:pt-32 flex flex-col items-center">
            <div class="flex items-center gap-4 invisible fade-in">
                <hr class="border border-orange-shade-1 w-[4.5rem]" />
                <?php
                $brands_eyebrow = get_field('brands_eyebrow');
                if ($brands_eyebrow): ?>
                    <h4 class="text-orange-shade-1 text-eyebrow"><?php echo $brands_eyebrow; ?></h4>
                <?php endif; ?>
                <hr class="border border-orange-shade-1  w-[4.5rem]" />
            </div>
            <?php
            $brands_title = get_field('brands_title');
            if ($brands_title): ?>
                <h2 class="text-title-h2 text-blue-shade-4 invisible fade-in max-w-[500px] py-10">
                    <?php echo $brands_title; ?>
                </h2>
            <?php endif; ?>
            <?php
            $brands_subtitle = get_field('brands_subtitle');
            if ($brands_title): ?>
                <p class="text-p--2 invisible text-center fade-in max-w-[500px]">
                    <?php echo $brands_subtitle; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
        
    <div class="theme-container theme-grid mt-20">
        <?php
        $products_args = array(
            'post_type'      => 'partnerprodukt',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'DESC',
        );

        $products_query = new WP_Query( $products_args );
        if ( $products_query->have_posts() ) :
            while ( $products_query->have_posts() ) :
                $products_query->the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'col-span-1 md:col-span-3 xl:col-span-3 mb-9' ); ?>>
                    <div class="box box--sm w-full flex justify-center items-center min-h-32">
                        <?php
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail( 'full', array( 'class' => 'max-w-full max-h-full h-auto object-cover' ) );
                        endif
                        ?>
                    </div>
                </article>
                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
        <div class="col-span-2 md:col-span-6 xl:col-span-12 flex justify-center items-center">
			<?php
			$blink = get_field( 'brands_link' );
			if ( $blink ) :
				$link_url    = $blink['url'];
				$link_title  = $blink['title'];
				$link_target = $blink['target'] ? $blink['target'] : '_self';
				?>
				<a class="btn btn--secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			?>
		</div>
    </div>
</section>