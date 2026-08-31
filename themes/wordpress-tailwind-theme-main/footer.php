<footer class="bg-dark-grey text-white pt-14 md:pt-20 pb-8">
    <div class="container-custom flex flex-col md:flex-row md:items-start justify-between gap-10 pb-10">
        <div>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-bold text-white">
                <?php bloginfo('name'); ?>
            </a>

            <div class="flex gap-3 mt-8">
                <a href="#" aria-label="TikTok" class="w-9 h-9 rounded-full border border-white/30 flex items-center justify-center hover:bg-white/10 transition">
                    <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M16 3c.4 2 2 3.6 4 4v3.2c-1.5 0-3-.4-4.2-1.2v6.4A5.6 5.6 0 1110.6 9.9v3.3a2.4 2.4 0 102 2.36V3h3.4z" />
                    </svg>
                </a>
                <a href="#" aria-label="Instagram" class="w-9 h-9 rounded-full border border-white/30 flex items-center justify-center hover:bg-white/10 transition">
                    <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="18" height="18" rx="5" />
                        <circle cx="12" cy="12" r="4" />
                        <circle cx="17.5" cy="6.5" r="0.9" fill="currentColor" stroke="none" />
                    </svg>
                </a>
            </div>
        </div>

        <div>
            <h5 class="text-mustard mb-3">Contact Us</h5>
            <p>Nairobi, Kenya</p>
            <p>0712345678</p>
            <p>info@alestec.co.ke</p>
        </div>
    </div>

    <div class="container-custom border-t border-white/10 pt-6 flex flex-col md:flex-row gap-2 justify-between text-xs text-white/60">
        <p><?php bloginfo('name'); ?> &copy; <?php echo esc_html(date('Y')); ?></p>
        <a href="https://visualsnare.com/" target="_blank" rel="noopener">Made by Visualsnare</a>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
