</main>

<footer class="bg-grey-lightest py-8 text-sm text-center">
    <div class="container px-2">
        <div class="flex flex-wrap -mx-8">
            <div class="px-8 w-full lg:w-1/4">
                &copy; <?php bloginfo('title') ?>, <?php echo date('Y') ?>
            </div>
            <div class="px-8 py-8 lg:py-0 w-full lg:w-1/2">
				<?php
				wp_nav_menu([
					'menu' => 'menu-social',
					'container' => 'nav',
					'container_class' => 'flex justify-around text-lg',
					'items_wrap' => '%3$s',
					'walker' => new SocialWalkerNavMenu(),
				]);
				?>
            </div>
            <div class="px-8 w-full lg:w-1/4 lg:text-right">
                Designed with love by <span class="text-pink">tonik</span>
            </div>
        </div>
    </div>
</footer>

<div class="modal">
    <div class="modal-outer"></div>
    <div class="modal-body">
        <div id="close" class="is-open">
            <span></span>
        </div>
		<?php echo do_shortcode('[contact-form-7 id="211" title="Contact form"]') ?>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
