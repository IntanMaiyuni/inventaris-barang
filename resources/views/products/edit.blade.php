@extends('layouts.app')

@section('title','Edit Produk')

@section('content')

<div class="dashboard-container">

    <!-- HEADER -->
    <div class="dashboard-header">
        <div>
            <h2>Edit Produk</h2>
            <p class="text-muted mb-0">
                Perbarui data produk yang sudah ada
            </p>
        </div>
    </div>

    <!-- CARD FORM -->
    <div class="card border-0 rounded-4 shadow-lg mt-4">
        <div class="card-body p-4">

            <form action="{{ route('products.update', $product->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="fw-semibold">Nama Produk</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ old('name', $product->name) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Kategori</label>
                    <select name="category_id" class="form-control" required>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}"
                                {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Harga</label>
                    <input type="number"
                           name="price"
                           class="form-control"
                           value="{{ old('price', $product->price) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Stok</label>
                    <input type="number"
                           name="stock"
                           class="form-control"
                           min="0"
                           value="{{ old('stock', $product->stock) }}"
                           required>
                </div>

                @if ($product->image)
                    <div class="mb-3">
                        <label class="fw-semibold">Gambar Saat Ini</label><br>
                        <img src="{{ asset('storage/'.$product->image) }}"
                             class="rounded-3 border"
                             width="120">
                    </div>
                @endif

                <div class="mb-4">
                    <label class="fw-semibold">Ganti Gambar (Opsional)</label>
                    <input type="file"
                           name="image"
                           class="form-control"
                           accept="image/*">
                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti gambar
                    </small>
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-warning">
                        <i class="bi bi-pencil-square me-1"></i> Update
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
