@extends('layouts.app')

@section('title', 'Hubungi Kami - TokoOnline')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-sm border border-gray-100">
        
        <h1 class="text-2xl font-bold text-gray-900 mb-2">Hubungi Kami</h1>
        <p class="text-gray-600 mb-6">Punya pertanyaan, kendala, atau ingin bekerja sama? Silakan isi form di bawah ini.</p>

        <!-- Notifikasi Sukses (Opsional jika nanti dihubungkan dengan Controller) -->
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg text-sm">
                {{ session('success') }}
            </div>
        @endif

        <form action="/contact" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                <textarea name="message" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"></textarea>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white font-medium py-2.5 rounded-lg hover:bg-indigo-700 transition">
                Kirim Pesan
            </button>
        </form>

    </div>
</div>
@endsection