@extends('layouts.main')

@section('title', 'Website Development | Mktech')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Website Development</h1>
        <p class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; Services &raquo; Website Development</p>
    </div>
</div>

<div class="container">
    <div class="service-layout">
        <div class="service-main">
            <div class="service-media">
                <img src="{{ asset('images/web.png') }}" alt="Website Development">
            </div>

            <h2>Standard & Custom Web Solutions</h2>
            <p>A website is the digital storefront of your business. We engineer standard, highly responsive web applications built with performance, security, and reliability in mind. From landing pages to enterprise-level web systems, we help manage your operations smoothly.</p>

            <h3>What We Build</h3>
            <ul class="service-features">
                <li>Custom Corporate Websites and Landing Pages</li>
                <li>E-Commerce and Online Store Platforms</li>
                <li>Content Management Systems (CMS) Development</li>
                <li>Web Portals & Custom CRM Integrations</li>
                <li>SEO Optimization & Website Security Audits</li>
            </ul>

            <h3>How We Work</h3>
            <ol class="process-steps">
                <li class="process-step">
                    <span class="process-step-index">01</span>
                    <div class="process-step-body">
                        <h4>Discover</h4>
                        <p>Understand your business, audience, and what the site needs to do.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">02</span>
                    <div class="process-step-body">
                        <h4>Design</h4>
                        <p>Wireframe and design the layout and look before any code is written.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">03</span>
                    <div class="process-step-body">
                        <h4>Build</h4>
                        <p>Develop the site with performance and security built in from the start.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">04</span>
                    <div class="process-step-body">
                        <h4>Test</h4>
                        <p>QA across devices and browsers, fixing issues before launch.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">05</span>
                    <div class="process-step-body">
                        <h4>Launch & Support</h4>
                        <p>Go live, then ongoing updates and security monitoring.</p>
                    </div>
                </li>
            </ol>
        </div>

        <x-service-sidebar
            current="web"
            cta-title="Need a Reliable Website?"
            cta-text="Reach out today, and let's establish a powerful online presence that drives sales."
            cta-label="Start Your Project"
        />
    </div>
</div>
@endsection
