<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Apexbooks - Financial Clarity for Every Role')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #7E6BB5; 
            --primary-hover: #6A589D;
            --primary-light: #F0EDF7;
            --bg-color: #F8F9FC;
            --text-main: #1E293B;
            --text-muted: #64748B;
            --border-color: #E2E8F0;
            --white: #FFFFFF;
            --success: #10B981;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background-color: var(--bg-color); color: var(--text-main); min-height: 100vh; display: flex; flex-direction: column; }
        a { text-decoration: none; color: inherit; }

        /* --- Navbar --- */
        nav { background-color: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border-bottom: 1px solid var(--border-color); position: sticky; top: 0; z-index: 50; }
        /* Full-width container: logo hugs left, actions hug right, with a small margin */
        .nav-container { width: 100%; padding: 0 32px; height: 80px; display: flex; justify-content: space-between; align-items: center; }
        
        /* --- Perfect Logo Styles --- */
        .logo { display: flex; align-items: center; gap: 12px; font-size: 24px; font-weight: 700; color: var(--text-main); letter-spacing: -0.02em; }
        .logo-icon { 
            width: 48px; 
            height: 48px; 
            background: linear-gradient(135deg, #8E7AC7 0%, #7E6BB5 100%); 
            border-radius: 14px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            box-shadow: 0 6px 16px rgba(126, 107, 181, 0.35);
            position: relative;
        }
        .logo-icon::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; height: 50%;
            background: linear-gradient(to bottom, rgba(255,255,255,0.1), transparent);
            border-radius: 14px 14px 0 0;
            pointer-events: none;
        }

        .nav-links { display: flex; gap: 32px; }
        .nav-links a { font-size: 14px; font-weight: 500; color: var(--text-muted); transition: color 0.2s; }
        .nav-links a:hover { color: var(--primary); }
        .nav-actions { display: flex; align-items: center; gap: 16px; }

        /* --- Sign in Dropdown --- */
        .dropdown { position: relative; }
        .btn-login {
            font-size: 14px;
            font-weight: 500;
            color: var(--text-muted);
            background: none;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-family: inherit;
            padding: 8px 4px;
            transition: color 0.2s;
        }
        .btn-login:hover { color: var(--text-main); }
        .btn-login .caret {
            font-size: 10px;
            transition: transform 0.25s ease;
        }
        .dropdown.open .btn-login { color: var(--primary); }
        .dropdown.open .btn-login .caret { transform: rotate(180deg); }

        .dropdown-menu {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            min-width: 180px;
            background: var(--white);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: 0 12px 32px rgba(15, 23, 42, 0.12);
            padding: 8px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-8px);
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
            z-index: 100;
        }
        .dropdown.open .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .dropdown-menu a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 12px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-main);
            border-radius: 8px;
            transition: background 0.15s, color 0.15s;
        }
        .dropdown-menu a:hover {
            background: var(--primary-light);
            color: var(--primary);
        }
        .dropdown-menu a i {
            width: 16px;
            text-align: center;
            color: var(--primary);
            font-size: 13px;
        }

        .btn-primary { background-color: var(--primary); color: white; padding: 10px 20px; border-radius: 8px; font-size: 14px; font-weight: 500; border: none; cursor: pointer; transition: all 0.2s; box-shadow: 0 4px 14px rgba(126, 107, 181, 0.3); }
        .btn-primary:hover { background-color: var(--primary-hover); transform: translateY(-1px); }

        /* --- Footer --- */
        footer { background-color: var(--white); border-top: 1px solid var(--border-color); padding: 32px 24px; margin-top: auto; }
        .footer-container { max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; font-size: 14px; color: var(--text-muted); }
        .footer-links { display: flex; gap: 24px; }
        .footer-links a:hover { color: var(--primary); }

        @media (max-width: 992px) { .nav-links { display: none; } }
        @media (max-width: 576px) { .footer-container { flex-direction: column; gap: 16px; text-align: center; } }
    </style>

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

    <!-- ====== Dropdown Script ====== -->
    <script>
        (function () {
            const dropdown = document.getElementById('signinDropdown');
            const toggle = document.getElementById('signinToggle');
            if (!dropdown || !toggle) return;

            // Toggle on click
            toggle.addEventListener('click', function (e) {
                e.stopPropagation();
                const isOpen = dropdown.classList.toggle('open');
                toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });

            // Close when clicking outside
            document.addEventListener('click', function (e) {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('open');
                    toggle.setAttribute('aria-expanded', 'false');
                }
            });

            // Close on Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    dropdown.classList.remove('open');
                    toggle.setAttribute('aria-expanded', 'false');
                }
            });
        })();
    </script>
    @yield('scripts')         
    @stack('scripts')
</body>
</html>