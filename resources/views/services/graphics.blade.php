@extends('layouts.main')

@section('title', 'Graphics Design | Mktech')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Graphics Design</h1>
        <p class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; Services &raquo; Graphics Design</p>
    </div>
</div>

<div class="container">
    <div class="service-layout">
        <div class="service-main">
            <div class="service-media">
                <img src="{{ asset('images/design.png') }}" alt="Graphics Design">
            </div>

            <h2>Visual Identities Built to Last</h2>
            <p>Good design isn't just about making things look pretty—it's about communicating your brand's unique value clearly. We handle everything from logo creation and corporate branding to promotional materials that give your business a polished and professional look.</p>

            <h3>Our Design Expertise</h3>
            <ul class="service-features">
                <li>Custom Logo Design & Brand Identity Packages</li>
                <li>Marketing Materials (Brochures, Flyers, Business Cards)</li>
                <li>Social Media Graphics and Banners</li>
                <li>UI/UX Design for Web and Mobile Interfaces</li>
                <li>Product Packaging and Labeling Design</li>
            </ul>
        </div>

        <x-service-sidebar
            current="graphics"
            cta-title="Transform Your Brand"
            cta-text="Let our creative team craft visual assets that make a lasting impression."
            cta-label="Talk to a Designer"
        />
    </div>
</div>
@endsection
