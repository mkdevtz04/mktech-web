<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mktech | Professional IT Services')</title>
    <!-- Normal Custom CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
</head>
<body>

    <!-- Dark Blue Navigation Bar -->
    <header class="navbar">
        <div class="container">
            <div class="brand"><a href="{{ url('/') }}" style="color: white;">Mktech</a></div>
            <!-- Hamburger button (mobile) -->
            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-links" id="navLinks">
                <li><a href="{{ url('/#services') }}">Services</a></li>
                <!-- <li><a href="{{ url('/#about') }}">About</a></li> -->
                <li><a href="{{ url('/#contact') }}">Contact</a></li>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}"></a></li>
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
                <div class="mt-top">
                    <div class="footer-contact-item">
                        <strong>Email:</strong>
                        <span>info@mktech.com</span>
                    </div>
                    <div class="footer-contact-item">
                        <strong>Phone:</strong>
                        <span>+255 626 267 7471</span>
                    </div>
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
                    <li><a href="{{ route('services.cctv') }}">CCTV &amp; Security</a></li>
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
                <p style="margin-bottom: 18px;">Follow us across social media for updates, tips, and technical insights.</p>
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/costantine-ntui-65114926a" class="social-icon" title="Instagram">
                        <img src="{{ asset('images/in.png') }}" alt="Instagram">
                    </a>
                    <a href="#" class="social-icon" title="TikTok">
                        <img src="{{ asset('images/tk.png') }}" alt="TikTok">
                    </a>
                    <!-- <a href="#" class="social-icon" title="LinkedIn">
                        <img src="{{ asset('images/in.png') }}" alt="LinkedIn">
                    </a> -->
                    <a href="#" class="social-icon" title="Facebook">
                        <img src="{{ asset('images/fb.png') }}" alt="Facebook">
                    </a>
                    <a href="#" class="social-icon" title="WhatsApp">
                        <img src="{{ asset('images/whatsup.png') }}" alt="WhatsApp">
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright Bottom Bar -->
        <hr class="footer-divider">
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; {{ date('Y') }} Mktech. All rights reserved.</p>
                <ul class="footer-bottom-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="{{ url('/#contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        // Hamburger menu toggle
        const navToggle = document.getElementById('navToggle');
        const navLinks  = document.getElementById('navLinks');
        navToggle.addEventListener('click', function () {
            const isOpen = navLinks.classList.toggle('open');
            navToggle.classList.toggle('open', isOpen);
            navToggle.setAttribute('aria-expanded', isOpen);
        });
        // Close menu when a link is clicked
        navLinks.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                navLinks.classList.remove('open');
                navToggle.classList.remove('open');
                navToggle.setAttribute('aria-expanded', 'false');
            });
        });
    </script>

</body>
</html>
