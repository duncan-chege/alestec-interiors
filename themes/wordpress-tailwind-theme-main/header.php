<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('text-gray-900 font-plus'); ?>>
    <?php wp_body_open(); ?>

    <header class="bg-white sticky top-0 z-50">
        <nav class="container-custom flex items-center justify-between py-5">
            <!-- Logo/Site Title -->
            <div class="flex items-center">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-bold text-dark-grey">
                    <?php bloginfo('name'); ?>
                </a>
            </div>

            <!-- Mobile menu button -->
            <button class="md:hidden p-2" id="mobile-menu-toggle" aria-expanded="false">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Desktop navigation -->
            <div class="hidden md:flex items-center gap-10">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex items-center gap-10 text-sm font-medium text-dark-grey uppercase tracking-wide',
                    'container' => false,
                    'fallback_cb' => 'alestec_default_menu',
                ));
                ?>
                <a href="tel:+254712345678" class="text-sm font-semibold text-dark-grey whitespace-nowrap">
                    Call Us: <span class="font-bold">+254712345678</span>
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
                'fallback_cb' => 'alestec_default_menu',
            ));
            ?>
            <a href="tel:+254712345678" class="block px-4 pb-4 text-sm font-semibold text-dark-grey">
                Call Us: <span class="font-bold">+254712345678</span>
            </a>
        </div>
    </header>
