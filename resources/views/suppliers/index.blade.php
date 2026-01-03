@extends('layouts.app')

@section('title', 'Data Supplier')

@section('content')

<div class="dashboard-container">

    <!-- PAGE HEADER -->
    <div class="d-flex justify-content-between align-items-start mb-4">
        <div>
            <h2 class="fw-bold mb-1">Data Supplier</h2>
            <p class="text-muted mb-0">
                Kelola data supplier sebagai mitra pengadaan barang
            </p>
        </div>

        @if(auth()->user()->role === 'admin')
        <a href="{{ route('suppliers.create') }}"
           class="btn btn-primary rounded-pill px-4">
            <i class="bi bi-plus-lg me-1"></i> Tambah Supplier
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
        <i class="bi bi-truck"></i>
        <span>Daftar Supplier</span>
    </div>

</div>


        <!-- CARD BODY -->
        <div class="card-body p-4">

            <div class="table-responsive">
                <table class="table table-borderless align-middle mb-0 category-table">
                    <thead>
                        <tr class="text-uppercase text-muted small">
                            <th width="60">No</th>
                            <th>Nama Supplier</th>
                            <th>Kontak</th>
                            <th>Alamat</th>
                            <th width="140" class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($suppliers as $i => $supplier)
                        <tr class="table-row-soft">
                            <td class="text-muted">{{ $i + 1 }}</td>
                            <td class="fw-semibold">{{ $supplier->name }}</td>
                            <td>{{ $supplier->contact }}</td>
                            <td>{{ $supplier->address }}</td>

                            <td class="text-center">
                                <a href="{{ route('suppliers.edit',$supplier->id) }}"
                                   class="btn btn-sm btn-warning-soft me-1">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <form action="{{ route('suppliers.destroy',$supplier->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger-soft"
                                        onclick="return confirm('Hapus supplier ini?')">
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
