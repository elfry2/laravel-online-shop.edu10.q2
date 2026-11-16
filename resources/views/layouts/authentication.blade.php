<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Modern</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col justify-between antialiased">

    <!-- NAVBAR -->
    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                
                <!-- Logo & Brand Name -->
                <div class="flex items-center space-x-3 cursor-pointer">
                    <div class="bg-indigo-600 text-white p-2.5 rounded-xl shadow-md shadow-indigo-200 flex items-center justify-center">
                        <i class="fa-solid fa-cube text-xl"></i>
                    </div>
                    <span class="font-bold text-xl tracking-tight text-slate-900">NexaPortal</span>
                </div>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="#" class="text-indigo-600 border-b-2 border-indigo-600 pb-1 font-semibold transition duration-150">Beranda</a>
                    <a href="#" class="text-slate-600 hover:text-indigo-600 transition duration-150">Keunggulan kami</a>
                    <a href="#" class="text-slate-600 hover:text-indigo-600 transition duration-150">Bantuan</a>
                    <a href="#" class="text-slate-600 hover:text-indigo-600 transition duration-150">Kontak</a>
                </nav>

                <!-- Action Button (Desktop) -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-sm font-semibold text-slate-600 hover:text-indigo-600 transition">Daftar</a>
                    <a href="#" class="text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded-lg transition shadow-sm hover:shadow">Masuk</a>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <i class="fa-solid fa-bars text-xl" id="menu-icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden border-b border-slate-200 bg-white px-4 pt-2 pb-4 space-y-2 shadow-lg">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-semibold text-indigo-600 bg-indigo-50">Beranda</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-slate-600 hover:text-indigo-600 hover:bg-slate-50">Fitur</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-slate-600 hover:text-indigo-600 hover:bg-slate-50">Bantuan</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-slate-600 hover:text-indigo-600 hover:bg-slate-50">Kontak</a>
            <div class="pt-3 border-t border-slate-100 flex flex-col space-y-2">
                <a href="#" class="w-full text-center px-4 py-2 rounded-lg border border-slate-200 text-slate-700 font-medium hover:bg-slate-50">Daftar</a>
            </div>
        </div>
    </header>

    <!-- MAIN LOGIN CONTAINER -->
    <main class="flex-grow flex items-center justify-center p-4 sm:p-6 lg:p-8">
        <div class="w-full max-w-md">
            
            <!-- Card Container -->
            <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-100 p-8 sm:p-10 transition-all">
                
                @yield('content')

            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="py-6 text-center text-xs text-slate-400">
        <p>&copy; 2026 NexaPortal. Seluruh Hak Cipta Dilindungi.</p>
    </footer>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // Toggle Mobile Navigation Menu
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        mobileMenuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-xmark');
            } else {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
            }
        });

        // Toggle Password Visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Toggle Icon
            if (type === 'password') {
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        });

        // Form Submit Handler
        function handleLogin(event) {
            event.preventDefault();

            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const rememberMe = document.getElementById('rememberMe').checked;
            const alertBox = document.getElementById('alert-box');

            // Reset Alert Box
            alertBox.className = "hidden mb-6 p-4 rounded-xl text-sm font-medium border transition-all";

            // Simple validation example
            if (email && password) {
                // Show success message
                alertBox.classList.remove('hidden');
                alertBox.classList.add('bg-emerald-50', 'text-emerald-700', 'border-emerald-200');
                alertBox.innerHTML = `
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-circle-check text-emerald-500"></i>
                        <span>Login berhasil! Mengalihkan...</span>
                    </div>
                `;

                // Log values to console for demonstration
                console.log('Login Payload:', {
                    email: email,
                    rememberMe: rememberMe
                });

                // Clear fields (optional)
                setTimeout(() => {
                    alertBox.classList.add('hidden');
                }, 3000);
            } else {
                // Show error message
                alertBox.classList.remove('hidden');
                alertBox.classList.add('bg-rose-50', 'text-rose-700', 'border-rose-200');
                alertBox.innerHTML = `
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-circle-exclamation text-rose-500"></i>
                        <span>Silakan isi semua bidang!</span>
                    </div>
                `;
            }
        }
    </script>
</body>
</html>