<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Online Sederhana')</title>
    <!-- Menggunakan Tailwind CSS via CDN untuk kemudahan styling -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
        <a href="/" class="text-xl font-bold text-blue-600">TokoOnline</a>
        <div class="space-x-4">
            <a href="/" class="hover:text-blue-600">Beranda</a>
            <a href="/produk" class="hover:text-blue-600">Produk</a>
            <a href="/hubungi-kami" class="text-blue-600 font-semibold">Hubungi Kami</a>
        </div>
    </nav>

    <!-- Content Section -->
    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-inner py-4 text-center text-sm text-gray-500">
        &copy; 2026 Toko Online Sederhana. Laravel 12.
    </footer>

</body>
</html>