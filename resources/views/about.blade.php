@extends('layouts.app')

@section('content')
<section class="py-20">
    <div class="max-w-4xl mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-12 items-center">

            <x-avatar />

            <div>
                <x-section-title>Tentang Saya</x-section-title>

                <div class="space-y-4 text-lg text-slate-600">
                    <p>
                        Saya adalah seorang pengembang yang memiliki antusiasme tinggi pada desain antarmuka (UI) dan pengalaman pengguna (UX). Berawal dari Flutter, saya belajar bagaimana detail kecil pada komponen bisa merubah perasaan pengguna saat menggunakan aplikasi.
                    </p>
                    <p>
                        Sekarang, saya sedang mendalami Laravel untuk membangun sistem backend yang sama kuatnya dengan tampilan frontend yang saya buat.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
