<?php get_header(); ?>

<!-- Hero -->
<div class="relative h-50 md:h-90">
    <img class="w-full h-full object-cover brightness-75" src="<?php echo get_template_directory_uri();?>/assets/images/contact-bg.jpg" alt="contact background image">
    <h1 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-4xl md:text-5xl mb-0"><?php the_title(); ?></h1>
</div>

<!-- Get in Touch -->
<section class="container-custom py-16 md:py-24">
    <h2 class="text-center text-dark-grey mb-4">Get in Touch</h2>
    <p class="text-center max-w-2xl mx-auto mb-14">Have a project in mind? Get in touch and let's discuss how we can bring it to life.</p>

    <div class="grid md:grid-cols-3 divide-y-2 md:divide-y-0 md:divide-x-2 divide-gray-200 gap-y-8 max-w-5xl mx-auto">
        <div class="flex gap-4 pb-4">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/contact-us.svg" alt="mail icon" class="w-16 h-16 shrink-0">
            <div class="space-y-2">
                <h4 class="font-bold">Contact Us</h4>
                <p>Call Us: <a href="tel:0705212579" class="font-bold text-green">0705212579</a></p>
                <p>Email: <a href="mailto:info@alestecinteriors.co.ke" class="font-bold text-green">info@alestecinteriors.co.ke</a></p>
            </div>
        </div>

        <div class="flex gap-4 md:px-4">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/clock-icon.svg" alt="time icon" class="w-16 h-16 shrink-0">
             <div class="space-y-2 mb-6">
                <h4 class="font-bold">Opening Hours</h4>
                <p>Mon - Sat: 8am - 5pm</p>
            </div>
        </div>

        <div class="flex gap-4 ml-0 md:px-4">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/location-icon.svg" alt="location icon" class="w-16 h-16 shrink-0">

            <p class="text-left font-semibold text-lg text-dark-grey">Nairobi, Kenya</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
