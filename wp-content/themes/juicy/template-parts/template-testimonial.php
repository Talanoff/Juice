<div class="container max-w-lg px-2">
    <div class="text-xl md:text-3xl text-black font-bold mb-8">”<?php echo $testimonial['content'] ?>”</div>

    <div class="flex items-center">
        <div class="w-auto mr-6">
            <img src="<?php echo $testimonial['author_avatar']['sizes']['thumbnail'] ?>"
                 class="testimonial-avatar block" alt="">
        </div>
        <div class="lg:w-50">
            <h5 class="text-base text-black"><?php echo $testimonial['author_name'] ?></h5>
            <p><?php echo $testimonial['author_position'] ?></p>
        </div>
    </div>
</div>