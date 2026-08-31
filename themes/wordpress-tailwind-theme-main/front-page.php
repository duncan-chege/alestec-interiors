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

        <div class="grid grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-12">
            <div>
                <svg class="w-11 h-11 mb-5" viewBox="0 0 48 48" fill="none">
                    <rect x="6" y="6" width="26" height="26" rx="3" fill="#16513f" />
                    <path d="M12 14h14M12 20h14M12 26h8" stroke="#fef8ec" stroke-width="2" stroke-linecap="round" />
                    <rect x="26" y="26" width="16" height="6" rx="1.5" fill="#a86d33" transform="rotate(45 26 26)" />
                </svg>
                <h4 class="text-green mb-2">Design &amp; Space Planning</h4>
                <p class="text-sm">Crafting layouts and concepts tailored to how you'll use the space.</p>
            </div>

            <div>
                <svg class="w-11 h-11 mb-5" viewBox="0 0 48 48" fill="none">
                    <rect x="10" y="6" width="24" height="34" rx="3" fill="#16513f" />
                    <rect x="17" y="4" width="10" height="6" rx="2" fill="#a86d33" />
                    <path d="M15 18l3 3 6-6M15 28l3 3 6-6" stroke="#fef8ec" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h4 class="text-brown mb-2">Specialist Fit-Out</h4>
                <p class="text-sm">Expert finishing and installation work carried out to the highest standard.</p>
            </div>

            <div>
                <svg class="w-11 h-11 mb-5" viewBox="0 0 48 48" fill="none">
                    <rect x="8" y="8" width="22" height="12" rx="2" fill="#16513f" />
                    <rect x="26" y="18" width="4" height="8" fill="#a86d33" />
                    <path d="M28 26l10 10" stroke="#a86d33" stroke-width="4" stroke-linecap="round" />
                    <rect x="33" y="31" width="8" height="4" rx="1" fill="#a86d33" transform="rotate(45 33 31)" />
                </svg>
                <h4 class="text-brown mb-2">Construction</h4>
                <p class="text-sm">Building out the design with quality materials and skilled craftsmanship.</p>
            </div>

            <div>
                <svg class="w-11 h-11 mb-5" viewBox="0 0 48 48" fill="none">
                    <path d="M10 42V10" stroke="#16513f" stroke-width="4" stroke-linecap="round" />
                    <path d="M10 12h28" stroke="#16513f" stroke-width="4" stroke-linecap="round" />
                    <path d="M10 18l10-6" stroke="#16513f" stroke-width="3" stroke-linecap="round" />
                    <path d="M34 12v6" stroke="#a86d33" stroke-width="3" stroke-linecap="round" />
                    <rect x="6" y="42" width="14" height="4" rx="1" fill="#a86d33" />
                </svg>
                <h4 class="text-green mb-2">Project Management</h4>
                <p class="text-sm">Overseeing every phase to keep timelines, budgets, and quality on track.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Services -->
<section id="services" class="relative bg-green py-16 md:py-24 overflow-hidden">
    <div class="absolute inset-0" style="background-image:url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%2760%27 height=%2760%27%3E%3Cpath d=%27M30 0 L60 30 L30 60 L0 30 Z%27 fill=%27none%27 stroke=%27rgba(255,255,255,0.08)%27 stroke-width=%271%27/%3E%3C/svg%3E');"></div>

    <div class="relative container-custom">
        <span class="badge border-cream/40 text-cream mb-6">
            <span class="badge-dot"></span> Our Services
        </span>

        <div class="flex items-end justify-between gap-6 mb-10 md:mb-14">
            <h2 class="text-white max-w-xl">Experience the art of interior design</h2>

            <div class="hidden md:flex gap-3">
                <button type="button" aria-label="Previous" class="arrow-btn">
                    <svg class="w-4 h-4 text-dark-grey" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 12H5M5 12l6-6M5 12l6 6" />
                    </svg>
                </button>
                <button type="button" aria-label="Next" class="arrow-btn">
                    <svg class="w-4 h-4 text-dark-grey" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-6 md:gap-8">
            <div>
                <div class="relative rounded-xl overflow-hidden aspect-4/5">
                    <img src="https://placehold.co/600x750/e7e1d0/2f2f2f?text=Special+Fit-Outs" alt="Special fit-outs" loading="lazy"
                        class="w-full h-full object-cover" />
                    <button type="button" aria-label="View Special Fit-Outs" class="arrow-btn absolute bottom-3 right-3">
                        <svg class="w-4 h-4 text-dark-grey" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10" />
                        </svg>
                    </button>
                </div>
                <h3 class="text-white mt-4">Special Fit-Outs</h3>
            </div>

            <div>
                <div class="relative rounded-xl overflow-hidden aspect-4/5">
                    <img src="https://placehold.co/600x750/e7e1d0/2f2f2f?text=Construction+%26+Finishing" alt="Construction and finishing" loading="lazy"
                        class="w-full h-full object-cover" />
                    <button type="button" aria-label="View Construction and Finishing" class="arrow-btn absolute bottom-3 right-3">
                        <svg class="w-4 h-4 text-dark-grey" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10" />
                        </svg>
                    </button>
                </div>
                <h3 class="text-white mt-4">Construction &amp; Finishing</h3>
            </div>

            <div>
                <div class="relative rounded-xl overflow-hidden aspect-4/5">
                    <img src="https://placehold.co/600x750/e7e1d0/2f2f2f?text=Project+Management" alt="Project management" loading="lazy"
                        class="w-full h-full object-cover" />
                    <button type="button" aria-label="View Project Management" class="arrow-btn absolute bottom-3 right-3">
                        <svg class="w-4 h-4 text-dark-grey" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10" />
                        </svg>
                    </button>
                </div>
                <h3 class="text-white mt-4">Project Management</h3>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
