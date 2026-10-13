
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

<body class="min-h-screen bg-stone-50 text-stone-900 antialiased">

    <!-- Navigation -->
    <header class="border-b border-stone-200 bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

            <a href="{{ route('home') }}"
               class="text-xl font-extrabold tracking-tight text-orange-800">
                Nusantara Food<span class="text-orange-500">.</span>
            </a>

            <nav class="flex items-center gap-6 text-sm font-semibold">
                <a href="{{ route('home') }}"
                   class="text-stone-700 transition hover:text-orange-700">
                    Home
                </a>

                <a href="{{ route('menu.index') }}"
                   class="text-stone-700 transition hover:text-orange-700">
                    Menu
                </a>

                <a href="#contact"
                   class="hidden text-stone-700 transition hover:text-orange-700 sm:block">
                    Contact
                </a>

                <a href="{{ route('menu.index') }}"
                   class="rounded-lg bg-orange-600 px-4 py-2.5 text-white transition hover:bg-orange-700">
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
    <footer id="contact" class="mt-16 border-t border-stone-200 bg-white">
        <div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-8 md:flex-row md:items-center md:justify-between">

            <div>
                <p class="text-lg font-extrabold text-orange-800">
                    Nusantara Food
                </p>

                <p class="mt-1 text-sm text-stone-500">
                    Authentic Indonesian flavors, in every dish.
                </p>
            </div>

            <p class="text-sm text-stone-500">
                &copy; {{ date('Y') }} Nusantara Food. All rights reserved.
            </p>

        </div>
    </footer>

</body>
</html>
