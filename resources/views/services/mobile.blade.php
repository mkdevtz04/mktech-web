@extends('layouts.main')

@section('title', 'Mobile App Development | Mktech')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Mobile Application Development</h1>
        <p class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; Services &raquo; Mobile Apps</p>
    </div>
</div>

<div class="container">
    <div class="service-layout">
        <div class="service-main">
            <div class="service-media">
                <img src="{{ asset('images/mob.png') }}" alt="Mobile Application Development">
            </div>

            <h2>Reaching Your Customers Everywhere</h2>
            <p>In a mobile-first world, your business needs to be accessible from a user's pocket. We create secure and user-friendly mobile applications for both Android and iOS devices, streamlining accessibility for your customers and driving engagement.</p>

            <h3>Mobile Tech Capabilities</h3>
            <ul class="service-features">
                <li>Native iOS & Android App Development</li>
                <li>Cross-Platform Applications (Flutter / React Native)</li>
                <li>Enterprise Mobility & Internal Tooling Apps</li>
                <li>Mobile App UI/UX Design & Prototyping</li>
                <li>App Store Deployment and Ongoing Maintenance</li>
            </ul>

            <h3>How We Work</h3>
            <ol class="process-steps">
                <li class="process-step">
                    <span class="process-step-index">01</span>
                    <div class="process-step-body">
                        <h4>Discover</h4>
                        <p>Define the app's core features and who it's built for.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">02</span>
                    <div class="process-step-body">
                        <h4>Design</h4>
                        <p>Prototype the UI/UX before development begins.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">03</span>
                    <div class="process-step-body">
                        <h4>Build</h4>
                        <p>Develop for Android, iOS, or cross-platform, depending on your needs.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">04</span>
                    <div class="process-step-body">
                        <h4>Test</h4>
                        <p>QA across real devices to catch issues before release.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">05</span>
                    <div class="process-step-body">
                        <h4>Launch & Support</h4>
                        <p>App store deployment, then ongoing updates and maintenance.</p>
                    </div>
                </li>
            </ol>
        </div>

        <x-service-sidebar
            current="mobile"
            cta-title="Have an App Idea?"
            cta-text="Let's turn your concept into a profitable, scalable mobile application."
            cta-label="Discuss Your App"
        />
    </div>
</div>
@endsection
