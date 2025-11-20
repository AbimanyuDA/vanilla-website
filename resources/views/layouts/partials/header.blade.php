<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-content">
            <div class="contact-info">
                <span><i class="fas fa-envelope"></i> info@vanillaroyal.id</span>
                <span><i class="fas fa-phone"></i> +62 858 5366 9568</span>
            </div>
            <div class="social-links">
                <a href="https://instagram.com/vanillaroyal.id" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/6285853669568" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="main-header" id="header">
    <div class="container">
        <div class="header-content">
            <!-- Logo -->
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="Vanilla Export Logo">
                </a>
            </div>

            <!-- Overlay for mobile menu -->
            <div class="menu-overlay" id="menuOverlay"></div>

            <!-- Navigation -->
            <nav class="main-nav" id="mainNav">
                <!-- Mobile Menu Header dengan Logo -->
                <div class="mobile-menu-header">
                    <div class="mobile-logo-wrapper">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="Vanilla Royal Logo">
                    </div>
                </div>
                
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                    <li><a href="#products" class="nav-link">Products</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    <li class="mobile-cta-nav">
                        <a href="{{ route('contact') }}" class="btn btn-primary">Get Quote</a>
                    </li>
                </ul>
                
                <!-- Mobile Menu Footer Info -->
                <div class="mobile-menu-footer">
                    <div class="mobile-menu-contact">
                        <div class="mobile-menu-item">
                            <i class="fas fa-envelope"></i>
                            <span>info@vanillaroyal.id</span>
                        </div>
                        <div class="mobile-menu-item">
                            <i class="fas fa-phone"></i>
                            <span>+62 858 5366 9568</span>
                        </div>
                        <div class="mobile-menu-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Central Java, Indonesia</span>
                        </div>
                    </div>
                    <div class="mobile-menu-social">
                        <a href="https://instagram.com/vanillaroyal.id" target="_blank" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/6285853669568" target="_blank" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </nav>

            <!-- CTA Button Desktop -->
            <div class="header-cta header-cta-desktop">
                <a href="{{ route('contact') }}" class="btn btn-primary">Get Quote</a>
            </div>

            <!-- Mobile Toggle -->
            <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation" style="min-width:48px;min-height:48px;">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
