<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased min-h-screen py-10">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header & Tombol Tambah -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-900">Daftar Produk</h1>
                <p class="text-sm text-gray-500 mt-1">Kelola data produk dan inventaris toko Anda di sini.</p>
            </div>
            <a href="{{ route('products.create') }}" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg shadow-sm transition-colors duration-150">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path></svg>
                Tambah Baru
            </a>
        </div>

        <!-- Tabel Produk -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-left text-sm">
                    <thead class="bg-gray-50 text-gray-700 font-semibold">
                        <tr>
                            <th scope="col" class="px-6 py-3.5 w-16 text-center">No.</th>
                            <th scope="col" class="px-6 py-3.5">Gambar</th>
                            <th scope="col" class="px-6 py-3.5">Nama</th>
                            <th scope="col" class="px-6 py-3.5">Harga</th>
                            <th scope="col" class="px-6 py-3.5">Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @forelse ($products as $product)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-4 text-center font-medium text-gray-500">
                                {{ $products->firstItem() + $loop->index }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-14 h-14 rounded-lg overflow-hidden bg-gray-100 border border-gray-200 flex-shrink-0">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900">
                                {{ $product->name }}
                            </td>
                            <td class="px-6 py-4 text-gray-600 font-mono">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $product->stock > 0 ? 'bg-green-50 text-green-700' : 'bg-red-50 text-red-700' }}">
                                    {{ $product->stock }} unit
                                </span>
                            </td>
                            <td>
                                <form method="POST" action={{ route('products.destroy', ['id' => $product->id]) }}>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                                Belum ada data produk yang tersedia.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Paginasi -->
            @if ($products->hasPages())
                <div class="px-6 py-4 border-t border-gray-200 bg-white">
                    {{ $products->links() }}
                </div>
            @endif
        </div>
    </div>

</body>
</html>