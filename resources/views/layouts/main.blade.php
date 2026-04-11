<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mktech | Professional IT Services')</title>
    <!-- Normal Custom CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Dark Blue Navigation Bar -->
    <header class="navbar">
        <div class="container">
            <div class="brand"><a href="{{ url('/') }}" style="color: white;">Mktech</a></div>
            <ul class="nav-links">
                <li><a href="{{ url('/#services') }}">Services</a></li>
                <li><a href="{{ url('/#about') }}">About</a></li>
                <li><a href="{{ url('/#contact') }}">Contact</a></li>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Log in</a></li>
                    @endauth
                @endif
            </ul>
        </div>
    </header>

    <main style="min-height: calc(100vh - 250px);">
        @yield('content')
        {{ $slot ?? '' }}
    </main>

    <!-- Comprehensive Dark Blue Footer -->
    <footer class="footer">
        <div class="container footer-grid">
            <!-- Column 1: Brand & About -->
            <div class="footer-col about-col">
                <div class="brand">Mktech</div>
                <p>Your dedicated partner in robust IT infrastructure, cutting-edge software development, and uncompromising security. We engineer solutions that empower your business.</p>
                <div class="contact-info mt-top">
                    <p style="margin-bottom: 8px;"><strong>Email:</strong> info@mktech.com</p>
                    <p><strong>Phone:</strong> +255 626 267 7471</p>
                </div>
            </div>

            <!-- Column 2: Services -->
            <div class="footer-col">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="{{ route('services.it') }}">IT Services</a></li>
                    <li><a href="{{ route('services.graphics') }}">Graphics Design</a></li>
                    <li><a href="{{ route('services.web') }}">Website Development</a></li>
                    <li><a href="{{ route('services.mobile') }}">Mobile Applications</a></li>
                    <li><a href="{{ route('services.cctv') }}">CCTV & Security</a></li>
                </ul>
            </div>

            <!-- Column 3: Quick Links -->
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/#about') }}">About Us</a></li>
                    <li><a href="{{ url('/#contact') }}">Get a Quote</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>

            <!-- Column 4: Social Media -->
            <div class="footer-col">
                <h4>Connect With Us</h4>
                <p style="margin-bottom: 20px;">Follow us across social media for updates, tips, and technical insights.</p>
                <div class="social-links">
                    <a href="#" class="social-icon" title="Instagram">
                        <div class="icon-placeholder"><img src="{{ asset('images/in.png') }} " alt="Instagram" style="width: 70px;"></div> <!-- Replace this div with exactly:  -->
                    </a>
                    <a href="#" class="social-icon" title="TikTok">
                        <div class="icon-placeholder"><img src="{{ asset('images/tk.png') }}" alt="TikTok" style="width: 50px;"></div> <!-- Replace this div with TK png -->
                    </a>
                    <a href="#" class="social-icon" title="LinkedIn">
                        <div class="icon-placeholder"><img src="{{ asset('images/in.png') }}" alt="LinkedIn" style="width: 70px;"></div> <!-- Replace this div with IN png -->
                    </a>
                    <a href="#" class="social-icon" title="Facebook">
                        <div class="icon-placeholder"><img src="{{ asset('images/fb.png') }}" alt="Facebook" style="width: 70px;"></div> <!-- Replace this div with FB png -->
                    </a>
                    <a href="#" class="social-icon" title="WhatsApp">
                        <div class="icon-placeholder"><img src="{{ asset('images/whatsup.png') }}" alt="WhatsApp" style="width: 45px;"></div> <!-- Replace this div with WA png -->
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright Bottom Bar -->
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; {{ date('Y') }} Mktech. All rights reserved. Professional Technology & Security Solutions.</p>
            </div>
        </div>
    </footer>

</body>
</html>
