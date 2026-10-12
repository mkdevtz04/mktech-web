<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="T9oXdiUDayG-u0kXn_FyCfHWs_vl9LmgdqyLqRcla8A" />
    <title>@yield('title', 'Mktech | Professional IT Services')</title>
    <script>
        // Applied before first paint so the page never flashes the wrong theme.
        (function () {
            try {
                var theme = localStorage.getItem('mktech-theme');
                if (theme === 'dark') {
                    document.documentElement.setAttribute('data-theme', 'dark');
                }
            } catch (e) {}
        })();
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Normal Custom CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
        <!-- Google Analytics -->
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-8X2NWE8SC0"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-8X2NWE8SC0');
        </script>
</head>
<body>

    <!-- Dark Blue Navigation Bar -->
    <header class="navbar">
        <div class="container">
            <div class="brand"><a href="{{ url('/') }}"><img src="{{ asset('images/mktech.jpg') }}" alt="Mktech logo"></a></div>
            <!-- Hamburger button (mobile) -->
            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-links" id="navLinks">
                <li><a href="{{ url('/#services') }}">Services</a></li>
                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @endauth
                @endif
                <li class="theme-toggle-item">
                    <button type="button" class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode">
                        <svg class="icon-moon" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
                        <svg class="icon-sun" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></svg>
                    </button>
                </li>
                <li><a href="{{ url('/#contact') }}" class="nav-cta">Contact</a></li>
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
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ url('/#contact') }}">Get a Quote</a></li>
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}">Terms of Service</a></li>
                </ul>
            </div>

            <!-- Column 4: Social Media -->
            <div class="footer-col">
                <h4>Connect With Us</h4>
                <p style="margin-bottom: 18px;">Follow us across social media for updates, tips, and technical insights.</p>
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/costantine-ntui-65114926a" class="social-icon" title="LinkedIn" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/in.png') }}" alt="LinkedIn">
                    </a>
                    <a href="https://www.tiktok.com/@m_graphics_design" class="social-icon" title="TikTok" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/tk.png') }}" alt="TikTok">
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100025247079880" class="social-icon" title="Facebook" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/fb.png') }}" alt="Facebook">
                    </a>
                    <a href="https://wa.me/255626267747" class="social-icon" title="WhatsApp" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/whatsup.png') }}" alt="WhatsApp">
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright Bottom Bar -->
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; {{ date('Y') }} Mktech. All rights reserved.</p>
                <ul class="footer-bottom-links">
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}">Terms of Service</a></li>
                    <li><a href="{{ url('/#contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        // Light / dark theme toggle
        const themeToggle = document.getElementById('themeToggle');
        themeToggle.addEventListener('click', function () {
            const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
            if (isDark) {
                document.documentElement.removeAttribute('data-theme');
                try { localStorage.setItem('mktech-theme', 'light'); } catch (e) {}
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
                try { localStorage.setItem('mktech-theme', 'dark'); } catch (e) {}
            }
        });

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

        // FAQ accordion
        document.querySelectorAll('.faq-question').forEach(function (button) {
            button.addEventListener('click', function () {
                const item = button.closest('.faq-item');
                const answer = item.querySelector('.faq-answer');
                const isOpen = item.getAttribute('data-open') === 'true';
                if (isOpen) {
                    item.setAttribute('data-open', 'false');
                    button.setAttribute('aria-expanded', 'false');
                    answer.style.maxHeight = null;
                } else {
                    item.setAttribute('data-open', 'true');
                    button.setAttribute('aria-expanded', 'true');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });
    </script>

</body>
</html>
