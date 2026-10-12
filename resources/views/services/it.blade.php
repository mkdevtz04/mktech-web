@extends('layouts.main')

@section('title', 'IT Services & Infrastructure | Mktech')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>IT Services & Infrastructure</h1>
        <p class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; Services &raquo; IT Services</p>
    </div>
</div>

<div class="container">
    <div class="service-layout">
        <div class="service-main">
            <div class="service-media">
                <img src="{{ asset('images/mis.png') }}" alt="IT Services & Infrastructure">
            </div>

            <h2>Comprehensive Technical Support</h2>
            <p>We provide comprehensive IT infrastructure setup and maintenance to ensure your business operations run smoothly without technical interruptions. Our team of certified professionals is equipped to handle complex networking, hardware deployment, and server management.</p>

            <h3>What We Offer</h3>
            <ul class="service-features">
                <li>Network installation and secure configuration</li>
                <li>Server management & structured cloud migration</li>
                <li>Hardware deployment, diagnostics, and repairs</li>
                <li>24/7 dedicated Helpdesk support for your staff</li>
                <li>Routine data backup and disaster recovery solutions</li>
            </ul>
        </div>

        <x-service-sidebar
            current="it"
            cta-title="Ready to Upgrade Your IT?"
            cta-text="Contact us today to schedule an initial consultation and site survey for your office."
            cta-label="Get a Quote"
        />
    </div>
</div>
@endsection
