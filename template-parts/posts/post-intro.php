<div class="section-post-intro bg-brown-shade-4 text-brown-shade-2">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-8  invisible fade-in--noscroll">
				<?php
				if ( has_post_thumbnail() ) :
					the_post_thumbnail( 'full', array( 'class' => 'w-full object-cover h-[251px] lg:h-[565px]' ) );
				else :
					?><span class="w-full h-[251px] lg:h-[565px] bg-brown-shade-1 text-brown-shade-2 flex justify-center items-center rounded-[12px] font-poppins text-xs text-center">no featured image</span><?php
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-4 invisible hidden lg:block lg:visible fade-in--noscroll">
				<?php get_template_part( 'template-parts/posts/post-related' ); ?>
			</div>
		</div>
	</div>
</div>
