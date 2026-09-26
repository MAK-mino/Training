<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Apexbooks Accounting</title>
    <!-- Tailwind CSS -->

  <script>
    (function() {
        var t = localStorage.getItem('apexbooks-theme');
        if (t) document.documentElement.setAttribute('data-theme', t);
    })();
</script>



    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts: Inter for clean corporate look -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind Config (must load AFTER the CDN script) -->
    
    <script src="{{asset('js/2.config.js')}}"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/2.css')}}">
    
</head>
<body class="bg-gradient-to-br from-white via-brand-lightBg to-slate-200 font-sans text-slate-800 h-screen overflow-hidden flex selection:bg-brand-purple selection:text-white relative">

    <!-- Background Soft Purple Glows for Depth -->
    <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-glow-1 z-0 pointer-events-none rounded-full"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] bg-glow-2 z-0 pointer-events-none rounded-full"></div>

    <!-- LEFT SIDE: Branding & Typography -->
    <div class="hidden lg:flex lg:w-1/2 relative z-10 flex-col justify-center px-16 xl:px-24">

        <!-- Main Headline -->
        <h1 class="text-6xl xl:text-7xl font-extrabold text-brand-dark leading-[1.1] mb-6 tracking-tight animate-fade-in-up">
            Transform your <br>
            <span class="text-brand-purple">finances</span> with <br>
            trusted <br>
            accountants.
        </h1>

        <!-- Subheadline -->
        <p class="text-slate-500 text-lg max-w-md mb-10 animate-fade-in-up" style="animation-delay: 0.1s;">
            Apexbooks provides intelligent, data-driven accounting solutions to help your business grow with confidence.
        </p>

        <!-- Call to Action Button -->
        <div class="animate-fade-in-up" style="animation-delay: 0.2s;">
            <button class="bg-brand-purple text-white px-8 py-4 rounded-full font-bold shadow-[0_10px_20px_-10px_rgba(123,104,178,0.6)] hover:shadow-[0_15px_30px_-10px_rgba(123,104,178,0.8)] hover:-translate-y-1 transition-all duration-300">
                Contact Us
            </button>
        </div>

        <!-- 3D Floating Card Element -->
        <div class="absolute bottom-20 right-10 xl:right-32 z-20 pointer-events-none hidden xl:block">
            <div class="relative animate-float-slow">
                <!-- Glow behind the card -->
                <div class="absolute -inset-4 bg-brand-purple/20 blur-2xl rounded-full animate-pulse-glow"></div>

                <!-- The Card -->
                <div class="credit-card w-72 h-44 rounded-2xl p-6 flex flex-col justify-between transform rotate-6">
                    <div class="flex justify-between items-start">
                        <!-- Card Chip / Icon -->
                        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center backdrop-blur-md">
                            <i class="fa-solid fa-chart-pie text-white text-lg"></i>
                        </div>
                        <span class="text-white/90 font-semibold tracking-wider text-sm drop-shadow-sm">Apexbooks</span>
                    </div>

                    <div>
                        <div class="text-white text-xl font-mono tracking-widest mb-4 drop-shadow-md">
                            5022 3386 9820 1246
                        </div>
                        <div class="flex justify-between items-center text-white/80 text-xs font-mono uppercase tracking-wider">
                            <span>Finances</span>
                            <span>01/28</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT SIDE: Login Form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-6 relative z-10">
        <div class="glass-card w-full max-w-md rounded-3xl p-8 md:p-10 animate-fade-in-up" style="animation-delay: 0.3s;">

            <!-- Mobile Logo -->
            <div class="lg:hidden flex items-center justify-center gap-3 mb-8">
                <div class="w-10 h-10 bg-brand-purple rounded-xl flex items-center justify-center text-white shadow-lg shadow-brand-purple/30">
                    <i class="fa-solid fa-chart-line text-xl"></i>
                </div>
                <span class="text-2xl font-bold tracking-tight text-brand-dark">Apexbooks</span>
            </div>

            <h2 class="text-2xl font-bold text-brand-dark mb-2 text-center lg:text-left">Client Portal Login</h2>
            <p class="text-slate-500 text-sm mb-10 text-center lg:text-left">Enter your credentials to access your dashboard.</p>

            <form action="#" method="POST" class="space-y-8">
                @csrf

                <!-- Email Input -->
                <div class="relative input-group">
                    <input type="email" id="email" name="email"
                        class="w-full bg-transparent border-0 border-b-2 border-slate-300 text-brand-dark py-3 px-0 focus:outline-none focus:ring-0 peer placeholder-transparent transition-colors duration-300"
                        placeholder="Email" required>
                    <label for="email" class="absolute left-0 top-3 text-slate-500 text-sm transition-all duration-300 pointer-events-none origin-left">
                        Email Address
                    </label>
                    <i class="fa-regular fa-envelope absolute right-0 top-4 text-slate-400 peer-focus:text-brand-purple transition-colors"></i>
                </div>

                <!-- Password Input -->
                <div class="relative input-group">
                    <input type="password" id="password" name="password"
                        class="w-full bg-transparent border-0 border-b-2 border-slate-300 text-brand-dark py-3 px-0 focus:outline-none focus:ring-0 peer placeholder-transparent transition-colors duration-300"
                        placeholder="Password" required>
                    <label for="password" class="absolute left-0 top-3 text-slate-500 text-sm transition-all duration-300 pointer-events-none origin-left">
                        Password
                    </label>
                    <i class="fa-regular fa-eye absolute right-0 top-4 text-slate-400 cursor-pointer hover:text-brand-purple transition-colors"></i>
                </div>

                <!-- Options -->
               

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full relative overflow-hidden group bg-brand-purple text-white font-bold py-4 rounded-xl shadow-[0_10px_20px_-10px_rgba(123,104,178,0.5)] hover:shadow-[0_15px_30px_-10px_rgba(123,104,178,0.7)] transition-all duration-300 transform hover:-translate-y-0.5 mt-4">
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        Sign In Securely <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </span>
                    <div class="absolute inset-0 -translate-x-full group-hover:animate-[shimmer_1.5s_infinite] bg-gradient-to-r from-transparent via-white/30 to-transparent z-0"></div>
                </button>
            </form>

            <!-- Footer Link -->
            <p class="mt-8 text-center text-sm text-slate-500">
                Don't have an account?
                <a href="#" class="font-bold text-brand-purple hover:text-brand-darkPurple transition-colors underline decoration-slate-300 underline-offset-4 hover:decoration-brand-purple">Request a demo</a>
            </p>

        </div>
    </div>

    <!-- Custom JavaScript -->
    <script src="{{asset('js/2.js')}}"></script>
    
</body>
</html>