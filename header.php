<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="with-device-width">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>
<?php do_action('ahdpress_site_before'); ?>
<div id="page" class="min-h-screen flex flex-col">
    <?php do_action('ahdpress_header'); ?>
    <header>
        <div class="mx-auto container">
            <div class="lg:flex lg:justify-between lg:items-center border-b py-6">
                <div>
                    <?php if (has_custom_logo()) { ?>
                        <?php the_custom_logo(); ?>
                    <?php } else { ?>
                        <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
                            <?php echo get_bloginfo('name'); ?>
                        </a>
                        <p class="text-sm font-light text-gray-600">
                            <?php echo get_bloginfo('description'); ?>
                        </p>
                    <?php } ?>
                </div>
                <div class="lg:hidden">
                    <a href="#" aria-label="Toggle Navigation" id="primary-menu-toggle">
                        <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path
                                            d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
                                            id="Combined-Shape">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <?php wp_nav_menu(
                array(
                    'container_id' => 'primary-menu',
                    'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:bg-transparent lg:block',
                    'menu_class' => 'lg:flex lg:-mx-4',
                    'theme_location' => 'primary',
                    'li_class' => 'lg:mx-4',
                    'fallback_cb' => false
                )
            ); ?>
        </div>
    </header>
    <div class="site-content flex-grow" id="content">
        <?php if (is_front_page()) { ?>
        <!-- Start the introduction -->
        <div class="container mx-auto">
            <div class="px-12 py-16 my-12 rounded-xl bg-gradient-to-r from-hibiscus-50 from-10% via-hibiscus-100 via-30% to-hibiscus-200 to-90%">
                <div class="mx-auto max-w-screen-md">
                    <h1 class="text-3xl lg:text-6xl tracking-tight text-gray-800 mb-6">Start building your next WordPress theme powered by <a target="_blank" rel="sponsored" class="text-secondary" href="https://tailwindcss.com">Tailwind CSS</a> and <a href="https://ahdpress.ahd-creative.agency" target="_blank" class="text-hibiscus-900">AHDPress</a></h1>
                    <p class="text-gray-600 text-xl font-medium mb-10">AHDPress is your starting point for developing WordPress themes with Tailwind CSS and also comes with a basic block-editor support out-of-the-box.</p>
                    <a href="https://github.com/ahdcreative/ahdpress" target="_blank" class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">
                        View AHDPress on GitHub
                    </a>
                </div>
            </div>
        </div>
        <!-- End of the Introduction -->
        <?php } ?>
        <?php do_action('ahdpress_content_start'); ?>
        <main>
