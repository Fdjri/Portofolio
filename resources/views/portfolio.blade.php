@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')

@php
// DATA PROYEK (SEMENTARA)
// Nantinya, data ini akan diambil dari database.
// 'images' bisa berisi satu atau lebih gambar.
// 'tech' berisi nama ikon dari Devicon.
$projects = [
    [
        'title' => 'CuyPerpus',
        'images' => [
            asset('images/projects/cuyperpus1.jpg'),
            asset('images/projects/cuyperpus2.jpg'),
        ],
        'tech' => ['html5', 'css3', 'bootstrap', 'mysql']
    ],
    [
        'title' => 'SepaTUKU',
        'images' => [
            asset('images/projects/sepatuku1.jpg'),
            asset('images/projects/sepatuku2.jpg'),
        ],
        'tech' => ['laravel', 'tailwindcss', 'mysql']
    ],
    [
        'title' => 'Database Management',
        'images' => [
            asset('images/projects/dbmanagement.jpg'),
        ],
        'tech' => ['laravel', 'javascript', 'tailwindcss', 'mysql']
    ],
    [
        'title' => 'TixGo',
        'images' => [
            asset('images/projects/tixgo1.jpg'),
            asset('images/projects/tixgo2.jpg'),
            asset('images/projects/tixgo3.jpg'),
            asset('images/projects/tixgo4.jpg'),
        ],
        'tech' => ['flutter', 'laravel', 'tailwindcss', 'mysql', 'javascript']
    ],
    [
        'title' => 'Dashboard Parking Monitor',
        'images' => [
            asset('images/projects/parking.jpg'),
        ],
        'tech' => ['laravel', 'javascript', 'tailwindcss', 'mysql']
    ],
];
@endphp

<section class="py-12">
    {{-- Judul Halaman --}}
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-white">Project Experience</h1>
        <p class="text-lg text-gray-400 mt-2">Take a look at the projects I've built so far.</p>
    </div>

    {{-- Grid untuk Kartu Proyek --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        {{-- Looping untuk setiap proyek --}}
        @foreach ($projects as $project)
        <div class="bg-gray-800/50 rounded-xl border border-gray-700 overflow-hidden group">
            
            {{-- Image Slider dengan Alpine.js --}}
            <div x-data="{ 
                    currentImage: 0, 
                    images: {{ json_encode($project['images']) }} 
                }" 
                class="relative aspect-video bg-gray-900">
                
                {{-- Gambar yang Tampil --}}
                <template x-for="(image, index) in images">
                    <img 
                        x-show="currentImage === index" 
                        :src="image" 
                        alt="{{ $project['title'] }}"
                        class="absolute top-0 left-0 w-full h-full object-cover object-top transition-opacity duration-300"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                    >
                </template>

                {{-- Tombol Navigasi Slider (hanya muncul jika gambar lebih dari 1) --}}
                <template x-if="images.length > 1">
                    <div class="absolute inset-0 flex items-center justify-between p-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        {{-- Tombol Kiri --}}
                        <button @click="currentImage = (currentImage > 0) ? currentImage - 1 : images.length - 1" class="bg-black/50 rounded-full p-2 text-white hover:bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                        </button>
                        {{-- Tombol Kanan --}}
                        <button @click="currentImage = (currentImage < images.length - 1) ? currentImage + 1 : 0" class="bg-black/50 rounded-full p-2 text-white hover:bg-black">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </button>
                    </div>
                </template>
            </div>

            {{-- Informasi Proyek --}}
            <div class="p-6">
                <h3 class="text-xl font-bold text-white">{{ $project['title'] }}</h3>
                {{-- Ikon Teknologi --}}
                <div class="flex items-center gap-3 mt-4">
                    @foreach ($project['tech'] as $techIcon)
                        <i class="devicon-{{$techIcon}}-plain text-2xl text-gray-400" title="{{ ucfirst($techIcon) }}"></i>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection