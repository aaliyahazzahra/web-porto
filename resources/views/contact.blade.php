@extends('layouts.app')

@section('content')
<section class="py-20 bg-slate-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <!-- Kolom Kiri: Informasi Kontak -->
            <div>
                <h2 class="text-4xl font-bold text-slate-900 mb-6">Ayo Berdiskusi!</h2>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    Saya selalu terbuka untuk membicarakan proyek baru, ide-ide kreatif, atau peluang untuk menjadi bagian dari visi Anda.
                </p>

                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-blue-600">
                            <i data-lucide="mail"></i>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">Email Saya</p>
                            <p class="font-semibold">halo@budidesign.com</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-blue-600">
                            <i data-lucide="map-pin"></i>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">Lokasi</p>
                            <p class="font-semibold">Jakarta, Indonesia</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-blue-600">
                            <i data-lucide="instagram"></i>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">Media Sosial</p>
                            <p class="font-semibold">@budicreative</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Formulir -->
            <div class="bg-white p-8 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100">
                <form action="#" method="POST" class="space-y-5">
                    <!-- Ingat: Nanti kita perlu @csrf di sini jika rute POST sudah siap -->
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap</label>
                        <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 focus:outline-none transition-all" placeholder="Nama Anda">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Alamat Email</label>
                        <input type="email" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 focus:outline-none transition-all" placeholder="email@perusahaan.com">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Pesan Anda</label>
                        <textarea rows="4" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 focus:outline-none transition-all" placeholder="Ceritakan proyek Anda..."></textarea>
                    </div>
                    <button type="button" class="w-full py-4 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 hover:-translate-y-1 transition-all shadow-lg shadow-blue-200">
                        Kirim Pesan Sekarang
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
