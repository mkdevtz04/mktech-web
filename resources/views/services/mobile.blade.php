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
