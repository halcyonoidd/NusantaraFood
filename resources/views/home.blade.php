
@extends('layouts.app')

@section('title', 'Home | Nusantara Food')

@section('content')
    <section class="overflow-hidden bg-orange-950 text-white">
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 md:grid-cols-2 md:py-28">
            <div>
                <p class="mb-5 text-sm font-bold uppercase tracking-[0.25em] text-orange-300">
                    Authentic Indonesian Cuisine
                </p>

                <h1 class="text-4xl font-extrabold leading-tight md:text-6xl">
                    Discover the Taste
                    <span class="text-orange-300">of Indonesia.</span>
                </h1>

                <p class="mt-6 max-w-xl text-base leading-8 text-orange-100 md:text-lg">
                    Experience the rich flavors of Indonesian cuisine,
                    from aromatic Rendang to delicious Nasi Goreng.
                    Order your favorite dishes with ease.
                </p>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('menu.index') }}"
                       class="rounded-xl bg-orange-500 px-6 py-3 font-bold transition hover:bg-orange-400">
                        Explore Our Menu
                    </a>

                    <a href="#about"
                       class="rounded-xl border border-orange-300/40 px-6 py-3 font-bold transition hover:bg-white/10">
                        Our Story
                    </a>
                </div>

                <div class="mt-10 flex flex-wrap gap-8 text-sm text-orange-100">
                    <div>
                        <p class="text-2xl font-extrabold text-white">100%</p>
                        <p>Indonesian Flavors</p>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-white">Fresh</p>
                        <p>Prepared with Care</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -inset-4 rounded-full bg-orange-500/20 blur-3xl"></div>

                <div class="relative rounded-3xl border border-orange-700/50 bg-orange-900 p-5 shadow-2xl md:p-8">
                    <div class="flex aspect-square items-center justify-center overflow-hidden rounded-2xl bg-orange-800">
                        <span class="text-9xl" role="img" aria-label="Indonesian food">
                            🍛
                        </span>
                    </div>

                    <div class="flex items-center justify-between gap-4 pt-6">
                        <div>
                            <p class="text-xl font-bold">A Taste of Home</p>
                            <p class="mt-1 text-sm text-orange-200">
                                Traditional recipes, unforgettable flavors.
                            </p>
                        </div>
                        <span class="text-3xl" aria-hidden="true">🌶️</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="mx-auto max-w-7xl px-6 py-20">
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-orange-700">
                Why Choose Us?
            </p>

            <h2 class="mt-3 text-3xl font-extrabold md:text-4xl">
                More Than Just Food
            </h2>

            <p class="mt-4 leading-7 text-stone-600">
                We bring the warmth of Indonesian hospitality to every meal,
                celebrating the food and traditions that bring people together.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-3">
            <article class="rounded-2xl border border-stone-200 bg-white p-7 transition hover:-translate-y-1 hover:shadow-lg">
                <span class="text-4xl" aria-hidden="true">🌶️</span>
                <h3 class="mt-5 text-xl font-bold">Authentic Spices</h3>
                <p class="mt-3 leading-7 text-stone-600">
                    Discover the distinctive flavors of traditional Indonesian spices.
                </p>
            </article>

            <article class="rounded-2xl border border-stone-200 bg-white p-7 transition hover:-translate-y-1 hover:shadow-lg">
                <span class="text-4xl" aria-hidden="true">🍽️</span>
                <h3 class="mt-5 text-xl font-bold">Regional Favorites</h3>
                <p class="mt-3 leading-7 text-stone-600">
                    Explore beloved dishes inspired by the diverse regions of Indonesia.
                </p>
            </article>

            <article class="rounded-2xl border border-stone-200 bg-white p-7 transition hover:-translate-y-1 hover:shadow-lg">
                <span class="text-4xl" aria-hidden="true">🛍️</span>
                <h3 class="mt-5 text-xl font-bold">Easy Online Ordering</h3>
                <p class="mt-3 leading-7 text-stone-600">
                    Choose your favorite dishes and place your order in just a few steps.
                </p>
            </article>
        </div>
    </section>
@endsection
