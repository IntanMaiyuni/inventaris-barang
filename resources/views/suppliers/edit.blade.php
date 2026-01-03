@extends('layouts.app')

@section('title','Edit Supplier')

@section('content')

<div class="dashboard-container">

    <div class="dashboard-header">
        <div>
            <h2>Edit Supplier</h2>
            <p class="text-muted mb-0">
                Perbarui data supplier
            </p>
        </div>
    </div>

    <div class="card border-0 rounded-4 shadow-lg mt-4">
        <div class="card-body p-4">

            <form action="{{ route('suppliers.update',$supplier->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="fw-semibold">Nama Supplier</label>
                    <input type="text"
                           name="name"
                           value="{{ $supplier->name }}"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Kontak</label>
                    <input type="text"
                           name="contact"
                           value="{{ $supplier->contact }}"
                           class="form-control"
                           required>
                </div>

                <div class="mb-4">
                    <label class="fw-semibold">Alamat</label>
                    <textarea name="address"
                              class="form-control"
                              rows="3"
                              required>{{ $supplier->address }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-warning">
                        <i class="bi bi-pencil-square me-1"></i> Update
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
