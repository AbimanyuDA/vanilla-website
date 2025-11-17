@extends('layouts.app')

@section('title', 'Premium Indonesian Vanilla Export | Vanilla Planifolia & Tahitensis')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background-image: url('{{ asset('images/hero/vanilla-hero.jpg') }}');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <p class="hero-subtitle">Indonesian Premium Quality</p>
            <h1 class="hero-title">
                <span class="hero-title-highlight">Vanilla Bean</span>
                <span class="hero-title-main">Export</span>
            </h1>
            <p class="hero-description">
                Direct from Indonesian farms to your business. Premium quality vanilla beans 
                and derivatives for global markets.
            </p>
            <div class="hero-buttons">
                <a href="#products" class="btn btn-primary">View Products</a>
                <a href="{{ route('contact') }}" class="btn btn-outline">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Certified Quality</h3>
                <p>International quality standards and organic certifications</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>Sustainable</h3>
                <p>Ethically sourced from local Indonesian farmers</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <h3>Global Shipping</h3>
                <p>Reliable worldwide delivery with proper packaging</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="section-header center">
            <p class="section-subtitle">Our Story</p>
            <h2 class="section-title">Premium Vanilla from Indonesia</h2>
            <div class="section-divider"></div>
            <p class="section-description">
                We are dedicated to bringing the finest Indonesian vanilla to the world. 
                With years of experience and direct relationships with farmers, we ensure 
                every bean meets the highest quality standards.
            </p>
            <a href="{{ route('about') }}" class="btn btn-primary">Learn More</a>
        </div>
    </div>
</section>

<!-- Products Section - Vanilla Beans -->
<section class="products-section" id="vanilla-beans">
    <div class="container-wide">
        <div class="products-intro">
            <div class="products-image">
                <img src="{{ asset('images/hero/vanilla-hero-2.jpg') }}" alt="Vanilla Beans">
            </div>
            <div class="products-content">
                <p class="section-subtitle">Our Premium Collection</p>
                <h2 class="section-title">Vanilla Beans</h2>
                <div class="section-divider"></div>
                <p class="section-description">
                    Premium vanilla beans sourced directly from the finest Indonesian vanilla plantations. 
                    We offer two exceptional varieties, each with unique characteristics perfect for 
                    different culinary applications.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary">Request Quote</a>
            </div>
        </div>

        <div class="products-grid">
            @foreach($products as $product)
                @if($product['category'] === 'vanilla-beans')
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <div class="product-badge">Premium</div>
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="product-image">
                    </div>
                    <div class="product-content">
                        <p class="product-category">{{ $product['scientific_name'] }}</p>
                        <h3 class="product-title">{{ $product['name'] }}</h3>
                        <p class="product-description">{{ $product['description'] }}</p>
                        <ul class="product-features">
                            @foreach($product['features'] as $feature)
                            <li><i class="fas fa-check"></i> {{ $feature }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn-outline-small">Inquiry</a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>

<!-- Products Section - Derivatives -->
<section class="products-section products-section-alt" id="derivatives">
    <div class="container-wide">
        <div class="products-intro reverse">
            <div class="products-content">
                <p class="section-subtitle">Value-Added Products</p>
                <h2 class="section-title">Vanilla Derivative Products</h2>
                <div class="section-divider"></div>
                <p class="section-description">
                    High-quality vanilla derivatives processed from premium Vanilla Planifolia Andrews. 
                    Perfect for food manufacturers, bakeries, and culinary professionals worldwide.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary">Get Catalog</a>
            </div>
            <div class="products-image">
                <img src="{{ asset('images/hero/vanilla-hero-3.jpg') }}" alt="Vanilla Products">
            </div>
        </div>

        <div class="products-grid">
            @foreach($products as $product)
                @if($product['category'] === 'derivatives')
                <div class="product-card">
                    <div class="product-image-wrapper">
                        @if($product['id'] === 5)
                        <div class="product-badge halal">Halal Certified</div>
                        @endif
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="product-image">
                    </div>
                    <div class="product-content">
                        <p class="product-category">{{ $product['scientific_name'] }}</p>
                        <h3 class="product-title">{{ $product['name'] }}</h3>
                        <p class="product-description">{{ $product['description'] }}</p>
                        <ul class="product-features">
                            @foreach($product['features'] as $feature)
                            <li><i class="fas fa-check"></i> {{ $feature }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn-outline-small">Inquiry</a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-header center">
            <p class="section-subtitle">Why Choose Us</p>
            <h2 class="section-title">Your Trusted Vanilla Partner</h2>
            <div class="section-divider"></div>
        </div>

        <div class="why-choose-grid">
            @foreach($whyChooseUs as $item)
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas {{ $item['icon'] }}"></i>
                </div>
                <h3>{{ $item['title'] }}</h3>
                <p>{{ $item['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="background-image: url('{{ asset('images/hero/vanilla-hero.jpg') }}');">
    <div class="cta-overlay"></div>
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Order?</h2>
            <p class="cta-subtitle">Contact us for wholesale pricing and bulk orders</p>
            <div class="cta-buttons">
                <a href="{{ route('contact') }}" class="btn btn-white">Get in Touch</a>
                <a href="https://wa.me/628123456789" class="btn btn-outline-white">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header center">
            <p class="section-subtitle">Frequently Asked Questions</p>
            <h2 class="section-title">Common Questions About Our Vanilla</h2>
            <div class="section-divider"></div>
        </div>

        <div class="faq-grid">
            <div class="faq-column">
                <div class="faq-item">
                    <h4 class="faq-question">What is your minimum order quantity?</h4>
                    <p class="faq-answer">Our minimum order quantity varies by product. Please contact us for specific MOQ requirements based on your needs.</p>
                </div>
                <div class="faq-item">
                    <h4 class="faq-question">Do you offer organic certification?</h4>
                    <p class="faq-answer">Yes, we offer organic certified vanilla beans upon request. Please specify your certification requirements when inquiring.</p>
                </div>
            </div>
            <div class="faq-column">
                <div class="faq-item">
                    <h4 class="faq-question">What are your payment terms?</h4>
                    <p class="faq-answer">We accept various payment methods including T/T, L/C, and other international payment options. Terms can be discussed based on order size.</p>
                </div>
                <div class="faq-item">
                    <h4 class="faq-question">How long does shipping take?</h4>
                    <p class="faq-answer">Delivery time depends on your location and shipping method. Typically, it takes 7-21 business days for international shipments.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Mobile menu toggle
    const mobileToggle = document.getElementById('mobileToggle');
    const mainNav = document.getElementById('mainNav');
    
    if (mobileToggle) {
        mobileToggle.addEventListener('click', () => {
            mainNav.classList.toggle('active');
            mobileToggle.classList.toggle('active');
        });
    }

    // Header scroll effect
    window.addEventListener('scroll', () => {
        const header = document.getElementById('header');
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>
@endpush
