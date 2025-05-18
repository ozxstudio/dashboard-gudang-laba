@extends('layouts.main')

@section('title', 'Blog GudangLaba')

@section('content')

    <h1 class="center-align blue-text text-darken-2">Blog GudangLaba</h1>

    <div class="section">
        {{-- Artikel pertama --}}
        <div class="card">
            <div class="card-content">
                <span class="card-title">Judul Artikel Pertama</span>
                <p class="grey-text text-darken-1">Dipublikasikan: 17 Mei 2025</p>
                <p>
                    Ini adalah artikel pertama dari blog GudangLaba. Di sini kita berbagi wawasan tentang keuangan etis,
                    audit publik, dan transparansi.
                </p>
            </div>
            <div class="card-action">
                <a href="#">Baca Selengkapnya</a>
            </div>
        </div>

        {{-- Tambahkan artikel berikutnya di sini --}}
    </div>

@endsection
