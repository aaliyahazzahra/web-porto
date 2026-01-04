@extends('layouts.app')

@section('content')
<section class="relative pt-12 md:pt-24 pb-16 md:pb-20 overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full -z-10 pointer-events-none">
        <div class="absolute top-[-5%] left-[-10%] w-[60%] h-[40%] bg-blue-100/40 rounded-full blur-[100px]"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <div class="flex-1 text-center lg:text-left order-2 lg:order-1">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-100 text-blue-700 text-xs md:sm font-bold mb-6">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                    </span>
                    Tersedia untuk Proyek Baru
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-black text-slate-900 mb-6 leading-tight tracking-tight">
                    Desain yang <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Bermakna</span>, Kode yang Bersih.
                </h1>
                <p class="text-lg md:text-xl text-slate-600 mb-8 leading-relaxed max-w-xl mx-auto lg:mx-0">
                    Spesialis dalam membangun antarmuka mobile intuitif dengan Flutter dan sistem backend tangguh menggunakan Laravel.
                </p>
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <a href="/projects" class="w-full sm:w-auto px-8 py-4 bg-blue-600 text-white font-bold rounded-2xl hover:bg-blue-700 transition-all text-center flex items-center justify-center gap-2">
                        Lihat Proyek
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="/contact" class="w-full sm:w-auto px-8 py-4 bg-white text-slate-900 font-bold border border-slate-200 rounded-2xl hover:bg-slate-50 text-center">
                        Hubungi Saya
                    </a>
                </div>
            </div>

            {{-- <div class="col-lg-5 text-center">
                <div class="position-relative d-inline-block">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-10 rounded-custom rotate-3 z-n1"></div>
                    <div class="bg-white p-2 rounded-custom shadow-lg border border-light overflow-hidden" style="width: 380px; height: 380px;">
                        <img src="{{ asset('images/raiyo.png') }}" alt="Raiyo" class="w-100 h-100 object-fit-cover rounded-custom" onerror="this.src=https://ui-avatars.com/api/?name=User&background=0D6EFD&color=fff&size=400">
                    </div>
                <div class="position-absolute bottom-0 start-0 bg-white p-3 rounded-4 shadow border translate-middle-x ms-4">
                    <div class="d-flex align-items-center gap-2">
                        <div class="bg-success-subtle text-success p-2 rounded-3">
                            <i data-lucide="check-circle" style="width: 20px;"></i>
                        </div>
                        <div class="text-start">
                            <small class="d-block text-muted fw-bold text-uppercase" style="font-size: 10px;">Project Done</small>
                            <span class="fw-bold fs-5">12+</span>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="flex-1 relative order-1 lg:order-2 w-full max-w-[300px] md:max-w-md mx-auto">
                <div class="relative aspect-square">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-600 to-indigo-400 rounded-[2.5rem] md:rounded-[3rem] rotate-3 -z-10 opacity-20"></div>
                    <div class="w-full h-full bg-white rounded-[2.5rem] md:rounded-[3rem] border border-slate-100 shadow-2xl overflow-hidden flex items-center justify-center text-slate-200">
                        {{-- <i data-lucide="user" class="w-24 h-24 md:w-32 md:h-32 text-slate-300"></i> --}}
                        {{-- <div class="bg-white p-2 rounded-custom shadow-lg border border-light overflow-hidden" style="width: 380px; height: 380px;"> --}}
                        <img src="{{ asset('images/logo2.png') }}" alt="The AL Intersection" class="w-100 h-100 object-fit-cover rounded-custom" onerror="this.src=https://ui-avatars.com/api/?name=User&background=0D6EFD&color=fff&size=400">
                    </div>
                    </div>

                    <div class="absolute -bottom-4 -left-4 md:-bottom-6 md:-left-6 bg-white p-3 md:p-4 rounded-xl md:rounded-2xl shadow-xl border border-slate-50 animate-bounce" style="animation-duration: 3s;">
                        <div class="flex items-center gap-2 md:gap-3">
                            <div class="p-1.5 md:p-2 bg-green-100 text-green-600 rounded-lg"><i data-lucide="check-circle" class="w-4 h-4 md:w-5 md:h-5"></i></div>
                            <div>
                                <p class="text-[8px] md:text-[10px] text-slate-400 font-bold uppercase">Project Done</p>
                                <p class="text-base md:text-lg font-black text-slate-800">12+</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-white">
    <div class="max-w-6xl mx-auto px-4 text-center mb-12 md:mb-16">
        <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-4">Layanan Utama</h2>
        <div class="w-16 h-1 bg-blue-600 mx-auto rounded-full"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
            <div class="p-8 md:p-10 rounded-[2rem] bg-slate-50 border border-slate-100 hover:border-blue-200 transition-all group">
                <div class="w-14 h-14 bg-blue-600 text-white rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-blue-100 group-hover:scale-110 transition-transform">
                    <i data-lucide="smartphone" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-bold mb-3">App Development</h3>
                <p class="text-sm md:text-base text-slate-600">Membangun aplikasi Android & iOS menggunakan satu codebase Flutter yang performan.</p>
            </div>

            <div class="p-8 md:p-10 rounded-[2rem] bg-slate-900 text-white md:-translate-y-4 shadow-2xl relative overflow-hidden">
                <div class="w-14 h-14 bg-white/10 text-white rounded-xl flex items-center justify-center mb-6 backdrop-blur-md">
                    <i data-lucide="framer" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-bold mb-3">UI/UX Design</h3>
                <p class="text-sm md:text-base text-slate-300">Menciptakan desain yang user-centric dengan prototipe interaktif siap produksi.</p>
            </div>

            <div class="p-8 md:p-10 rounded-[2rem] bg-slate-50 border border-slate-100 hover:border-blue-200 transition-all group">
                <div class="w-14 h-14 bg-indigo-600 text-white rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-indigo-100 group-hover:scale-110 transition-transform">
                    <i data-lucide="server" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-bold mb-3">Backend API</h3>
                <p class="text-sm md:text-base text-slate-600">Mengelola logika data dan keamanan server menggunakan Laravel yang terstruktur.</p>
            </div>
        </div>
    </div>
</section>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="overflow-hidden position-relative">
    <div class="hero-glow" style="top: -50px; left: -50px;"></div>

    <div class="container py-5 mt-lg-5">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 text-center text-lg-start">
                <span class="badge rounded-pill bg-primary-subtle text-primary mb-4 p-2 px-3 border border-primary-subtle">
                    <span class="spinner-grow spinner-grow-sm me-2"></span>Tersedia untuk Proyek Baru
                </span>
                <h1 class="display-3 fw-black mb-4 text-dark" style="letter-spacing: -2px; line-height: 1.1;">
                    Desain yang <span class="text-primary">Bermakna</span>, Kode yang Bersih.
                </h1>
                <p class="lead text-secondary mb-5">
                    Spesialis dalam membangun antarmuka mobile yang intuitif dengan Flutter dan sistem backend yang tangguh menggunakan Laravel.
                </p>
                <div class="d-grid d-sm-flex justify-content-center justify-content-lg-start gap-3">
                    <a href="#" class="btn btn-primary shadow-lg d-flex align-items-center justify-content-center gap-2">
                        Lihat Proyek <i data-lucide="arrow-right" size="18"></i>
                    </a>
                    <a href="#" class="btn btn-outline-dark">Hubungi Saya</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <div class="position-absolute w-100 h-100 border border-primary opacity-25 rounded-5 rotate-3" style="top:10px; left:10px; z-index:-1;"></div>
                    <div class="bg-white p-2 rounded-5 shadow-2xl border">
                        <div class="bg-light rounded-5 d-flex align-items-center justify-content-center" style="height: 400px;">
                            <i data-lucide="user" class="text-secondary" style="width: 100px; height: 100px;"></i>
                        </div>
                    </div>

                    <div class="position-absolute bottom-0 start-0 translate-middle-x ms-5 mb-n3 bg-white p-3 rounded-4 shadow border animate-bounce">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-success-subtle text-success p-2 rounded-3">
                                <i data-lucide="check-circle"></i>
                            </div>
                            <div>
                                <small class="d-block text-uppercase fw-bold text-muted" style="font-size: 10px;">Project Done</small>
                                <span class="h5 fw-bold mb-0">12+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-5 mt-5">
    <div class="container text-center mb-5">
        <h2 class="fw-bold">Layanan Utama</h2>
        <div class="bg-primary mx-auto rounded-pill" style="width: 60px; height: 5px;"></div>
    </div>

    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="service-card h-100">
                    <div class="bg-primary text-white rounded-4 d-inline-flex p-3 mb-4 shadow">
                        <i data-lucide="smartphone"></i>
                    </div>
                    <h4 class="fw-bold">App Development</h4>
                    <p class="text-secondary">Membangun aplikasi Android & iOS menggunakan satu codebase Flutter yang performan.</p>
                </div>
            </div>

            <div class="col-md-4 mt-lg-n4">
                <div class="service-card h-100 bg-dark-custom shadow-xl">
                    <div class="bg-white bg-opacity-10 rounded-4 d-inline-flex p-3 mb-4">
                        <i data-lucide="framer"></i>
                    </div>
                    <h4 class="fw-bold">UI/UX Design</h4>
                    <p class="text-light text-opacity-75">Menciptakan desain yang user-centric dengan prototipe interaktif yang siap diproduksi.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card h-100">
                    <div class="bg-indigo text-white rounded-4 d-inline-flex p-3 mb-4 shadow" style="background: #6610f2;">
                        <i data-lucide="server"></i>
                    </div>
                    <h4 class="fw-bold">Backend API</h4>
                    <p class="text-secondary">Mengelola logika data dan keamanan server menggunakan Laravel yang terstruktur.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection --}}
