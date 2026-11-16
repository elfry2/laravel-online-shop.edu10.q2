@extends('layouts.app')

@section('title', 'Hubungi Kami - Toko Online Sederhana')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-4 text-gray-800">Hubungi Kami</h1>
    <p class="text-gray-600 mb-6">Punya pertanyaan, kendala, atau saran? Jangan ragu untuk mengisi formulir di bawah ini atau hubungi kontak resmi kami.</p>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Informasi Kontak -->
        <div>
            <h2 class="text-xl font-semibold mb-3 text-gray-700">Informasi Toko</h2>
            <p class="mb-2 text-gray-600"><strong>Alamat:</strong> Jl. Merdeka No. 123, Pekanbaru, Riau</p>
            <p class="mb-2 text-gray-600"><strong>Email:</strong> support@tokoonline.test</p>
            <p class="mb-2 text-gray-600"><strong>Telepon/WhatsApp:</strong> +62 812-3456-7890</p>
            <p class="text-gray-600"><strong>Jam Kerja:</strong> Senin - Jumat (08.00 - 17.00 WIB)</p>
        </div>

        <!-- Form Pesan -->
        <form action="" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" name="name" required class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                <textarea name="message" rows="4" required class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300"></textarea>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Kirim Pesan</button>
        </form>
    </div>
</div>
@endsection