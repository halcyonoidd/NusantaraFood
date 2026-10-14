@extends('layouts.app')

@section('title', 'Home | Nusantara Food')

@section('content')

    <section class="relative isolate overflow-hidden bg-[#E8DDC7] text-[#2C211D]">

        <div class="pointer-events-none absolute -right-20 -top-20 h-80 w-80 rounded-full bg-[#F8F5EE]/70 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-24 left-1/4 h-72 w-72 rounded-full bg-[#75452F]/10 blur-3xl"></div>
        <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-6 py-16 md:grid-cols-[1.05fr_0.95fr] md:gap-10 md:py-24 lg:py-28">

            <div class="relative z-10 min-w-0">
                <div class="mb-6 flex items-center gap-3">
                    <span class="h-px w-10 shrink-0 bg-[#75452F]"></span>
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#75452F] sm:text-sm sm:tracking-[0.25em]">
                        Authentic Indonesian Cuisine
                    </p>
                </div>

                <h1 class="text-5xl font-extrabold leading-[1.08] tracking-tight text-[#2C211D] sm:text-6xl lg:text-7xl">
                    Discover
                    <br>
                    the Taste of
                    <span class="relative inline-block text-[#75452F]">
                        Indonesia

                        <svg
                            class="absolute -bottom-2 left-0 w-full"
                            viewBox="0 0 300 15"
                            fill="none"
                            aria-hidden="true"
                        >
                            <path
                                d="M4 10 C75 2, 190 3, 295 8"
                                stroke="#75452F"
                                stroke-width="4"
                                stroke-linecap="round"
                            />
                        </svg>

                    </span><span class="text-[#2C211D]">.</span>
                </h1>

                <p class="mt-8 max-w-xl text-base leading-8 text-[#2C211D] sm:text-lg">
                    Experience the rich flavors of Indonesian cuisine,
                    from aromatic Rendang to delicious Nasi Goreng.
                    Order your favorite dishes with ease.
                </p>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('menu.index') }}" class="group inline-flex items-center gap-3 rounded-xl bg-[#2C211D] px-6 py-3.5 font-bold text-[#F8F5EE] shadow-lg shadow-[#2C211D]/10 transition duration-300 hover:-translate-y-1 hover:bg-[#75452F]">
                        Explore Our Menu
                    </a>

                    <a href="#about" class="rounded-xl border border-[#75452F] px-6 py-3.5 font-bold text-[#2C211D] transition duration-300 hover:-translate-y-1 hover:bg-[#F8F5EE]/60">
                        Our Story
                    </a>
                </div>

                <div class="mt-12 flex flex-wrap items-center gap-x-8 gap-y-5 border-t border-[#75452F]/20 pt-7 text-sm text-[#2C211D]">
                    <div>
                        <p class="text-2xl font-extrabold">100%</p>
                        <p class="mt-1 text-[#75452F]">Indonesian Flavors</p>
                    </div>

                    <span class="hidden h-10 w-px bg-[#75452F]/20 sm:block"></span>

                    <div>
                        <p class="text-2xl font-extrabold">Fresh</p>
                        <p class="mt-1 text-[#75452F]">Prepared with Care</p>
                    </div>
                </div>
            </div>


            <div class="relative mx-auto w-full max-w-[520px] min-w-0 px-3 pb-5 pt-12 sm:px-6 sm:pb-8 sm:pt-14">
                <div class="pointer-events-none absolute left-1/2 top-1/2 h-[270px] w-[270px] -translate-x-1/2 -translate-y-1/2 rounded-full border border-[#75452F]/30 sm:h-[370px] sm:w-[370px] lg:h-[410px] lg:w-[410px]"></div>
                <div class="pointer-events-none absolute left-1/2 top-1/2 h-[230px] w-[230px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-[#F8F5EE]/50 sm:h-[320px] sm:w-[320px] lg:h-[350px] lg:w-[350px]"></div>

                <div class="absolute left-0 top-7 z-30 -rotate-6 rounded-full bg-[#2C211D] px-4 py-2.5 shadow-lg sm:left-2 sm:top-8">
                    <p class="text-[10px] font-bold uppercase tracking-[0.12em] text-[#F8F5EE] sm:text-xs sm:tracking-[0.15em]">
                        Taste of Heritage
                    </p>
                </div>


                <div class="relative z-10 mx-auto w-[92%]">
                    <div class="rotate-2 overflow-hidden rounded-[2rem] border-[6px] border-[#F8F5EE] bg-[#F8F5EE] shadow-[0_25px_60px_rgba(44,33,29,0.20)] transition-transform duration-500 hover:rotate-0">
                        <img
                            src="{{ asset('img/rendang2.jpg') }}"
                            alt="Main Dish"
                            class="h-[280px] w-full object-cover transition-transform duration-700 hover:scale-105 sm:h-[360px] lg:h-[390px]"
                        >
                    </div>

                    <div class="relative z-10 -mt-1 ml-2 mr-1 flex items-center justify-between gap-3 rounded-2xl border border-[#75452F]/10 bg-[#F8F5EE] px-4 py-4 shadow-xl sm:ml-4 sm:mr-3 sm:px-5">
                        <div class="min-w-0">
                            <p class="text-[9px] font-bold uppercase tracking-[0.15em] text-[#75452F] sm:text-[10px] sm:tracking-[0.2em]">
                                From Our Kitchen
                            </p>

                            <p class="mt-1 text-sm font-extrabold text-[#2C211D] sm:text-base">
                                A Taste of Tradition
                            </p>
                        </div>
                    </div>
                </div>


                <div class="absolute right-0 top-14 z-20 w-[100px] rotate-6 rounded-2xl border-4 border-[#F8F5EE] bg-[#F8F5EE] p-1.5 shadow-xl transition duration-500 hover:rotate-0 hover:scale-105 sm:right-0 sm:top-12 sm:w-32">
                    <img
                        src="{{ asset('img/ayamTaliwang.jpg') }}"
                        alt="ayamTaliwang"
                        class="h-20 w-full rounded-xl object-cover sm:h-24"
                        loading="lazy"
                    >

                    <p class="px-0.5 pb-1 pt-2 text-center text-[9px] font-bold text-[#75452F] sm:text-[10px]">
                        Rich in Flavor
                    </p>
                </div>


                <div class="absolute left-0 top-[58%] z-20 w-[100px] -rotate-6 rounded-2xl border-4 border-[#F8F5EE] bg-[#F8F5EE] p-1.5 shadow-xl transition duration-500 hover:rotate-0 hover:scale-105 sm:left-0 sm:w-32">
                    <img
                        src="{{ asset('img/sotoAyam.jpg') }}"
                        alt="sotoAyam"
                        class="h-20 w-full rounded-xl object-cover sm:h-24"
                        loading="lazy"
                    >

                    <p class="px-0.5 pb-1 pt-2 text-center text-[9px] font-bold text-[#75452F] sm:text-[10px]">
                        Crafted with Love
                    </p>
                </div>
            </div>

        </div>
    </section>


<section id="about" class="relative isolate w-full overflow-hidden bg-[#F8F5EE] py-20">

    {{-- Background Batik Kawung --}}
    <div
        class="pointer-events-none absolute inset-0 z-0"
        aria-hidden="true"
    >
        <div
            class="absolute inset-0 bg-repeat opacity-[0.13]"
            style="
                background-image: url('{{ asset('img/batikKawung.webp') }}');
                background-size: 240px 240px;
                background-position: center;
            "
        ></div>

        {{-- Overlay agar motif terlihat samar --}}
        <div class="absolute inset-0 bg-[#F8F5EE]/55"></div>
    </div>

    {{-- Konten asli --}}
    <div class="relative z-10 mx-auto max-w-7xl px-6">

        <div class="mx-auto max-w-2xl text-center">

            <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#75452F]">
                Why Choose Us?
            </p>

            <h2 class="mt-3 text-3xl font-extrabold text-[#2C211D] md:text-4xl">
                More Than Just Food
            </h2>

            <p class="mt-4 leading-7 text-stone-600">
                We bring the warmth of Indonesian hospitality to every meal,
                celebrating the food and traditions that bring people together.
            </p>

        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-3">

            {{-- Feature 1 --}}
            <article class="rounded-2xl border border-stone-200 bg-white p-7 transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                <span class="text-4xl" aria-hidden="true">🌶️</span>

                <h3 class="mt-5 text-xl font-bold text-[#2C211D]">
                    Authentic Spices
                </h3>

                <p class="mt-3 leading-7 text-stone-600">
                    Discover the distinctive flavors of traditional Indonesian spices.
                </p>

            </article>

            {{-- Feature 2 --}}
            <article class="rounded-2xl border border-stone-200 bg-white p-7 transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                <span class="text-4xl" aria-hidden="true">🍽️</span>

                <h3 class="mt-5 text-xl font-bold text-[#2C211D]">
                    Regional Favorites
                </h3>

                <p class="mt-3 leading-7 text-stone-600">
                    Explore beloved dishes inspired by the diverse regions of Indonesia.
                </p>

            </article>

            {{-- Feature 3 --}}
            <article class="rounded-2xl border border-stone-200 bg-white p-7 transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                <span class="text-4xl" aria-hidden="true">🛍️</span>

                <h3 class="mt-5 text-xl font-bold text-[#2C211D]">
                    Easy Online Ordering
                </h3>

                <p class="mt-3 leading-7 text-stone-600">
                    Choose your favorite dishes and place your order in just a few steps.
                </p>

            </article>

        </div>

    </div>
</section>

@endsection