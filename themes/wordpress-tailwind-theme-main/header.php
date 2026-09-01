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
        <nav class="container-custom flex items-center gap-x-80 py-2">
            <!-- Logo/Site Title -->
            <div class="flex items-center">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-bold text-dark-grey">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alestec-logo.svg" alt="<?php bloginfo('name'); ?>" class="h-16">
                </a>
            </div>

            <!-- Mobile menu button -->
            <button class="md:hidden p-2" id="mobile-menu-toggle" aria-expanded="false">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Desktop navigation -->
            <div class="hidden md:flex items-center gap-14 flex-1">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex items-center gap-14 text-sm font-medium text-dark-grey uppercase tracking-wide',
                    'container' => false,
                ));
                ?>
                <a href="tel:+254712345678" class="text-sm font-semibold text-dark-grey whitespace-nowrap">
                    Call Us: <span class="font-bold text-green">+254712345678</span>
                </a>
            </div>
        </nav>

        <!-- Mobile navigation -->
        <div class="md:hidden hidden border-t border-gray-100" id="mobile-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'flex flex-col gap-4 py-4 px-4 text-sm font-medium text-dark-grey uppercase tracking-wide',
                'container' => false,
            ));
            ?>
            <a href="tel:+254712345678" class="block px-4 pb-4 text-sm font-semibold text-dark-grey">
                Call Us: <span class="font-bold">+254712345678</span>
            </a>
        </div>
    </header>
