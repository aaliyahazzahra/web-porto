@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="py-20 lg:py-32">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <div class="inline-block px-4 py-1.5 mb-6 text-sm font-semibold tracking-wide text-blue-600 uppercase bg-blue-50 rounded-full">
            UI/UX Designer & Laravel Developer
        </div>
        <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 mb-6 leading-tight">
            Halo, Saya <span class="text-blue-600 underline decoration-blue-200">Budi</span>. <br>
            Membangun Pengalaman Digital.
        </h1>
        <p class="text-xl text-slate-600 max-w-2xl mx-auto mb-10 leading-relaxed">
            Saya membantu bisnis menciptakan produk digital yang tidak hanya berfungsi dengan baik, tapi juga indah dipandang.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/projects" class="px-8 py-4 bg-slate-900 text-white font-bold rounded-xl hover:bg-slate-800 transition shadow-lg">
                Lihat Karya Saya
            </a>
            <a href="#" class="px-8 py-4 bg-white text-slate-900 font-bold border border-slate-200 rounded-xl hover:bg-slate-50 transition">
                Tentang Saya
            </a>
        </div>
    </div>
</section>

<!-- Skills Section (Seperti GridView di Flutter) -->
<section class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="layout"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">UI/UX Design</h3>
                <p class="text-slate-600">Fokus pada kemudahan pengguna dan visual yang modern.</p>
            </div>
            <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="smartphone"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Flutter Dev</h3>
                <p class="text-slate-600">Aplikasi mobile cross-platform yang responsif.</p>
            </div>
            <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="database"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Laravel Dev</h3>
                <p class="text-slate-600">Sistem backend yang kuat dan terstruktur.</p>
            </div>
        </div>
    </div>
</section>
@endsection
