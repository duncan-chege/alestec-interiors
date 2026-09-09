<?php get_header(); ?>

<section class="container-custom min-h-[60vh] flex flex-col items-center justify-center text-center py-16">
    <h1 class="text-dark-grey mt-4">Page Not Found &#9785;</h1>
    <p class="max-w-md mt-4 mb-8">Sorry, the page you're looking for doesn't exist or may have been moved.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="bg-green text-white font-semibold px-8 py-3 rounded-full hover:bg-dark-grey transition">
        Back To Home
    </a>
</section>

<?php get_footer(); ?>
