@extends('layouts.app')

@section('content')
<section class="relative pt-12 md:pt-24 pb-16 md:pb-20 overflow-hidden">
    {{-- Background Blur --}}
    <div class="absolute top-[-5%] left-[-10%] w-[60%] h-[40%] bg-blue-100/40 rounded-full blur-[100px] -z-10"></div>
    <div class="opacity-0 animate-fade-up bg-green-500 text-white p-4">
    FADE UP WORKS
    </div>

    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <div class="flex-1 text-center lg:text-left order-2 lg:order-1">
                <x-badge class="mb-6">Tersedia untuk Proyek Baru</x-badge>

                <h1 class="text-4xl md:text-5xl lg:text-7xl font-black text-slate-900 mb-6 leading-tight">


    <span
      class="block opacity-0
             animate-hero-1
             [animation-delay:100ms]
             [animation-fill-mode:forwards]">
        Where Logic
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">
          Intersects
        </span>,
    </span>


    <span
      class="block opacity-0
             animate-hero-2
             [animation-delay:400ms]
             [animation-fill-mode:forwards]">
        with
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">
          Aesthetics
        </span>.
    </span>
</h1>


                <p class="text-lg md:text-xl text-slate-600 mb-8 max-w-xl mx-auto lg:mx-0">
                    I am AL, a developer and designer dedicated to finding the perfect intersection between high-performance code and meaningful visual storytelling. Specializing in Flutter, Laravel, and Visual Arts.
                </p>

                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <a href="/projects" class="px-8 py-4 bg-blue-600 text-white font-bold rounded-2xl hover:bg-blue-700 transition-all flex items-center justify-center gap-2">
                        Explore Intersections <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="/contact" class="px-8 py-4 bg-white text-slate-900 font-bold border border-slate-200 rounded-2xl hover:bg-slate-50 transition-all">
                        Get in Touch
                    </a>
                </div>
            </div>


        </div>
    </div>
</section>

<section x-data="{ path: 'technical' }" class="py-20 md:py-32 bg-[#081b1f] text-white overflow-hidden">
    <div class="max-w-6xl mx-auto px-6">
        
        {{-- Header Section --}}
        <div class="text-center max-w-3xl mx-auto mb-16 animate-hero-1">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
                Explore My <span class="text-teal-400">Intersections.</span>
            </h2>
            <p class="text-gray-400 text-lg leading-relaxed">
                Every project here sits at a unique point in my professional journey. 
                Choose a path to see how I bridge the gap between complex systems and visual clarity.
            </p>
        </div>

        {{-- Toggle Filter --}}
        <div class="flex flex-col md:flex-row justify-center items-center gap-4 mb-16 animate-hero-2">
            <button 
                @click="path = 'technical'"
                :class="path === 'technical' ? 'bg-teal-600 text-white shadow-lg shadow-teal-900/40' : 'bg-white/5 text-gray-400 hover:bg-white/10'"
                class="px-8 py-4 rounded-2xl font-bold transition-all duration-300 w-full md:w-auto border border-white/10"
            >
                View the Technical Path <br>
                <span class="text-xs font-medium opacity-70">(Code & Development)</span>
            </button>

            <button 
                @click="path = 'creative'"
                :class="path === 'creative' ? 'bg-teal-600 text-white shadow-lg shadow-teal-900/40' : 'bg-white/5 text-gray-400 hover:bg-white/10'"
                class="px-8 py-4 rounded-2xl font-bold transition-all duration-300 w-full md:w-auto border border-white/10"
            >
                View the Creative Path <br>
                <span class="text-xs font-medium opacity-70">(Design & Photography)</span>
            </button>
        </div>

        {{-- Grid Wrapper --}}
        <div class="relative min-h-[600px]"> 
            
            {{-- Technical Projects --}}
            <div 
                x-show="path === 'technical'"
                x-transition:enter="transition ease-out duration-500 delay-200"
                x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300 absolute inset-0"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"
            >
                <x-project-card title="VOLT LMS" image="{{ asset('images/volt.png') }}" :tags="['Flutter', 'Firebase']" :isFeatured="true">
                    A Learning Management System mobile application focused on electrical engineering education.
                </x-project-card>
                <x-project-card title="Kawaii Sudoku" image="{{ asset('images/sudoku.png') }}" :tags="['Flutter', 'Dart']">
                    Mobile Sudoku game with a clean, modern aesthetic.
                </x-project-card>
                <x-project-card title="Adsum" image="{{ asset('images/adsum.png') }}" :tags="['Flutter', 'Attendance']">
                    Mobile attendance application developed for professional environments.
                </x-project-card>
            </div>

            {{-- Creative Projects --}}
            <div 
                x-show="path === 'creative'"
                x-transition:enter="transition ease-out duration-500 delay-200"
                x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300 absolute inset-0"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"
            >
                <x-project-card title="Raiyo UI/UX" image="{{ asset('images/raiyo.png') }}" :tags="['Figma', 'UI/UX']" :isFeatured="true">
                    Disaster preparedness web application design and branding.
                </x-project-card>
                <x-project-card title="The AL Intersection" image="{{ asset('images/portfolio.png') }}" :tags="['Laravel', 'Tailwind']">
                    Personal portfolio design merging technical and creative vision.
                </x-project-card>
                <x-project-card title="Visual Stories" image="{{ asset('images/photo.png') }}" :tags="['Photography']">
                    A collection of visual stories capturing human emotion.
                </x-project-card>
            </div>

        </div>

        {{-- View More Button --}}
        <div class="mt-20 text-center animate-hero-2">
            <a 
                href="/projects" 
                class="group inline-flex items-center gap-3 px-10 py-4 bg-transparent border-2 border-teal-500/30 hover:border-teal-500 text-white font-bold rounded-2xl transition-all duration-300 hover:shadow-[0_0_20px_rgba(20,184,166,0.3)]"
            >
                <span>View More Portfolios</span>
                <i data-lucide="arrow-right" class="w-5 h-5 transition-transform group-hover:translate-x-2"></i>
            </a>
            <p class="mt-4 text-gray-500 text-sm italic">
                Dive deeper into my 20+ other technical and creative experiments.
            </p>
        </div>

    </div>
</section>

<section class="py-16 md:py-24 bg-[#081b1f] text-white overflow-hidden">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">


            <div class="lg:col-span-5 order-2 lg:order-1 animate-hero-1">
                <div class="relative w-full max-w-sm mx-auto lg:mx-0">

                    <div class="absolute inset-0 bg-teal-500/20 rounded-[3rem] rotate-6 -z-10"></div>


                    <div class="aspect-[4/5] rounded-[3rem] border border-white/10 overflow-hidden shadow-2xl relative">
                        <img src="{{ asset('images/profile.jpeg') }}" alt="Aaliyah" class="w-full h-full object-cover">


                        <div class="absolute inset-0 bg-gradient-to-t from-[#081b1f]/60 to-transparent"></div>
                    </div>


                    <div class="absolute -bottom-6 -right-4 md:-right-8 bg-white/10 backdrop-blur-md p-4 rounded-2xl shadow-xl border border-white/20">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-teal-500/20 text-teal-400 rounded-lg">
                                <i data-lucide="check-circle" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-[10px] text-gray-300 font-bold uppercase tracking-wider">Projects Done</p>
                                <p class="text-xl font-black text-white">12+</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="lg:col-span-7 order-1 lg:order-2 animate-hero-2">
                <h2 class="text-3xl md:text-5xl font-bold leading-tight mb-6">
                    The Story Behind <span class="text-teal-400">the Intersection.</span>
                </h2>

                <div class="space-y-4 text-gray-300 leading-relaxed text-lg">
                    <p>
                        With a degree in <strong>Electrical Engineering Education</strong>, my foundation is built on logic, systems, and precision. But I’ve always believed that technology is at its best when it intersects with human emotion and art.
                    </p>
                    <p>
                        As a <strong>BNSP Certified Junior Mobile Programmer</strong>, I build robust architectures. As a Graphic Designer and Photographer, I capture moments and create identities. My work is the result of these two worlds colliding—creating digital experiences that are as functional as they are beautiful.
                    </p>
                </div>

                {{-- Sosial Media & CTA --}}
                <div class="mt-10 flex flex-wrap items-center gap-6">
                    <div class="flex gap-4">
                        <a href="www.linkedin.com/in/aaliyahazzahra/" class="p-3 bg-white/5 hover:bg-teal-500/20 rounded-full transition-all border border-white/10 text-gray-300 hover:text-teal-400">
                            <i data-lucide="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="https://github.com/aaliyahazzahra/" class="p-3 bg-white/5 hover:bg-teal-500/20 rounded-full transition-all border border-white/10 text-gray-300 hover:text-teal-400">
                            <i data-lucide="github" class="w-5 h-5"></i>
                        </a>
                        <a href="https://instagram.com/reddisha_" class="p-3 bg-white/5 hover:bg-teal-500/20 rounded-full transition-all border border-white/10 text-gray-300 hover:text-teal-400">
                            <i data-lucide="instagram" class="w-5 h-5"></i>
                        </a>
                        <a href="mailto:aaliyahazzahra02@gmail.com" class="p-3 bg-white/5 hover:bg-teal-500/20 rounded-full transition-all border border-white/10 text-gray-300 hover:text-teal-400">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </a>
                    </div>

                    <a href="#contact" class="px-8 py-3 bg-teal-600 hover:bg-teal-500 text-white font-bold rounded-xl transition-all shadow-lg shadow-teal-900/20">
                        Let's Work Together
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
