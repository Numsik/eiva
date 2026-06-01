<?php
/**
 * The Single Post Template (single.php)
 *
 * @package Eiva_Minimax
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <main id="content" role="main">

        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <article class="pt-32 md:pt-40 pb-16 md:pb-24">
                    <div class="max-w-prose mx-auto px-6 md:px-8">
                        
                        <!-- Category + Date -->
                        <div class="flex items-center gap-3 mb-6 font-body">
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

                        <!-- Massive Typography Heading -->
                        <h1 class="text-display font-semibold text-ink-strong mb-6 leading-tight tracking-tight">
                            <?php the_title(); ?>
                        </h1>

                        <!-- Excerpt/Perex (Short subheadline) -->
                        <?php if ( has_excerpt() ) : ?>
                            <div class="text-subtitle md:text-body-lg text-steel font-body leading-relaxed mb-8 md:mb-12">
                                <?php the_excerpt(); ?>
                            </div>
                        <?php endif; ?>

                    </div>

                    <!-- Full-Width Featured Image Layout -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12 my-10 md:my-14">
                            <div class="aspect-[16/9] rounded-2xl overflow-hidden bg-surface-soft">
                                <?php the_post_thumbnail( 'full', array( 'class' => 'w-full h-full object-cover' ) ); ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <!-- Minimal brutalist placeholder pattern if no thumbnail is set -->
                        <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12 my-10 md:my-14">
                            <div class="aspect-[16/9] rounded-2xl overflow-hidden bg-surface-soft featured-img-placeholder flex items-center justify-center text-muted">
                                <svg class="w-20 h-20 opacity-25" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                    <rect x="3" y="3" width="18" height="18" rx="2"/>
                                    <circle cx="8.5" cy="8.5" r="1.5"/>
                                    <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/>
                                </svg>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Body Content Wrapper with stark reading prose styles -->
                    <div class="max-w-prose mx-auto px-6 md:px-8 mt-12 md:mt-16 prose-reading">
                        <?php the_content(); ?>
                    </div>

                    <!-- Divider -->
                    <div class="max-w-prose mx-auto px-6 md:px-8 mt-14 md:mt-20">
                        <hr class="border-hairline">
                    </div>

                    <!-- Stark Dynamic Back Link -->
                    <nav class="max-w-prose mx-auto px-6 md:px-8 mt-8 md:mt-10" aria-label="<?php esc_attr_e( 'Zpět na blog', 'eiva-minimax' ); ?>">
                        <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ? get_post_type_archive_link( 'post' ) : home_url( '/blog/' ) ); ?>" id="back-to-blog" class="inline-flex items-center gap-2.5 text-body-sm font-semibold text-steel hover:text-ink transition-colors group">
                            <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/>
                            </svg>
                            Všechny články
                        </a>
                    </nav>

                </article>
                <?php
            endwhile;
        endif;
        ?>

    </main>

<?php
get_footer();
