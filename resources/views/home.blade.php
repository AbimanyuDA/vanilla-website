@extends('layouts.app')

@section('title', 'Premium Indonesian Vanilla Export | Vanilla Planifolia & Tahitensis')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <!-- Hero Background Slideshow -->
    <div class="hero-slideshow">
        <div class="hero-slide active" style="background-image: url('{{ asset('images/hero/Vanilla Beans (14).png') }}');"></div>
        <div class="hero-slide" style="background-image: url('{{ asset('images/hero/Vanilla Beans (3).png') }}');"></div>
        <div class="hero-slide" style="background-image: url('{{ asset('images/hero/Vanilla Beans (8).png') }}');"></div>
        <div class="hero-slide" style="background-image: url('{{ asset('images/hero/Pohon Vanilla (3).jpg') }}');"></div>
        <div class="hero-slide" style="background-image: url('{{ asset('images/hero/Buah Vanilla.png') }}');"></div>
    </div>
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
            <div class="feature-card scroll-fade-left">
                <div class="feature-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Certified Quality</h3>
                <p>International quality standards and organic certifications</p>
            </div>
            <div class="feature-card scroll-fade-up">
                <div class="feature-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>Sustainable</h3>
                <p>Ethically sourced from local Indonesian farmers</p>
            </div>
            <div class="feature-card scroll-fade-right">
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
        <div class="section-header center scroll-fade-up">
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

<!-- Products Section with Filter Tabs -->
<section class="products-section" id="products">
    <div class="container-wide">
        <!-- Section Header -->
        <div class="section-header center scroll-fade-up">
            <p class="section-subtitle">Our Premium Collection</p>
            <h2 class="section-title">Vanilla Products</h2>
            <div class="section-divider"></div>
            <p class="section-description">
                Premium vanilla beans and derivatives sourced directly from the finest Indonesian vanilla plantations.
            </p>
        </div>

        <!-- Product Filter Tabs -->
        <div class="product-filter-tabs scroll-fade-up">
            <button class="filter-tab active" data-category="all">
                <i class="fas fa-th"></i> All Products
            </button>
            <button class="filter-tab" data-category="vanilla-beans">
                <i class="fas fa-seedling"></i> Vanilla Beans
            </button>
            <button class="filter-tab" data-category="planifolia">
                <i class="fas fa-leaf"></i> Planifolia
            </button>
            <button class="filter-tab" data-category="tahitensis">
                <i class="fas fa-spa"></i> Tahitensis
            </button>
            <button class="filter-tab" data-category="derivatives">
                <i class="fas fa-flask"></i> Derivatives
            </button>
        </div>

        <!-- Products Grid Wrapper -->
        <div class="products-grid-wrapper">
            <div class="scroll-hint product-scroll-hint-left">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="products-grid" id="productsGrid">
                @foreach($products as $product)
                <div class="product-card scroll-scale" 
                     data-category="{{ strtolower(str_replace(' ', '-', $product['name'])) }}"
                     data-type="{{ $product['category'] }}"
                     data-product-id="{{ $product['id'] }}">
                    @php
                        // Pre-parse features early for HS Code overlay
                        $grades = [];
                        $hsCode = null;
                        $others = [];
                        $specs = [];
                        $highlightSpecs = $product['highlight_specs'] ?? [];
                        $gradeDescriptions = $product['grade_descriptions'] ?? [];
                        $parsedHighlights = [];
                        foreach($product['features'] as $feature) {
                            if(str_contains($feature, 'HS Code')) {
                                $hsCode = $feature; // full string e.g. HS Code: 0905.10
                            } elseif(in_array(trim($feature), ['Gourmet Grade','Grade A','Grade B','Grade C'])) {
                                // Only treat explicit bean grade tokens as grades; avoid false positives like 'Food-Grade'
                                $grades[] = trim($feature);
                            } else {
                                if(str_contains($feature, ':')) {
                                    [$label, $value] = explode(':', $feature, 2);
                                    $entry = [ 'label' => trim($label), 'value' => trim($value) ];
                                    if(in_array(trim($label), $highlightSpecs)) {
                                        $parsedHighlights[] = $entry;
                                    } else {
                                        $specs[] = $entry;
                                    }
                                } else {
                                    $others[] = $feature;
                                }
                            }
                        }
                    @endphp
                    <div class="product-image-wrapper">
                        @if($product['category'] === 'vanilla-beans')
                            <div class="product-badge">Premium</div>
                        @elseif($product['id'] === 5 || $product['id'] === 9)
                            <div class="product-badge halal">Halal Certified</div>
                        @endif
                        @if($hsCode)
                            <div class="hs-code-badge" title="Harmonized System Classification"><i class="fas fa-barcode"></i>{{ str_replace('HS Code:', '', $hsCode) }}</div>
                        @endif
                        
                        @if(isset($product['images']) && count($product['images']) > 1)
                            <div class="product-image-slideshow">
                                @foreach($product['images'] as $index => $image)
                                    <div class="product-image-slide {{ $index === 0 ? 'active' : '' }}">
                                        <img src="{{ asset($image) }}" alt="{{ $product['name'] }} - Image {{ $index + 1 }}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="product-image-indicators">
                                @foreach($product['images'] as $index => $image)
                                    <span class="product-image-indicator {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}"></span>
                                @endforeach
                            </div>
                        @else
                            <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="product-image">
                        @endif
                    </div>
                    <div class="product-content">
                        @if($product['category'] !== 'derivatives')
                            <p class="product-category">{{ $product['scientific_name'] }}</p>
                        @endif
                        <h3 class="product-title">{{ $product['name'] }}</h3>
                        <p class="product-description">{{ $product['description'] }}</p>
                        <ul class="product-features">
                            @foreach($others as $other)
                                <li><i class="fas fa-check"></i> {{ $other }}</li>
                            @endforeach
                        </ul>

                        @if(count($parsedHighlights) > 0)
                            <div class="spec-highlights">
                                @foreach($parsedHighlights as $hl)
                                    <div class="spec-chip">
                                        <span class="chip-label">{{ $hl['label'] }}</span>
                                        <span class="chip-value">{{ $hl['value'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if(count($specs) > 0)
                            <div class="specs-collapsible" data-collapsed="true">
                                <button type="button" class="specs-toggle" aria-expanded="false">Details <i class="fas fa-chevron-down"></i></button>
                                <div class="specs-body">
                                    @foreach($specs as $spec)
                                        @php
                                            $isLongSpec = in_array($spec['label'], ['Condition', 'Best Use']) && strlen($spec['value']) > 80;
                                        @endphp
                                        <div class="product-spec-row {{ $isLongSpec ? 'spec-full-width' : '' }}">
                                            <div class="spec-label">{{ $spec['label'] }}</div>
                                            <div class="spec-value">{{ $spec['value'] }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        
                        @if(count($grades) > 0)
                            <div class="grades-container">
                                @php 
                                    $firstGrade = $grades[0] ?? null;
                                    $firstDesc = $firstGrade ? ($gradeDescriptions[$firstGrade] ?? null) : null;
                                    $isSimpleDescription = $firstDesc && isset($firstDesc['description']) && !isset($firstDesc['mature']);
                                @endphp
                                
                                @if($isSimpleDescription)
                                    {{-- Simple description for derivatives --}}
                                    <span class="grades-label"><i class="fas fa-award"></i> {{ $firstGrade }}:</span>
                                    <div class="grade-description-panel" style="display: block; margin-top: 0.5rem;">
                                        <p style="margin: 0;">{{ $firstDesc['description'] }}</p>
                                    </div>
                                @else
                                    {{-- Full grade system for vanilla beans --}}
                                    <span class="grades-label"><i class="fas fa-award"></i> Grades:</span>
                                    <div class="grades-list" data-product-id="{{ $product['id'] }}">
                                        @foreach($grades as $grade)
                                            @php $gdesc = $gradeDescriptions[$grade] ?? null; @endphp
                                            <span class="grade-badge" data-grade-name="{{ $grade }}"
                                                  @if($gdesc && isset($gdesc['mature']))
                                                    data-grade-mature="{{ e($gdesc['mature']) }}"
                                                    data-grade-usage="{{ e($gdesc['usage']) }}"
                                                  @endif
                                            ><i class="fas fa-star"></i> {{ $grade }}</span>
                                        @endforeach
                                    </div>
                                    @if(count($gradeDescriptions) > 0)
                                        <div class="grade-description-panel" aria-live="polite">
                                            <div class="grade-description-placeholder">Select a grade to view its description.</div>
                                        </div>
                                        <div class="grade-compare" data-collapsed="true">
                                            <button type="button" class="grade-compare-toggle" aria-expanded="false"><i class="fas fa-balance-scale"></i> Compare Grades</button>
                                            <div class="grade-compare-body">
                                                @foreach($gradeDescriptions as $gName => $g)
                                                    @if(isset($g['mature']) && isset($g['usage']))
                                                        <div class="grade-compare-row">
                                                            <div class="grade-compare-name">{{ $gName }}</div>
                                                            <div class="grade-compare-specs">
                                                                <div><strong>Mature:</strong> {{ $g['mature'] }}</div>
                                                                <div><strong>Usage:</strong> {{ $g['usage'] }}</div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        @endif
                        
                        <ul class="product-features" style="display: none;">
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn-outline-small">Inquiry</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="scroll-hint product-scroll-hint-right">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-header center scroll-fade-down">
            <p class="section-subtitle">Why Choose Us</p>
            <h2 class="section-title">Your Trusted Vanilla Partner</h2>
            <div class="section-divider"></div>
        </div>

        <div class="why-choose-grid">
            @foreach($whyChooseUs as $item)
            <div class="why-card scroll-scale">
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
<section class="cta-section" style="background-image: url('{{ asset('images/hero/Pohon Vanilla (3).jpg') }}');">
    <div class="cta-overlay"></div>
    <div class="container">
        <div class="cta-content scroll-fade-in">
            <h2 class="cta-title">Ready to Order?</h2>
            <p class="cta-subtitle">Contact us for wholesale pricing and bulk orders</p>
            <div class="cta-buttons">
                <a href="{{ route('contact') }}" class="btn btn-white">Get in Touch</a>
                <a href="https://wa.me/6285853669568" class="btn btn-outline-white">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header center scroll-fade-down">
            <p class="section-subtitle">Frequently Asked Questions</p>
            <h2 class="section-title">Common Questions About Our Vanilla</h2>
            <div class="section-divider"></div>
        </div>

        <div class="faq-grid">
            <div class="faq-column">
                <div class="faq-item scroll-fade-left">
                    <h4 class="faq-question">What is your minimum order quantity?</h4>
                    <p class="faq-answer">Our minimum order quantity varies by product. Please contact us for specific MOQ requirements based on your needs.</p>
                </div>
                <div class="faq-item scroll-fade-left">
                    <h4 class="faq-question">Do you offer organic certification?</h4>
                    <p class="faq-answer">Yes, we offer organic certified vanilla beans upon request. Please specify your certification requirements when inquiring.</p>
                </div>
            </div>
            <div class="faq-column">
                <div class="faq-item scroll-fade-right">
                    <h4 class="faq-question">What are your payment terms?</h4>
                    <p class="faq-answer">We accept various payment methods including T/T, L/C, and other international payment options. Terms can be discussed based on order size.</p>
                </div>
                <div class="faq-item scroll-fade-right">
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
