@extends('layouts.main')

@section('title', 'IT Services & Infrastructure | Mktech')

@section('content')
<div style="padding: 60px 0; background-color: #f8fafc; border-bottom: 1px solid #e2e8f0;">
    <div class="container">
        <h1 style="font-size: 40px; margin-bottom: 10px;">IT Services & Infrastructure</h1>
        <p style="color: #475569; font-size: 18px;"><a href="{{ url('/') }}" style="text-decoration: underline;">Home</a> &raquo; Services &raquo; IT Services</p>
    </div>
</div>

<div class="container" style="padding: 60px 0; display: flex; gap: 40px; flex-wrap: wrap;">
    <div style="flex: 2; min-width: 300px;">
        <div style="width: 100%; height: 400px; background-color: #e2e8f0; border: 1px solid #cbd5e1; border-radius: 4px; display: flex; justify-content: center; align-items: center; color: #64748b; font-weight: bold; margin-bottom: 30px; font-size: 20px;">
        <img src="{{ asset('images/mis.png') }}" style="width: 90%; height: 90%;" alt="Hero Image">

        </div>
        
        <h2>Comprehensive Technical Support</h2>
        <p style="margin-bottom: 20px; font-size: 18px; line-height: 1.7;">We provide comprehensive IT infrastructure setup and maintenance to ensure your business operations run smoothly without technical interruptions. Our team of certified professionals is equipped to handle complex networking, hardware deployment, and server management.</p>
        
        <h3 style="margin-top: 35px; margin-bottom: 15px;">What We Offer</h3>
        <ul style="list-style-position: inside; margin-bottom: 20px; line-height: 2; font-size: 16px;">
            <li>Network installation and secure configuration</li>
            <li>Server management & structured cloud migration</li>
            <li>Hardware deployment, diagnostics, and repairs</li>
            <li>24/7 dedicated Helpdesk support for your staff</li>
            <li>Routine data backup and disaster recovery solutions</li>
        </ul>
    </div>

    <div style="flex: 1; min-width: 300px;">
        <div style="background-color: #f1f5f9; padding: 30px; border-radius: 4px; border: 1px solid #e2e8f0;">
            <h3 style="color: #1e3a8a; margin-bottom: 15px;">Ready to Upgrade Your IT?</h3>
            <p style="margin-bottom: 25px;">Contact us today to schedule an initial consultation and site survey for your office.</p>
            <a href="{{ url('/#contact') }}" class="btn btn-primary" style="display: block; width: 100%;">Get a Quote</a>
        </div>
        
        <div style="margin-top: 40px;">
            <h4 style="margin-bottom: 20px; border-bottom: 2px solid #1e3a8a; display: inline-block; padding-bottom: 5px;">Explore Other Services</h4>
            <ul style="list-style: none; line-height: 2.2;">
                <li><a href="{{ route('services.graphics') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; Graphics Design</a></li>
                <li><a href="{{ route('services.web') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; Website Development</a></li>
                <li><a href="{{ route('services.mobile') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; Mobile App Development</a></li>
                <li><a href="{{ route('services.cctv') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; CCTV Camera & Security</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
