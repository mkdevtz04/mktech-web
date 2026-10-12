@extends('layouts.main')

@section('title', 'FAQ | Mktech')

@php
    $faqs = [
        [
            'q' => 'How do we get started with a project?',
            'a' => "Reach out through the contact form, email, or WhatsApp with a short description of what you need. We'll set up a consultation to understand your goals, then come back with a clear scope and timeline before any work begins.",
        ],
        [
            'q' => 'How long does a typical project take?',
            'a' => "It depends on scope and complexity — a landing page and a custom web platform take very different amounts of time. After the initial consultation, we give you a concrete timeline so you know what to expect before committing.",
        ],
        [
            'q' => 'Do you offer support after launch?',
            'a' => "Yes. We don't disappear after delivery — ongoing maintenance and support arrangements are available for websites, mobile apps, and IT infrastructure, so your systems keep running smoothly as your needs change.",
        ],
        [
            'q' => 'How does payment work?',
            'a' => "Payment is structured in milestones tied to project progress rather than one lump sum upfront. Specific terms and available payment options are confirmed during your initial consultation.",
        ],
        [
            'q' => 'Do you work with businesses outside Dar es Salaam?',
            'a' => "Yes. Software projects (web, mobile, design) are handled remotely for clients anywhere in Tanzania. CCTV installation and on-site IT work are scoped based on location.",
        ],
        [
            'q' => "Can you take over or improve a system someone else built?",
            'a' => "Yes. We regularly step into existing websites, apps, and IT setups — auditing what's there, fixing what's broken, and building on top of it rather than starting over unnecessarily.",
        ],
        [
            'q' => 'Do you sign contracts or NDAs?',
            'a' => "Yes. We're happy to formalize project scope, timelines, and confidentiality in a written agreement before work begins.",
        ],
    ];
@endphp

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Frequently Asked Questions</h1>
        <p class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; FAQ</p>
    </div>
</div>

<section class="services">
    <div class="container">
        <div class="section-head center">
            <p class="eyebrow">Common Questions</p>
            <h2 class="section-title">Before You Reach Out</h2>
            <p class="section-lead">Answers to what clients usually ask before starting a project. Don't see yours &mdash; just ask.</p>
        </div>

        <div class="faq-list">
            @foreach ($faqs as $i => $faq)
                <div class="faq-item" data-open="false">
                    <button type="button" class="faq-question" aria-expanded="false">
                        <span>{{ $faq['q'] }}</span>
                        <span class="faq-question-icon"></span>
                    </button>
                    <div class="faq-answer">
                        <p>{{ $faq['a'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="section-head center">
            <p class="eyebrow">Still Have Questions?</p>
            <h2 class="section-title">Let's Talk It Through</h2>
            <div class="hero-actions">
                <a href="{{ url('/#contact') }}" class="btn btn-primary">Contact Us</a>
            </div>
        </div>
    </div>
</section>
@endsection
