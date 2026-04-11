@extends('layouts.main')

@section('title', 'Website Development | Mktech')

@section('content')
<div style="padding: 60px 0; background-color: #f8fafc; border-bottom: 1px solid #e2e8f0;">
    <div class="container">
        <h1 style="font-size: 40px; margin-bottom: 10px;">Website Development</h1>
        <p style="color: #475569; font-size: 18px;"><a href="{{ url('/') }}" style="text-decoration: underline;">Home</a> &raquo; Services &raquo; Website Development</p>
    </div>
</div>

<div class="container" style="padding: 60px 0; display: flex; gap: 40px; flex-wrap: wrap;">
    <div style="flex: 2; min-width: 300px;">
        <div style="width: 100%; height: 400px; background-color: #e2e8f0; border: 1px solid #cbd5e1; border-radius: 4px; display: flex; justify-content: center; align-items: center; color: #64748b; font-weight: bold; margin-bottom: 30px; font-size: 20px;">
        <img src="{{ asset('images/web.png') }}" style="width: 100%; height: 100%;" alt="Hero Image">
        </div>
        
        <h2>Standard & Custom Web Solutions</h2>
        <p style="margin-bottom: 20px; font-size: 18px; line-height: 1.7;">A website is the digital storefront of your business. We engineer standard, highly responsive web applications built with performance, security, and reliability in mind. From landing pages to enterprise-level web systems, we help manage your operations smoothly.</p>
        
        <h3 style="margin-top: 35px; margin-bottom: 15px;">What We Build</h3>
        <ul style="list-style-position: inside; margin-bottom: 20px; line-height: 2; font-size: 16px;">
            <li>Custom Corporate Websites and Landing Pages</li>
            <li>E-Commerce and Online Store Platforms</li>
            <li>Content Management Systems (CMS) Development</li>
            <li>Web Portals & Custom CRM Integrations</li>
            <li>SEO Optimization & Website Security Audits</li>
        </ul>
    </div>

    <div style="flex: 1; min-width: 300px;">
        <div style="background-color: #f1f5f9; padding: 30px; border-radius: 4px; border: 1px solid #e2e8f0;">
            <h3 style="color: #1e3a8a; margin-bottom: 15px;">Need a Reliable Website?</h3>
            <p style="margin-bottom: 25px;">Reach out today, and let’s establish a powerful online presence that drives sales.</p>
            <a href="{{ url('/#contact') }}" class="btn btn-primary" style="display: block; width: 100%;">Start Your Project</a>
        </div>
        
        <div style="margin-top: 40px;">
            <h4 style="margin-bottom: 20px; border-bottom: 2px solid #1e3a8a; display: inline-block; padding-bottom: 5px;">Explore Other Services</h4>
            <ul style="list-style: none; line-height: 2.2;">
                <li><a href="{{ route('services.it') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; IT Services</a></li>
                <li><a href="{{ route('services.graphics') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; Graphics Design</a></li>
                <li><a href="{{ route('services.mobile') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; Mobile App Development</a></li>
                <li><a href="{{ route('services.cctv') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; CCTV Camera & Security</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
