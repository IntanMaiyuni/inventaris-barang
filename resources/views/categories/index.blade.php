@extends('layouts.app')

@section('title', 'Data Kategori')

@section('content')

<div class="dashboard-container">

    <!-- PAGE HEADER -->
    <div class="d-flex justify-content-between align-items-start mb-4">
        <div>
            <h2 class="fw-bold mb-1">Data Kategori</h2>
            <p class="text-muted mb-0">
                Kelola kategori barang dalam sistem inventaris
            </p>
        </div>

        @if(auth()->user()->role === 'admin')
        <a href="{{ route('categories.create') }}"
           class="btn btn-primary rounded-pill px-4">
            <i class="bi bi-plus-lg me-1"></i> Tambah Kategori
        </a>
        @endif
    </div>

    <!-- ALERT SUCCESS -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-4">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- MAIN CARD -->
    <div class="card border-0 rounded-4 shadow-lg overflow-hidden">

      <!-- CARD HEADER -->
<div class="px-4 py-3"
     style="background: linear-gradient(135deg,#f8faff,#eef3ff);">
    <div class="card-title-inline">
        <i class="bi bi-folder2-open"></i>
        <span>Daftar Kategori</span>
    </div>

</div>


        <!-- CARD BODY -->
        <div class="card-body p-4">

            @if($categories->isEmpty())
                <div class="text-center py-5">
                    <i class="bi bi-inbox fs-1 text-muted"></i>
                    <h5 class="mt-3">Belum ada kategori</h5>
                    <p class="text-muted">
                        Tambahkan kategori untuk mulai mengelola data barang.
                    </p>
                </div>
            @else

            <div class="table-responsive">
                <table class="table table-borderless align-middle mb-0 category-table">

                    <thead>
                        <tr class="text-uppercase text-muted small">
                            <th width="60">No</th>
                            <th>Nama Kategori</th>
                            @if(auth()->user()->role === 'admin')
                                <th width="140" class="text-center">Aksi</th>
                            @endif
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($categories as $index => $category)
                        <tr class="table-row-soft">
                            <td class="text-muted">{{ $index + 1 }}</td>

                            <td>
                                <span class="fw-semibold">
                                    {{ $category->name }}
                                </span>
                            </td>

                            @if(auth()->user()->role === 'admin')
                            <td class="text-center">
                                <a href="{{ route('categories.edit', $category->id) }}"
                                   class="btn btn-sm btn-warning-soft me-1">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <form action="{{ route('categories.destroy', $category->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="btn btn-sm btn-danger-soft"
                                        onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            @endif

        </div>
    </div>

</div>

@endsection
