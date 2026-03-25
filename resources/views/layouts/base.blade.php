<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Makers Markt' }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-gray-100 text-gray-800 antialiased">
        <div class="flex min-h-screen flex-col">
            <header class="px-4 pt-4 sm:px-6 lg:px-8">
                <div class="mx-auto w-full max-w-7xl rounded-2xl border border-gray-300 bg-white shadow-sm">
                    <div class="flex items-center justify-between px-4 py-4 sm:px-6">
                        <a href="{{ url('/') }}"
                        class="inline-flex min-w-[120px] items-center justify-center rounded-xl border border-gray-400 bg-gray-50 px-8 py-3 text-sm font-semibold tracking-wide text-gray-700 transition hover:bg-gray-100">
                            LOGO
                        </a>

                        <div class="flex items-center gap-3 sm:gap-6">
                            <nav class="flex items-center gap-2 sm:gap-4">
                                <a href="#"
                                class="rounded-lg px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-100">
                                    Shop
                                </a>
                                <a href="#"
                                class="rounded-lg px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-100">
                                    Sell
                                </a>
                                <a href="#"
                                class="rounded-lg px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-100">
                                    Over ons
                                </a>
                            </nav>

                            @guest
                                <a href="{{ route('login') }}"
                                class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-800 transition hover:bg-gray-100">
                                    Login
                                </a>
                                <a href="{{ route('register') }}"
                                class="rounded-lg bg-gray-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-black">
                                    Register
                                </a>
                            @endguest

                            @auth
                                <a href="{{ route('dashboard') }}"
                                class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-800 transition hover:bg-gray-100">
                                    Dashboard
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </header>

            <main class="mx-auto w-full max-w-7xl flex-1 px-4 py-10 sm:px-6 lg:px-8">
                @hasSection('content')
                    @yield('content')
                @else
                    {{ $slot ?? '' }}
                @endif
            </main>


            <footer class="border-t border-gray-300 bg-gray-50">
                <div class="mx-auto grid w-full max-w-7xl grid-cols-1 gap-8 px-4 py-10 sm:px-6 md:grid-cols-2 lg:grid-cols-4 lg:px-8">
                    <div class="border-gray-300 md:border-r md:pr-8">
                        <h2 class="mb-5 text-3xl font-medium text-gray-700">Makers Markt</h2>
                        <div class="flex h-24 w-24 items-center justify-center rounded-full border border-gray-400 text-xl font-semibold text-gray-700">
                            LOGO
                        </div>
                    </div>

                    <div>
                        <h3 class="mb-3 text-3xl font-semibold text-gray-700">Shop</h3>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li><a href="#" class="underline underline-offset-2 hover:text-black">Alle producten</a></li>
                            <li><a href="#" class="underline underline-offset-2 hover:text-black">Sieraden</a></li>
                            <li><a href="#" class="underline underline-offset-2 hover:text-black">Keramiek</a></li>
                            <li><a href="#" class="underline underline-offset-2 hover:text-black">Textiel</a></li>
                            <li><a href="#" class="underline underline-offset-2 hover:text-black">Kunst</a></li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="mb-3 text-3xl font-semibold text-gray-700">Sell</h3>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li><a href="#" class="underline underline-offset-2 hover:text-black">Mijn producten</a></li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="mb-3 text-3xl font-semibold text-gray-700">Over ons</h3>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li><a href="#" class="underline underline-offset-2 hover:text-black">Home</a></li>
                            <li><a href="#" class="underline underline-offset-2 hover:text-black">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
