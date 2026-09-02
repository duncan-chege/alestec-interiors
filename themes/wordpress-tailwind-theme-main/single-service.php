<?php get_header(); ?>

<div class="relative h-50 md:h-90">
    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full', array(
            'class' => 'w-full h-full object-cover brightness-75',
            'alt'   => get_the_title(),
        )); ?>
    <?php else : ?>
        <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri();?>/assets/images/special-fit-out-bg.jpg" alt="interior showcase">
    <?php endif; ?>
    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white">Service > <?php the_title(); ?></h2>
</div>

<div class="py-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="service-content">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>