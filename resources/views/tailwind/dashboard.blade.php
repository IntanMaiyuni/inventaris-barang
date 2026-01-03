@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="space-y-6">

    {{-- WELCOME --}}
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl p-8 shadow-2xl flex justify-between items-center text-white transform hover:scale-105 transition-all duration-500 border-4 border-white/20">
        <div>
            <h4 class="text-3xl font-extrabold drop-shadow-lg">👋 Selamat Datang, Admin</h4>
            <p class="text-lg mt-3 opacity-95 font-medium">
                Ringkasan sistem inventaris barang hari ini
            </p>
        </div>
        <span id="todayDate" class="text-lg opacity-90 font-semibold bg-white/20 px-4 py-2 rounded-full"></span>
    </div>

    {{-- STAT CARD GRID --}}
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

        {{-- KATEGORI --}}
        <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 flex items-center justify-between transform hover:scale-105 transition-transform duration-300">
            <div>
                <p class="text-sm text-indigo-600 font-medium">Total Kategori</p>
                <h2 class="text-3xl font-bold text-gray-800">{{ $totalCategories }}</h2>
            </div>
            <div class="bg-indigo-500 text-white p-4 rounded-full text-3xl shadow-md">
                <i class="bi bi-tags"></i>
            </div>
        </div>

        {{-- PRODUCT --}}
        <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 flex items-center justify-between transform hover:scale-105 transition-transform duration-300">
            <div>
                <p class="text-sm text-green-600 font-medium">Total Product</p>
                <h2 class="text-3xl font-bold text-gray-800">{{ $totalProducts }}</h2>
            </div>
            <div class="bg-green-500 text-white p-4 rounded-full text-3xl shadow-md">
                <i class="bi bi-box"></i>
            </div>
        </div>

        {{-- SUPPLIER --}}
        <div class="bg-white p-6 rounded-xl shadow flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Supplier</p>
                <h2 class="text-3xl font-bold text-gray-800">{{ $totalSuppliers }}</h2>
            </div>
            <div class="bg-yellow-100 text-yellow-600 p-4 rounded-full text-3xl">
                <i class="bi bi-truck"></i>
            </div>
        </div>

        {{-- STOK RENDAH --}}
        <div class="bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 flex items-center justify-between transform hover:scale-105 transition-transform duration-300">
            <div>
                <p class="text-sm text-red-600 font-medium">Stok Rendah</p>
                <h2 class="text-3xl font-bold text-gray-800">{{ $lowStock }}</h2>
            </div>
            <div class="bg-red-500 text-white p-4 rounded-full text-3xl shadow-md">
                <i class="bi bi-exclamation-triangle"></i>
            </div>
        </div>

    </div>

    {{-- INFO --}}
    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-blue-500">
        <h5 class="font-semibold text-gray-800 mb-2 flex items-center">
            <i class="bi bi-info-circle-fill text-blue-600 mr-2"></i> Informasi Sistem
        </h5>
        <p class="text-sm text-gray-600 leading-relaxed">
            Dashboard ini menampilkan ringkasan data inventaris secara real-time
            untuk membantu admin dalam pengambilan keputusan pengelolaan barang.
        </p>
    </div>

</div>

{{-- DATE --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("todayDate").textContent =
            new Date().toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });
    });
</script>

@endsection
