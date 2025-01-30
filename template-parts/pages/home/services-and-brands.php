<section class="section-page-services-and-brands py-8 xl:py-44 xl:mx-14 bg-[#F5F7FA] xl:rounded-[50px] overflow-hidden">
	
		<!-- Services and Products -->
		
		<?php get_template_part( 'template-parts/components/services'); ?> 
		
		<div class="theme-container theme-grid relative flex flex-col gap-36 bg-blue-shade-0 xl:py-44 rounded-[50px]">
			<!-- Products -->
			<div class="col-span-2 md:col-span-6 xl:col-span-12 flex flex-col gap-12">
				<?php
				$products_title = get_field('products_title');
				if ($products_title): ?>
					<h2 class="text-title-h2 text-blue-shade-4 py-8 invisible fade-in max-w-[500px]">
						<?php echo $products_title; ?>
					</h2>
				<?php endif; ?>

				<?php
				$products_list = get_field('products_list');
				if (have_rows('products_list')): ?>
					<div class="flex gap-16 justify-center">
						<?php while (have_rows('products_list')):
							the_row(); ?>
							<div class="flex gap-4 fade-in bg-white px-4 pb-8 w-[345px] rounded-3xl">
								<div class="flex flex-col px-4">
									<?php
									$offer_image = get_sub_field('image');
									if ($offer_image):
										echo wp_get_attachment_image($offer_image, 'full', false, array('class' => 'w-full my-4 object-cover'));
									endif;
									?>
									<h2 class="text-title-h2 lg:text-2xl text-left fade-in"><?php the_sub_field('title'); ?>
									</h2>
									<p class="text-p1 py-4 invisible fade-in"><?php the_sub_field('description'); ?></p>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="theme-container theme-grid relative flex flex-col gap-36 bg-blue-shade-0 xl:py-44 rounded-[50px]">

			<!-- Brands -->
			<div class="col-span-2 md:col-span-6 xl:col-span-12 flex flex-col items-center gap-12 pt-32">
				<div class="flex items-center gap-4 invisible fade-in">
					<hr class="border border-orange-shade-1 w-[4.5rem]" />
					<?php
					$brands_eyebrow = get_field('brands_eyebrow');
					if ($brands_eyebrow): ?>
						<h4 class="text-orange-shade-1 text-center uppercase"><?php echo $brands_eyebrow; ?></h4>
					<?php endif; ?>
					<hr class="border border-orange-shade-1  w-[4.5rem]" />
				</div>
				<?php
				$brands_title = get_field('brands_title');
				if ($brands_title): ?>
					<h2 class="text-title-h2 text-blue-shade-4 invisible fade-in max-w-[500px]">
						<?php echo $brands_title; ?>
					</h2>
				<?php endif; ?>
				<?php
				$brands_subtitle = get_field('brands_subtitle');
				if ($brands_title): ?>
					<p class="text-p1 invisible text-center fade-in max-w-[500px]">
						<?php echo $brands_subtitle; ?>
					</p>
				<?php endif; ?>

				<?php
				$brands_list = get_field('brands_list');
				if (have_rows('brands_list')): ?>
					<div class="flex flex-wrap mt-12 gap-12 justify-center">
						<?php while (have_rows('brands_list')):
							the_row(); ?>
							<div
								class="flex gap-4 fade-in bg-white w-[282px] h-[131px] justify-center items-center rounded-3xl">

								<?php
								$offer_image = get_sub_field('image');
								if ($offer_image):
									echo wp_get_attachment_image($offer_image, 'full', false, array('class' => 'object-fit'));
								endif;
								?>

							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
</section>