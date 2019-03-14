<section id="services" class="py-0 md:pt-20 relative z-10" data-anchor="#services">
    <div class="container px-2 text-center">
        <p class="opacity-50 text-sm mb-2 font-bold"><?php the_field('should_small_title') ?></p>
        <h2 class="text-4xl lg:text-7xl text-black max-w-lg mx-auto leading-none"><?php the_field('should_title') ?></h2>
    </div>
</section>

<section class="bg-grey-lightest -mt-32 pt-48 pb-36" data-anchor="#services">
    <div class="container px-2">
        <div class="flex flex-wrap -mx-8">
            <div class="px-8 md:w-2/5">
                <h4 class="text-xl lg:text-4xl mb-4">
					<?php the_field('should_subtitle') ?>
                </h4>
            </div>
            <div class="px-8 flex-1">
                <img src="<?php the_field('should_image') ?>" alt="">
            </div>
        </div>

		<?php if (have_rows('should_items')) : ?>
            <div class="flex flex-wrap -mx-8 -mb-4 mt-8">
				<?php while (have_rows('should_items')) : the_row(); ?>

                    <div class="px-8 mb-4 md:w-1/3 lg:w-1/4">
                        <h5 class="font-bold text-xl mb-4">
							<?php the_sub_field('title') ?>
                        </h5>
                        <p>
							<?php the_sub_field('description') ?>
                        </p>
                    </div>

				<?php endwhile; ?>
            </div>
		<?php endif; ?>
    </div>
</section>

<section class="relative z-10 -mt-48 pb-0" data-anchor="#services">
    <div class="container px-2">
        <div class="flex flex-wrap mt-8 -mx-8 -mb-4 justify-end">
			<?php if (get_field('should_bottom_block_image')) : ?>
                <div class="px-8 mb-4 md:w-1/3 lg:w-1/4">
                    <img src="<?php the_field('should_bottom_block_image') ?>" alt="">
                </div>
			<?php endif; ?>

            <div class="px-8 md:w-2/3">
				<?php the_field('should_bottom_block_text') ?>
            </div>
        </div>
    </div>
</section>

<section data-anchor="#services">
	<?php
	if (have_rows('testimonials') && isset(get_field('testimonials')[2])) {
		$testimonial = get_field('testimonials')[2];
		include(__DIR__ . '/template-testimonial.php');
	}
	?>
</section>
