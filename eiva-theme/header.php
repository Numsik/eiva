<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php
    // Determine if this page has a dark transparent video background (front-page or o-nas template)
    $has_dark_header = is_front_page() || is_page_template( 'template-o-nas.php' );
    $header_classes = 'fixed top-0 left-0 right-0 z-50 transition-all duration-300';
    if ( $has_dark_header ) {
        $header_classes .= ' header-dark';
    }
    ?>

    <!-- ============================================= -->
    <!-- HEADER — Extremely Minimal                    -->
    <!-- ============================================= -->
    <header id="site-header" class="<?php echo esc_attr( $header_classes ); ?>">
        <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
            <nav class="flex items-center justify-between h-16 md:h-20" aria-label="<?php esc_attr_e( 'Hlavní navigace', 'eiva-minimax' ); ?>">
                
                <!-- Logo -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" class="hover:opacity-70 transition-opacity">
                    <img src="https://eiva.cz/wp-content/uploads/2026/01/EIVA-CERNA-LOGO.svg" alt="<?php bloginfo( 'name' ); ?>" class="h-6 md:h-8 w-auto">
                </a>

                <!-- Desktop Navigation Menu -->
                <?php
                if ( has_nav_menu( 'primary-menu' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'hidden md:flex items-center gap-8',
                        'menu_id'        => 'desktop-nav',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'fallback_cb'    => false,
                    ) );
                } else {
                    // Fallback to static menu layout matching Eiva's design
                    ?>
                    <ul class="hidden md:flex items-center gap-8" id="desktop-nav">
                        <li><a href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>" class="text-body-sm font-medium text-charcoal hover:text-ink transition-colors">O nás</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="text-body-sm font-medium text-charcoal hover:text-ink transition-colors">Blog</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/podporovatele/' ) ); ?>" class="text-body-sm font-medium text-charcoal hover:text-ink transition-colors">Podporovatelé</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="text-body-sm font-medium text-charcoal hover:text-ink transition-colors">Kontaktujte nás</a></li>
                    </ul>
                    <?php
                }
                ?>

                <!-- Mobile Menu Hamburger Toggle -->
                <button id="mobile-toggle" class="md:hidden w-10 h-10 flex items-center justify-center" aria-label="<?php esc_attr_e( 'Menu', 'eiva-minimax' ); ?>" aria-expanded="false">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path class="hamburger-top" stroke-linecap="round" d="M4 7h16"/>
                        <path class="hamburger-bottom" stroke-linecap="round" d="M4 17h16"/>
                    </svg>
                </button>
            </nav>
        </div>

        <!-- Mobile Navigation Overlay -->
        <div id="mobile-nav" class="mobile-nav fixed inset-0 bg-canvas z-40 flex flex-col items-center justify-center md:hidden">
            <button id="mobile-close" class="absolute top-5 right-6 w-10 h-10 flex items-center justify-center" aria-label="<?php esc_attr_e( 'Zavřít menu', 'eiva-minimax' ); ?>">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/>
                </svg>
            </button>
            
            <?php
            if ( has_nav_menu( 'primary-menu' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'flex flex-col items-center gap-8',
                    'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
                    'fallback_cb'    => false,
                ) );
            } else {
                ?>
                <ul class="flex flex-col items-center gap-8">
                    <li><a href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>" class="text-heading-md font-semibold text-ink">O nás</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="text-heading-md font-semibold text-ink">Blog</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/podporovatele/' ) ); ?>" class="text-heading-md font-semibold text-ink">Podporovatelé</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="text-heading-md font-semibold text-ink">Kontaktujte nás</a></li>
                </ul>
                <?php
            }
            ?>
        </div>
    </header>

    <!-- Pass transparent state to Javascript -->
    <script>
        window.hasDarkHeader = <?php echo $has_dark_header ? 'true' : 'false'; ?>;
    </script>
