
@extends('layouts.app')

@section('title', 'Menu Makanan | Nusantara Food')

@section('content')
    <section class="mx-auto max-w-7xl px-6 py-16">
        <p class="text-sm font-semibold uppercase tracking-widest text-orange-700">
            Menu Kami
        </p>

        <h1 class="mt-3 text-4xl font-extrabold">
            Jelajahi Cita Rasa Indonesia
        </h1>

        <p class="mt-4 max-w-2xl leading-7 text-stone-600">
            Dari hidangan utama hingga minuman segar,
            temukan sajian favoritmu di sini.
        </p>

        <div class="mt-10 rounded-2xl border border-dashed border-stone-300 p-10 text-center">
            <p class="text-lg font-semibold">
                Menu makanan akan ditampilkan di sini.
            </p>

            <p class="mt-2 text-sm text-stone-500">
                Pada tahap berikutnya, halaman ini akan mengambil
                data produk dari database PostgreSQL.
            </p>
        </div>
    </section>
@endsection
