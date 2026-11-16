@extends('layouts.authentication')
@section('content')
<!-- Card Header -->
                <div class="text-center mb-8">
                    <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight mb-2">Selamat Datang!</h1>
                    <p class="text-sm text-slate-500">Masukkan akun Anda untuk melanjutkan akses</p>
                </div>

                <!-- Alert Message Area -->
                <div id="alert-box" class="hidden mb-6 p-4 rounded-xl text-sm font-medium border transition-all"></div>

                <!-- Login Form -->
                <form id="loginForm" onsubmit="handleLogin(event)" class="space-y-5">
                    
                    <!-- Email / Username Field -->
                    <div>
                        <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Email atau Username</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <input 
                                type="text" 
                                id="email" 
                                name="email" 
                                required
                                placeholder="nama@email.com" 
                                class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white focus:border-transparent transition"
                            >
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Kata Sandi</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <i class="fa-solid fa-lock text-sm"></i>
                            </div>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                required
                                placeholder="••••••••" 
                                class="w-full pl-10 pr-10 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white focus:border-transparent transition"
                            >
                            <!-- Toggle Password Button -->
                            <button 
                                type="button" 
                                id="togglePassword" 
                                class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none"
                            >
                                <i class="fa-regular fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between text-sm pt-1">
                        <label class="flex items-center space-x-2 cursor-pointer select-none">
                            <input 
                                type="checkbox" 
                                id="rememberMe" 
                                class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-0 transition cursor-pointer"
                            >
                            <span class="text-slate-600 font-medium text-xs sm:text-sm">Ingat Saya</span>
                        </label>
                        <a href="#" class="text-xs sm:text-sm font-semibold text-indigo-600 hover:text-indigo-700 hover:underline transition">Lupa Password?</a>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full py-3.5 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-100 text-white font-semibold rounded-xl shadow-md shadow-indigo-100 hover:shadow-lg transition-all duration-200 flex items-center justify-center space-x-2"
                    >
                        <span>Login</span>
                        <i class="fa-solid fa-arrow-right text-sm"></i>
                    </button>
                </form>

                <!-- Footer Sign-up Prompt -->
                <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                    <p class="text-xs sm:text-sm text-slate-500">
                        Belum punya akun? 
                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-700 hover:underline">Daftar sekarang</a>
                    </p>
                </div>
@endsection

@extends('layouts.app')
@section()

@endsection