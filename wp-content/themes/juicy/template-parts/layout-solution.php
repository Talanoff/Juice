<section class="text-white bg-black bg-center bg-cover bg-no-repeat pb-32"
         style="background-image: url(<?php the_field('solution_background') ?>);" data-anchor="#about">
    <div class="container container--left-offset">
        <h3 class="quote quote--large text-3xl lg:text-6xl font-normal"><?php the_field('solution_quote') ?></h3>
        <h2 class="text-lg lg:text-2xl opacity-80 font-normal mt-8">
			<?php the_field('solution_title') ?>
        </h2>
    </div>
</section>

<section class="bg-black text-white py-8" data-anchor="#about">
    <div class="container px-2">
        <div class="flex flex-wrap -mx-8">
			<?php if (get_field('solution_just_image')) : ?>
                <div class="px-8 md:w-1/5 relative">
                    <figure class="md:absolute pin-t pin-l pin-r -ml-12 -mt-24 mr-8">
                        <img src="<?php the_field('solution_just_image') ?>" alt="">
                    </figure>
                </div>
			<?php endif; ?>

			<?php if (get_field('solution_column_1')) : ?>
                <div class="px-8 md:flex-1">
					<?php the_field('solution_column_1') ?>
                </div>
			<?php endif; ?>

			<?php if (get_field('solution_column_1')) : ?>
                <div class="px-8 md:flex-1">
					<?php the_field('solution_column_1') ?>
                </div>
			<?php endif; ?>
        </div>
    </div>

    <div class="container container--left-offset relative">
        <div class="additional additional--bottom -mb-3">WHO ARE WE?</div>
		<?php if (get_field('solution_conclusion')) : ?>
            <h3 class="text-xl lg:text-2xl font-normal mt-12">
				<?php the_field('solution_conclusion') ?>
            </h3>
		<?php endif; ?>
    </div>
</section>

<section class="py-4" data-anchor="#about">
    <div class="container text-center">
        <h2 class="text-xl lg:text-3xl"><?php the_field('solution_after_section') ?></h2>
    </div>
</section>