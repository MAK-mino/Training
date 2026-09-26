<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Apexbooks - Financial Clarity for Every Role')</title>
    


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    

    <script>
    (function() {
        var t = localStorage.getItem('apexbooks-theme');
        if (t) document.documentElement.setAttribute('data-theme', t);
    })();
</script>


    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    
    @yield('styles')
    @stack('styles') 

    
</head>
<body>

    <!-- ====== HEADER ====== -->
    <nav>
        <div class="nav-container">
            <div class="logo">
                <div class="logo-icon">
                    <!-- PERFECT ISOMETRIC CUBE SVG -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L21 7.5L12 13L3 7.5L12 2Z" fill="#FFFFFF" fill-opacity="0.95"/>
                        <path d="M3 7.5V16.5L12 22V13L3 7.5Z" fill="#FFFFFF" fill-opacity="0.65"/>
                        <path d="M21 7.5V16.5L12 22V13L21 7.5Z" fill="#FFFFFF" fill-opacity="0.85"/>
                        <path d="M12 13V22" stroke="#7E6BB5" stroke-opacity="0.4" stroke-width="0.5" stroke-linejoin="round"/>
                    </svg>
                </div>
                Apexbooks
            </div>
            <div class="nav-links">
                <a href="/">Home</a>
                <a href="/Login">Login</a>
                <a href="/Service">Services</a>
                <a href="/Contact">Contact Us</a>
                <a href="/About">About Us</a>

            {{-- THEME TOGGLE --}}
<button id="theme-toggle" class="nav-theme-toggle" aria-label="Toggle theme">
    <svg id="icon-sun" class="theme-icon hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="5"></circle>
        <line x1="12" y1="1" x2="12" y2="3"></line>
        <line x1="12" y1="21" x2="12" y2="23"></line>
        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
        <line x1="1" y1="12" x2="3" y2="12"></line>
        <line x1="21" y1="12" x2="23" y2="12"></line>
        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
    </svg>
    <svg id="icon-moon" class="theme-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
    </svg>
    <span class="theme-label">Theme</span>
</button>



                <a href="/2">2</a>
                <a href="/3">3</a>
            </div>

            <div class="nav-actions">
                <!-- Sign in Dropdown -->
                <div class="dropdown" id="signinDropdown">
                    <button type="button" class="btn-login" id="signinToggle" aria-haspopup="true" aria-expanded="false">
                        Sign in
                        <i class="caret fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                        <a href="/Sign1" role="menuitem">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Sign in 1
                        </a>
                        <a href="/Sign2" role="menuitem">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Sign in 2
                        </a>
                    </div>
                </div>

                <a href="/register" class="btn-primary">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- ====== MAIN CONTENT ====== -->
    <main style="flex-grow: 1;">
        @yield('content')
    </main>

    <!-- ====== FOOTER ====== -->
    <footer>
        <div class="footer-container">
            <div>&copy; {{ date('Y') }} Apexbooks. All rights reserved.</div>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Contact Support</a>
            </div>
        </div>
    </footer>

    <!-- Link to external JS file -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>

    @yield('scripts')         
    @stack('scripts')
</body>
</html>