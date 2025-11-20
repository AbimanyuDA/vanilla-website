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
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                    <li class="dropdown">
                        <a href="#products" class="nav-link">Products <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#vanilla-beans">Vanilla Beans</a></li>
                            <li><a href="#vanilla-derivatives">Vanilla Derivatives</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    <li class="mobile-cta-nav">
                        <a href="{{ route('contact') }}" class="btn btn-primary">Get Quote</a>
                    </li>
                </ul>
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
