<footer class="bg-dark-grey text-white pt-14 md:pt-20 pb-8">
    <div class="container-custom flex flex-col md:flex-row md:items-start gap-x-50 pb-10">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-alestec-logo.svg" alt="<?php bloginfo('name'); ?>" class="h-16">
           

            <div class="flex gap-6 mt-8">
                <a href="#" aria-label="TikTok">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tiktok-logo.svg" alt="TikTok" class="w-6 h-6">   
                </a>
                <a href="#" aria-label="Instagram">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-logo.svg" alt="Instagram" class="w-6 h-6">
                </a>
            </div>
        </div>

        <div class="space-y-2">
            <h5 class="text-white mb-3 underline underline-offset-6">Contact Us</h5>
            <p class="font-light">Nairobi, Kenya</p>
            <p class="font-light">0712345678</p>
            <p class="font-light">info@alestec.co.ke</p>
        </div>
    </div>

    <div class="container-custom border-t border-white/10 pt-6 flex flex-col md:flex-row gap-2 justify-between text-xs text-white/60">
            <a href="https://visualsnare.com/" class="hover:text-white" target="_blank" rel="noopener">Made by Visualsnare</a>    
    <p><?php bloginfo('name'); ?> &copy; <?php echo esc_html(date('Y')); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
