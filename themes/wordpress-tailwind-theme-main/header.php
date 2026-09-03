<!DOCTYPE html>
<html class="scroll-smooth" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('text-gray-900 font-plus'); ?>>
    <?php wp_body_open(); ?>

    <header class="bg-white sticky top-0 z-50">
        <nav class="container-custom flex items-center justify-between xl:justify-start xl:gap-x-80 py-2">
            <!-- Logo/Site Title -->
            <div class="flex items-center">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alestec-logo.svg" alt="<?php bloginfo('name'); ?>" class="h-16">
                </a>
            </div>

            <!-- Mobile menu button -->
            <button class="md:hidden p-2" id="mobile-menu-toggle" aria-expanded="false">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Desktop navigation -->
            <div class="hidden md:flex gap-8 lg:gap-16">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex items-center gap-8 lg:gap-18 text-sm font-medium text-dark-grey uppercase tracking-wide',
                    'container' => false,
                ));
                ?>
                <a href="tel:+254705212579" class="text-sm font-semibold text-dark-grey whitespace-nowrap">
                    Call Us: <span class="font-bold text-green">+254705212579</span>
                </a>

                <div class="flex items-center gap-6">
                    <a target="_blank" href="#" aria-label="TikTok">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dark-tiktok-logo.svg" alt="TikTok" class="w-5 h-5">
                    </a>
                    <a target="_blank" href="#" aria-label="Instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dark-instagram-logo.svg" alt="Instagram" class="w-5 h-5">
                    </a>
                </div>
            </div>
        </nav>

        <!-- Mobile navigation backdrop -->
        <div class="md:hidden fixed inset-0 bg-black/50 z-40 opacity-0 invisible pointer-events-none transition duration-300" id="mobile-menu-overlay"></div>

        <!-- Mobile navigation drawer -->
        <div class="md:hidden fixed top-0 right-0 h-full w-4/5 max-w-xs bg-white z-50 shadow-xl translate-x-full transition-transform duration-300 overflow-y-auto" id="mobile-menu">
            <div class="flex items-center justify-between px-4 pt-4 border-b border-gray-100">
                <button class="p-2" id="mobile-menu-close" aria-label="Close menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="flex items-center gap-8 px-4 py-4">
                <a target="_blank" href="#" aria-label="TikTok">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dark-tiktok-logo.svg" alt="TikTok" class="w-5 h-5">
                </a>
                <a target="_blank" href="#" aria-label="Instagram">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dark-instagram-logo.svg" alt="Instagram" class="w-5 h-5">
                </a>
            </div>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'flex flex-col gap-6 py-4 px-4 text-sm font-medium text-dark-grey uppercase tracking-wide',
                'container' => false,
            ));
            ?>
            <a href="tel:+254705212579" class="block px-4 pb-4 text-sm font-semibold text-dark-grey">
                Call Us: <span class="font-bold text-green">+254705212579</span>
            </a>
        </div>
    </header>
