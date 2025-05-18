<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gloriabank')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body class="bg-gray-50 text-gray-800 font-sans">
    {{-- Navbar --}}
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-blue-700">Gloriabank</a>
            <nav class="space-x-6">
                <a href="/" class="text-gray-700 hover:text-blue-500">Beranda</a>
                <a href="/blog" class="text-gray-700 hover:text-blue-500">Blog</a>
                <a href="/dashboard" class="text-gray-700 hover:text-blue-500">Dashboard</a>
                @auth
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600 hover:underline">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-500">Login</a>
                @endauth
            </nav>
        </div>
    </header>

    {{-- Content --}}
    <main class="py-10 px-4 max-w-5xl mx-auto">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-100 py-6 mt-20">
        <div class="max-w-7xl mx-auto px-4 text-center text-sm text-gray-500">
            © {{ date('Y') }} Gloriabank. Dibangun untuk masa depan, bukan sekadar profit.
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>
