{{-- 1. Ini adalah 'Constructor' kamu --}}
@props([
    'title',               {{-- Required (akan error jika tidak diisi) --}}
    'icon' => 'activity',  {{-- Default value --}}
    'isFeatured' => false  {{-- Boolean state --}}
])

@php
    /* 2. Logic If-Else untuk Styling (Persis ternary operator di Flutter) */
    $cardClasses = $isFeatured 
        ? 'bg-slate-900 text-white md:-translate-y-4 shadow-2xl' 
        : 'bg-slate-50 text-slate-900 border-slate-100 hover:border-blue-200';

    $iconClasses = $isFeatured
        ? 'bg-white/10 text-white backdrop-blur-md'
        : 'bg-blue-600 text-white shadow-blue-100';
@endphp

{{-- 3. Template --}}
<div {{ $attributes->merge(['class' => "p-8 md:p-10 rounded-[2rem] transition-all group border $cardClasses"]) }}>
    
    {{-- Kita bisa masukkan Badge di dalam sini jika isFeatured true --}}
    @if($isFeatured)
        <div class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-blue-500 text-[10px] font-bold text-white mb-4 uppercase tracking-wider">
            Featured Service
        </div>
    @endif

    <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6 shadow-lg transition-transform group-hover:scale-110 {{ $iconClasses }}">
        <i data-lucide="{{ $icon }}" class="w-7 h-7"></i>
    </div>

    <h3 class="text-xl md:text-2xl font-bold mb-3">{{ $title }}</h3>
    
    <p class="text-sm md:text-base {{ $isFeatured ? 'text-slate-300' : 'text-slate-600' }}">
        {{ $slot }}
    </p>
</div>