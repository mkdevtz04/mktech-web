@extends('layouts.main')

@section('title', 'Mobile App Development | Mktech')

@section('content')
<div style="padding: 60px 0; background-color: #f8fafc; border-bottom: 1px solid #e2e8f0;">
    <div class="container">
        <h1 style="font-size: 40px; margin-bottom: 10px;">Mobile Application Development</h1>
        <p style="color: #475569; font-size: 18px;"><a href="{{ url('/') }}" style="text-decoration: underline;">Home</a> &raquo; Services &raquo; Mobile Apps</p>
    </div>
</div>

<div class="container" style="padding: 60px 0; display: flex; gap: 40px; flex-wrap: wrap;">
    <div style="flex: 2; min-width: 300px;">
        <div style="width: 100%; height: 400px; background-color: #e2e8f0; border: 1px solid #cbd5e1; border-radius: 4px; display: flex; justify-content: center; align-items: center; color: #64748b; font-weight: bold; margin-bottom: 30px; font-size: 20px;">
        <img src="{{ asset('images/mob.png') }}" style="width: 90%; height: 90%;" alt="Hero Image">
        </div>
        
        <h2>Reaching Your Customers Everywhere</h2>
        <p style="margin-bottom: 20px; font-size: 18px; line-height: 1.7;">In a mobile-first world, your business needs to be accessible from a user's pocket. We create secure and user-friendly mobile applications for both Android and iOS devices, streamlining accessibility for your customers and driving engagement.</p>
        
        <h3 style="margin-top: 35px; margin-bottom: 15px;">Mobile Tech Capabilities</h3>
        <ul style="list-style-position: inside; margin-bottom: 20px; line-height: 2; font-size: 16px;">
            <li>Native iOS & Android App Development</li>
            <li>Cross-Platform Applications (Flutter / React Native)</li>
            <li>Enterprise Mobility & Internal Tooling Apps</li>
            <li>Mobile App UI/UX Design & Prototyping</li>
            <li>App Store Deployment and Ongoing Maintenance</li>
        </ul>
    </div>

    <div style="flex: 1; min-width: 300px;">
        <div style="background-color: #f1f5f9; padding: 30px; border-radius: 4px; border: 1px solid #e2e8f0;">
            <h3 style="color: #1e3a8a; margin-bottom: 15px;">Have an App Idea?</h3>
            <p style="margin-bottom: 25px;">Let’s turn your concept into a profitable, scalable mobile application.</p>
            <a href="{{ url('/#contact') }}" class="btn btn-primary" style="display: block; width: 100%;">Discuss Your App</a>
        </div>
        
        <div style="margin-top: 40px;">
            <h4 style="margin-bottom: 20px; border-bottom: 2px solid #1e3a8a; display: inline-block; padding-bottom: 5px;">Explore Other Services</h4>
            <ul style="list-style: none; line-height: 2.2;">
                <li><a href="{{ route('services.it') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; IT Services</a></li>
                <li><a href="{{ route('services.graphics') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; Graphics Design</a></li>
                <li><a href="{{ route('services.web') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; Website Development</a></li>
                <li><a href="{{ route('services.cctv') }}" style="color: #1e3a8a; font-weight: bold;">&rarr; CCTV Camera & Security</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
