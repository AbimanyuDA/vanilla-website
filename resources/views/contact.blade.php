@extends('layouts.app')

@section('title', 'Contact Us | Indonesian Vanilla Export')

@section('content')
<!-- Page Header -->
<section class="page-header" style="background-image: url('{{ asset('images/hero/vanilla-hero-3.jpg') }}'); background-size: cover; background-position: center; padding: 120px 0 60px; position: relative;">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(65, 40, 27, 0.7);"></div>
    <div class="container" style="position: relative; z-index: 1; text-align: center;">
        <h1 style="font-size: 48px; color: #FFFFFF; margin-bottom: 10px;">Contact Us</h1>
        <p style="color: #FFDD79; font-size: 18px;">Get in touch for wholesale inquiries and partnerships</p>
    </div>
</section>

<!-- Contact Section -->
<section class="about-section">
    <div class="container">
        <div class="section-header center">
            <p class="section-subtitle">Get In Touch</p>
            <h2 class="section-title">Let's Talk About Your Vanilla Needs</h2>
            <div class="section-divider"></div>
            <p class="section-description">
                We're here to answer your questions about our premium Indonesian vanilla products. 
                Whether you're looking for bulk orders, custom packaging, or specific certifications, 
                our team is ready to assist you.
            </p>
        </div>

        <!-- Contact Info Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 60px;">
            <!-- Email -->
            <div style="background-color: #F29923; padding: 30px; border-radius: 10px; text-align: center;">
                <div style="width: 70px; height: 70px; margin: 0 auto 20px; background-color: #FFDD79; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fas fa-envelope" style="font-size: 32px; color: #41281B;"></i>
                </div>
                <h3 style="color: #FFFFFF; margin-bottom: 10px; font-size: 24px;">Email Us</h3>
                <p style="color: #FFFFFF; font-size: 16px;">export@vanillaindonesia.com</p>
                <a href="mailto:export@vanillaindonesia.com" class="btn btn-outline" style="margin-top: 15px;">Send Email</a>
            </div>

            <!-- Phone -->
            <div style="background-color: #F29923; padding: 30px; border-radius: 10px; text-align: center;">
                <div style="width: 70px; height: 70px; margin: 0 auto 20px; background-color: #FFDD79; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fas fa-phone" style="font-size: 32px; color: #41281B;"></i>
                </div>
                <h3 style="color: #FFFFFF; margin-bottom: 10px; font-size: 24px;">Call Us</h3>
                <p style="color: #FFFFFF; font-size: 16px;">+62 812 3456 7890</p>
                <a href="tel:+628123456789" class="btn btn-outline" style="margin-top: 15px;">Call Now</a>
            </div>

            <!-- WhatsApp -->
            <div style="background-color: #F29923; padding: 30px; border-radius: 10px; text-align: center;">
                <div style="width: 70px; height: 70px; margin: 0 auto 20px; background-color: #FFDD79; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fab fa-whatsapp" style="font-size: 32px; color: #41281B;"></i>
                </div>
                <h3 style="color: #FFFFFF; margin-bottom: 10px; font-size: 24px;">WhatsApp</h3>
                <p style="color: #FFFFFF; font-size: 16px;">Quick Response</p>
                <a href="https://wa.me/628123456789" target="_blank" class="btn btn-outline" style="margin-top: 15px;">Chat Now</a>
            </div>
        </div>

        <!-- Additional Info -->
        <div style="margin-top: 60px; text-align: center; max-width: 800px; margin-left: auto; margin-right: auto;">
            <h3 style="font-size: 28px; color: #F29923; margin-bottom: 20px;">Business Hours</h3>
            <p style="font-size: 18px; color: #41281B; margin-bottom: 10px;">Monday - Friday: 9:00 AM - 6:00 PM (GMT+7)</p>
            <p style="font-size: 18px; color: #41281B;">Saturday: 9:00 AM - 1:00 PM (GMT+7)</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="background-image: url('{{ asset('images/hero/vanilla-hero.jpg') }}');">
    <div class="cta-overlay"></div>
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Place an Order?</h2>
            <p class="cta-subtitle">Request a quote for wholesale pricing</p>
            <div class="cta-buttons">
                <a href="mailto:export@vanillaindonesia.com" class="btn btn-white">Request Quote</a>
                <a href="https://wa.me/628123456789" class="btn btn-outline-white">
                    <i class="fab fa-whatsapp"></i> WhatsApp Us
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
