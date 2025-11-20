// Main JavaScript for Vanilla Export Website

document.addEventListener("DOMContentLoaded", function () {
    // ============================================
    // MOBILE MENU TOGGLE
    // ============================================
    const mobileToggle = document.getElementById("mobileToggle");
    const mainNav = document.getElementById("mainNav");
    const body = document.body;

    if (mobileToggle && mainNav) {
        mobileToggle.addEventListener("click", function (e) {
            e.stopPropagation();
            mainNav.classList.toggle("active");
            this.classList.toggle("active");
            body.classList.toggle("menu-open");
        });

        // Close menu when clicking outside
        document.addEventListener("click", function (e) {
            if (
                !mainNav.contains(e.target) &&
                !mobileToggle.contains(e.target)
            ) {
                mainNav.classList.remove("active");
                mobileToggle.classList.remove("active");
                body.classList.remove("menu-open");
            }
        });

        // Close menu when clicking on a link
        const navLinks = mainNav.querySelectorAll(
            ".nav-link, .mobile-cta-nav a"
        );
        navLinks.forEach((link) => {
            link.addEventListener("click", function () {
                if (window.innerWidth <= 768) {
                    mainNav.classList.remove("active");
                    mobileToggle.classList.remove("active");
                    body.classList.remove("menu-open");
                }
            });
            // Touch fallback: some mobile browsers swallow the first tap if layout just shifted.
            link.addEventListener("touchend", function (e) {
                // If the link has an href (external or internal route), force navigation.
                const href = this.getAttribute("href");
                if (href && !href.startsWith("#")) {
                    // Delay a tick to allow menu to close without preventing navigation.
                    setTimeout(() => {
                        window.location.href = href;
                    }, 10);
                }
            }, { passive: true });
        });
        // Keyboard accessibility: close on ESC when menu open on mobile
        document.addEventListener("keydown", (ev) => {
            if (ev.key === "Escape" && mainNav.classList.contains("active")) {
                mainNav.classList.remove("active");
                mobileToggle.classList.remove("active");
                body.classList.remove("menu-open");
                mobileToggle.focus();
            }
        });
    }

    // ============================================
    // HEADER SCROLL EFFECT
    // ============================================
    const header = document.getElementById("header");
    const topBar = document.querySelector(".top-bar");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            if (header) header.classList.add("scrolled");
            if (topBar) topBar.classList.add("scrolled");
        } else {
            if (header) header.classList.remove("scrolled");
            if (topBar) topBar.classList.remove("scrolled");
        }
    });

    // ============================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href");

            if (targetId === "#") return;

            const target = document.querySelector(targetId);
            if (target) {
                const headerHeight = header.offsetHeight;
                const targetPosition = target.offsetTop - headerHeight - 20;

                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth",
                });
            }
        });
    });

    // ============================================
    // ACTIVE NAVIGATION HIGHLIGHTING
    // ============================================
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".nav-link");

    function highlightNavigation() {
        const scrollY = window.pageYOffset;

        sections.forEach((section) => {
            const sectionHeight = section.offsetHeight;
            const sectionTop = section.offsetTop - 150;
            const sectionId = section.getAttribute("id");

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                navLinks.forEach((link) => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === `#${sectionId}`) {
                        link.classList.add("active");
                    }
                });
            }
        });
    }

    window.addEventListener("scroll", highlightNavigation);

    // ============================================
    // IMAGE LAZY LOADING (if needed)
    // ============================================
    const images = document.querySelectorAll("img[data-src]");

    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute("data-src");
                observer.unobserve(img);
            }
        });
    });

    images.forEach((img) => imageObserver.observe(img));

    // ============================================
    // FORM VALIDATION (if forms are added later)
    // ============================================
    const forms = document.querySelectorAll("form");

    forms.forEach((form) => {
        form.addEventListener("submit", function (e) {
            const requiredFields = form.querySelectorAll("[required]");
            let isValid = true;

            requiredFields.forEach((field) => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add("error");
                } else {
                    field.classList.remove("error");
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert("Please fill in all required fields");
            }
        });
    });

    // ============================================
    // SCROLL ANIMATIONS - INTERSECTION OBSERVER
    // ============================================
    const animateOnScroll = () => {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    }
                });
            },
            {
                threshold: 0.1,
                rootMargin: "0px 0px -100px 0px",
            }
        );

        // Observe elements with specific animation classes
        const elementsToAnimate = document.querySelectorAll(
            ".scroll-fade-in, .scroll-fade-left, .scroll-fade-right, .scroll-fade-up, .scroll-fade-down, .scroll-scale, .scroll-rotate, .feature-card, .product-card, .why-card, .faq-item, .footer-column"
        );

        elementsToAnimate.forEach((element) => {
            observer.observe(element);
        });
    };

    // Initialize scroll animations when DOM is ready
    animateOnScroll();

    // ============================================
    // HERO BACKGROUND SLIDESHOW
    // ============================================
    const heroSlides = document.querySelectorAll(".hero-slide");
    let currentSlide = 0;
    const slideInterval = 5000; // 5 seconds per slide

    function showNextSlide() {
        if (heroSlides.length > 0) {
            // Remove active class from current slide
            heroSlides[currentSlide].classList.remove("active");

            // Move to next slide
            currentSlide = (currentSlide + 1) % heroSlides.length;

            // Add active class to next slide
            heroSlides[currentSlide].classList.add("active");
        }
    }

    // Auto-play slideshow
    if (heroSlides.length > 1) {
        setInterval(showNextSlide, slideInterval);
    }

    // ============================================
    // PRODUCT FILTER TABS
    // ============================================
    const filterTabs = document.querySelectorAll(".filter-tab");
    const productCards = document.querySelectorAll(".product-card");

    // Filter functionality
    filterTabs.forEach((tab) => {
        tab.addEventListener("click", function () {
            const category = this.getAttribute("data-category");

            // Remove active class from all tabs
            filterTabs.forEach((t) => t.classList.remove("active"));

            // Add active class to clicked tab
            this.classList.add("active");

            // Filter products with animation
            productCards.forEach((card) => {
                const cardCategory = card.getAttribute("data-category");
                const cardType = card.getAttribute("data-type");

                if (category === "all") {
                    card.classList.remove("hidden");
                } else if (
                    category === "vanilla-beans" &&
                    cardType === "vanilla-beans"
                ) {
                    card.classList.remove("hidden");
                } else if (
                    category === "derivatives" &&
                    cardType === "derivatives"
                ) {
                    card.classList.remove("hidden");
                } else if (
                    category === "planifolia" &&
                    cardCategory.includes("planifolia")
                ) {
                    card.classList.remove("hidden");
                } else if (
                    category === "tahitensis" &&
                    cardCategory.includes("tahitensis")
                ) {
                    card.classList.remove("hidden");
                } else {
                    card.classList.add("hidden");
                }
            });

            // Scroll to the products section after filtering
            setTimeout(() => {
                const visibleCards = Array.from(
                    document.querySelectorAll(".product-card:not(.hidden)")
                );
                const grid = document.getElementById("productsGrid");
                if (grid) {
                    // Toggle centered class based on number of visible cards
                    if (visibleCards.length > 0 && visibleCards.length <= 3) {
                        grid.classList.add("centered");
                    } else {
                        grid.classList.remove("centered");
                    }
                }
            }, 120);
        });
    });

    // ============================================
    // PRODUCTS GRID AUTO-SCROLL (Mobile)
    // ============================================
    const productsGrid = document.getElementById("productsGrid");
    const productScrollHintLeft = document.querySelector(
        ".product-scroll-hint-left"
    );
    const productScrollHintRight = document.querySelector(
        ".product-scroll-hint-right"
    );

    if (productsGrid && productScrollHintLeft && productScrollHintRight) {
        let productAutoScrollInterval;
        let isUserScrollingProducts = false;
        let productScrollDirection = 1;

        // Scroll left button
        productScrollHintLeft.addEventListener("click", function () {
            isUserScrollingProducts = true;
            clearInterval(productAutoScrollInterval);
            productsGrid.scrollBy({
                left: -340,
                behavior: "smooth",
            });
            setTimeout(() => {
                isUserScrollingProducts = false;
                startProductAutoScroll();
            }, 4000);
        });

        // Scroll right button
        productScrollHintRight.addEventListener("click", function () {
            isUserScrollingProducts = true;
            clearInterval(productAutoScrollInterval);
            productsGrid.scrollBy({
                left: 340,
                behavior: "smooth",
            });
            setTimeout(() => {
                isUserScrollingProducts = false;
                startProductAutoScroll();
            }, 4000);
        });

        // Update scroll hints
        function updateProductScrollHints() {
            const scrollLeft = productsGrid.scrollLeft;
            const scrollWidth = productsGrid.scrollWidth;
            const clientWidth = productsGrid.clientWidth;

            if (scrollLeft <= 10) {
                productScrollHintLeft.style.opacity = "0.3";
            } else {
                productScrollHintLeft.style.opacity = "1";
            }

            if (scrollLeft + clientWidth >= scrollWidth - 10) {
                productScrollHintRight.style.opacity = "0.3";
            } else {
                productScrollHintRight.style.opacity = "1";
            }
        }

        // Auto scroll products
        function startProductAutoScroll() {
            if (window.innerWidth <= 768) {
                productAutoScrollInterval = setInterval(() => {
                    if (!isUserScrollingProducts) {
                        const scrollLeft = productsGrid.scrollLeft;
                        const scrollWidth = productsGrid.scrollWidth;
                        const clientWidth = productsGrid.clientWidth;

                        if (scrollLeft + clientWidth >= scrollWidth - 10) {
                            productScrollDirection = -1;
                        } else if (scrollLeft <= 10) {
                            productScrollDirection = 1;
                        }

                        productsGrid.scrollBy({
                            left: productScrollDirection * 0.5,
                            behavior: "auto",
                        });

                        updateProductScrollHints();
                    }
                }, 30);
            }
        }

        // Touch events
        productsGrid.addEventListener("touchstart", function () {
            isUserScrollingProducts = true;
            clearInterval(productAutoScrollInterval);
        });

        productsGrid.addEventListener("touchend", function () {
            setTimeout(() => {
                isUserScrollingProducts = false;
                startProductAutoScroll();
            }, 4000);
        });

        // Listen to scroll
        productsGrid.addEventListener("scroll", updateProductScrollHints);

        // Initial
        updateProductScrollHints();
        startProductAutoScroll();

        // Resize
        window.addEventListener("resize", () => {
            updateProductScrollHints();
            clearInterval(productAutoScrollInterval);
            startProductAutoScroll();
        });
    }

    // ============================================
    // PRODUCT IMAGE SLIDESHOW
    // ============================================
    const productCardsWithSlideshow =
        document.querySelectorAll(".product-card");

    productCardsWithSlideshow.forEach((card) => {
        const slideshow = card.querySelector(".product-image-slideshow");

        if (slideshow) {
            const slides = slideshow.querySelectorAll(".product-image-slide");
            const indicators = card.querySelectorAll(
                ".product-image-indicator"
            );
            let currentProductSlide = 0;
            let productSlideInterval;

            // Function to show specific slide
            function showProductSlide(index) {
                slides.forEach((slide) => slide.classList.remove("active"));
                indicators.forEach((indicator) =>
                    indicator.classList.remove("active")
                );

                slides[index].classList.add("active");
                indicators[index].classList.add("active");
                currentProductSlide = index;
            }

            // Function to show next slide
            function nextProductSlide() {
                currentProductSlide = (currentProductSlide + 1) % slides.length;
                showProductSlide(currentProductSlide);
            }

            // Auto-play slideshow every 5 seconds
            function startProductSlideshow() {
                productSlideInterval = setInterval(nextProductSlide, 5000);
            }

            // Stop slideshow
            function stopProductSlideshow() {
                clearInterval(productSlideInterval);
            }

            // Click indicators to change slide
            indicators.forEach((indicator, index) => {
                indicator.addEventListener("click", () => {
                    stopProductSlideshow();
                    showProductSlide(index);
                    startProductSlideshow();
                });
            });

            // Pause on hover
            card.addEventListener("mouseenter", stopProductSlideshow);
            card.addEventListener("mouseleave", startProductSlideshow);

            // Start slideshow
            startProductSlideshow();
        }
    });

    // ============================================
    // SPECS COLLAPSIBLE & GRADE DESCRIPTIONS
    // ============================================
    const gradeDescriptionData = {};
    // Extract grade descriptions embedded via data attributes if needed in future

    // Collapsible specs toggle
    document.querySelectorAll(".specs-collapsible").forEach((coll) => {
        const toggleBtn = coll.querySelector(".specs-toggle");
        const body = coll.querySelector(".specs-body");
        if (!toggleBtn || !body) return;
        toggleBtn.addEventListener("click", () => {
            const isCollapsed = coll.getAttribute("data-collapsed") === "true";
            coll.setAttribute("data-collapsed", isCollapsed ? "false" : "true");
            toggleBtn.setAttribute("aria-expanded", (!isCollapsed).toString());
        });
    });

    // Grade description interaction
    document.querySelectorAll(".grades-container").forEach((container) => {
        const badges = container.querySelectorAll(".grade-badge");
        const panel = container.querySelector(".grade-description-panel");
        if (!badges.length || !panel) return;

        // Build map from server side injected descriptions (we rely on accessible text later)
        const productId = container
            .querySelector(".grades-list")
            ?.getAttribute("data-product-id");
        // Use inline script injection future if needed; now we fetch from global (could be improved)

        badges.forEach((badge) => {
            badge.addEventListener("click", () => {
                const isActive = badge.classList.contains("active");
                // If already active -> deselect and restore placeholder
                if (isActive) {
                    badge.classList.remove("active");
                    panel.innerHTML =
                        '<div class="grade-description-placeholder">Select a grade to view its description.</div>';
                    return;
                }
                // Activate newly clicked badge
                badges.forEach((b) => b.classList.remove("active"));
                badge.classList.add("active");
                const gradeName =
                    badge.getAttribute("data-grade-name") || "Grade";
                const mature = badge.getAttribute("data-grade-mature");
                const usage = badge.getAttribute("data-grade-usage");
                const matureLine = mature
                    ? `<div><strong>Mature:</strong> ${mature}</div>`
                    : "";
                const usageLine = usage
                    ? `<div><strong>Usage:</strong> ${usage}</div>`
                    : "";
                const body =
                    matureLine || usageLine
                        ? `${matureLine}${usageLine}`
                        : "Description coming soon.";
                panel.innerHTML = `
                    <div class="grade-description-title">${gradeName}</div>
                    <div class="grade-description-text">${body}</div>
                `;
            });
        });

        // Grade compare -> open modal overlay
        const compareToggle = container.querySelector(".grade-compare-toggle");
        if (compareToggle) {
            compareToggle.addEventListener("click", (e) => {
                e.preventDefault();
                openGradeCompareModal(container);
            });
        }
    });

    // ============================================
    // CONSOLE LOG (Optional - for debugging)
    // ============================================
    console.log("Vanilla Export Website Loaded Successfully");

    // ============================================
    // GRADE COMPARE MODAL IMPLEMENTATION
    // ============================================
    function ensureGradeModal() {
        let overlay = document.getElementById("gradeCompareModal");
        if (overlay) return overlay;
        overlay = document.createElement("div");
        overlay.id = "gradeCompareModal";
        overlay.className = "modal-overlay";
        overlay.setAttribute("aria-hidden", "true");
        overlay.innerHTML = `
            <div class="modal-dialog" role="dialog" aria-modal="true" aria-labelledby="gradeCompareModalTitle">
                <div class="modal-header">
                    <div class="modal-title" id="gradeCompareModalTitle">Compare Grades</div>
                    <button type="button" class="modal-close" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body"></div>
            </div>
        `;
        document.body.appendChild(overlay);

        // Floating close button for mobile (and usable desktop)
        const floatingClose = document.createElement("button");
        floatingClose.type = "button";
        floatingClose.className = "modal-floating-close";
        floatingClose.setAttribute("aria-label", "Close comparison");
        floatingClose.innerHTML = "&times;";
        overlay.appendChild(floatingClose);

        // Close interactions
        const closeBtn = overlay.querySelector(".modal-close");
        closeBtn.addEventListener("click", closeGradeModal);
        floatingClose.addEventListener("click", closeGradeModal);
        overlay.addEventListener("click", (ev) => {
            if (ev.target === overlay) {
                closeGradeModal();
            }
        });

        // ESC key
        document.addEventListener("keydown", (ev) => {
            if (ev.key === "Escape" && overlay.classList.contains("open")) {
                closeGradeModal();
            }
        });

        return overlay;
    }

    // Simple HTML escape to safely inject attribute/text
    function escapeHtml(str) {
        return String(str)
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }

    function openGradeCompareModal(gradesContainer) {
        const overlay = ensureGradeModal();
        const dialog = overlay.querySelector(".modal-dialog");
        const body = overlay.querySelector(".modal-body");
        const titleEl = overlay.querySelector(".modal-title");

        // Gather product title
        const card = gradesContainer.closest(".product-card");
        const productTitle =
            card?.querySelector(".product-title")?.textContent?.trim() ||
            "Product";
        titleEl.textContent = `Compare Grades — ${productTitle}`;

        // Build compact three-column table from badges data
        const badges = gradesContainer.querySelectorAll(".grade-badge");
        let html = '<div class="compare-table compact">';
        html += '<div class="compare-head">Grade</div>';
        html += '<div class="compare-head">Mature</div>';
        html += '<div class="compare-head">Usage</div>';
        badges.forEach((badge) => {
            const name = (
                badge.getAttribute("data-grade-name") ||
                badge.textContent ||
                "Grade"
            ).trim();
            const mature = badge.getAttribute("data-grade-mature") || "—";
            const usage = badge.getAttribute("data-grade-usage") || "—";
            html += `
                <div class="compare-cell name">${name}</div>
                <div class="compare-cell clamp-2" title="${escapeHtml(
                    mature
                )}">${escapeHtml(mature)}</div>
                <div class="compare-cell clamp-2" title="${escapeHtml(
                    usage
                )}">${escapeHtml(usage)}</div>
            `;
        });
        html += "</div>";
        body.innerHTML = html;

        // Open
        overlay.classList.add("open");
        overlay.setAttribute("aria-hidden", "false");
        document.body.classList.add("modal-open");

        // Focus management: move focus to floating close (preferred)
        const fClose = overlay.querySelector(".modal-floating-close");
        (fClose || overlay.querySelector(".modal-close"))?.focus?.();
    }

    function closeGradeModal() {
        const overlay = document.getElementById("gradeCompareModal");
        if (!overlay) return;
        overlay.classList.remove("open");
        overlay.setAttribute("aria-hidden", "true");
        document.body.classList.remove("modal-open");
    }
});
