<?php
/**
 * Template Name: Podporovatelé
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
                <!-- ============================================= -->
                <!-- PAGE HERO — Massive Typography with Video Banner -->
                <!-- ============================================= -->
                <section id="page-hero" class="relative pt-32 md:pt-44 pb-16 md:pb-24 overflow-hidden min-h-[50vh] md:min-h-[60vh] flex items-end" aria-label="Podporovatelé">
                    <!-- Background Video -->
                    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
                        <source src="http://eiva.cz/wp-content/uploads/2026/02/JaExpoEiva-Trim-1.mp4" type="video/mp4">
                        Váš prohlížeč nepodporuje přehrávání videa.
                    </video>
                    
                    <!-- Dark Overlay -->
                    <div class="absolute inset-0 bg-ink/65 z-10"></div>

                    <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12 w-full relative z-20">
                        <!-- Overline -->
                        <p class="text-micro font-medium uppercase tracking-[0.2em] text-stone-custom mb-6 md:mb-8 animate-fade-in animate-delay-1">
                            Naši partneři
                        </p>

                        <!-- Headline -->
                        <h1 class="text-hero font-semibold text-canvas max-w-3xl mb-8 md:mb-10 animate-fade-in animate-delay-2">
                            <?php the_title(); ?>
                        </h1>

                        <!-- Description -->
                        <p class="text-subtitle md:text-body-lg text-muted max-w-2xl animate-fade-in animate-delay-3 font-body">
                            Naše mise&nbsp;— zpřístupnit létání a&nbsp;závodění lidem s&nbsp;tělesným postižením prostřednictvím FPV technologií a&nbsp;virtuální reality&nbsp;— by nebyla možná bez podpory těchto organizací a&nbsp;partnerů.
                        </p>
                    </div>
                </section>

                <!-- Divider -->
                <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                    <hr class="border-hairline">
                </div>

                <!-- ============================================= -->
                <!-- LOGO GRID — Grayscale Hover Cards            -->
                <!-- ============================================= -->
                <section id="logo-grid" class="py-16 md:py-24 lg:py-32" aria-label="Partneři a podporovatelé">
                    <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">

                        <!-- Section Label -->
                        <p class="text-micro font-medium uppercase tracking-[0.2em] text-stone-custom mb-12 md:mb-16">
                            Podporovatelé &amp; partneři
                        </p>

                        <div class="prose-reading mb-12">
                            <?php the_content(); ?>
                        </div>

                        <?php if ( empty( get_the_content() ) ) : ?>
                            <!-- The Grid of Cards fallback if no editor content is present -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8" id="partners-grid">

                                <!-- Partner Card: Evropská unie -->
                                <div class="bg-canvas flex flex-col p-8 md:p-10 border border-hairline rounded-2xl group transition-all duration-300 hover:border-ink hover:translate-y-[-2px]">
                                    <!-- Logo Slot -->
                                    <div class="logo-tile flex items-center justify-start aspect-[4/1] mb-6 md:mb-8" aria-label="Evropská unie">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo-eu.png" alt="Evropská unie" class="h-12 w-auto object-contain">
                                    </div>
                                    <h3 class="text-heading-sm font-semibold text-ink-strong mb-4">Evropská unie</h3>
                                    <p class="text-body-sm text-steel font-body leading-relaxed">
                                        Evropská unie je pro nás klíčovým partnerem, který vtiskl projektu EIVA pečeť kvality. Její podpora pro nás není jen finanční pomocí, ale především potvrzením, že naše technologická vize se společenským přesahem má globální smysl. Díky tomuto spolufinancování můžeme neustále zdokonalovat přenos obrazu, rozšiřovat flotilu letadel i aut a zpřístupňovat tak virtuální pilotáž co nejširší skupině lidí.
                                    </p>
                                </div>

                                <!-- Partner Card: Technická Vysoké Mýto -->
                                <div class="bg-canvas flex flex-col p-8 md:p-10 border border-hairline rounded-2xl group transition-all duration-300 hover:border-ink hover:translate-y-[-2px]">
                                    <!-- Logo Slot -->
                                    <div class="logo-tile flex items-center justify-start aspect-[4/1] mb-6 md:mb-8" aria-label="Technická Vysoké Mýto">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo-technicka.png" alt="Technická Vysoké Mýto" class="h-12 w-auto object-contain">
                                    </div>
                                    <h3 class="text-heading-sm font-semibold text-ink-strong mb-4">Technická Vysoké Mýto</h3>
                                    <p class="text-body-sm text-steel font-body leading-relaxed">
                                        Klíčový pilíř, ze kterého projekt EIVA vzešel. Poskytuje nám nezbytné zázemí, technické dílny a odbornou podporu mentorů, bez nichž by vývoj EIVY nebyl možný. Škola aktivně podporuje a motivuje studentské inovace, které mají silný společenský přesah, a dokazuje, že moderní technické vzdělávání jde ruku v ruce s humanitární misí.
                                    </p>
                                </div>

                                <!-- Partner Card: Synergy Network -->
                                <div class="bg-canvas flex flex-col p-8 md:p-10 border border-hairline rounded-2xl group transition-all duration-300 hover:border-ink hover:translate-y-[-2px]">
                                    <!-- Logo Slot -->
                                    <div class="logo-tile flex items-center justify-start aspect-[4/1] mb-6 md:mb-8" aria-label="Synergy Network">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo-synergy.png" alt="Synergy Network" class="h-12 w-auto object-contain">
                                    </div>
                                    <h3 class="text-heading-sm font-semibold text-ink-strong mb-4">Synergy Network</h3>
                                    <p class="text-body-sm text-steel font-body leading-relaxed">
                                        Synergy nám pomáhá medializovat projekt EIVA. Jejich odborná pomoc je pro naši komunikaci zásadní. Synergy nám pomáhá s natáčením obsahu a zajištěním potřebné techniky, čímž nám umožňuje efektivně sdílet náš příběh svobody v oblacích s veřejností.
                                    </p>
                                </div>

                                <!-- Partner Card: Pardubický kraj -->
                                <div class="bg-canvas flex flex-col p-8 md:p-10 border border-hairline rounded-2xl group transition-all duration-300 hover:border-ink hover:translate-y-[-2px]">
                                    <!-- Logo Slot -->
                                    <div class="logo-tile flex items-center justify-start aspect-[4/1] mb-6 md:mb-8" aria-label="Pardubický kraj">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo-pardubicky-kraj.png" alt="Pardubický kraj" class="h-12 w-auto object-contain">
                                    </div>
                                    <h3 class="text-heading-sm font-semibold text-ink-strong mb-4">Pardubický kraj</h3>
                                    <p class="text-body-sm text-steel font-body leading-relaxed">
                                        Projekt EIVA se těší oficiální záštitě Pardubického kraje, což pro nás představuje klíčové institucionální uznání. Pan Josef Kozel, radní pro školství Pardubického kraje, nejenže tuto záštitu projektu poskytl, ale aktivně se zapojil do jeho prezentace. Stal se naším prvním testovacím pilotem během akce k výročí letu Jana Kašpara, čímž veřejně potvrdil podporu kraje inovacím s tak silným sociálním přesahem.
                                    </p>
                                </div>

                                <!-- Partner Card: Filament PM -->
                                <div class="bg-canvas flex flex-col p-8 md:p-10 border border-hairline rounded-2xl group transition-all duration-300 hover:border-ink hover:translate-y-[-2px]">
                                    <!-- Logo Slot -->
                                    <div class="logo-tile flex items-center justify-start aspect-[4/1] mb-6 md:mb-8" aria-label="Filament PM">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo-filament-pm.png" alt="Filament PM" class="h-10 w-auto object-contain">
                                    </div>
                                    <h3 class="text-heading-sm font-semibold text-ink-strong mb-4">Filament PM</h3>
                                    <p class="text-body-sm text-steel font-body leading-relaxed">
                                        Kvalitní 3D tisk je pro vývoj našeho rozhraní nezbytný. Jsme hrdí, že za námi stojí právě Filamenty PM – tradiční český výrobce, jehož materiály nám pomáhají stavět odolný a funkční hardware pro našeho testera Davídka. Společně tiskneme budoucnost bez bariér.
                                    </p>
                                </div>

                                <!-- Partner Card: Aero Vodochody -->
                                <div class="bg-canvas flex flex-col p-8 md:p-10 border border-hairline rounded-2xl group transition-all duration-300 hover:border-ink hover:translate-y-[-2px]">
                                    <!-- Logo Slot -->
                                    <div class="logo-tile flex items-center justify-start aspect-[4/1] mb-6 md:mb-8" aria-label="Aero Vodochody">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo-aero.png" alt="Aero Vodochody" class="h-12 w-auto object-contain">
                                    </div>
                                    <h3 class="text-heading-sm font-semibold text-ink-strong mb-4">Aero Vodochody</h3>
                                    <p class="text-body-sm text-steel font-body leading-relaxed">
                                        Máme velkou radost, že náš nápad zaujal právě Aero Vodochody. Jejich oficiální záštita je pro nás obrovským povzbuzením do další práce. Moc děkujeme za poskytnutí modelu Skyfox, který nám teď pomáhá při testování v terénu a posouvá naše létání zase o kus dál.
                                    </p>
                                </div>

                            </div>
                        <?php endif; ?>

                    </div>
                </section>
                <?php
            endwhile;
        endif;
        ?>

        <!-- Divider -->
        <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
            <hr class="border-hairline">
        </div>

        <!-- ============================================= -->
        <!-- CTA BLOCK — Become a Partner                  -->
        <!-- ============================================= -->
        <section id="partner-cta" class="py-20 md:py-32 lg:py-40" aria-label="Staňte se partnerem">
            <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                <div class="max-w-xl">
                    <p class="text-micro font-medium uppercase tracking-[0.2em] text-stone-custom mb-6">
                        Spolupráce
                    </p>
                    <h2 class="text-heading-lg font-semibold text-ink-strong mb-6 leading-tight">
                        Chcete se stát<br>partnerem?
                    </h2>
                    <p class="text-body text-steel font-body mb-10 leading-relaxed max-w-md">
                        Hledáme organizace a&nbsp;firmy, které sdílejí naši vizi přístupného létání. Nabízíme viditelnost na akcích, v&nbsp;médiích a&nbsp;na webu. Spojte se s&nbsp;námi.
                    </p>
                    <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" id="partner-cta-button" class="inline-flex items-center px-8 py-3.5 bg-ink text-canvas text-body-sm font-semibold rounded-pill hover:bg-charcoal transition-colors">
                        Napište nám
                    </a>
                </div>
            </div>
        </section>

    </main>

    <!-- JavaScript: Logo staggered reveal animation -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null,
                rootMargin: '0px 0px -40px 0px',
                threshold: 0.1
            };

            // Observe logo tiles for staggered reveal
            document.querySelectorAll('.logo-tile').forEach((tile, i) => {
                const baseOpacity = tile.style.opacity || '0.90';
                tile.style.opacity = '0';
                tile.style.transform = 'translateY(16px)';
                tile.style.transition = `opacity 0.5s ease ${i * 0.07}s, transform 0.5s ease ${i * 0.07}s`;

                const tileObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            // Animate in, then settle to the base grayscale opacity
                            entry.target.style.opacity = baseOpacity;
                            entry.target.style.transform = 'translateY(0)';
                            // After the entrance animation, restore hover transitions
                            setTimeout(() => {
                                entry.target.style.transition = 'opacity 300ms ease, transform 200ms ease';
                            }, 500 + i * 70);
                            tileObserver.unobserve(entry.target);
                        }
                    });
                }, observerOptions);

                tileObserver.observe(tile);
            });
        });
    </script>

<?php
get_footer();
