@extends('layouts.main')

@section('content')
    <!-- White Hero Section with Black Text -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Professional Technology & Security Solutions</h1>
                <p>Mktech is your trusted agency for website development, IT infrastructure, graphic design, and CCTV security installations. Reliable, effective, and built for businesses.</p>
                <div class="hero-actions">
                    <a href="#services" class="btn btn-primary">Our Services</a>
                    <a href="#contact" class="btn btn-outline">Contact Us</a>
                </div>
            </div>
            <!-- Simple placeholder representing an image on the right -->
            <div class="hero-image-box">
                [ Professional Technology Image ]
            </div>
        </div>
    </section>

    <!-- White Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">What We Do</h2>
            <div class="services-grid">
                
                <div class="service-card" onclick="window.location='{{ route('services.it') }}'" style="cursor: pointer;">
                    <div class="service-icon">💻</div>
                    <h3>IT Services</h3>
                    <p>Complete IT infrastructure setup and maintenance. We manage networks, hardware, and provide dedicated technical support for your office.</p>
                    <a href="{{ route('services.it') }}" style="color: #1e3a8a; font-weight: bold; display: inline-block; margin-top: 10px;">Learn more &rarr;</a>
                </div>

                <div class="service-card" onclick="window.location='{{ route('services.graphics') }}'" style="cursor: pointer;">
                    <div class="service-icon">🎨</div>
                    <h3>Graphics Design</h3>
                    <p>Corporate branding, logo creation, and promotional materials designed to give your business a polished and professional look.</p>
                    <a href="{{ route('services.graphics') }}" style="color: #1e3a8a; font-weight: bold; display: inline-block; margin-top: 10px;">Learn more &rarr;</a>
                </div>

                <div class="service-card" onclick="window.location='{{ route('services.web') }}'" style="cursor: pointer;">
                    <div class="service-icon">🌐</div>
                    <h3>Website Development</h3>
                    <p>Standard, responsive web applications built with reliability in mind to serve your clients and manage your operations smoothly.</p>
                    <a href="{{ route('services.web') }}" style="color: #1e3a8a; font-weight: bold; display: inline-block; margin-top: 10px;">Learn more &rarr;</a>
                </div>

                <div class="service-card" onclick="window.location='{{ route('services.mobile') }}'" style="cursor: pointer;">
                    <div class="service-icon">📱</div>
                    <h3>Mobile App Development</h3>
                    <p>Secure and user-friendly mobile applications for Android and iOS devices, streamlining accessibility for your customers.</p>
                    <a href="{{ route('services.mobile') }}" style="color: #1e3a8a; font-weight: bold; display: inline-block; margin-top: 10px;">Learn more &rarr;</a>
                </div>

                <div class="service-card" onclick="window.location='{{ route('services.cctv') }}'" style="cursor: pointer;">
                    <div class="service-icon">📷</div>
                    <h3>CCTV Camera & Security</h3>
                    <p>Professional installation of CCTV systems, access controls, and modern security gadgets to protect your physical premises.</p>
                    <a href="{{ route('services.cctv') }}" style="color: #1e3a8a; font-weight: bold; display: inline-block; margin-top: 10px;">Learn more &rarr;</a>
                </div>

                <div class="service-card" style="background-color: #1e3a8a; border: none;">
                    <h3 style="color: #ffffff; margin-top: 15px;">Need a Custom Service?</h3>
                    <p style="color: #ffffff; margin-bottom: 25px;">We offer tailored technology solutions for your unique business requirements.</p>
                    <a href="#contact" style="color: #ffffff; font-weight: bold; text-decoration: underline;">Reach out to us &rarr;</a>
                </div>

            </div>
        </div>
    </section>
@endsection
