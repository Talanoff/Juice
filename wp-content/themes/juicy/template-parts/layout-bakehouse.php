<section class="py-0" data-anchor="#about">
    <div class="container px-2">
        <h2 class="text-4xl text-black mb-6"><?php the_field('bakehouse_title') ?></h2>

        <div class="md:flex -mx-8">
            <div class="w-auto px-8 flex items-center mb-8 md:mb-0">
                <div class="w-8 h-8 rounded-full bg-grey-lightest mr-3"></div>
                Funds raised
            </div>
            <div class="w-auto px-8 flex items-center mb-8 md:mb-0">
                <div class="w-8 h-8 rounded-full bg-pink mr-3"></div>
                Revenue
            </div>
            <div class="w-auto px-8 flex items-center">
                <div class="w-8 h-8 rounded-full bg-black mr-3"></div>
                Visitors
            </div>
        </div>
    </div>

    <div class="shapes">
        <img src="<?php echo get_theme_file_uri('images/shape-grey.svg') ?>" class="w-full" alt="">
        <img src="<?php echo get_theme_file_uri('images/shape-pink.svg') ?>" class="w-full" alt="">
        <img src="<?php echo get_theme_file_uri('images/shape-black.svg') ?>" class="w-full" alt="">
    </div>
</section>