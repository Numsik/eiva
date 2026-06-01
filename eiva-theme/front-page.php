<?php
/**
 * The Front Page Template
 *
 * @package Eiva_Minimax
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <main id="content" role="main">

        <!-- ============================================= -->
        <!-- 2. HERO — Massive Typography-Led Introduction -->
        <!-- ============================================= -->
        <section id="hero" class="relative min-h-[85vh] md:min-h-[90vh] flex items-end pb-16 md:pb-24 pt-32 md:pt-40 overflow-hidden" aria-label="Úvod">
            <!-- Background Video -->
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
                <source src="http://eiva.cz/wp-content/uploads/2026/02/JaExpoEiva-Trim-1.mp4" type="video/mp4">
                Váš prohlížeč nepodporuje přehrávání videa.
            </video>
            
            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-ink/60 z-10"></div>

            <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12 w-full relative z-20">
                <!-- Overline -->
                <p class="text-micro font-medium uppercase tracking-[0.2em] text-stone-custom mb-6 md:mb-8 animate-fade-in animate-delay-1">
                    FPV &middot; Virtuální realita &middot; Přístupnost
                </p>

                <!-- Hero Headline -->
                <h1 class="text-hero font-semibold text-canvas max-w-4xl animate-fade-in animate-delay-2 mb-10 md:mb-12">
                    Hlavou v&nbsp;oblacích,<br>
                    nohama na&nbsp;zemi
                </h1>

                <!-- Subtitle -->
                <p class="text-subtitle md:text-body-lg text-muted max-w-2xl mb-10 md:mb-14 animate-fade-in animate-delay-3 font-body">
                    Boříme bariéry v&nbsp;pohybu. Využíváme FPV systémy pro letadla i&nbsp;auta, které zprostředkují autentický zážitek z&nbsp;řízení. Naši techniku nasazujeme tam, kde pomáhá nejvíc&nbsp;— dáváme možnost závodit a&nbsp;létat těm, kteří jsou v&nbsp;reálném světě omezeni pohybem.
                </p>

                <!-- CTA Pair -->
                <div class="flex flex-wrap gap-4 animate-fade-in animate-delay-4">
                    <a href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>" id="hero-cta-primary" class="inline-flex items-center px-7 py-3 bg-canvas text-ink text-body-sm font-semibold rounded-pill hover:bg-surface transition-colors">
                        Zjistit více
                    </a>
                    <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" id="hero-cta-secondary" class="inline-flex items-center px-7 py-3 border border-canvas text-canvas text-body-sm font-semibold rounded-pill hover:bg-canvas hover:text-ink transition-colors">
                        Číst blog
                    </a>
                </div>
            </div>
        </section>

        <!-- Divider -->
        <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
            <hr class="border-hairline">
        </div>

        <!-- ============================================= -->
        <!-- 3. FEATURED BLOG POST — Dynamic Highlight     -->
        <!-- ============================================= -->
        <section id="featured-post" class="py-16 md:py-24 lg:py-32" aria-label="Hlavní článek">
            <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                
                <!-- Section Label -->
                <p class="text-micro font-medium uppercase tracking-[0.2em] text-stone-custom mb-10 md:mb-14">
                    Hlavní článek
                </p>

                <?php
                // Fetch the absolute latest post for the Featured slot
                $featured_query = new WP_Query( array(
                    'posts_per_page'      => 1,
                    'ignore_sticky_posts' => 1,
                ) );

                if ( $featured_query->have_posts() ) :
                    while ( $featured_query->have_posts() ) : $featured_query->the_post();
                        ?>
                        <article class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                            
                            <!-- Featured Image -->
                            <a href="<?php the_permalink(); ?>" id="featured-thumb" class="block aspect-[4/3] lg:aspect-[3/2] bg-surface-soft rounded-2xl overflow-hidden featured-img-placeholder">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-full object-cover transition-transform duration-300 hover:scale-105' ) ); ?>
                                <?php else : ?>
                                    <div class="w-full h-full flex items-center justify-center text-muted">
                                        <svg class="w-16 h-16 opacity-30" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                                            <circle cx="8.5" cy="8.5" r="1.5"/>
                                            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/>
                                        </svg>
                                    </div>
                                <?php endif; ?>
                            </a>

                            <!-- Featured Content -->
                            <div class="flex flex-col justify-center">
                                <!-- Category + Date -->
                                <div class="flex items-center gap-3 mb-5">
                                    <span class="text-micro font-semibold uppercase tracking-[0.15em] text-ink bg-surface px-3 py-1 rounded-pill">
                                        <?php
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            echo esc_html( $categories[0]->name );
                                        } else {
                                            esc_html_e( 'Zprávy', 'eiva-minimax' );
                                        }
                                        ?>
                                    </span>
                                    <time class="text-caption text-stone-custom" datetime="<?php echo get_the_date( 'c' ); ?>">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                </div>

                                <!-- Headline -->
                                <h2 class="text-heading-lg font-semibold text-ink-strong mb-5 leading-tight">
                                    <a href="<?php the_permalink(); ?>" class="hover:underline underline-offset-4 decoration-1" id="featured-title">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <!-- Excerpt -->
                                <p class="text-body text-steel mb-8 font-body leading-relaxed max-w-lg">
                                    <?php echo wp_trim_words( get_the_excerpt(), 28, '&hellip;' ); ?>
                                </p>

                                <!-- Read More -->
                                <a href="<?php the_permalink(); ?>" id="featured-read-more" class="inline-flex items-center gap-2 text-body-sm font-semibold text-ink hover:gap-3 transition-all group">
                                    Číst celý článek
                                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                                </a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Default mockup placeholder featured post
                    ?>
                    <article class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                        <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" id="featured-thumb" class="block aspect-[4/3] lg:aspect-[3/2] bg-surface-soft rounded-2xl overflow-hidden featured-img-placeholder">
                            <div class="w-full h-full flex items-center justify-center text-muted">
                                <svg class="w-16 h-16 opacity-30" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                    <rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/>
                                </svg>
                            </div>
                        </a>
                        <div class="flex flex-col justify-center">
                            <div class="flex items-center gap-3 mb-5">
                                <span class="text-micro font-semibold uppercase tracking-[0.15em] text-ink bg-surface px-3 py-1 rounded-pill">Akce</span>
                                <time class="text-caption text-stone-custom" datetime="2025-06-15">15. června 2025</time>
                            </div>
                            <h2 class="text-heading-lg font-semibold text-ink-strong mb-5 leading-tight">
                                <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="hover:underline underline-offset-4 decoration-1" id="featured-title">
                                    Eiva na Expo 2025 — Virtuální létání bez hranic
                                </a>
                            </h2>
                            <p class="text-body text-steel mb-8 font-body leading-relaxed max-w-lg">
                                Představili jsme naši technologii na mezinárodní výstavě. Návštěvníci si mohli vyzkoušet FPV létání přímo z&nbsp;invalidního vozíku. Reakce byly neuvěřitelné.
                            </p>
                            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" id="featured-read-more" class="inline-flex items-center gap-2 text-body-sm font-semibold text-ink hover:gap-3 transition-all group">
                                Číst celý článek
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                            </a>
                        </div>
                    </article>
                <?php endif; ?>
            </div>
        </section>

        <!-- Divider -->
        <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
            <hr class="border-hairline">
        </div>

        <!-- ============================================= -->
        <!-- 4. BLOG FEED — Grid Loop                      -->
        <!-- ============================================= -->
        <section id="blog-feed" class="py-16 md:py-24 lg:py-32" aria-label="Blog">
            <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                
                <!-- Section Header -->
                <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-10 md:mb-14 gap-6">
                    <div>
                        <p class="text-micro font-medium uppercase tracking-[0.2em] text-stone-custom mb-3">Blog</p>
                        <h2 class="text-heading-md font-semibold text-ink-strong">Příběhy, tech a akce</h2>
                    </div>

                    <!-- Category Filters -->
                    <div class="flex flex-wrap gap-2" id="category-filters" role="tablist">
                        <button class="cat-pill px-4 py-1.5 text-caption font-semibold rounded-pill bg-ink text-canvas" role="tab" aria-selected="true">
                            Vše
                        </button>
                        <button class="cat-pill px-4 py-1.5 text-caption font-semibold rounded-pill border border-hairline text-steel bg-canvas" role="tab" aria-selected="false">
                            Tech
                        </button>
                        <button class="cat-pill px-4 py-1.5 text-caption font-semibold rounded-pill border border-hairline text-steel bg-canvas" role="tab" aria-selected="false">
                            Příběhy
                        </button>
                        <button class="cat-pill px-4 py-1.5 text-caption font-semibold rounded-pill border border-hairline text-steel bg-canvas" role="tab" aria-selected="false">
                            Akce
                        </button>
                    </div>
                </div>

                <!-- Article Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12 md:gap-y-16" id="posts-grid">

                    <?php
                    // Query remaining posts (offset by 1 to exclude featured post)
                    $grid_query = new WP_Query( array(
                        'posts_per_page' => 6,
                        'offset'         => 1,
                    ) );

                    if ( $grid_query->have_posts() ) :
                        $post_counter = 1;
                        while ( $grid_query->have_posts() ) : $grid_query->the_post();
                            ?>
                            <article class="blog-card group">
                                <a href="<?php the_permalink(); ?>" class="block" id="post-<?php echo esc_attr( $post_counter ); ?>">
                                    <div class="aspect-[3/2] bg-surface-soft rounded-xl overflow-hidden mb-5 thumb-pattern">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover transition-transform duration-300 group-hover:scale-105' ) ); ?>
                                        <?php else : ?>
                                            <div class="w-full h-full flex items-center justify-center text-muted">
                                                <svg class="w-10 h-10 opacity-20" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex items-center gap-3 mb-3">
                                        <span class="text-micro font-semibold uppercase tracking-[0.1em] text-steel">
                                            <?php
                                            $categories = get_the_category();
                                            if ( ! empty( $categories ) ) {
                                                echo esc_html( $categories[0]->name );
                                            } else {
                                                esc_html_e( 'Tech', 'eiva-minimax' );
                                            }
                                            ?>
                                        </span>
                                        <span class="text-micro text-muted">&middot;</span>
                                        <time class="text-micro text-muted" datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date(); ?></time>
                                    </div>
                                    <h3 class="blog-card-title text-card-title font-semibold text-ink mb-2 leading-snug">
                                        <?php the_title(); ?>
                                    </h3>
                                    <p class="text-body-sm text-steel font-body leading-relaxed">
                                        <?php echo wp_trim_words( get_the_excerpt(), 18, '&hellip;' ); ?>
                                    </p>
                                </a>
                            </article>
                            <?php
                            $post_counter++;
                        endwhile;
                        wp_reset_postdata();
                    else :
                        // Fallback static mock blog feed cards matching the custom layout
                        ?>
                        <article class="blog-card group">
                            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="block" id="post-1">
                                <div class="aspect-[3/2] bg-surface-soft rounded-xl overflow-hidden mb-5 thumb-pattern">
                                    <div class="w-full h-full flex items-center justify-center text-muted">
                                        <svg class="w-10 h-10 opacity-20" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="text-micro font-semibold uppercase tracking-[0.1em] text-steel">Tech</span>
                                    <span class="text-micro text-muted">&middot;</span>
                                    <time class="text-micro text-muted" datetime="2025-05-28">28. 5. 2025</time>
                                </div>
                                <h3 class="blog-card-title text-card-title font-semibold text-ink mb-2 leading-snug">FPV systém nové generace: Co přinášíme v roce 2025</h3>
                                <p class="text-body-sm text-steel font-body leading-relaxed">Představujeme náš vylepšený systém s nižší latencí a lepší kvalitou přenosu videa pro ještě autentičtější zážitek.</p>
                            </a>
                        </article>
                        <article class="blog-card group">
                            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="block" id="post-2">
                                <div class="aspect-[3/2] bg-surface-soft rounded-xl overflow-hidden mb-5 thumb-pattern">
                                    <div class="w-full h-full flex items-center justify-center text-muted">
                                        <svg class="w-10 h-10 opacity-20" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="text-micro font-semibold uppercase tracking-[0.1em] text-steel">Příběhy</span>
                                    <span class="text-micro text-muted">&middot;</span>
                                    <time class="text-micro text-muted" datetime="2025-05-15">15. 5. 2025</time>
                                </div>
                                <h3 class="blog-card-title text-card-title font-semibold text-ink mb-2 leading-snug">Příběh Honzy: „Poprvé jsem letěl, i když nemůžu chodit"</h3>
                                <p class="text-body-sm text-steel font-body leading-relaxed">Honza přišel o mobilitu po nehodě. Díky naší technologii poprvé zažil pocit letu. Jeho příběh inspiroval celý tým.</p>
                            </a>
                        </article>
                        <article class="blog-card group">
                            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="block" id="post-3">
                                <div class="aspect-[3/2] bg-surface-soft rounded-xl overflow-hidden mb-5 thumb-pattern">
                                    <div class="w-full h-full flex items-center justify-center text-muted">
                                        <svg class="w-10 h-10 opacity-20" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="text-micro font-semibold uppercase tracking-[0.1em] text-steel">Akce</span>
                                    <span class="text-micro text-muted">&middot;</span>
                                    <time class="text-micro text-muted" datetime="2025-04-20">20. 4. 2025</time>
                                </div>
                                <h3 class="blog-card-title text-card-title font-semibold text-ink mb-2 leading-snug">Den otevřených dveří ve Vysokém Mýtě</h3>
                                <p class="text-body-sm text-steel font-body leading-relaxed">Pozvali jsme veřejnost, aby si vyzkoušela naše FPV letouny. Přišly desítky rodin a nadšenců z celého regionu.</p>
                            </a>
                        </article>
                    <?php endif; ?>

                </div>

                <!-- Load More Button Link -->
                <div class="flex justify-center mt-14 md:mt-20">
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ? get_post_type_archive_link( 'post' ) : home_url( '/blog/' ) ); ?>" id="load-more-posts" class="inline-flex items-center px-8 py-3 border border-hairline text-body-sm font-semibold text-steel rounded-pill hover:border-ink hover:text-ink transition-colors bg-canvas">
                        Načíst další články
                    </a>
                </div>
            </div>
        </section>

        <!-- Divider -->
        <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
            <hr class="border-hairline">
        </div>

        <!-- ============================================= -->
        <!-- 5. TECH / HARDWARE BLOCK — Static Grid        -->
        <!-- ============================================= -->
        <section id="tech-block" class="py-16 md:py-24 lg:py-32" aria-label="Naše technika">
            <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">

                <!-- Section Header -->
                <div class="mb-12 md:mb-16 max-w-2xl">
                    <p class="text-micro font-medium uppercase tracking-[0.2em] text-stone-custom mb-3">Technika</p>
                    <h2 class="text-heading-md font-semibold text-ink-strong mb-4">Jak to funguje</h2>
                    <p class="text-body text-steel font-body">
                        Unikátní propojení virtuální reality s&nbsp;reálným létáním a&nbsp;řízením. Každý prvek systému je optimalizovaný pro maximální dostupnost.
                    </p>
                </div>

                <!-- Tech Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-0 border border-hairline rounded-2xl overflow-hidden" id="tech-grid">
                    
                    <!-- FPV Technology -->
                    <div class="gear-card p-8 md:p-10 lg:p-12 flex flex-col border-b md:border-b-0 border-hairline" id="gear-fpv">
                        <div class="w-12 h-12 mb-6 flex items-center justify-center">
                            <svg class="w-8 h-8 text-ink" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-card-title font-semibold text-ink mb-3">FPV brýle</h3>
                        <p class="text-body-sm text-steel font-body leading-relaxed">
                            Využíváme nejmodernější FPV brýle pro autentický zážitek z&nbsp;pilotování. Nízká latence a&nbsp;vysoké rozlišení zajišťují pocit skutečného letu.
                        </p>
                    </div>

                    <!-- RC Planes -->
                    <div class="gear-card p-8 md:p-10 lg:p-12 flex flex-col border-b md:border-b-0 border-hairline" id="gear-rc">
                        <div class="w-12 h-12 mb-6 flex items-center justify-center">
                            <svg class="w-8 h-8 text-ink" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
                            </svg>
                        </div>
                        <h3 class="text-card-title font-semibold text-ink mb-3">RC letouny</h3>
                        <p class="text-body-sm text-steel font-body leading-relaxed">
                            Reálné dálkově řízené modely propojené s&nbsp;VR systémem v&nbsp;reálném čase. Každý letoun je vybaven HD kamerou a&nbsp;stabilizací.
                        </p>
                    </div>

                    <!-- Accessibility -->
                    <div class="gear-card p-8 md:p-10 lg:p-12 flex flex-col" id="gear-accessibility">
                        <div class="w-12 h-12 mb-6 flex items-center justify-center">
                            <svg class="w-8 h-8 text-ink" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                            </svg>
                        </div>
                        <h3 class="text-card-title font-semibold text-ink mb-3">Dostupnost</h3>
                        <p class="text-body-sm text-steel font-body leading-relaxed">
                            Umožňujeme létání lidem, kterým běžné podmínky neumožňují. Systém je navržen pro ovládání s&nbsp;minimálními fyzickými nároky.
                        </p>
                    </div>
                </div>

                <!-- Stats Row -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-12 md:mt-16 pt-12 md:pt-16 border-t border-hairline" id="stats-row">
                    <div>
                        <p class="text-heading-lg font-semibold text-ink-strong">50+</p>
                        <p class="text-body-sm text-steel mt-1">účastníků programu</p>
                    </div>
                    <div>
                        <p class="text-heading-lg font-semibold text-ink-strong">12</p>
                        <p class="text-body-sm text-steel mt-1">akcí ročně</p>
                    </div>
                    <div>
                        <p class="text-heading-lg font-semibold text-ink-strong">5</p>
                        <p class="text-body-sm text-steel mt-1">letounů ve flotile</p>
                    </div>
                    <div>
                        <p class="text-heading-lg font-semibold text-ink-strong">3</p>
                        <p class="text-body-sm text-steel mt-1">RC auta</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider -->
        <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
            <hr class="border-hairline">
        </div>

        <!-- ============================================= -->
        <!-- CTA BAND — Want to try flying?                -->
        <!-- ============================================= -->
        <section id="cta-band" class="bg-ink text-canvas" aria-label="Výzva k akci">
            <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12 py-16 md:py-24 lg:py-32">
                <div class="max-w-2xl">
                    <h2 class="text-display font-semibold text-canvas mb-6 leading-tight">
                        Chcete si vyzkoušet<br>létání?
                    </h2>
                    <p class="text-body-lg text-muted mb-10 font-body max-w-lg">
                        Navštivte nás a&nbsp;usedněte do virtuálního kokpitu letadla nebo auta. Pro vážné zájemce a&nbsp;partnery rádi připravíme individuální předvedení.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" id="cta-contact" class="inline-flex items-center px-7 py-3 bg-canvas text-ink text-body-sm font-semibold rounded-pill hover:bg-surface transition-colors">
                            Kontaktujte nás
                        </a>
                        <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" id="cta-blog" class="inline-flex items-center px-7 py-3 border border-muted text-muted text-body-sm font-semibold rounded-pill hover:border-canvas hover:text-canvas transition-colors">
                            Přečíst na blogu
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php
get_footer();
