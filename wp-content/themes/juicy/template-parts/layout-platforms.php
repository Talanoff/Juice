<section class="bg-grey-lightest" data-anchor="#services">
    <div class="container container--left-offset relative">
        <div class="additional additional--top mt-6"><?php the_field('platforms_small_title') ?></div>
        <h2 class="text-4xl lg:text-6xl text-black mb-6"><?php the_field('platforms_title') ?></h2>
        <h4 class="text-lg lg:text-2xl max-w-md leading-normal font-normal"><?php the_field('platforms_subtitle') ?></h4>

		<?php if (have_rows('partners_logos')) : ?>
            <div class="flex flex-wrap -mx-8 -mb-4 mt-8">
                <div class="px-8 mb-4 md:w-1/3">
                    <h5 class="text-2xl"><?php the_field('partners_intro') ?></h5>
                </div>

                <div class="px-8 flex-1">
                    <div class="flex flex-wrap -mx-8 -mb-4">
						<?php while (have_rows('partners_logos')) : the_row(); ?>

                            <div class="px-8 w-1/2 lg:w-1/3 mb-4">
                                <img src="<?php the_sub_field('logo') ?>" alt="">
                            </div>

						<?php endwhile; ?>
                    </div>
                </div>
            </div>
		<?php endif; ?>
    </div>
</section>