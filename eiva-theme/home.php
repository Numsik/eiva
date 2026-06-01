<?php
/**
 * The Blog Archive Template (home.php)
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
        <!-- 2. HERO — Stark Typography Header             -->
        <!-- ============================================= -->
        <section id="hero" class="relative pt-32 md:pt-44 pb-12 md:pb-16 bg-canvas" aria-label="Blog">
            <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12 w-full">
                <!-- Overline -->
                <p class="text-micro font-medium uppercase tracking-[0.2em] text-stone-custom mb-4 animate-fade-in animate-delay-1">
                    Naše novinky
                </p>

                <!-- Dynamic Page Title -->
                <h1 class="text-hero font-semibold text-ink-strong max-w-4xl animate-fade-in animate-delay-2 mb-10">
                    <?php single_post_title(); ?>
                </h1>

                <!-- Category Filters Row -->
                <div class="flex flex-wrap gap-2 animate-fade-in animate-delay-3" id="category-filters" role="tablist">
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ? get_post_type_archive_link( 'post' ) : home_url( '/blog/' ) ); ?>" class="cat-pill px-5 py-2 text-caption font-semibold rounded-pill <?php echo !is_category() ? 'bg-ink text-canvas' : 'border border-hairline text-steel bg-canvas'; ?>" role="tab">
                        Vše
                    </a>
                    <?php
                    $categories = get_categories();
                    foreach ( $categories as $category ) {
                        $is_active = is_category( $category->term_id );
                        $pill_classes = 'cat-pill px-5 py-2 text-caption font-semibold rounded-pill ' . ( $is_active ? 'bg-ink text-canvas' : 'border border-hairline text-steel bg-canvas' );
                        echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="' . esc_attr( $pill_classes ) . '" role="tab">' . esc_html( $category->name ) . '</a>';
                    }
                    if ( empty( $categories ) ) {
                        ?>
                        <button class="cat-pill px-5 py-2 text-caption font-semibold rounded-pill border border-hairline text-steel bg-canvas" role="tab">Tech</button>
                        <button class="cat-pill px-5 py-2 text-caption font-semibold rounded-pill border border-hairline text-steel bg-canvas" role="tab">Příběhy</button>
                        <button class="cat-pill px-5 py-2 text-caption font-semibold rounded-pill border border-hairline text-steel bg-canvas" role="tab">Akce</button>
                        <button class="cat-pill px-5 py-2 text-caption font-semibold rounded-pill border border-hairline text-steel bg-canvas" role="tab">Partneři</button>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Divider -->
        <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
            <hr class="border-hairline">
        </div>

        <?php
        // Fetch posts
        if ( have_posts() ) :
            $post_index = 0;
            $grid_posts = array();

            // Loop to separate the very first post (Featured) on page 1
            while ( have_posts() ) : the_post();
                if ( $post_index === 0 && ! is_paged() ) {
                    // FEATURED POST (Full Width, absolute latest)
                    ?>
                    <!-- ============================================= -->
                    <!-- 3. FEATURED POST — Spanning Full Width        -->
                    <!-- ============================================= -->
                    <section id="featured-post" class="py-16 md:py-24" aria-label="Hlavní článek">
                        <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                            
                            <article class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
                                
                                <!-- Featured Image (Spans 7 Cols) -->
                                <a href="<?php the_permalink(); ?>" id="featured-thumb" class="block lg:col-span-7 aspect-[16/10] bg-surface-soft rounded-2xl overflow-hidden featured-img-placeholder">
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

                                <!-- Featured Content (Spans 5 Cols) -->
                                <div class="lg:col-span-5 flex flex-col justify-center">
                                    <!-- Category + Date -->
                                    <div class="flex items-center gap-3 mb-5 font-body">
                                        <span class="text-micro font-semibold uppercase tracking-[0.15em] text-ink bg-surface px-3 py-1 rounded-pill">
                                            <?php
                                            $categories = get_the_category();
                                            if ( ! empty( $categories ) ) {
                                                echo esc_html( $categories[0]->name );
                                            } else {
                                                esc_html_e( 'Akce', 'eiva-minimax' );
                                            }
                                            ?>
                                        </span>
                                        <time class="text-caption text-stone-custom" datetime="<?php echo get_the_date( 'c' ); ?>">
                                            <?php echo get_the_date(); ?>
                                        </time>
                                    </div>

                                    <!-- Headline -->
                                    <h2 class="text-display font-semibold text-ink-strong mb-5 leading-tight tracking-tight">
                                        <a href="<?php the_permalink(); ?>" class="hover:underline underline-offset-4 decoration-1" id="featured-title">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>

                                    <!-- Excerpt -->
                                    <p class="text-body text-steel mb-8 font-body leading-relaxed max-w-lg">
                                        <?php echo wp_trim_words( get_the_excerpt(), 24, '&hellip;' ); ?>
                                    </p>

                                    <!-- Read More Link -->
                                    <a href="<?php the_permalink(); ?>" id="featured-read-more" class="inline-flex items-center gap-2 text-body-sm font-semibold text-ink hover:gap-3 transition-all group">
                                        Číst celý článek
                                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                        </svg>
                                    </a>
                                </div>
                            </article>

                        </div>
                    </section>

                    <!-- Divider -->
                    <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                        <hr class="border-hairline">
                    </div>
                    <?php
                } else {
                    // Queue for standard grid cards
                    $grid_posts[] = get_post();
                }
                $post_index++;
            endwhile;

            // RENDER STANDARD GRID
            ?>
            <!-- ============================================= -->
            <!-- 4. MAIN POST GRID — Stark 3-Column Layout      -->
            <!-- ============================================= -->
            <section id="blog-grid" class="py-16 md:py-24" aria-label="Ostatní články">
                <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12 md:gap-y-16" id="posts-grid">
                        
                        <?php
                        // If we are on paged page, all posts belong to the grid list!
                        $posts_to_show = is_paged() ? $wp_query->posts : $grid_posts;
                        
                        foreach ( $posts_to_show as $post ) : setup_postdata( $post );
                            ?>
                            <article class="blog-card group">
                                <a href="<?php the_permalink(); ?>" class="block">
                                    <div class="aspect-[3/2] bg-surface-soft rounded-xl overflow-hidden mb-5 thumb-pattern">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover transition-transform duration-300 group-hover:scale-105' ) ); ?>
                                        <?php else : ?>
                                            <div class="w-full h-full flex items-center justify-center text-muted">
                                                <svg class="w-10 h-10 opacity-20" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex items-center gap-3 mb-3 font-body">
                                        <span class="text-micro font-semibold uppercase tracking-[0.1em] text-steel">
                                            <?php
                                            $categories = get_the_category();
                                            if ( ! empty( $categories ) ) {
                                                echo esc_html( $categories[0]->name );
                                            } else {
                                                esc_html_e( 'Zprávy', 'eiva-minimax' );
                                            }
                                            ?>
                                        </span>
                                        <span class="text-micro text-muted">&middot;</span>
                                        <time class="text-micro text-muted" datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date(); ?></time>
                                    </div>
                                    <h3 class="blog-card-title text-card-title font-semibold text-ink mb-2 leading-snug tracking-tight">
                                        <?php the_title(); ?>
                                    </h3>
                                    <p class="text-body-sm text-steel font-body leading-relaxed">
                                        <?php echo wp_trim_words( get_the_excerpt(), 18, '&hellip;' ); ?>
                                    </p>
                                </a>
                            </article>
                            <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>

                    </div>

                    <!-- Dynamic Stark Pagination -->
                    <div class="flex justify-between items-center mt-14 md:mt-20 max-w-sm mx-auto">
                        <div class="prev-posts-link">
                            <?php previous_posts_link( esc_html__( '&larr; Novější články', 'eiva-minimax' ) ); ?>
                        </div>
                        <div class="next-posts-link">
                            <?php next_posts_link( esc_html__( 'Starší články &rarr;', 'eiva-minimax' ) ); ?>
                        </div>
                    </div>

                </div>
            </section>
            <?php
        else :
            // Dynamic fallback static layout if no posts are present in database yet
            ?>
            <section id="featured-post" class="py-16 md:py-24" aria-label="Hlavní článek">
                <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                    <article class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
                        <a href="#" id="featured-thumb" class="block lg:col-span-7 aspect-[16/10] bg-surface-soft rounded-2xl overflow-hidden featured-img-placeholder">
                            <div class="w-full h-full flex items-center justify-center text-muted">
                                <svg class="w-16 h-16 opacity-30" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                            </div>
                        </a>
                        <div class="lg:col-span-5 flex flex-col justify-center">
                            <div class="flex items-center gap-3 mb-5 font-body">
                                <span class="text-micro font-semibold uppercase tracking-[0.15em] text-ink bg-surface px-3 py-1 rounded-pill">Akce</span>
                                <time class="text-caption text-stone-custom" datetime="2025-06-15">15. června 2025</time>
                            </div>
                            <h2 class="text-display font-semibold text-ink-strong mb-5 leading-tight tracking-tight">
                                <a href="#" class="hover:underline underline-offset-4 decoration-1" id="featured-title">Eiva na Expo 2025 — Virtuální létání bez hranic</a>
                            </h2>
                            <p class="text-body text-steel mb-8 font-body leading-relaxed max-w-lg">Představili jsme naši technologii na mezinárodní výstavě. Návštěvníci si mohli vyzkoušet FPV létání přímo z&nbsp;invalidního vozíku. Reakce byly neuvěřitelné.</p>
                            <a href="#" id="featured-read-more" class="inline-flex items-center gap-2 text-body-sm font-semibold text-ink hover:gap-3 transition-all group">Číst celý článek <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg></a>
                        </div>
                    </article>
                </div>
            </section>
            <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12"><hr class="border-hairline"></div>
            <section id="blog-grid" class="py-16 md:py-24" aria-label="Ostatní články">
                <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12 md:gap-y-16" id="posts-grid">
                        <article class="blog-card group">
                            <a href="#" class="block">
                                <div class="aspect-[3/2] bg-surface-soft rounded-xl overflow-hidden mb-5 thumb-pattern">
                                    <div class="w-full h-full flex items-center justify-center text-muted">
                                        <svg class="w-10 h-10 opacity-20" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 mb-3 font-body">
                                    <span class="text-micro font-semibold uppercase tracking-[0.1em] text-steel">Tech</span>
                                    <span class="text-micro text-muted">&middot;</span>
                                    <time class="text-micro text-muted" datetime="2025-05-28">28. 5. 2025</time>
                                </div>
                                <h3 class="blog-card-title text-card-title font-semibold text-ink mb-2 leading-snug tracking-tight">FPV systém nové generace: Co přinášíme v roce 2025</h3>
                                <p class="text-body-sm text-steel font-body leading-relaxed">Představujeme náš vylepšený systém s nižší latencí a lepší kvalitou přenosu videa pro ještě autentičtější zážitek.</p>
                            </a>
                        </article>
                        <article class="blog-card group">
                            <a href="#" class="block">
                                <div class="aspect-[3/2] bg-surface-soft rounded-xl overflow-hidden mb-5 thumb-pattern">
                                    <div class="w-full h-full flex items-center justify-center text-muted">
                                        <svg class="w-10 h-10 opacity-20" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 mb-3 font-body">
                                    <span class="text-micro font-semibold uppercase tracking-[0.1em] text-steel">Příběhy</span>
                                    <span class="text-micro text-muted">&middot;</span>
                                    <time class="text-micro text-muted" datetime="2025-05-15">15. 5. 2025</time>
                                </div>
                                <h3 class="blog-card-title text-card-title font-semibold text-ink mb-2 leading-snug tracking-tight">Příběh Honzy: „Poprvé jsem letěl, i když nemůžu chodit"</h3>
                                <p class="text-body-sm text-steel font-body leading-relaxed">Honza přišel o mobilitu po nehodě. Díky naší technologii poprvé zažil pocit letu. Jeho příběh inspiroval celý tým.</p>
                            </a>
                        </article>
                        <article class="blog-card group">
                            <a href="#" class="block">
                                <div class="aspect-[3/2] bg-surface-soft rounded-xl overflow-hidden mb-5 thumb-pattern">
                                    <div class="w-full h-full flex items-center justify-center text-muted">
                                        <svg class="w-10 h-10 opacity-20" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 mb-3 font-body">
                                    <span class="text-micro font-semibold uppercase tracking-[0.1em] text-steel">Akce</span>
                                    <span class="text-micro text-muted">&middot;</span>
                                    <time class="text-micro text-muted" datetime="2025-04-20">20. 4. 2025</time>
                                </div>
                                <h3 class="blog-card-title text-card-title font-semibold text-ink mb-2 leading-snug tracking-tight">Den otevřených dveří ve Vysokém Mýtě</h3>
                                <p class="text-body-sm text-steel font-body leading-relaxed">Pozvali jsme veřejnost, aby si vyzkoušela naše FPV letouny. Přišly desítky rodin a nadšenců z celého regionu.</p>
                            </a>
                        </article>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    </main>

<?php
get_footer();
