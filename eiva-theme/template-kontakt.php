<?php
/**
 * Template Name: Kontakt
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
                <!-- 2. HERO — Stark Typography Header             -->
                <!-- ============================================= -->
                <section id="hero" class="relative pt-32 md:pt-44 pb-12 md:pb-16 bg-canvas" aria-label="Kontakt">
                    <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12 w-full">
                        <!-- Overline -->
                        <p class="text-micro font-medium uppercase tracking-[0.2em] text-stone-custom mb-4 animate-fade-in animate-delay-1">
                            Napište nám
                        </p>

                        <!-- Headline -->
                        <h1 class="text-hero font-semibold text-ink-strong max-w-4xl animate-fade-in animate-delay-2">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </section>

                <!-- Divider -->
                <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                    <hr class="border-hairline">
                </div>

                <!-- ============================================= -->
                <!-- 3. SPLIT LAYOUT — 2 Columns on Desktop        -->
                <!-- ============================================= -->
                <section id="contact-split" class="py-16 md:py-24 lg:py-32 bg-canvas">
                    <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24">
                            
                            <!-- LEFT COLUMN: Contact & Billing Details -->
                            <div class="lg:col-span-5 flex flex-col justify-between">
                                <div>
                                    <!-- Bold Physical Location -->
                                    <h2 class="text-heading-md font-bold text-ink-strong mb-8 tracking-tight">
                                        Vysoké Mýto,<br>Česká republika
                                    </h2>

                                    <!-- General Email -->
                                    <div class="mb-10 font-body">
                                        <span class="block text-micro font-semibold uppercase tracking-[0.1em] text-stone-custom mb-1.5">Obecný kontakt</span>
                                        <a href="mailto:info@eiva.cz" class="text-body-lg font-medium text-ink hover:underline decoration-1 underline-offset-4">
                                            info@eiva.cz
                                        </a>
                                    </div>

                                    <!-- Team Direct Contacts -->
                                    <div class="space-y-6 mb-12 font-body">
                                        <span class="block text-micro font-semibold uppercase tracking-[0.1em] text-stone-custom">Tým Eiva</span>
                                        
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-baseline border-b border-hairline/60 pb-3">
                                            <span class="font-medium text-ink">Jakub Fous <span class="text-caption text-stone-custom font-normal ml-1">PR Management</span></span>
                                            <a href="tel:+420776572722" class="text-body-sm text-steel hover:text-ink font-mono mt-1 md:mt-0 transition-colors">+420 776 572 722</a>
                                        </div>

                                        <div class="flex flex-col md:flex-row md:justify-between md:items-baseline border-b border-hairline/60 pb-3">
                                            <span class="font-medium text-ink">Tomáš Votřel <span class="text-caption text-stone-custom font-normal ml-1">Technology leader</span></span>
                                            <a href="tel:+420737360298" class="text-body-sm text-steel hover:text-ink font-mono mt-1 md:mt-0 transition-colors">+420 737 360 298</a>
                                        </div>

                                        <div class="flex flex-col md:flex-row md:justify-between md:items-baseline border-b border-hairline/60 pb-3">
                                            <span class="font-medium text-ink">Ing. Martin Štěpánek <span class="text-caption text-stone-custom font-normal ml-1">Mentor</span></span>
                                            <a href="tel:+420724084966" class="text-body-sm text-steel hover:text-ink font-mono mt-1 md:mt-0 transition-colors">+420 724 084 966</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Billing Details (Fakturační údaje) -->
                                <div class="mt-8 border-t border-hairline pt-8 font-body">
                                    <span class="block text-micro font-semibold uppercase tracking-[0.1em] text-stone-custom mb-4">Fakturační údaje</span>
                                    
                                    <table class="w-full text-left text-body-sm text-steel">
                                        <tbody>
                                            <tr class="align-top">
                                                <td class="pr-4 py-1.5 font-medium text-charcoal w-24">Subjekt</td>
                                                <td class="py-1.5">Střední škola technická Vysoké Mýto <span class="block text-micro text-stone-custom mt-0.5">(zastřešující studentskou firmu Eiva)</span></td>
                                            </tr>
                                            <tr class="align-top">
                                                <td class="pr-4 py-1.5 font-medium text-charcoal">Adresa</td>
                                                <td class="py-1.5">Mládežnická 380, 566 01 Vysoké Mýto</td>
                                            </tr>
                                            <tr class="align-top">
                                                <td class="pr-4 py-1.5 font-medium text-charcoal">IČO</td>
                                                <td class="py-1.5 font-mono">150 28 585</td>
                                            </tr>
                                            <tr class="align-top">
                                                <td class="pr-4 py-1.5 font-medium text-charcoal">DIČ</td>
                                                <td class="py-1.5 font-mono">CZ15028585</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Stark Social Media Links -->
                                <div class="mt-12 font-body">
                                    <span class="block text-micro font-semibold uppercase tracking-[0.1em] text-stone-custom mb-3">Sledujte nás</span>
                                    <div class="flex gap-6">
                                        <a href="https://facebook.com" target="_blank" rel="noopener" class="text-body-sm text-steel hover:text-ink hover:underline underline-offset-4 decoration-1 transition-colors">Facebook</a>
                                        <a href="https://instagram.com" target="_blank" rel="noopener" class="text-body-sm text-steel hover:text-ink hover:underline underline-offset-4 decoration-1 transition-colors">Instagram</a>
                                        <a href="https://youtube.com" target="_blank" rel="noopener" class="text-body-sm text-steel hover:text-ink hover:underline underline-offset-4 decoration-1 transition-colors">YouTube</a>
                                    </div>
                                </div>

                            </div>

                            <!-- RIGHT COLUMN: Form or Rich Text Description -->
                            <div class="lg:col-span-7 flex flex-col justify-start">
                                <?php
                                $content = get_the_content();
                                if ( ! empty( $content ) ) {
                                    ?>
                                    <div class="prose-reading mb-8 bg-surface p-8 md:p-12 rounded-2xl border border-hairline/60">
                                        <?php the_content(); ?>
                                    </div>
                                    <?php
                                } else {
                                    // Default minimal beautiful form fallback if editor is empty
                                    ?>
                                    <div class="bg-surface p-8 md:p-12 rounded-2xl border border-hairline/60">
                                        <h3 class="text-heading-sm font-semibold text-ink-strong mb-8">Napište nám zprávu</h3>
                                        
                                        <form action="#" method="POST" class="space-y-8">
                                            <div class="relative">
                                                <label for="name" class="block text-micro font-semibold uppercase tracking-[0.1em] text-stone-custom mb-1">Jméno</label>
                                                <input type="text" id="name" name="name" required placeholder="Vaše celé jméno" class="form-input">
                                            </div>

                                            <div class="relative">
                                                <label for="email" class="block text-micro font-semibold uppercase tracking-[0.1em] text-stone-custom mb-1">E-mail</label>
                                                <input type="email" id="email" name="email" required placeholder="vas@email.cz" class="form-input">
                                            </div>

                                            <div class="relative">
                                                <label for="message" class="block text-micro font-semibold uppercase tracking-[0.1em] text-stone-custom mb-1">Zpráva</label>
                                                <textarea id="message" name="message" rows="4" required placeholder="Sem napište svou zprávu..." class="form-input resize-none"></textarea>
                                            </div>

                                            <div class="pt-4">
                                                <button type="submit" class="w-full py-4 bg-ink text-canvas font-semibold rounded-pill hover:bg-charcoal transition-colors tracking-wide text-body-sm">
                                                    Odeslat zprávu
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>

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
        <!-- 4. GRAYSCALE MAP PLACEHOLDER — Centered on VM  -->
        <!-- ============================================= -->
        <section id="map-section" class="py-16 md:py-24 bg-canvas" aria-label="Kde nás najdete">
            <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">
                <p class="text-micro font-medium uppercase tracking-[0.2em] text-stone-custom mb-6">
                    Kde nás najdete
                </p>
                
                <!-- Stark Grayscale Map Container -->
                <div class="w-full aspect-[21/9] md:aspect-[3/1] rounded-2xl overflow-hidden border border-hairline/80 relative map-placeholder flex flex-col items-center justify-center text-center p-6">
                    <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image: radial-gradient(#000000 1px, transparent 1px); background-size: 16px 16px;"></div>
                    
                    <!-- Map Pin Icon + Label -->
                    <div class="relative z-10 flex flex-col items-center max-w-sm">
                        <div class="w-12 h-12 bg-ink text-canvas rounded-full flex items-center justify-center shadow-sm mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-ink-strong mb-1">Mládežnická 380, Vysoké Mýto</h4>
                        <p class="text-caption text-steel font-body">Zázemí Střední školy technické</p>
                        
                        <a href="https://mapy.cz/zakladni?q=Ml%C3%A1de%C5%BEnick%C3%A1%20380%2C%20Vysok%C3%A9%20M%C3%BDto" target="_blank" rel="noopener" class="text-caption font-semibold text-ink hover:underline mt-4 tracking-wider uppercase underline-offset-4 decoration-1">
                            Otevřít na Mapy.cz
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php
get_footer();
