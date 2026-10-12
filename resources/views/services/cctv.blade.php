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

            <h3>How We Work</h3>
            <ol class="process-steps">
                <li class="process-step">
                    <span class="process-step-index">01</span>
                    <div class="process-step-body">
                        <h4>Site Survey</h4>
                        <p>Assess your premises to identify coverage needs and blind spots.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">02</span>
                    <div class="process-step-body">
                        <h4>Plan</h4>
                        <p>Propose camera placement, equipment, and access control setup.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">03</span>
                    <div class="process-step-body">
                        <h4>Install</h4>
                        <p>Professional installation with minimal disruption to your operations.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">04</span>
                    <div class="process-step-body">
                        <h4>Test</h4>
                        <p>Verify footage quality, coverage, and remote access before handoff.</p>
                    </div>
                </li>
                <li class="process-step">
                    <span class="process-step-index">05</span>
                    <div class="process-step-body">
                        <h4>Support</h4>
                        <p>Ongoing maintenance and monitoring setup assistance.</p>
                    </div>
                </li>
            </ol>
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
