<?php get_header(); ?>

<!-- Hero -->
<section class="container-custom pt-10 md:pt-16 pb-16 md:pb-24">
    <div class="grid md:grid-cols-2 gap-10 md:gap-16 items-center">
        <div>
            <h1 class="text-dark-grey">From <span class="text-brown">Concept</span> to
                <span class="text-brown">Handover</span>, Flawlessly Delivered
            </h1>
            <p class="text-base md:text-lg">
                With over 10+ years experience in construction management, we have handled a wide variety of
                projects with different range and combination of skillsets in the East Africa region and Kenya
                at large
            </p>
        </div>

        <div class="relative overflow-hidden">
            <img class="w-full h-full object-cover relative left-30" src="<?php echo get_template_directory_uri();?>/assets/images/outer-hero-img.jpg" alt="interior showcase">

            <div class="absolute top-1/2 -translate-y-1/2">
                <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri();?>/assets/images/inner-hero-img.png" alt="interior showcase">
            </div>
        </div>
    </div>
</section>

<!-- Who We Are -->
<section class="container-custom py-8 md:py-16">
    <div class="grid md:grid-cols-2 gap-8 md:gap-16 items-center">
        <div>
            <span class="badge border-brown/40 text-brown mb-6">
                <span class="badge-dot"></span> Who We Are
            </span>
            <h2 class="text-dark-grey mb-4">Welcome To Alestec Interiors</h2>
            <p class="mb-4">
                We provide our clients the luxury of having their projects handled from conceptualisation to
                handover, delivered on time and to the utmost standard.
            </p>
            <p class="mb-10">We serve corporations, large scale commercial clients and residences</p>

            <div class="flex flex-wrap gap-x-16 gap-y-6">
                <div class="flex flex-col items-center gap-3 text-center">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/livingroom-icon.svg" alt="interior design icon" class="w-18 h-18">
                    <span class="text-sm font-semibold text-dark-grey">Interior Design</span>
                </div>
                <div class="flex flex-col items-center gap-3 text-center">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/building-icon.svg" alt="interior design icon" class="w-18 h-18">
                    <span class="text-sm font-semibold text-dark-grey">Urban Design</span>
                </div>
                <div class="flex flex-col items-center gap-3 text-center">
                     <img src="<?php echo get_template_directory_uri();?>/assets/images/house-icon.svg" alt="interior design icon" class="w-18 h-18">
                    <span class="text-sm font-semibold text-dark-grey">Residential Design</span>
                </div>
            </div>
        </div>

        <div class="justify-self-start relative">
            <div class="relative">
                <img class="w-full h-full object-cover relative left-10" src="<?php echo get_template_directory_uri();?>/assets/images/welcome-outer-img.png" alt="interior showcase">
            </div>

            <div class="outline -outline-offset-10 outline-white absolute top-0 right-6 w-28 h-28 md:w-44 md:h-44 rounded-full bg-brown text-cream flex flex-col items-center justify-center text-center shadow-xl">
                <span class="text-3xl md:text-6xl font-bold leading-none">10</span>
                <span class="text-sm tracking-wide leading-tight mt-1">YEARS OF<br>EXPERIENCE</span>
            </div>

            <div class="absolute top-1/2 -translate-y-1/2">
                     <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri();?>/assets/images/welcome-inner-img.png" alt="interior showcase">
            </div>
        </div>
    </div>
</section>

<!-- Our Process -->
<section class="bg-cream py-16 md:py-24">
    <div class="container-custom">
        <span class="badge border-brown/40 text-brown mb-6">
            <span class="badge-dot"></span> Our Process
        </span>
        <p class="max-w-2xl text-base md:text-lg mb-12 md:mb-16">
            A structured approach that takes your project from first idea to final handover, without compromise.
        </p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-x-8 gap-y-8 text-center">
            <div>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/blueprint-icon.svg" alt="blueprint icon" class="w-20 h-20 mx-auto">
                <h5 class="text-brown mt-3 mb-1">Design &amp; Space Planning</h5>
                <p class="text-sm">Crafting layouts and concepts tailored to how you'll use the space.</p>
            </div>

            <div>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/specialist-icon.svg" alt="specialist fit-out icon" class="w-20 h-20 mx-auto">
                <h5 class="text-brown mt-3 mb-1">Specialist Fit-Out</h5>
                <p class="text-sm">Expert finishing and installation work carried out to the highest standard.</p>
            </div>

            <div>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/construction-icon.svg" alt="construction icon" class="w-20 h-20 mx-auto">
                <h5 class="text-brown mt-3 mb-1">Construction</h5>
                <p class="text-sm">Building out the design with quality materials and skilled craftsmanship.</p>
            </div>

            <div>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/proj-management-icon.svg" alt="project management icon" class="w-20 h-20 mx-auto">
                <h5 class="text-brown mt-3 mb-1">Project Management</h5>
                <p class="text-sm">Overseeing every phase to keep timelines, budgets, and quality on track.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Services -->
<section id="services" class="relative bg-green py-16 md:py-24 overflow-hidden scroll-mt-20">
    <div class="absolute inset-0" style="background-image:url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%2760%27 height=%2760%27%3E%3Cpath d=%27M30 0 L60 30 L30 60 L0 30 Z%27 fill=%27none%27 stroke=%27rgba(255,255,255,0.08)%27 stroke-width=%271%27/%3E%3C/svg%3E');"></div>

    <div class="relative container-custom">
        <span class="badge border-cream/40 text-cream mb-6">
            <span class="badge-dot"></span> Our Services
        </span>

        <div class="flex items-end justify-between gap-6 mb-10 md:mb-14">
            <h2 class="text-white max-w-xl">Experience the art of interior design</h2>

            <div class="hidden md:flex gap-3">
                <button type="button" id="services-prev" aria-label="Previous" class="arrow-btn">
                    <svg class="w-4 h-4 text-dark-grey" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 12H5M5 12l6-6M5 12l6 6" />
                    </svg>
                </button>
                <button type="button" id="services-next" aria-label="Next" class="arrow-btn">
                    <svg class="w-4 h-4 text-dark-grey" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </button>
            </div>
        </div>

        <?php
        $services_query = new WP_Query(array(
            'post_type'      => 'service',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ));
        ?>

        <div id="services-track" class="flex gap-10 md:gap-8 overflow-x-auto snap-x snap-mandatory scroll-smooth scrollbar-none pb-2">
            <?php while ($services_query->have_posts()) : $services_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="group block shrink-0 snap-start w-[85%] md:w-[28%]">
                    <div class="relative rounded-xl overflow-hidden h-90">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', array(
                                'class'   => 'w-full h-full object-cover',
                                'alt'     => get_the_title(),
                                'loading' => 'lazy',
                            )); ?>
                        <?php else : ?>
                            <img src="https://placehold.co/600x750/e7e1d0/2f2f2f?text=<?php echo rawurlencode(get_the_title()); ?>"
                                alt="<?php the_title_attribute(); ?>" loading="lazy" class="w-full h-full object-cover" />
                        <?php endif; ?>
                        <span aria-hidden="true" class="arrow-btn absolute bottom-3 right-3">
                            <svg class="w-4 h-4 text-dark-grey" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10" />
                            </svg>
                        </span>
                    </div>
                    <h3 class="text-white mt-4 group-hover:text-mustard transition"><?php the_title(); ?></h3>
                </a>
            <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<?php get_footer(); ?>
