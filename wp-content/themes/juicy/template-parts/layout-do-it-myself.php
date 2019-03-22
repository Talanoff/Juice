<section class="bg-grey-lightest has-content pb-48" data-anchor="#about">
    <div class="container container--left-offset px-2">
        <h2 class="text-3xl font-normal mb-8 max-w-mld leading-tight">
            <?php the_field('myself_title') ?>
        </h2>

        <div class="flex flex-wrap -ml-12">
            <div class="pl-12 w-full lg:w-1/4">
                <h2 class="text-3xl quote text-black mb-6 leading-tight lg:pr-20">
					<?php the_field('myself_quote') ?>
                </h2>
            </div>

			<?php if (have_rows('myself_items')) : ?>
                <div class="w-full lg:w-3/4 pl-12 leading-loose">
                    <div class="flex flex-wrap -ml-12">
						<?php while (have_rows('myself_items')) : the_row(); ?>
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

<section class="pt-0 lg:pb-48 lg:text-2xl relative z-10" data-anchor="#about">
    <div class="container px-2">
        <div class="flex flex-wrap -mx-20 xl:-mx-24">
            <div class="px-20 xl:px-24 md:w-1/2 -mt-48">
				<?php if (get_field('problem_1_image')) : ?>
                    <div class="md:-ml-4 md:-mr-64 mb-6">
                        <img src="<?php the_field('problem_1_image') ?>" class="block" alt="">
                    </div>
				<?php endif; ?>

                <div class="lg:pr-12">
					<?php the_field('problem_1') ?>
                </div>
            </div>

            <div class="px-20 xl:px-24 md:w-1/2 lg:mt-20">
				<?php if (get_field('problem_2_image')) : ?>
                    <div class="mb-6 mt-8 md:mt-0 md:border-20 border-white">
                        <img src="<?php the_field('problem_2_image') ?>" class="block" alt="">
                    </div>
				<?php endif; ?>

                <div class="lg:pr-12">
					<?php the_field('problem_2') ?>
                </div>
            </div>
        </div>

        <div class="mt-8 font-bold text-4xl">
            <?php the_field('myself_conclusion') ?>
        </div>
    </div>
</section>