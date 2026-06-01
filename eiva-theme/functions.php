<?php
/**
 * Eiva Minimax Theme Functions
 *
 * @package Eiva_Minimax
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Setup theme support and configure menus.
 */
function eiva_minimax_theme_setup() {
	// Add dynamic title tag support
	add_theme_support( 'title-tag' );

	// Add featured image thumbnail support
	add_theme_support( 'post-thumbnails' );

	// Add semantic HTML5 markup support
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	// Register Primary and Footer Nav Menus
	register_nav_menus( array(
		'primary-menu' => esc_html__( 'Hlavní navigace (Header)', 'eiva-minimax' ),
		'footer-menu'  => esc_html__( 'Patička (Footer)', 'eiva-minimax' ),
	) );
}
add_action( 'after_setup_theme', 'eiva_minimax_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function eiva_minimax_enqueue_assets() {
	// Load Google Fonts (DM Sans + Inter)
	wp_enqueue_style( 'eiva-minimax-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:wght@300;400;500;600&display=swap', array(), null );

	// Enqueue Core Theme Stylesheet (style.css)
	wp_enqueue_style( 'eiva-minimax-styles', get_stylesheet_uri(), array(), '1.0.0' );

	// Enqueue Tailwind CDN Script
	wp_enqueue_script( 'eiva-minimax-tailwind', 'https://cdn.tailwindcss.com', array(), null, false );

	// Inject Tailwind Custom Configuration inline before head
	wp_add_inline_script( 'eiva-minimax-tailwind', '
		tailwind.config = {
			theme: {
				extend: {
					fontFamily: {
						\'sans\': [\'DM Sans\', \'Inter\', \'Helvetica Neue\', \'Arial\', \'sans-serif\'],
						\'body\': [\'Inter\', \'DM Sans\', \'sans-serif\'],
					},
					colors: {
						\'ink\': \'#0a0a0a\',
						\'ink-strong\': \'#000000\',
						\'charcoal\': \'#222222\',
						\'slate-custom\': \'#45515e\',
						\'steel\': \'#5f5f5f\',
						\'stone-custom\': \'#8e8e93\',
						\'muted\': \'#a8aab2\',
						\'canvas\': \'#ffffff\',
						\'surface\': \'#f7f8fa\',
						\'surface-soft\': \'#f2f3f5\',
						\'hairline\': \'#e5e7eb\',
						\'hairline-soft\': \'#eaecf0\',
					},
					fontSize: {
						\'hero\': [\'clamp(2.5rem, 6vw, 5rem)\', { lineHeight: \'1.10\', letterSpacing: \'-0.03em\' }],
						\'display\': [\'clamp(2rem, 4.5vw, 3.5rem)\', { lineHeight: \'1.10\', letterSpacing: \'-0.025em\' }],
						\'heading-lg\': [\'clamp(1.75rem, 3vw, 2.5rem)\', { lineHeight: \'1.20\', letterSpacing: \'-0.02em\' }],
						\'heading-md\': [\'clamp(1.5rem, 2.5vw, 2rem)\', { lineHeight: \'1.25\', letterSpacing: \'-0.01em\' }],
						\'heading-sm\': [\'1.5rem\', { lineHeight: \'1.30\' }],
						\'card-title\': [\'1.25rem\', { lineHeight: \'1.40\' }],
						\'subtitle\': [\'1.125rem\', { lineHeight: \'1.60\' }],
						\'body-lg\': [\'1.125rem\', { lineHeight: \'1.75\' }],
						\'body\': [\'1rem\', { lineHeight: \'1.75\' }],
						\'body-sm\': [\'0.875rem\', { lineHeight: \'1.60\' }],
						\'caption\': [\'0.8125rem\', { lineHeight: \'1.70\' }],
						\'micro\': [\'0.75rem\', { lineHeight: \'1.50\' }],
					},
					maxWidth: {
						\'prose\': \'680px\',
						\'content\': \'1280px\',
					},
					borderRadius: {
						\'pill\': \'9999px\',
					}
				}
			}
		}
	' );
}
add_action( 'wp_enqueue_scripts', 'eiva_minimax_enqueue_assets' );

/**
 * Filter the body class list.
 */
function eiva_minimax_body_classes( $classes ) {
	$classes[] = 'bg-canvas';
	$classes[] = 'text-ink';
	$classes[] = 'font-sans';
	$classes[] = 'antialiased';
	return $classes;
}
add_filter( 'body_class', 'eiva_minimax_body_classes' );
