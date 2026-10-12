@extends('layouts.main')

@section('title', 'About Us | Mktech')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>About Mktech</h1>
        <p class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; About</p>
    </div>
</div>

<section class="about-story">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Who We Are</p>
            <h2 class="section-title">A Technology Partner Built Around Your Business</h2>
            <p class="section-lead">Mktech is a Dar es Salaam-based technology partner for businesses across Tanzania, covering everything from the software that runs your operations to the physical security that protects your premises. Instead of specializing narrowly, we've built a team that moves across web and mobile development, IT infrastructure, graphic design, and CCTV installation &mdash; so the people building your systems are the same people who understand how they fit together.</p>
        </div>
    </div>
</section>

<section class="services about-values">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Why Mktech</p>
            <h2 class="section-title">How We Work With You</h2>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <h3>One Team, Every Discipline</h3>
                <p>Software, design, infrastructure, and physical security handled by one accountable team &mdash; instead of juggling separate vendors who don't talk to each other.</p>
            </div>

            <div class="service-card">
                <h3>Direct Access</h3>
                <p>You work directly with the people building your project, not an account manager relaying messages back and forth.</p>
            </div>

            <div class="service-card">
                <h3>Built for Tanzanian Businesses</h3>
                <p>Local presence in Dar es Salaam, local payment and communication channels, and support that understands the market you're operating in.</p>
            </div>

            <div class="service-card">
                <h3>Security-Minded by Default</h3>
                <p>The same team that secures your network, servers, and data can secure your physical premises &mdash; one point of contact for both.</p>
            </div>
        </div>
    </div>
</section>

<section id="team" class="team-section">
    <div class="container">
        <div class="section-head center">
            <p class="eyebrow">Our People</p>
            <h2 class="section-title">Meet the Team</h2>
        </div>
        <div class="team-grid">

            <div class="team-card">
                <div class="team-img-placeholder">
                    <img src="{{ asset('images/ps.png') }}" alt="Costantine Clement">
                </div>
                <h3>Costantine Clement</h3>
                <p class="role">Lead Developer</p>
                <p class="bio">Expert in modern web and mobile application architectures, ensuring highly scalable software implementations.</p>
            </div>

            <div class="team-card">
                <div class="team-img-placeholder">
                    <img src="{{ asset('images/cj.png') }}" alt="Erasto Kamuli">
                </div>
                <h3>Erasto Kamuli</h3>
                <p class="role">Graphics Designer</p>
                <p class="bio">Specialized in creating striking visual identities, responsive UI/UX designs, and engaging marketing materials.</p>
            </div>

            <div class="team-card">
                <div class="team-img-placeholder">
                    <img src="{{ asset('images/kido.png') }}" alt="Kido">
                </div>
                <h3>Kido</h3>
                <p class="role">Sales Head</p>
                <p class="bio">Dedicated to understanding client requirements and ensuring our tech solutions align perfectly with your business goals.</p>
            </div>

        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="section-head center">
            <p class="eyebrow">Let's Talk</p>
            <h2 class="section-title">Ready to Work Together?</h2>
            <p class="contact-subtitle">Tell us what you're trying to build or fix &mdash; we'll tell you honestly whether we're the right fit.</p>
            <div class="hero-actions">
                <a href="{{ url('/#contact') }}" class="btn btn-primary">Get In Touch</a>
                <a href="{{ route('portfolio') }}" class="btn btn-outline">See Our Work</a>
            </div>
        </div>
    </div>
</section>
@endsection
