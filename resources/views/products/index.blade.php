@extends('layouts.app')

@section('title', 'Data Produk')

@section('content')

<div class="dashboard-container">

    <!-- PAGE HEADER -->
    <div class="d-flex justify-content-between align-items-start mb-4">
        <div>
            <h2 class="fw-bold mb-1">Data Produk</h2>
            <p class="text-muted mb-0">
                Kelola data barang dalam sistem inventaris
            </p>
        </div>

        @if(auth()->user()->role === 'admin')
        <a href="{{ route('products.create') }}"
           class="btn btn-primary rounded-pill px-4">
            <i class="bi bi-plus-lg me-1"></i> Tambah Produk
        </a>
        @endif
    </div>

    <!-- ALERT -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-4">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- CARD -->
    <div class="card border-0 rounded-4 shadow-lg overflow-hidden">

        <!-- CARD HEADER -->
<div class="px-4 py-3"
     style="background: linear-gradient(135deg,#f8faff,#eef3ff);">
    <div class="card-title-inline">
        <i class="bi bi-box-seam"></i>
        <span>Daftar Produk</span>
    </div>

</div>


        <!-- CARD BODY -->
        <div class="card-body p-4">

            <div class="table-responsive">
                <table class="table table-borderless align-middle mb-0 category-table">
                    <thead>
                        <tr class="text-uppercase text-muted small">
                            <th width="80">Gambar</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th width="140" class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($products as $product)
                        <tr class="table-row-soft">

                            <td>
                                @if($product->image)
                                    <img src="{{ asset('storage/'.$product->image) }}"
                                         class="rounded-3"
                                         width="56">
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>

                            <td class="fw-semibold">{{ $product->name }}</td>
                            <td>{{ $product->category->name ?? '-' }}</td>
                            <td>Rp {{ number_format($product->price) }}</td>
                            <td>
                                <span class="badge bg-primary-subtle text-primary">
                                    {{ $product->stock }}
                                </span>
                            </td>

                            <td class="text-center">
                                <a href="{{ route('products.edit',$product->id) }}"
                                   class="btn btn-sm btn-warning-soft me-1">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <form action="{{ route('products.destroy',$product->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger-soft"
                                        onclick="return confirm('Hapus produk ini?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

@endsection
