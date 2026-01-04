@extends('layouts.app')

@section('content')
<section class="py-20">
    <div class="max-w-4xl mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="w-64 h-64 bg-blue-100 rounded-3xl overflow-hidden flex-shrink-0 shadow-inner">
                <!-- Image Placeholder -->
                <div class="w-full h-full flex items-center justify-center text-blue-300">
                    <i data-lucide="user" class="w-24 h-24"></i>
                </div>
            </div>
            <div>
                <h2 class="text-4xl font-bold mb-6">Tentang Saya</h2>
                <p class="text-lg text-slate-600 mb-4">
                    Saya adalah seorang pengembang yang memiliki antusiasme tinggi pada desain antarmuka (UI) dan pengalaman pengguna (UX). Berawal dari Flutter, saya belajar bagaimana detail kecil pada komponen bisa merubah perasaan pengguna saat menggunakan aplikasi.
                </p>
                <p class="text-lg text-slate-600">
                    Sekarang, saya sedang mendalami Laravel untuk membangun sistem backend yang sama kuatnya dengan tampilan frontend yang saya buat.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
