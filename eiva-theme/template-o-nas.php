<?php
/**
 * Template Name: O nás
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
                <!-- 2. HERO — Massive Background Video Hero       -->
                <!-- ============================================= -->
                <section id="hero" class="relative min-h-[75vh] md:min-h-[80vh] flex items-end pb-16 md:pb-24 pt-32 md:pt-40 overflow-hidden" aria-label="Úvod">
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
                            O projektu Eiva
                        </p>

                        <!-- Hero Headline -->
                        <h1 class="text-hero font-semibold text-canvas max-w-4xl mb-8 md:mb-10 animate-fade-in animate-delay-2">
                            <?php the_title(); ?>
                        </h1>

                        <!-- Subtitle / Perex -->
                        <p class="text-subtitle md:text-body-lg text-muted max-w-2xl animate-fade-in animate-delay-3 font-body">
                            Elektřina, inovace a svoboda v oblacích pro každého. Boříme bariéry v pohybu a přinášíme autentický zážitek z létání těm, kteří jsou v reálném světě připoutáni k zemi.
                        </p>
                    </div>
                </section>

                <!-- Divider -->
                <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                    <hr class="border-hairline">
                </div>

                <!-- ============================================= -->
                <!-- 3. THE STORY — Prose Reading Section          -->
                <!-- ============================================= -->
                <section id="story-section" class="py-16 md:py-24 lg:py-32">
                    <div class="max-w-prose mx-auto px-6 md:px-8">
                        
                        <!-- Section Label -->
                        <p class="text-micro font-medium uppercase tracking-[0.2em] text-stone-custom mb-10 md:mb-14">
                            Jak to celé začalo
                        </p>

                        <div class="prose-reading">
                            <?php
                            $content = get_the_content();
                            if ( ! empty( $content ) ) {
                                the_content();
                            } else {
                                // Default static fallback content representing the EIVA project story if WP content editor is empty
                                ?>
                                <h2>Vznik a vize projektu</h2>
                                <p>
                                    Projekt <strong>EIVA</strong> (zkratka pro <em>Electric Innovated Vehicle and Aircraft</em>) vznikl jako odvážný studentský nápad na <strong>Střední škole technické ve Vysokém Mýtě</strong>. Pod vedením pedagoga a mentora <strong>Ing. Martin Štěpánek</strong> se skupina mladých talentovaných studentů – <strong>Jakub Fous</strong> a <strong>Tomáš Votřel</strong> – rozhodla využít své technické vědomosti pro pomoc druhým. 
                                </p>
                                <p>
                                    Hlavní vizí bylo spojit moderní technologie s myšlenkou úplné přístupnosti. Chtěli jsme dokázat, že fyzické omezení nemusí znamenat konec touhy po objevování, rychlosti a volnosti. Rozhodli jsme se „zrušit slovo nelze“ a vybudovat systém, který lidem na invalidním vozíku zprostředkuje naprosto reálný a autentický pocit z létání.
                                </p>

                                <hr class="my-12 border-hairline">

                                <h2>Technologie, která boří hranice</h2>
                                <p>
                                    Naše technologie se liší od běžných simulátorů. Nejde o virtuální realitu vytvořenou počítačovým programem, ale o <strong>skutečný let v reálném čase</strong>. Uživatel sedí pevně na zemi na invalidním vozíku a má nasazené FPV (First Person View) brýle. Ty jsou bezdrátově propojeny s HD kamerou umístěnou na palubě dálkově řízeného modelu letadla.
                                </p>
                                <blockquote>
                                    <p>„Chceme zrušit slovo nelze. Naším cílem je, aby každý bez ohledu na své fyzické omezení mohl prožít ten nepopsatelný pocit, když vzlétne nad zem a vidí svět z ptačí perspektivy.“</p>
                                    <cite class="block text-caption text-steel mt-2 not-italic">— Jakub Fous, spoluzakladatel</cite>
                                </blockquote>
                                <p>
                                    Klíčovým prvkem celého systému je náš vlastní vývoj <strong>headtrackeru</strong> – speciálního zařízení, které přenáší pohyby hlavy uživatele v reálném čase přímo na motorizovaný závěs kamery v letadle. Když se letec otočí hlavou vpravo, kamera v oblacích se okamžitě otočí vpravo. Tento plynulý, nízkolatenční přenos vytváří stoprocentně věrný pocit, že dotyčný v kokpitu letadla opravdu sedí. Jako nosiče používáme stabilní motorové větroně <em>Bravus 2400</em>, které disponují vynikající aerodynamikou a schopností nést naši technologii.
                                </p>

                                <hr class="my-12 border-hairline">

                                <h2>Úspěchy studentské firmy</h2>
                                <p>
                                    Díky obrovskému nasazení celého týmu se projekt proměnil ve fungující studentskou firmu, která sklízí uznání na prestižních celostátních i mezinárodních fórech. V národním finále soutěže <strong>JA Studentská firma roku 2024/2025</strong> jsme obsadili vynikající <strong>2. místo</strong> a na mezinárodní výstavě <strong>JA EXPO 2025</strong> nám byla udělena prestižní cena <strong>JA Alumni Team Spirit Award</strong>.
                                </p>
                                <?php
                            }
                            ?>
                        </div>
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
        <!-- 4. THE TEAM — Stark Unboxed Grid              -->
        <!-- ============================================= -->
        <section id="team-section" class="py-16 md:py-24 lg:py-32">
            <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                
                <!-- Section Header -->
                <div class="mb-12 md:mb-16">
                    <p class="text-micro font-medium uppercase tracking-[0.2em] text-stone-custom mb-3">Náš tým</p>
                    <h2 class="text-heading-md font-semibold text-ink-strong">Lidé za projektem Eiva</h2>
                </div>

                <!-- Team Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12" id="team-grid">
                    
                    <!-- Team Member 1: Jakub Fous -->
                    <div class="flex flex-col">
                        <div class="aspect-[3/4] bg-surface-soft rounded-xl mb-6 flex items-center justify-center text-muted overflow-hidden relative group">
                            <div class="absolute inset-0 bg-gradient-to-br from-surface to-hairline transition-all duration-300 group-hover:scale-105"></div>
                            <svg class="w-16 h-16 opacity-10 relative z-10" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                            </svg>
                        </div>
                        <h3 class="text-card-title font-semibold text-ink mb-1">Jakub Fous</h3>
                        <p class="text-body-sm text-steel font-medium mb-2">PR Management &amp; Spoluzakladatel</p>
                        <p class="text-caption text-stone-custom font-body leading-relaxed">
                            Stará se o komunikaci s partnery, propagaci projektu, média a šíření naší myšlenky svobody bez bariér.
                        </p>
                    </div>

                    <!-- Team Member 2: Tomáš Votřel -->
                    <div class="flex flex-col">
                        <div class="aspect-[3/4] bg-surface-soft rounded-xl mb-6 flex items-center justify-center text-muted overflow-hidden relative group">
                            <div class="absolute inset-0 bg-gradient-to-br from-surface to-hairline transition-all duration-300 group-hover:scale-105"></div>
                            <svg class="w-16 h-16 opacity-10 relative z-10" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                            </svg>
                        </div>
                        <h3 class="text-card-title font-semibold text-ink mb-1">Tomáš Votřel</h3>
                        <p class="text-body-sm text-steel font-medium mb-2">Technology leader &amp; Spoluzakladatel</p>
                        <p class="text-caption text-stone-custom font-body leading-relaxed">
                            Zodpovídá za technický vývoj, integraci headtrackeru, spolehlivost bezdrátových přenosů a ladění FPV hardwaru.
                        </p>
                    </div>

                    <!-- Team Member 3: Ing. Martin Štěpánek -->
                    <div class="flex flex-col">
                        <div class="aspect-[3/4] bg-surface-soft rounded-xl mb-6 flex items-center justify-center text-muted overflow-hidden relative group">
                            <div class="absolute inset-0 bg-gradient-to-br from-surface to-hairline transition-all duration-300 group-hover:scale-105"></div>
                            <svg class="w-16 h-16 opacity-10 relative z-10" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                            </svg>
                        </div>
                        <h3 class="text-card-title font-semibold text-ink mb-1">Ing. Martin Štěpánek</h3>
                        <p class="text-body-sm text-steel font-medium mb-2">Mentor &amp; Pedagog SŠT Vysoké Mýto</p>
                        <p class="text-caption text-stone-custom font-body leading-relaxed">
                            Pedagogické vedení, technické konzultace a zaštiťování projektu v rámci školních dílen a akademické půdy.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Divider -->
        <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
            <hr class="border-hairline">
        </div>

        <!-- ============================================= -->
        <!-- 5. BOTTOM CTA — Stark & Minimal               -->
        <!-- ============================================= -->
        <section id="cta-band" class="bg-ink text-canvas" aria-label="Výzva k akci">
            <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12 py-16 md:py-24 lg:py-32">
                <div class="max-w-2xl">
                    <h2 class="text-display font-semibold text-canvas mb-6 leading-tight">
                        Chcete se zapojit<br>nebo nás podpořit?
                    </h2>
                    <p class="text-body-lg text-muted mb-10 font-body max-w-lg">
                        Máte zájem o předvedení systému, partnerství nebo chcete podpořit naši misi a dopřát pocit svobody v oblacích dalším lidem s handicapem? Ozvěte se nám.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" id="cta-contact" class="inline-flex items-center px-7 py-3 bg-canvas text-ink text-body-sm font-semibold rounded-pill hover:bg-surface transition-colors">
                            Kontaktujte nás
                        </a>
                        <a href="<?php echo esc_url( home_url( '/podporovatele/' ) ); ?>" id="cta-partners" class="inline-flex items-center px-7 py-3 border border-muted text-muted text-body-sm font-semibold rounded-pill hover:border-canvas hover:text-canvas transition-colors">
                            Naši podporovatelé
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php
get_footer();
