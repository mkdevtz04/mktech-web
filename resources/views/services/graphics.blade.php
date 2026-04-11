@extends('layouts.main')

@section('title', 'Graphics Design | Mktech')

@section('content')
<div style="padding: 60px 0; background-color: #f8fafc; border-bottom: 1px solid #e2e8f0;">
    <div class="container">
        <h1 style="font-size: 40px; margin-bottom: 10px;">Graphics Design</h1>
        <p style="color: #475569; font-size: 18px;"><a href="{{ url('/') }}" style="text-decoration: underline;">Home</a> &raquo; Services &raquo; Graphics Design</p>
    </div>
</div>

<div class="container" style="padding: 60px 0; display: flex; gap: 40px; flex-wrap: wrap;">
    <div style="flex: 2; min-width: 300px;">
        <div style="width: 100%; height: 400px; background-color: #e2e8f0; border: 1px solid #cbd5e1; border-radius: 4px; display: flex; justify-content: center; align-items: center; color: #64748b; font-weight: bold; margin-bottom: 30px; font-size: 20px;">
        <img src="{{ asset('images/design.png') }}" style="width: 70%; height: 90%;" alt="Hero Image">
    </div>
        
        <h2>Visual Identities Built to Last</h2>
        <p style="margin-bottom: 20px; font-size: 18px; line-height: 1.7;">Good design isn’t just about making things look pretty—it’s about communicating your brand's unique value clearly. We handle everything from logo creation and corporate branding to promotional materials that give your business a polished and professional look.</p>
        
        <h3 style="margin-top: 35px; margin-bottom: 15px;">Our Design Expertise</h3>
        <ul style="list-style-position: inside; margin-bottom: 20px; line-height: 2; font-size: 16px;">
            <li>Custom Logo Design & Brand Identity Packages</li>
            <li>Marketing Materials (Brochures, Flyers, Business Cards)</li>
            <li>Social Media Graphics and Banners</li>
            <li>UI/UX Design for Web and Mobile Interfaces</li>
            <li>Product Packaging and Labeling Design</li>
        </ul>
    </div>

    <div style="flex: 1; min-width: 300px;">
        <div style="background-color: #f1f5f9; padding: 30px; border-radius: 4px; border: 1px solid #e2e8f0;">
            <h3 style="color: #1e3a8a; margin-bottom: 15px;">Transform Your Brand</h3>
            <p style="margin-bottom: 25px;">Let our creative team craft visual assets that make a lasting impression.</p>
            <a href="{{ url('/#contact') }}" class="btn btn-primary" style="display: block; width: 100%;">Talk to a Designer</a>
        </div>
        
        <div style="margin-top: 40px;">
            <h4 style="margin-bottom: 20px; border-bottom: 2px solid #1e3a8a; display: inline-block; padding-bottom: 5px;">Explore Other Services</h4>
            <ul style="list-style: none; line-height: 2.2;">
                <li><a href="{{ route('services.it') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; IT Services</a></li>
                <li><a href="{{ route('services.web') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; Website Development</a></li>
                <li><a href="{{ route('services.mobile') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; Mobile App Development</a></li>
                <li><a href="{{ route('services.cctv') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; CCTV Camera & Security</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
