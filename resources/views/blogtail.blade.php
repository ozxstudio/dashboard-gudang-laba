@extends('layouts.main')

@section('title', 'Blog GudangLaba')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Blog GudangLaba</h1>

    <div class="space-y-8">
        {{-- Contoh artikel --}}
        <article class="bg-white p-6 shadow rounded">
            <h2 class="text-xl font-semibold text-blue-600">Judul Artikel Pertama</h2>
            <p class="text-sm text-gray-500">Dipublikasikan: 17 Mei 2025</p>
            <p class="mt-2 text-gray-700">
                Ini adalah artikel pertama dari blog Blog GudangLaba. Di sini kita berbagi wawasan tentang keuangan etis,
                audit
                publik, dan transparansi.
            </p>
        </article>

        {{-- Tambahkan lebih banyak artikel di sini --}}
    </div>
@endsection
