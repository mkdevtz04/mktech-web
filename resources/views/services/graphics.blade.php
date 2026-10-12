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

            <h3>How We Work</h3>
            <ol class="process-steps">
                <li class="process-step">
                    <span class="process-step-index">01</span>
                    <div class="process-step-body">
                        <h4>Brief</h4>
                        <p>Understand your brand, audience, and what the materials need to communicate.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">02</span>
                    <div class="process-step-body">
                        <h4>Concept</h4>
                        <p>Initial design directions and drafts for your feedback.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">03</span>
                    <div class="process-step-body">
                        <h4>Refine</h4>
                        <p>Revise based on your input until the direction is right.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">04</span>
                    <div class="process-step-body">
                        <h4>Finalize</h4>
                        <p>Deliver production-ready files in the formats you need.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">05</span>
                    <div class="process-step-body">
                        <h4>Support</h4>
                        <p>Available for future materials as your brand evolves.</p>
                    </div>
                </li>
            </ol>
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
