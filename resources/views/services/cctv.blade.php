@extends('layouts.main')

@section('title', 'CCTV & Security | Mktech')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>CCTV Camera & Security Gadgets</h1>
        <p class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; Services &raquo; CCTV & Security</p>
    </div>
</div>

<div class="container">
    <div class="service-layout">
        <div class="service-main">
            <div class="service-media">
                <img src="{{ asset('images/cctv.png') }}" alt="CCTV Camera & Security Gadgets">
            </div>

            <h2>Protecting Your Physical Assets</h2>
            <p>Physical security is just as important as digital security. We offer professional installation of CCTV systems, biometric access controls, and modern security gadgets to protect your physical premises, employees, and assets 24/7.</p>

            <h3>Security Solutions</h3>
            <ul class="service-features">
                <li>High-Definition IP CCTV Camera Installation</li>
                <li>Biometric and Keycard Access Control Systems</li>
                <li>Smart Intruder Alarm Systems & Sensors</li>
                <li>Remote Monitoring Setup via Web and Mobile</li>
                <li>Routine Security Maintenance and Upgrades</li>
            </ul>
        </div>

        <x-service-sidebar
            current="cctv"
            cta-title="Secure Your Premises"
            cta-text="Contact us today to get a free security audit and installation estimate."
            cta-label="Request Audit"
        />
    </div>
</div>
@endsection
