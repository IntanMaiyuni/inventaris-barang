<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    {{-- MAZER CSS --}}
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/app.css') }}">

    <style>
        body {
            background: #f4f7fe;
        }

        .auth-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-card {
            width: 100%;
            max-width: 900px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0,0,0,0.15);
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: #ffffff;
        }

        .auth-left {
            padding: 3rem;
        }

        .auth-right {
            background: linear-gradient(135deg, #5b6ee1, #4f46e5);
            color: #ffffff;
            padding: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        @media (max-width: 768px) {
            .auth-card {
                grid-template-columns: 1fr;
            }
            .auth-right {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="auth-wrapper">

    <div class="auth-card">

        {{-- LEFT / FORM --}}
        <div class="auth-left">
            @yield('form')

            <hr>
            <div class="text-center">
                <a href="@yield('switch-url')" class="text-decoration-none">
                    @yield('switch-text')
                </a>
            </div>
        </div>

        {{-- RIGHT / INFO --}}
        <div class="auth-right">
            <div>
                <h2>Hello, Friend! 👋</h2>
                <p class="mt-3">
                    Masukkan data pribadi untuk mulai menggunakan
                    sistem inventaris
                </p>
                <a href="@yield('switch-url')" class="btn btn-outline-light mt-3">
                    Create new account
                </a>
            </div>
        </div>

    </div>

</div>

</body>
</html>
