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

	// Inject Tailwind Custom Configuration inline after tailwind script loads
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
	', 'after' );
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

/**
 * Filter the dynamic nav menu link attributes to inject Tailwind utility classes
 * passed via 'add_a_class' argument in wp_nav_menu.
 */
function eiva_minimax_add_menu_link_class( $atts, $item, $args ) {
	if ( isset( $args->add_a_class ) ) {
		$atts['class'] = $args->add_a_class;
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'eiva_minimax_add_menu_link_class', 10, 3 );

/**
 * Custom styles for Contact Form 7 to match Eiva theme.
 */
function eiva_minimax_cf7_styles() {
	if ( ! class_exists( 'WPCF7' ) ) {
		return;
	}

	$css = '
	/* CF7 Form Container */
	.wpcf7 form {
		display: flex;
		flex-direction: column;
		gap: 2rem;
	}

	/* CF7 Labels */
	.wpcf7 label {
		display: block;
		font-family: "DM Sans", "Inter", sans-serif;
		font-size: 0.75rem;
		font-weight: 600;
		text-transform: uppercase;
		letter-spacing: 0.1em;
		color: #8e8e93;
		margin-bottom: 0.25rem;
	}

	/* CF7 Input Fields */
	.wpcf7 input[type="text"],
	.wpcf7 input[type="email"],
	.wpcf7 input[type="tel"],
	.wpcf7 input[type="url"],
	.wpcf7 textarea,
	.wpcf7 select {
		width: 100%;
		padding: 0.875rem 0;
		background: transparent;
		border: none;
		border-bottom: 1px solid #e5e7eb;
		font-family: "Inter", "DM Sans", sans-serif;
		font-size: 1rem;
		line-height: 1.75;
		color: #0a0a0a;
		outline: none;
		transition: border-color 0.2s ease;
	}

	.wpcf7 input[type="text"]:focus,
	.wpcf7 input[type="email"]:focus,
	.wpcf7 input[type="tel"]:focus,
	.wpcf7 input[type="url"]:focus,
	.wpcf7 textarea:focus,
	.wpcf7 select:focus {
		border-bottom-color: #0a0a0a;
	}

	.wpcf7 input::placeholder,
	.wpcf7 textarea::placeholder {
		color: #a8aab2;
	}

	.wpcf7 textarea {
		resize: none;
		min-height: 120px;
	}

	/* CF7 Submit Button */
	.wpcf7 input[type="submit"] {
		width: 100%;
		padding: 1rem 2rem;
		background-color: #0a0a0a;
		color: #ffffff;
		font-family: "DM Sans", "Inter", sans-serif;
		font-size: 0.875rem;
		font-weight: 600;
		letter-spacing: 0.05em;
		border: none;
		border-radius: 9999px;
		cursor: pointer;
		transition: background-color 0.2s ease;
		margin-top: 1rem;
	}

	.wpcf7 input[type="submit"]:hover {
		background-color: #222222;
	}

	/* CF7 Validation Messages */
	.wpcf7-not-valid-tip {
		font-family: "Inter", sans-serif;
		font-size: 0.8125rem;
		color: #dc2626;
		margin-top: 0.25rem;
	}

	/* CF7 Response Output */
	.wpcf7-response-output {
		font-family: "Inter", sans-serif;
		font-size: 0.875rem;
		padding: 1rem !important;
		border-radius: 0.75rem !important;
		margin: 1rem 0 0 0 !important;
	}

	.wpcf7 form.sent .wpcf7-response-output {
		border-color: #16a34a !important;
		color: #16a34a;
		background-color: #f0fdf4;
	}

	.wpcf7 form.failed .wpcf7-response-output,
	.wpcf7 form.aborted .wpcf7-response-output {
		border-color: #dc2626 !important;
		color: #dc2626;
		background-color: #fef2f2;
	}

	/* CF7 Spinner */
	.wpcf7-spinner {
		margin: 0.5rem auto 0;
		display: block;
	}
	';

	wp_add_inline_style( 'eiva-minimax-styles', $css );
}
add_action( 'wp_enqueue_scripts', 'eiva_minimax_cf7_styles' );
