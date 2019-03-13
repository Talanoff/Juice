<section id="processes" data-anchor="#processes">
    <div class="container container--left-offset relative z-10">
        <div class="additional additional--top mt-4"><?php the_field('case_small_title') ?></div>
        <h2 class="text-4xl lg:text-7xl text-black mb-6 leading-none"><?php the_field('case_title') ?></h2>
        <h4 class="text-xl lg:text-3xl max-w-md leading-normal"><?php the_field('case_subtitle') ?></h4>
    </div>

	<?php if (have_rows('case_items')) : ?>
        <div class="container px-2 mt-24">
            <div class="flex flex-wrap justify-center -mx-8 -mb-8 text-center">
				<?php while (have_rows('case_items')) : the_row(); ?>

                    <div class="md:w-1/2 lg:w-1/3 px-8 mb-8 <?php echo get_row_index() == 1 ? 'lg:mt-12' : (get_row_index() == 3 ? 'lg:-mt-12' : ''); ?>">
                        <p><img src="<?php the_sub_field('image') ?>" alt=""></p>
                        <p>
                            <span class="px-4 pb-4 border-b-2 border-grey-lightest inline-block text-lg font-bold">
                                <?php echo get_row_index() ?>
                            </span>
                        </p>
                        <h4 class="text-2xl text-black mb-6"><?php the_sub_field('title') ?></h4>
                        <p><?php the_sub_field('description') ?></p>
                    </div>

				<?php endwhile; ?>
            </div>
        </div>
	<?php endif; ?>
</section>