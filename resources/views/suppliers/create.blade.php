@extends('layouts.app')

@section('title','Tambah Supplier')

@section('content')

<div class="dashboard-container">

    <div class="dashboard-header">
        <div>
            <h2>Tambah Supplier</h2>
            <p class="text-muted mb-0">
                Tambahkan supplier sebagai mitra pengadaan barang
            </p>
        </div>
    </div>

    <div class="card border-0 rounded-4 shadow-lg mt-4">
        <div class="card-body p-4">

            <form action="{{ route('suppliers.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="fw-semibold">Nama Supplier</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Nama supplier"
                           required>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Kontak</label>
                    <input type="text"
                           name="contact"
                           class="form-control"
                           placeholder="Nomor / Email"
                           required>
                </div>

                <div class="mb-4">
                    <label class="fw-semibold">Alamat</label>
                    <textarea name="address"
                              class="form-control"
                              rows="3"
                              placeholder="Alamat supplier"
                              required></textarea>
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-primary">
                        <i class="bi bi-save me-1"></i> Simpan
                    </button>

                    <a href="{{ route('suppliers.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
