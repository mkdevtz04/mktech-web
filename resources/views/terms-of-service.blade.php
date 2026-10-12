@extends('layouts.main')

@section('title', 'Terms of Service | Mktech')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Terms of Service</h1>
        <p class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; Terms of Service</p>
    </div>
</div>

<section class="legal-content">
    <div class="container">
        <p class="legal-updated">Last updated: {{ date('F Y') }}</p>

        <h2>Acceptance of Terms</h2>
        <p>By engaging Mktech for a project or using this website, you agree to these terms. If you don't agree, please don't use our services.</p>

        <h2>Our Services</h2>
        <p>Mktech provides website development, mobile app development, IT infrastructure and support, graphic design, and CCTV &amp; security installation. The specific scope of any project is agreed in writing (email or a formal proposal) before work begins.</p>

        <h2>Starting a Project</h2>
        <p>Project work begins once we've agreed on scope, timeline, and cost. We'll give you a clear timeline after an initial consultation &mdash; estimates may be revised if the scope changes once work is underway.</p>

        <h2>Payment</h2>
        <p>Payment is typically structured in milestones tied to project progress rather than a single lump sum. Specific payment terms and schedules are confirmed for each project before work begins. Late payment may pause ongoing work.</p>

        <h2>Intellectual Property</h2>
        <p>Once a project is paid in full, ownership of the custom work we build for you (code, designs, and other deliverables created specifically for your project) transfers to you, except for:</p>
        <ul>
            <li>Third-party tools, frameworks, libraries, or stock assets used in the build, which remain under their own licenses</li>
            <li>Our own internal tools, templates, or reusable components, which we retain the right to reuse in other projects</li>
        </ul>

        <h2>Your Responsibilities</h2>
        <p>Projects move faster when we get what we need from you on time &mdash; content, feedback, access credentials, and timely responses. Delays on your side may shift the agreed timeline.</p>

        <h2>Warranties &amp; Limitations</h2>
        <p>We provide our services with reasonable skill and care. We don't guarantee that any website, app, or system will be completely uninterrupted or error-free. To the extent permitted by law, Mktech's liability for any claim related to a project is limited to the amount paid for that project.</p>

        <h2>Termination</h2>
        <p>Either party may end an engagement with written notice. Fees for work already completed remain payable.</p>

        <h2>Governing Law</h2>
        <p>These terms are governed by the laws of Tanzania.</p>

        <h2>Contact Us</h2>
        <p>Questions about these terms can be sent to <a href="mailto:costantinentui04@gmail.com" class="text-link">costantinentui04@gmail.com</a> or <a href="tel:+255626267747" class="text-link">+255 626 267 747</a>.</p>
    </div>
</section>
@endsection
