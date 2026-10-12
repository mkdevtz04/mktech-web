@extends('layouts.main')

@section('title', 'Portfolio | Mktech')

@php
    $projects = [
        [
            'name' => 'Sokoni App',
            'category' => 'Website Development',
            'description' => "A multi-vendor marketplace connecting Tanzanian shoppers with verified local vendors for groceries and daily essentials. Built with real-time order tracking, mobile money checkout, and a vendor dashboard for sales and instant withdrawals.",
            'url' => 'https://www.sokoniapp.co.tz/',
            'image' => 'images/portfolio/sokoni.png',
        ],
        [
            'name' => 'Wifikitaa',
            'category' => 'Website Development',
            'description' => "A hotspot billing platform for small Tanzanian internet service providers, handling MikroTik router integration, voucher generation, and mobile money payments from one dashboard. Includes an agent sales network with commission tracking.",
            'url' => 'https://wifikitaa.site/',
            'image' => 'images/portfolio/wifikitaa.png',
        ],
        [
            'name' => 'POSMaster',
            'category' => 'Website Development',
            'description' => "A Laravel-powered point-of-sale system covering sales, inventory, and customer management in one place. Tracks stock levels with low-inventory alerts and gives business owners real-time sales analytics.",
            'url' => 'https://www.biasharamkononi.site/',
            'image' => 'images/portfolio/posmaster.png',
        ],
    ];
@endphp

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Our Work</h1>
        <p class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; Portfolio</p>
    </div>
</div>

<section class="portfolio-section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Selected Projects</p>
            <h2 class="section-title">Platforms We've Built</h2>
            <p class="section-lead">A sample of live, in-production work &mdash; from consumer marketplaces to the internal systems businesses run on every day.</p>
        </div>

        <div class="portfolio-grid">
            @foreach ($projects as $project)
                <div class="portfolio-card">
                    <div class="portfolio-media">
                        @if (file_exists(public_path($project['image'])))
                            <img src="{{ asset($project['image']) }}" alt="{{ $project['name'] }} screenshot">
                        @else
                            <div class="portfolio-media-placeholder">
                                <span>Add screenshot</span>
                            </div>
                        @endif
                    </div>
                    <div class="portfolio-body">
                        <p class="portfolio-category">{{ $project['category'] }}</p>
                        <h3>{{ $project['name'] }}</h3>
                        <p>{{ $project['description'] }}</p>
                        <a href="{{ $project['url'] }}" class="portfolio-link" target="_blank" rel="noopener noreferrer">Visit site &rarr;</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="section-head center">
            <p class="eyebrow">Start a Project</p>
            <h2 class="section-title">Have Something Similar in Mind?</h2>
            <p class="contact-subtitle">Whether it's a marketplace, an internal system, or something entirely new &mdash; tell us what you're building.</p>
            <div class="hero-actions">
                <a href="{{ url('/#contact') }}" class="btn btn-primary">Get In Touch</a>
            </div>
        </div>
    </div>
</section>
@endsection
