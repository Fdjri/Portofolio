<!DOCTYPE html>
{{-- Tema dikunci ke mode gelap --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio Fadjri')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-900 text-gray-200 antialiased">

    <header x-data="{ open: false }" class="bg-gray-900/70 backdrop-blur-lg sticky top-0 z-50 border-b border-gray-800/50">
        <nav class="container mx-auto flex items-center justify-between p-4">

            <a href="/" class="text-2xl font-bold text-yellow-400">
                Fdjri />
            </a>

            {{-- Menu Navigasi Desktop --}}
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="pb-2 border-b-4 {{ request()->is('/') ? 'text-yellow-400 border-yellow-400' : 'text-white border-transparent hover:text-yellow-400' }}">Home</a>
                <a href="{{ url('/about') }}" class="pb-2 border-b-4 {{ request()->is('about') ? 'text-yellow-400 border-yellow-400' : 'text-white border-transparent hover:text-yellow-400' }}">About Me</a>
                <a href="{{ url('/portfolio') }}" class="pb-2 border-b-4 {{ request()->is('portfolio') ? 'text-yellow-400 border-yellow-400' : 'text-white border-transparent hover:text-yellow-400' }}">Portfolio</a>
                <a href="{{ url('/contact') }}" class="pb-2 border-b-4 {{ request()->is('contact') ? 'text-yellow-400 border-yellow-400' : 'text-white border-transparent hover:text-yellow-400' }}">Contact</a>
            </div>

            {{-- Grup Tombol Kanan --}}
            <div class="flex items-center">
                {{-- TOMBOL SWITCH TEMA SUDAH DIHAPUS DARI SINI --}}
                
                {{-- Tombol Hamburger (Hanya tampil di mobile) --}}
                <button @click="open = !open" class="md:hidden p-2 rounded-md text-gray-200 hover:text-yellow-400 hover:bg-gray-800">
                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
                    <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
        </nav>

        {{-- Menu Mobile --}}
        <div x-show="open" @click.away="open = false" class="md:hidden bg-gray-900/90 backdrop-blur-lg">
            <div class="flex flex-col items-center space-y-4 py-4">
                <a href="{{ url('/') }}" class="text-lg {{ request()->is('/') ? 'text-yellow-400' : 'text-white' }}">Home</a>
                <a href="{{ url('/about') }}" class="text-lg {{ request()->is('about') ? 'text-yellow-400' : 'text-white' }}">About Me</a>
                <a href="{{ url('/portfolio') }}" class="text-lg {{ request()->is('portfolio') ? 'text-yellow-400' : 'text-white' }}">Portfolio</a>
                <a href="{{ url('/contact') }}" class="text-lg {{ request()->is('contact') ? 'text-yellow-400' : 'text-white' }}">Contact</a>
            </div>
        </div>
    </header>

    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    @stack('scripts')
    {{-- SCRIPT UNTUK THEME SWITCHER JUGA SUDAH DIHAPUS --}}
</body>
</html>