<section id="clients" class="py-0" data-anchor="#clients">
    <div class="container text-center px-2">
        <h2 class="text-3xl lg:text-4xl max-w-lg mx-auto"><?php the_field('clients_title') ?></h2>
        <h3 class="text-xl lg:text-2xl"><?php the_field('clients_subtitle') ?></h3>
    </div>

	<?php if (have_rows('clients_items')) : ?>
        <div class="flex flex-wrap mt-8">
			<?php while (have_rows('clients_items')) : the_row(); ?>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <article class="client">
                        <figure style="background-image: url(<?php the_sub_field('background') ?>);"></figure>
                        <img src="<?php the_sub_field('logo') ?>" alt="">
                    </article>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>

<section data-anchor="#clients">
	<?php
	if (have_rows('testimonials') && isset(get_field('testimonials')[1])) {
		$testimonial = get_field('testimonials')[1];
		include(__DIR__ . '/template-testimonial.php');
	}
	?>
</section>