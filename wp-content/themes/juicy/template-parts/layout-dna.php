<section class="bg-black text-white" data-anchor="#about">
    <div class="container px-2">
        <div class="uppercase text-center text-sm opacity-40"><?php the_field('dna_small_title') ?></div>
        <h2 class="text-center text-4xl lg:text-7xl"><?php the_field('dna_title') ?></h2>
        <p class="text-center opacity-80"><?php the_field('dna_subtitle') ?></p>

		<?php if (have_rows('dna_progress')) : ?>
            <div class="flex flex-wrap justify-center -mx-8 mt-10">
				<?php while (have_rows('dna_progress')) : the_row(); ?>

                <div class="px-8 text-center w-full md:w-1/3 lg:w-1/5 mb-10 md:mb-0">
                    <h3 class="text-6xl"><?php the_sub_field('heading') ?></h3>
                    <p class="opacity-80"><?php the_sub_field('title') ?></p>
                    <hr class="border-b border-pink my-4 md:my-8">
                    <p class="opacity-80 leading-loose"><?php the_sub_field('description') ?></p>
                </div>

				<?php endwhile; ?>
            </div>
		<?php endif; ?>
    </div>
</section>