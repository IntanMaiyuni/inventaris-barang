<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Inventaris')</title>

    {{-- MAZER CSS --}}
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/app.css') }}">

    {{-- BOOTSTRAP ICONS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    {{-- CUSTOM THEME --}}
    <link rel="stylesheet" href="{{ asset('css/custom-theme.css') }}">
</head>
<body>

<div id="app">
    @include('layouts.sidebar')

    <div id="main">
        @include('layouts.navbar')

        <div class="page-content">
            @yield('content')
        </div>
    </div>
</div>

{{-- OVERLAY (MOBILE SIDEBAR) --}}
<div id="sidebarOverlay" class="sidebar-overlay"></div>

{{-- MAZER JS --}}
<script src="{{ asset('mazer/assets/compiled/js/app.js') }}"></script>

{{-- SIDEBAR TOGGLE JS --}}
<script>
document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const toggleBtn = document.getElementById("sidebarToggle");
    const overlay = document.getElementById("sidebarOverlay");

    if (toggleBtn) {
        toggleBtn.addEventListener("click", function () {
            sidebar.classList.toggle("active");
            overlay.classList.toggle("show");
        });
    }

    if (overlay) {
        overlay.addEventListener("click", function () {
            sidebar.classList.remove("active");
            overlay.classList.remove("show");
        });
    }
});
</script>

</body>
</html>
