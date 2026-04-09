@extends('layouts.main')

@section('title', 'CCTV & Security | Mktech')

@section('content')
<div style="padding: 60px 0; background-color: #f8fafc; border-bottom: 1px solid #e2e8f0;">
    <div class="container">
        <h1 style="font-size: 40px; margin-bottom: 10px;">CCTV Camera & Security Gadgets</h1>
        <p style="color: #475569; font-size: 18px;"><a href="{{ url('/') }}" style="text-decoration: underline;">Home</a> &raquo; Services &raquo; CCTV & Security</p>
    </div>
</div>

<div class="container" style="padding: 60px 0; display: flex; gap: 40px; flex-wrap: wrap;">
    <div style="flex: 2; min-width: 300px;">
        <div style="width: 100%; height: 400px; background-color: #e2e8f0; border: 1px solid #cbd5e1; border-radius: 4px; display: flex; justify-content: center; align-items: center; color: #64748b; font-weight: bold; margin-bottom: 30px; font-size: 20px;">
            [ CCTV & Security Image Container ]
        </div>
        
        <h2>Protecting Your Physical Assets</h2>
        <p style="margin-bottom: 20px; font-size: 18px; line-height: 1.7;">Physical security is just as important as digital security. We offer professional installation of CCTV systems, biometric access controls, and modern security gadgets to protect your physical premises, employees, and assets 24/7.</p>
        
        <h3 style="margin-top: 35px; margin-bottom: 15px;">Security Solutions</h3>
        <ul style="list-style-position: inside; margin-bottom: 20px; line-height: 2; font-size: 16px;">
            <li>High-Definition IP CCTV Camera Installation</li>
            <li>Biometric and Keycard Access Control Systems</li>
            <li>Smart Intruder Alarm Systems & Sensors</li>
            <li>Remote Monitoring Setup via Web and Mobile</li>
            <li>Routine Security Maintenance and Upgrades</li>
        </ul>
    </div>

    <div style="flex: 1; min-width: 300px;">
        <div style="background-color: #f1f5f9; padding: 30px; border-radius: 4px; border: 1px solid #e2e8f0;">
            <h3 style="color: #1e3a8a; margin-bottom: 15px;">Secure Your Premises</h3>
            <p style="margin-bottom: 25px;">Contact us today to get a free security audit and installation estimate.</p>
            <a href="{{ url('/#contact') }}" class="btn btn-primary" style="display: block; width: 100%;">Request Audit</a>
        </div>
        
        <div style="margin-top: 40px;">
            <h4 style="margin-bottom: 20px; border-bottom: 2px solid #1e3a8a; display: inline-block; padding-bottom: 5px;">Explore Other Services</h4>
            <ul style="list-style: none; line-height: 2.2;">
                <li><a href="{{ route('services.it') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; IT Services</a></li>
                <li><a href="{{ route('services.graphics') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; Graphics Design</a></li>
                <li><a href="{{ route('services.web') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; Website Development</a></li>
                <li><a href="{{ route('services.mobile') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; Mobile App Development</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
