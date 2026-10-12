@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <p class="eyebrow">Technology & Security Partner</p>
                <h1>Professional Technology <span class="accent">&amp; Security Solutions</span></h1>
                <p>Mktech is your trusted agency for website development, IT infrastructure, graphic design, and CCTV security installations. Reliable, effective, and built for businesses.</p>
                <div class="hero-actions">
                    <a href="#services" class="btn btn-primary">Our Services</a>
                    <a href="#contact" class="btn btn-outline">Contact Us</a>
                </div>
            </div>
            <div class="hero-image-box">
                <img src="{{ asset('images/main.png') }}" alt="Mktech technology and security solutions">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-head center">
                <p class="eyebrow">What We Do</p>
                <h2 class="section-title">Our Services</h2>
                <p class="section-lead">Full-stack technology solutions — from the systems that run your business to the cameras that protect it.</p>
            </div>

            <div class="services-grid">

                <div class="service-card" onclick="window.location='{{ route('services.it') }}'">
                    <div class="service-icon">
                        <img src="{{ asset('images/mis.png') }}" alt="IT Services">
                    </div>
                    <h3>IT Services</h3>
                    <p>Complete IT infrastructure setup and maintenance. We manage networks, hardware, and provide dedicated technical support for your office.</p>
                    <a href="{{ route('services.it') }}" class="service-link">Learn more &rarr;</a>
                </div>

                <div class="service-card" onclick="window.location='{{ route('services.graphics') }}'">
                    <div class="service-icon">
                        <img src="{{ asset('images/design.png') }}" alt="Graphics Design">
                    </div>
                    <h3>Graphics Design</h3>
                    <p>Corporate branding, logo creation, and promotional materials designed to give your business a polished and professional look.</p>
                    <a href="{{ route('services.graphics') }}" class="service-link">Learn more &rarr;</a>
                </div>

                <div class="service-card" onclick="window.location='{{ route('services.web') }}'">
                    <div class="service-icon">
                        <img src="{{ asset('images/web.png') }}" alt="Website Development">
                    </div>
                    <h3>Website Development</h3>
                    <p>Standard, responsive web applications built with reliability in mind to serve your clients and manage your operations smoothly.</p>
                    <a href="{{ route('services.web') }}" class="service-link">Learn more &rarr;</a>
                </div>

                <div class="service-card" onclick="window.location='{{ route('services.mobile') }}'">
                    <div class="service-icon">
                        <img src="{{ asset('images/mob.png') }}" alt="Mobile App Development">
                    </div>
                    <h3>Mobile App Development</h3>
                    <p>Secure and user-friendly mobile applications for Android and iOS devices, streamlining accessibility for your customers.</p>
                    <a href="{{ route('services.mobile') }}" class="service-link">Learn more &rarr;</a>
                </div>

                <div class="service-card" onclick="window.location='{{ route('services.cctv') }}'">
                    <div class="service-icon">
                        <img src="{{ asset('images/cctv.png') }}" alt="CCTV Camera & Security">
                    </div>
                    <h3>CCTV Camera & Security</h3>
                    <p>Professional installation of CCTV systems, access controls, and modern security gadgets to protect your physical premises.</p>
                    <a href="{{ route('services.cctv') }}" class="service-link">Learn more &rarr;</a>
                </div>

                <div class="service-card service-card--invert">
                    <h3>Need a Custom Service?</h3>
                    <p>We offer tailored technology solutions for your unique business requirements.</p>
                    <a href="#contact" class="service-link">Reach out to us &rarr;</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section id="team" class="team-section">
        <div class="container">
            <div class="section-head center">
                <p class="eyebrow">Our People</p>
                <h2 class="section-title">Meet Our Experts</h2>
            </div>
            <div class="team-grid">

                <!-- Developer -->
                <div class="team-card">
                    <div class="team-img-placeholder">
                        <img src="{{ asset('images/ps.png') }}" alt="Costantine Clement">
                    </div>
                    <h3>Costantine Clement</h3>
                    <p class="role">Lead Developer</p>
                    <p class="bio">Expert in modern web and mobile application architectures, ensuring highly scalable software implementations.</p>
                </div>

                <!-- Graphics Designer -->
                <div class="team-card">
                    <div class="team-img-placeholder">
                        <img src="{{ asset('images/cj.png') }}" alt="Erasto Kamuli">
                    </div>
                    <h3>Erasto Kamuli</h3>
                    <p class="role">Graphics Designer</p>
                    <p class="bio">Specialized in creating striking visual identities, responsive UI/UX designs, and engaging marketing materials.</p>
                </div>

                <!-- Sales Head -->
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

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <div class="section-head center">
                <p class="eyebrow">Client Feedback</p>
                <h2 class="section-title">What Our Clients Say</h2>
            </div>
            <div class="testimonial-grid">

                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-quote-icon">&ldquo;</div>
                    <p class="quote">"Mktech completely transformed our corporate IT infrastructure. Their dedicated developer team delivered a seamless web application that doubled our daily transaction capabilities safely."</p>
                    <div class="testimonial-author">Adam Lwena</div>
                    <div class="testimonial-company">CEO, lwenahub Solutions</div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-quote-icon">&ldquo;</div>
                    <p class="quote">"The graphics design team at Mktech redefined our brand identity from scratch. Their creativity combined with their technical expertise in mobile app development is unmatched."</p>
                    <div class="testimonial-author">Timoth H.</div>
                    <div class="testimonial-company">Marketing Director, RetailBrand</div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-quote-icon">&ldquo;</div>
                    <p class="quote">"We hired Mktech for a massive CCTV and security installation across our 4 branch offices. Their team was extremely professional, and the camera network is incredibly reliable."</p>
                    <div class="testimonial-author">Omar K.</div>
                    <div class="testimonial-company">Operations Manager, LogisticsPro</div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-head center">
                <p class="eyebrow">Contact</p>
                <h2 class="section-title">Get In Touch</h2>
                <p class="contact-subtitle">Have a project in mind or need a consultation? Reach out — we respond within 24 hours.</p>
            </div>

            <div class="contact-grid">

                <!-- Contact Info Card -->
                <div class="contact-info-card">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <img src="{{ asset('images/mail.png') }}" alt="Email">
                        </div>
                        <div>
                            <h4>Email Us</h4>
                            <a href="mailto:costantinentui04@gmail.com">costantinentui04@gmail.com</a>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <img src="{{ asset('images/call.png') }}" alt="Phone">
                        </div>
                        <div>
                            <h4>Call / WhatsApp</h4>
                            <a href="tel:+255626267747">+255 626 267 747</a>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <img src="{{ asset('images/location.png') }}" alt="Location">
                        </div>
                        <div>
                            <h4>Location</h4>
                            <span>Dar es Salaam, Tanzania</span>
                        </div>
                    </div>
                </div>

                <!-- Working Hours -->
                <div class="contact-side-card">
                    <div class="contact-hours">
                        <h4>Business Hours</h4>
                        <ul class="hours-list">
                            <li><span>Monday – Friday</span><strong>8:00 AM – 6:00 PM</strong></li>
                            <li><span>Saturday</span><strong>9:00 AM – 3:00 PM</strong></li>
                            <li><span>Sunday</span><strong>Closed</strong></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
