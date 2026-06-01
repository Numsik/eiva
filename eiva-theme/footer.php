    <!-- ============================================= -->
    <!-- FOOTER — Stark & Functional                   -->
    <!-- ============================================= -->
    <footer id="site-footer" class="bg-ink text-canvas mt-auto" role="contentinfo">
        <div class="max-w-content mx-auto px-6 md:px-8 lg:px-12">

            <!-- Footer Grid -->
            <div class="py-12 md:py-16 grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
                
                <!-- Column 1: Brand -->
                <div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block mb-4">
                        <img src="https://eiva.cz/wp-content/uploads/2026/01/EIVA-CERNA-LOGO.svg" alt="<?php bloginfo( 'name' ); ?>" class="h-5 w-auto" style="filter: invert(1) brightness(2);">
                    </a>
                    <p class="text-body-sm text-muted font-body leading-relaxed mb-6">
                        Hlavou v&nbsp;oblacích,<br>nohama na&nbsp;zemi.
                    </p>
                    <!-- Social -->
                    <div class="flex gap-4">
                        <a href="https://www.instagram.com/project_eiva/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="text-muted hover:text-canvas transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/@project_eiva" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="text-muted hover:text-canvas transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Navigation -->
                <div>
                    <p class="text-body-sm font-semibold text-canvas mb-4">Navigace</p>
                    <?php
                    if ( has_nav_menu( 'footer-menu' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'footer-menu',
                            'container'      => false,
                            'menu_class'     => 'space-y-2.5',
                            'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
                            'fallback_cb'    => false,
                        ) );
                    } else {
                        ?>
                        <ul class="space-y-2.5">
                            <li><a href="o-nas.html" class="text-body-sm text-muted hover:text-canvas transition-colors font-body">O nás</a></li>
                            <li><a href="blog.html" class="text-body-sm text-muted hover:text-canvas transition-colors font-body">Blog</a></li>
                            <li><a href="kontakt.html" class="text-body-sm text-muted hover:text-canvas transition-colors font-body">Kontaktujte nás</a></li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>

                <!-- Column 3: Contact -->
                <div>
                    <p class="text-body-sm font-semibold text-canvas mb-4">Kontakt</p>
                    <ul class="space-y-2.5">
                        <li class="text-body-sm text-muted font-body">Mládežnická 380</li>
                        <li class="text-body-sm text-muted font-body">566 01 Vysoké Mýto</li>
                        <li><a href="mailto:info@eiva.cz" class="text-body-sm text-muted hover:text-canvas transition-colors font-body">info@eiva.cz</a></li>
                        <li><a href="https://eiva.cz" class="text-body-sm text-muted hover:text-canvas transition-colors font-body">eiva.cz</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="py-6 border-t border-charcoal flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <p class="text-micro text-steel font-body">
                    Copyright &copy; 2026 Eiva | Created By <a href="https://www.jkw-media.com" target="_blank" rel="noopener noreferrer" class="hover:text-muted transition-colors">www.jkw-media.com</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- ============================================= -->
    <!-- JavaScript: Header scroll + mobile menu       -->
    <!-- ============================================= -->
    <script>
        // Sticky header transitions on scroll
        const header = document.getElementById('site-header');
        const scrollThreshold = 40;

        function handleScroll() {
            if (header) {
                if (window.scrollY > scrollThreshold) {
                    header.classList.add('header-scrolled');
                    if (window.hasDarkHeader) {
                        header.classList.remove('header-dark');
                    }
                } else {
                    header.classList.remove('header-scrolled');
                    if (window.hasDarkHeader) {
                        header.classList.add('header-dark');
                    }
                }
            }
        }

        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll();

        // Mobile menu toggle open/close
        const mobileToggle = document.getElementById('mobile-toggle');
        const mobileClose = document.getElementById('mobile-close');
        const mobileNav = document.getElementById('mobile-nav');

        if (mobileToggle && mobileClose && mobileNav) {
            mobileToggle.addEventListener('click', () => {
                mobileNav.classList.add('active');
                mobileToggle.setAttribute('aria-expanded', 'true');
                document.body.style.overflow = 'hidden';
            });

            mobileClose.addEventListener('click', () => {
                mobileNav.classList.remove('active');
                mobileToggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });

            // Close mobile drawer overlay on navigation click
            mobileNav.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileNav.classList.remove('active');
                    mobileToggle.setAttribute('aria-expanded', 'false');
                    document.body.style.overflow = '';
                });
            });
        }

        // Category filter interaction with actual filtering
        const catPills = document.querySelectorAll('.cat-pill');
        const blogCards = document.querySelectorAll('.blog-card');
        const featuredSection = document.getElementById('featured-post');
        const loadMoreBtn = document.getElementById('load-more-posts');

        if (catPills.length > 0) {
            catPills.forEach(pill => {
                pill.addEventListener('click', () => {
                    const selectedCat = pill.getAttribute('data-category');

                    // 1. Update visual active state of buttons
                    catPills.forEach(p => {
                        p.classList.remove('bg-ink', 'text-canvas');
                        p.classList.add('border', 'border-hairline', 'text-steel', 'bg-canvas');
                        p.setAttribute('aria-selected', 'false');
                    });
                    pill.classList.remove('border', 'border-hairline', 'text-steel', 'bg-canvas');
                    pill.classList.add('bg-ink', 'text-canvas');
                    pill.setAttribute('aria-selected', 'true');

                    // 2. Filter grid cards with smooth transition
                    if (blogCards.length > 0) {
                        blogCards.forEach(card => {
                            card.style.transition = 'opacity 0.25s ease, transform 0.25s ease';
                            const cardCat = card.getAttribute('data-category');

                            if (selectedCat === 'all' || cardCat === selectedCat) {
                                card.style.display = 'block';
                                setTimeout(() => {
                                    card.style.opacity = '1';
                                    card.style.transform = 'translateY(0)';
                                }, 20);
                            } else {
                                card.style.opacity = '0';
                                card.style.transform = 'translateY(12px)';
                                setTimeout(() => {
                                    if (card.style.opacity === '0') {
                                        card.style.display = 'none';
                                    }
                                }, 250);
                            }
                        });
                    }

                    // 3. Filter featured post on the top (since its category is "Akce")
                    if (featuredSection) {
                        const featuredCat = featuredSection.getAttribute('data-category');
                        featuredSection.style.transition = 'opacity 0.25s ease';
                        
                        if (selectedCat === 'all' || featuredCat === selectedCat) {
                            featuredSection.style.display = '';
                            setTimeout(() => {
                                featuredSection.style.opacity = '1';
                            }, 20);
                        } else {
                            featuredSection.style.opacity = '0';
                            setTimeout(() => {
                                if (featuredSection.style.opacity === '0') {
                                    featuredSection.style.display = 'none';
                                }
                            }, 250);
                        }
                    }

                    // 4. Hide "Load More" button when filtering
                    if (loadMoreBtn) {
                        if (selectedCat === 'all') {
                            loadMoreBtn.parentElement.style.display = 'flex';
                        } else {
                            loadMoreBtn.parentElement.style.display = 'none';
                        }
                    }
                });
            });
        }

        // Intersection Observer for graceful staggered scroll transitions
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -60px 0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe elements
        document.querySelectorAll('.blog-card').forEach((card, i) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = `opacity 0.5s ease ${i * 0.08}s, transform 0.5s ease ${i * 0.08}s`;
            observer.observe(card);
        });

        document.querySelectorAll('.gear-card').forEach((card, i) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(16px)';
            card.style.transition = `opacity 0.5s ease ${i * 0.1}s, transform 0.5s ease ${i * 0.1}s`;
            observer.observe(card);
        });

        const statsRow = document.querySelectorAll('#stats-row > div');
        if (statsRow.length > 0) {
            statsRow.forEach((stat, i) => {
                stat.style.opacity = '0';
                stat.style.transform = 'translateY(12px)';
                stat.style.transition = `opacity 0.4s ease ${i * 0.1}s, transform 0.4s ease ${i * 0.1}s`;
                observer.observe(stat);
            });
        }
    </script>

    <?php wp_footer(); ?>
</body>
</html>
