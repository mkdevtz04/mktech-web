@extends('layouts.main')

@section('title', 'Privacy Policy | Mktech')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Privacy Policy</h1>
        <p class="breadcrumb"><a href="{{ url('/') }}">Home</a> &raquo; Privacy Policy</p>
    </div>
</div>

<section class="legal-content">
    <div class="container">
        <p class="legal-updated">Last updated: {{ date('F Y') }}</p>

        <h2>Introduction</h2>
        <p>Mktech ("we", "us", "our") provides website development, mobile app development, IT infrastructure, graphic design, and CCTV &amp; security services. This policy explains what information we collect through this website, how we use it, and the choices you have.</p>

        <h2>Information We Collect</h2>
        <p>We collect information in two ways:</p>
        <ul>
            <li><strong>Information you provide directly</strong> &mdash; such as your name, email address, phone number, or project details when you contact us through this site, email, or WhatsApp.</li>
            <li><strong>Usage information</strong> &mdash; we use an analytics tool to understand how visitors use this site (pages viewed, general location, device type). We do not use this data to identify you personally.</li>
        </ul>

        <h2>How We Use Your Information</h2>
        <ul>
            <li>To respond to your inquiries and discuss potential projects</li>
            <li>To deliver services you've engaged us for</li>
            <li>To understand and improve how this website is used</li>
            <li>To comply with legal obligations where applicable</li>
        </ul>

        <h2>Cookies</h2>
        <p>This site uses Google Analytics to understand how visitors use it &mdash; which pages are viewed, roughly where visitors are located, and what kind of device they're using. Google Analytics sets small cookies (<code>_ga</code>, <code>_gid</code>) in your browser to do this. We don't use this data to identify you personally, and we don't use cookies for advertising.</p>
        <p>When you first visit, a banner lets you accept or decline this analytics tracking. If you decline, the Analytics cookies are disabled for your browser going forward. Essential cookies that keep the site itself working (for example, keeping you logged in) are not affected by this choice, since the site can't function without them.</p>
        <p>You can also control or delete cookies through your browser's settings at any time. Google's own handling of Analytics data is covered by <a href="https://policies.google.com/privacy" class="text-link" target="_blank" rel="noopener noreferrer">Google's Privacy Policy</a>.</p>

        <h2>Sharing of Information</h2>
        <p>We do not sell your personal information. We may share information with service providers who help us operate this website or deliver a project (for example, hosting providers), and only to the extent needed for that purpose. We do not share your information with third parties for their own marketing purposes.</p>

        <h2>Data Security</h2>
        <p>We take reasonable steps to protect the information you share with us. No method of transmission or storage is completely secure, so we cannot guarantee absolute security.</p>

        <h2>Your Rights</h2>
        <p>You can ask us what information we hold about you, request a correction, or ask us to delete it, by contacting us using the details below. We'll respond as quickly as we reasonably can.</p>

        <h2>Children's Privacy</h2>
        <p>This website and our services are intended for businesses and individuals old enough to enter into a service agreement. We do not knowingly collect information from children.</p>

        <h2>Changes to This Policy</h2>
        <p>We may update this policy from time to time. The "last updated" date at the top of this page reflects the most recent revision.</p>

        <h2>Contact Us</h2>
        <p>Questions about this policy can be sent to <a href="mailto:costantinentui04@gmail.com" class="text-link">costantinentui04@gmail.com</a> or <a href="tel:+255626267747" class="text-link">+255 626 267 747</a>.</p>
    </div>
</section>
@endsection
