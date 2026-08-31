<?php get_header(); ?>

<div class="min-h-[calc(100vh-100px)] md:px-20 px-4 flex flex-col justify-center">
    <h1 class="font-medium"> <?php the_title(); ?> </h1>
    <div><?php the_content();  ?></div>
</div>

<?php get_footer(); ?>