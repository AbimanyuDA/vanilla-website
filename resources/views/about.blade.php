@extends('layouts.app')

@section('title', 'About Us | Premium Indonesian Vanilla Export')

@section('content')
<!-- Page Header -->
<section class="page-header" style="background-image: url('{{ asset('images/hero/vanilla-hero-2.jpg') }}'); background-size: cover; background-position: center; padding: 120px 0 60px; position: relative;">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(65, 40, 27, 0.7);"></div>
    <div class="container" style="position: relative; z-index: 1; text-align: center;">
        <h1 style="font-size: 48px; color: #FFFFFF; margin-bottom: 10px;">About Us</h1>
        <p style="color: #FFDD79; font-size: 18px;">Learn more about our vanilla export business</p>
    </div>
</section>

<!-- About Content -->
<section class="about-section">
    <div class="container">
        <div class="section-header center scroll-fade-up">
            <p class="section-subtitle">Our Story</p>
            <h2 class="section-title">Premium Indonesian Vanilla Export</h2>
            <div class="section-divider"></div>
            <p class="section-description">
                We are a leading Indonesian vanilla exporter specializing in premium quality 
                vanilla beans and derivatives. With years of experience and direct partnerships 
                with local farmers, we bring the finest Indonesian vanilla to global markets.
            </p>
            <p class="section-description">
                Our commitment to quality, sustainability, and customer satisfaction has made us 
                a trusted partner for businesses worldwide. We work closely with certified organic 
                farms to ensure every product meets international standards.
            </p>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="why-choose-section">
    <div class="container">
        <div class="why-choose-grid">
            <div class="why-card scroll-fade-left">
                <div class="why-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3>Our Mission</h3>
                <p>To provide premium quality Indonesian vanilla to global markets while supporting local farming communities</p>
            </div>
            <div class="why-card scroll-scale">
                <div class="why-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <h3>Our Vision</h3>
                <p>To become the most trusted vanilla exporter from Indonesia, recognized for quality and sustainability</p>
            </div>
            <div class="why-card scroll-fade-right">
                <div class="why-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Our Values</h3>
                <p>Quality, integrity, sustainability, and partnership in everything we do</p>
            </div>
        </div>
    </div>
</section>
@endsection
