
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Nusantara Food')</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="min-h-screen bg-[#f8f3ee] text-[#1f2937] antialiased">

    <!-- Navigation -->
    <header class="border-b border-[#f0e2d5] bg-[#2C211D] shadow-sm shadow-[#f1d7c9]/30">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

            <a href="{{ route('home') }}"
               class="text-xl font-extrabold tracking-tight text-[#E8DDC7]">
                Nusantara Food<span class="text-[#F4C95D]">.</span>
            </a>

            <nav class="flex items-center gap-6 text-sm font-semibold">
                <a href="{{ route('home') }}"
                   class="text-[#F8F5EE] transition hover:text-[#C7A46A]">
                    Home
                </a>

                <a href="{{ route('menu.index') }}"
                   class="text-[#F8F5EE] transition hover:text-[#C7A46A]">
                    Menu
                </a>

                <a href="#contact"
                   class="hidden text-[#F8F5EE] transition hover:text-[#C7A46A] sm:block">
                    Contact
                </a>

                <a href="{{ route('menu.index') }}"
                   class="rounded-lg bg-[#E8DDC7] px-4 py-2.5 text-[#2C211D] transition hover:bg-[#C7A46A]">
                    Order Now
                </a>
            </nav>

        </div>
    </header>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="contact" class="border-t border-[#f0e2d5] bg-[#2C211D]">
        <div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-8 md:flex-row md:items-center md:justify-between">

            <div>
                <p class="text-lg font-extrabold text-[#E8DDC7]">
                    Nusantara Food
                </p>

                <p class="mt-1 text-sm text-[#C7A46A]">
                    Authentic Indonesian flavors, in every dish.
                </p>
            </div>

            <p class="text-sm text-[#C7A46A]">
                &copy; {{ date('Y') }} Nusantara Food. All rights reserved.
            </p>

        </div>
    </footer>

</body>
</html>
