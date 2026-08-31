<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('text-gray-900 font-plus'); ?>>
    <?php wp_body_open(); ?>

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="flex items-center justify-between py-4 md:px-20 px-4">
            <!-- Logo/Site Title -->
            <div class="flex items-center">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="h-10" src="<?php echo get_image_url('main-logo.png'); ?>" alt="<?php bloginfo('name'); ?>" />
                </a>
            </div>

            <!-- Mobile menu button -->
            <button class="md:hidden p-2" id="mobile-menu-toggle">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Desktop navigation -->
            <div class="hidden md:block">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex space-x-6',
                    'container' => false,
                    'fallback_cb' => false,
                ));
                ?>
            </div>
        </nav>

        <!-- Mobile navigation -->
        <div class="md:hidden hidden" id="mobile-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'flex flex-col space-y-4 pb-4 px-4',
                'container' => false,
                'fallback_cb' => false,
            ));
            ?>
        </div>
    </header>