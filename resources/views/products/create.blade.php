@extends('layouts.app')

@section('title','Tambah Produk')

@section('content')

<div class="dashboard-container">

    <!-- HEADER -->
    <div class="dashboard-header">
        <div>
            <h2>Tambah Produk</h2>
            <p class="text-muted mb-0">
                Tambahkan data produk baru ke dalam sistem
            </p>
        </div>
    </div>

    <!-- CARD FORM -->
    <div class="card border-0 rounded-4 shadow-lg mt-4">
        <div class="card-body p-4">

            <form action="{{ route('products.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="fw-semibold">Nama Produk</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Nama produk"
                           required>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Kategori</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Harga</label>
                    <input type="number"
                           name="price"
                           class="form-control"
                           placeholder="Harga produk"
                           required>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Stok</label>
                    <input type="number"
                           name="stock"
                           class="form-control"
                           min="0"
                           placeholder="Jumlah stok"
                           required>
                </div>

                <div class="mb-4">
                    <label class="fw-semibold">Gambar Produk</label>
                    <input type="file"
                           name="image"
                           class="form-control"
                           accept="image/*">
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-primary">
                        <i class="bi bi-save me-1"></i> Simpan
                    </button>

                    <a href="{{ route('products.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
