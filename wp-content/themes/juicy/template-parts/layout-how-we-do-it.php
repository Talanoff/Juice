<section id="about" data-anchor="#about">
    <div class="container container--left-offset relative z-10">
        <div class="additional additional--top"><?php the_field('how_small_title') ?></div>
        <h2 class="text-4xl lg:text-7xl text-black mb-6 leading-none"><?php the_field('how_title') ?></h2>
        <h4 class="text-xl lg:text-3xl max-w-lg leading-normal"><?php the_field('how_subtitle') ?></h4>
    </div>

    <div class="container lg:text-2xl mt-10 lg:mt-24 px-2">
        <div class="flex flex-wrap -mx-10">
			<?php if (get_field('how_content')) : ?>
                <div class="px-10 mb-8 md:mb-0 md:w-2/3 lg:w-1/2">
					<?php the_field('how_content') ?>
                </div>
			<?php endif; ?>

			<?php if (get_field('how_image')) : ?>
                <div class="md:px-10 md:w-1/3 lg:w-1/2">
                    <img src="<?php the_field('how_image') ?>" alt="<?php the_field('how_title') ?>">
                </div>
			<?php endif; ?>
        </div>
    </div>
</section>