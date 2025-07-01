@extends('layouts.app')

@section('title', 'About Me')

@section('content')

{{-- Bagian 1: About Me --}}
<section class="mb-16">
    {{-- Card Container Utama --}}
    <div class="bg-gray-800/50 rounded-xl p-8 md:p-12">
        <h2 class="text-3xl font-bold text-white mb-8">About Me</h2>
        <div class="flex flex-col lg:flex-row items-center justify-center gap-12">
            
            {{-- Kolom Kiri: Gambar --}}
            <div class="flex-shrink-0">
                <div class="relative">
                    <div class="absolute inset-0 bg-yellow-400 rounded-full blur-xl opacity-50"></div>
                    <div class="relative w-72 h-80 md:w-80 md:h-96 p-1 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-full">
                        <img 
                            src="{{ asset('images/profil2.jpg') }}" 
                            alt="Foto Profil" 
                            class="w-full h-full object-cover object-top rounded-full">
                    </div>
                </div>
            </div>

            {{-- Kolom Kanan: Teks Perkenalan --}}
            <div class="text-lg text-gray-300 space-y-4 max-w-2xl">
                <p>
                    Hi everyone! My name is Sholihul Fadjri Triwibowo. I am a final year Information Technology student at Brawijaya University with a deep passion for web and mobile development.
                </p>
                <p>
                    I focus on transforming ideas into impactful and impactful digital solutions. For me, technology is not just about code, but about creating value and solving real problems. I am always enthusiastic to learn, collaborate, and grow in a dynamic development environment.
                </p>
                <p>
                    I am currently open for internship opportunities or collaborative projects.
                </p>
                <p class="font-semibold text-gray-400 mt-4">
                    Jakarta, Indonesia.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Bagian 2: Skills --}}
<section>
    <h2 class="text-3xl font-bold text-white mb-8">Skills</h2>

    <div x-data="{ tab: 'tech' }">
        {{-- Tombol Tab --}}
        <div class="mb-6 border-b border-gray-700">
            <nav class="flex space-x-6">
                <button 
                    @click="tab = 'tech'"
                    :class="{ 'text-yellow-400 border-yellow-400': tab === 'tech', 'text-gray-400 border-transparent hover:text-yellow-400': tab !== 'tech' }"
                    class="pb-2 border-b-2 font-medium transition-colors">
                    Tech Stack
                </button>
                <button 
                    @click="tab = 'tools'"
                    :class="{ 'text-yellow-400 border-yellow-400': tab === 'tools', 'text-gray-400 border-transparent hover:text-yellow-400': tab !== 'tools' }"
                    class="pb-2 border-b-2 font-medium transition-colors">
                    Tools
                </button>
            </nav>
        </div>

        {{-- Konten Tab --}}
        <div>
            {{-- Konten Tech Stack (TETAP SAMA, menampilkan level) --}}
            <div x-show="tab === 'tech'" x-transition class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                @php
                    $techs = [
                        ['icon' => 'html5', 'name' => 'HTML', 'level' => 'Advanced'],
                        ['icon' => 'css3', 'name' => 'CSS', 'level' => 'Intermediate'],
                        ['icon' => 'javascript', 'name' => 'Javascript', 'level' => 'Beginner'],
                        ['icon' => 'php', 'name' => 'PHP', 'level' => 'Advanced'],
                        ['icon' => 'bootstrap', 'name' => 'Bootstrap', 'level' => 'Intermediate'],
                        ['icon' => 'laravel', 'name' => 'Laravel', 'level' => 'Intermediate'],
                        ['icon' => 'tailwindcss', 'name' => 'Tailwind', 'level' => 'Beginner'],
                        ['icon' => 'flutter', 'name' => 'Flutter', 'level' => 'Intermediate'],
                        ['icon' => 'nodejs', 'name' => 'NodeJS', 'level' => 'Beginner'],
                    ];
                @endphp
                @foreach($techs as $skill)
                <div class="group bg-gray-800/50 p-4 rounded-lg flex items-center gap-4 border border-gray-700 hover:border-yellow-400 hover:bg-gray-800 transition duration-300">
                    <i class="devicon-{{$skill['icon']}}-plain text-4xl text-gray-300 group-hover:text-yellow-400 transition-colors duration-300"></i>
                    <div class="relative flex-grow h-10">
                        <h3 class="font-medium text-white absolute inset-0 flex items-center transition-transform duration-300 group-hover:-translate-y-5">{{ $skill['name'] }}</h3>
                        <p class="text-xs text-gray-400 absolute inset-0 flex items-center opacity-0 transition-all duration-300 translate-y-5 group-hover:opacity-100 group-hover:translate-y-0">{{ $skill['level'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Konten Tools (DIPERBARUI, menampilkan kegunaan) --}}
            <div x-show="tab === 'tools'" x-transition class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                @php
                    // Struktur data diubah dari 'level' menjadi 'purpose' (kegunaan)
                    $tools = [
                        ['icon' => 'mysql', 'name' => 'MySQL', 'purpose' => 'Database'],
                        ['icon' => 'github', 'name' => 'GitHub', 'purpose' => 'Git Hosting'],
                        ['icon' => 'git', 'name' => 'Git', 'purpose' => 'Version Control'],
                        ['icon' => 'npm', 'name' => 'NPM', 'purpose' => 'Package Manager'],
                        ['icon' => 'composer-line', 'name' => 'Composer', 'purpose' => 'Package Manager'],
                        ['icon' => 'postman', 'name' => 'Postman', 'purpose' => 'API Testing'],
                        ['icon' => 'vscode', 'name' => 'VSCode', 'purpose' => 'Code Editor'],
                        ['icon' => 'figma', 'name' => 'Figma', 'purpose' => 'UI/UX Design'],
                        ['icon' => 'sourcetree-original', 'name' => 'ChatGPT', 'purpose' => 'Brainstorming'],
                    ];
                @endphp
                 @foreach($tools as $tool)
                 <div class="group bg-gray-800/50 p-4 rounded-lg flex items-center gap-4 border border-gray-700 hover:border-yellow-400 hover:bg-gray-800 transition duration-300">
                    <i class="devicon-{{$tool['icon']}}-plain text-4xl text-gray-300 group-hover:text-yellow-400 transition-colors duration-300"></i>
                    <div class="relative flex-grow h-10">
                        <h3 class="font-medium text-white absolute inset-0 flex items-center transition-transform duration-300 group-hover:-translate-y-5">{{ $tool['name'] }}</h3>
                        {{-- Teks hover diubah untuk menampilkan 'purpose' --}}
                        <p class="text-xs text-gray-400 absolute inset-0 flex items-center opacity-0 transition-all duration-300 translate-y-5 group-hover:opacity-100 group-hover:translate-y-0">{{ $tool['purpose'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection