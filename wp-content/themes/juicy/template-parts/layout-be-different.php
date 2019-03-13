<section class="bg-grey-lightest" data-anchor="#about">
    <div class="container px-2">
        <div class="flex flex-wrap -ml-12">
            <div class="pl-12 w-full lg:w-1/3">
                <h2 class="text-4xl text-black mb-6 leading-none -mt-2">
                    <?php the_field('different_title') ?>
                </h2>
            </div>

			<?php if (have_rows('different_items')) : ?>
                <div class="w-full lg:w-2/3 pl-12">
                    <div class="flex flex-wrap -ml-12">
						<?php while (have_rows('different_items')) : the_row(); ?>
                            <div class="pl-12 xl:pr-24 w-full md:w-1/2 mb-4 md:mb-0">
								<?php the_sub_field('content'); ?>
                            </div>
						<?php endwhile; ?>
                    </div>
                </div>
			<?php endif; ?>
        </div>
    </div>
</section>

<section data-anchor="#about">
	<?php
	if (have_rows('testimonials') && isset(get_field('testimonials')[0])) {
		$testimonial = get_field('testimonials')[0];
		include(__DIR__ . '/template-testimonial.php');
	}
	?>
</section>