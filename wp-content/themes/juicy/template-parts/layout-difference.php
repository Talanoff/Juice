<section class="pb-0 relative z-10" data-anchor="#about">
    <div class="container px-2 text-center">
        <p class="opacity-50 text-sm mb-2 font-bold"><?php the_field('diff_small_title') ?></p>
        <h2 class="text-4xl lg:text-6xl text-black"><?php the_field('diff_title') ?></h2>
    </div>
</section>

<section class="-mt-10 bg-grey-lightest" data-anchor="#about">
    <div class="container px-2">
        <div class="flex flex-wrap">
            <div class="md:w-2/5 mb-8 md:-mb-64">
                <img src="<?php the_field('diff_image') ?>" alt="">
            </div>
            <div class="md:w-3/5 md:pl-24">
                <div class="flex flex-wrap -mx-8">
					<?php foreach (['diff_column_1', 'diff_column_2'] as $col) : if (get_field($col)) : ?>
                        <div class="px-8 sm:w-1/2">
							<?php the_field($col) ?>
                        </div>
					<?php endif; endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-anchor="#about">
    <div class="container px-2">
        <div class="flex flex-wrap">
            <div class="md:w-3/5 md:pl-24 ml-auto">
                <h3 class="text-3xl lg:text-5xl font-normal"><?php the_field('diff_subtitle') ?></h3>

				<?php if (have_rows('diff_items')) : ?>
                    <div class="mt-8 flex flex-wrap -mx-8">
						<?php while (have_rows('diff_items')) : the_row(); ?>

                            <div class="px-8 text-center w-full md:w-1/3">
                                <h3 class="text-6xl text-black"><?php the_sub_field('heading') ?></h3>
                                <p class="opacity-80"><?php the_sub_field('description') ?></p>
                                <hr class="border-b border-pink mt-4 lg:mt-8">
                            </div>

						<?php endwhile; ?>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>