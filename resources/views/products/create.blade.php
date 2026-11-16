<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk Baru</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

    <div class="max-w-2xl w-full bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-100">
        <!-- Header Form -->
        <div class="bg-indigo-600 px-8 py-6 text-white">
            <h2 class="text-2xl font-bold tracking-tight">Tambah Produk Baru</h2>
            <p class="text-indigo-100 text-sm mt-1">Silakan lengkapi informasi produk di bawah ini untuk menambahkannya ke inventaris.</p>
        </div>

        <!-- Form Body -->
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
            @csrf

            <!-- Pesan Error Validasi Global (Opsional) -->
            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-md text-red-700 text-sm">
                    <p class="font-semibold">Terjadi beberapa kesalahan:</p>
                    <ul class="list-disc list-inside mt-1 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Nama Produk -->
            <div>
                <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Nama Produk <span class="text-red-500">*</span></label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition text-sm @error('name') border-red-500 @enderror"
                    placeholder="Contoh: Sepatu Sneakers Pria">
                @error('name')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Grid untuk Harga dan Stok -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Harga -->
                <div>
                    <label for="price" class="block text-sm font-semibold text-slate-700 mb-2">Harga (Rp) <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-500 text-sm font-medium">Rp</span>
                        <input type="number" step="any" name="price" id="price" value="{{ old('price') }}" required
                            class="w-full pl-12 pr-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition text-sm @error('price') border-red-500 @enderror"
                            placeholder="0">
                    </div>
                    @error('price')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Stok -->
                <div>
                    <label for="stock" class="block text-sm font-semibold text-slate-700 mb-2">Stok <span class="text-red-500">*</span></label>
                    <input type="number" step="any" name="stock" id="stock" value="{{ old('stock', 0) }}" required
                        class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition text-sm @error('stock') border-red-500 @enderror"
                        placeholder="0">
                    @error('stock')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Gambar Produk -->
            <div>
                <label for="image" class="block text-sm font-semibold text-slate-700 mb-2">Foto Produk <span class="text-slate-400 font-normal">(Opsional)</span></label>
                <input type="file" name="image" id="image" accept="image/*"
                    class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition cursor-pointer border border-slate-300 rounded-lg">
                @error('image')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Deskripsi -->
            <div>
                <label for="description" class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi Produk <span class="text-slate-400 font-normal">(Opsional)</span></label>
                <textarea name="description" id="description" rows="4"
                    class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition text-sm @error('description') border-red-500 @enderror"
                    placeholder="Tuliskan detail spesifikasi atau keterangan produk...">{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Tombol Aksi -->
            <div class="flex items-center justify-end space-x-4 pt-4 border-t border-slate-100">
                <a href="{{ url()->previous() }}" class="px-6 py-3 rounded-lg border border-slate-300 text-slate-700 hover:bg-slate-50 font-medium text-sm transition">
                    Batal
                </a>
                <button type="submit" class="px-6 py-3 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-sm shadow-md hover:shadow-lg transition">
                    Simpan Produk
                </button>
            </div>
        </form>
    </div>

</body>
</html>