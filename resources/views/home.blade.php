@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')

<section class="flex flex-col md:flex-row items-center justify-center gap-x-24 min-h-[calc(100vh-100px)]">

    {{-- Kolom Kiri: Teks dan Tombol --}}
    <div class="text-center md:text-left mb-10 md:mb-0">
        <p class="text-lg text-gray-500 dark:text-gray-400">Hello 👋 I'm</p>
        {{-- NAMA DIPERBARUI --}}
        <h1 class="text-5xl md:text-6xl font-bold text-gray-800 dark:text-white mt-2">
            Sholihul Fadjri Triwibowo
        </h1>
        <p class="text-2xl text-yellow-500 dark:text-yellow-400 font-semibold mt-4">
            <span id="typing-effect"></span>
        </p>

        <div class="mt-8 flex justify-center md:justify-start space-x-4">
            <a 
                href="https://wa.me/6282114115085?text=Halo%2C%20bolehkah%20saya%20meminta%20CV%20Anda%3F" 
                target="_blank" 
                class="bg-yellow-500 text-white dark:bg-yellow-400 dark:text-gray-900 font-bold py-3 px-6 rounded-full hover:bg-yellow-600 dark:hover:bg-yellow-500 transition duration-300">
                Request CV
            </a>
            <a href="https://www.youtube.com/@fdjritw" class="border-2 border-yellow-500 dark:border-yellow-400 text-yellow-500 dark:text-yellow-400 font-bold py-3 px-6 rounded-full hover:bg-yellow-500 hover:text-white dark:hover:bg-yellow-400 dark:hover:text-gray-900 transition duration-300">
                View My Work
            </a>
        </div>
    </div>

    {{-- Kolom Kanan: Gambar --}}
    <div class="flex justify-center md:justify-end">
        <div class="relative">
            <div class="absolute inset-0 bg-yellow-400 rounded-full blur-xl opacity-30 dark:opacity-50"></div>
            <div class="relative w-72 h-72 md:w-80 md:h-80 p-1 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-full">
                <img 
                    src="{{ asset('images/profil.jpeg') }}" 
                    alt="Foto Fadjri" 
                    class="w-full h-full object-cover object-top rounded-full">
            </div>
        </div>
    </div>

</section>
@endsection


@push('scripts')
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
    var typed = new Typed('#typing-effect', {
        strings: ['Junior Mobile Developer', 'Junior Web Developer', 'Technology Enthusiast'],
        typeSpeed: 80,
        backSpeed: 50,
        loop: true
    });
</script>
@endpush