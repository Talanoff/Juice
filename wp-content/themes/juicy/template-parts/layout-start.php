<section id="start" class="bg-black text-white min-h-screen flex flex-col justify-center" data-anchor="#start">
    <div class="container container--left-offset relative z-10">
        <h1 class="text-4xl lg:text-7xl font-bold leading-tight mb-12"><?php the_field('start_title') ?></h1>

        <div class="quote quote--small text-lg">
			<?php the_field('start_quote') ?>
        </div>

        <div class="mt-20">
            <button class="button" data-modal>Let's Grow</button>
        </div>

        <div class="additional additional--bottom">
            scroll
        </div>
    </div>

	<?php if (get_field('start_background')) : ?>
        <figure class="section-background"
                style="background-image: url(<?php the_field('start_background') ?>)"></figure>
	<?php endif; ?>
</section>