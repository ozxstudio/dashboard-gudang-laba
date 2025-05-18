<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'OZX | Laravel')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('styles')
</head>

<body>

    {{-- Navbar --}}
    <nav class="blue darken-2">
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo">Gloriabank</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/">Beranda</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn-flat white-text">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    {{-- Content --}}
    <main class="container section">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="page-footer grey lighten-4">
        <div class="container center grey-text text-darken-2">
            © {{ date('Y') }} Gloriabank – Dibangun untuk masa depan, bukan sekadar profit.
        </div>
    </footer>

    {{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    @stack('scripts')

</body>

</html>
