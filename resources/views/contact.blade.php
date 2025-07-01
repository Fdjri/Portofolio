@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')

@php
// Data kontak kita simpan dalam array agar rapi
$contacts = [
    [
        'url' => 'https://wa.me/6282114115085',
        'icon' => 'fa-brands fa-whatsapp',
        'text' => '(+62) 821-1411-5085',
        'color' => 'green-500'
    ],
    [
        'url' => 'mailto:fadjritwibowo@gmail.com',
        'icon' => 'fa-regular fa-envelope',
        'text' => 'fadjritwibowo@gmail.com',
        'color' => 'red-500'
    ],
    [
        'url' => 'https://www.linkedin.com/in/sholihul-fadjri-triwibowo/',
        'icon' => 'fa-brands fa-linkedin-in',
        'text' => 'linkedin.com/in/sholihul-fadjri-triwibowo',
        'color' => 'blue-600'
    ],
    [
        'url' => 'https://github.com/Fdjri',
        'icon' => 'fa-brands fa-github',
        'text' => 'github.com/Fdjri',
        'color' => 'gray-600'
    ],
];
@endphp

<section class="py-12 flex justify-center">
    {{-- Card Container --}}
    <div class="bg-gray-800/50 rounded-xl p-8 md:p-12 w-full max-w-3xl">
        <h2 class="text-3xl font-bold text-white mb-4">Contact Me</h2>
        <p class="text-gray-300 mb-8">
            Interested in working together or just want to connect? Feel free to drop me a message through any of the channels below.
        </p>

        {{-- Daftar Kontak --}}
        <div class="space-y-4">
            @foreach ($contacts as $contact)
            <a href="{{ $contact['url'] }}" target="_blank" rel="noopener noreferrer" class="flex items-center p-4 rounded-lg hover:bg-gray-700/50 transition-colors duration-300 group">
                {{-- Lingkaran Ikon --}}
                <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4 bg-{{ $contact['color'] }}">
                    <i class="{{ $contact['icon'] }} text-xl text-white"></i>
                </div>
                {{-- Teks Kontak --}}
                <span class="text-gray-300 group-hover:text-white font-medium">
                    {{ $contact['text'] }}
                </span>
            </a>
            @endforeach
        </div>
    </div>
</section>

@endsection