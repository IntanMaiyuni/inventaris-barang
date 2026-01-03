@extends('auth.auth-split')

@section('title','Login')

@section('form')
<h2 class="mb-2">Welcome Back 👋</h2>
<p class="mb-4 text-muted">
    Silakan login untuk mengakses sistem inventaris
</p>

@if($errors->any())
<div class="alert alert-danger">
    {{ $errors->first() }}
</div>
@endif

<form method="POST" action="{{ route('login') }}">
@csrf

<div class="mb-3">
    <label>Email</label>
    <input type="email"
           name="email"
           class="form-control"
           placeholder="email@email.com"
           required>
</div>

<div class="mb-4">
    <label>Password</label>
    <input type="password"
           name="password"
           class="form-control"
           placeholder="********"
           required>
</div>

<button class="btn btn-primary w-100">
    Sign In
</button>
</form>
@endsection

@section('switch-url', route('register'))
@section('switch-text', 'Create new account')
