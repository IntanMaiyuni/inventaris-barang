@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="dashboard-container">


    <!-- WELCOME -->
    <div class="welcome-card">
        <div>
            <h4>👋 Selamat Datang, Admin</h4>
            <p>Ringkasan sistem inventaris barang hari ini</p>
        </div>
        <span class="date" id="todayDate"></span>
    </div>

    <!-- STAT -->
    <div class="stat-grid">
        <div class="stat-box stat-blue">
            <span>Total Kategori</span>
            <h2>{{ $totalKategori ?? 0 }}</h2>
            <div class="stat-icon"><i class="bi bi-tags"></i></div>
        </div>

        <div class="stat-box stat-green">
            <span>Total Barang</span>
            <h2>{{ $totalBarang ?? 0 }}</h2>
            <div class="stat-icon"><i class="bi bi-box"></i></div>
        </div>

        <div class="stat-box stat-orange">
            <span>Total Supplier</span>
            <h2>{{ $totalSupplier ?? 0 }}</h2>
            <div class="stat-icon"><i class="bi bi-truck"></i></div>
        </div>

        <div class="stat-box stat-red">
            <span>Stok Rendah</span>
            <h2>{{ $stokRendah ?? 0 }}</h2>
            <div class="stat-icon"><i class="bi bi-exclamation-triangle"></i></div>
        </div>
    </div>

    <!-- INFO -->
    <div class="info-card">
        <h5><i class="bi bi-info-circle-fill"></i> Informasi Sistem</h5>
        <p>
            Dashboard ini menampilkan ringkasan data inventaris secara real-time
            untuk membantu admin dalam pengambilan keputusan pengelolaan barang.
        </p>
    </div>

</div>

{{-- DATE AUTO --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const el = document.getElementById("todayDate");
        if (el) {
            el.textContent = new Date().toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });
        }
    });
</script>

@endsection
