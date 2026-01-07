{{-- 1. Constructor: Kita tentukan 'type' untuk membedakan style --}}
@props([
    'type' => 'status', // pilihan: status (dengan titik), label (biasa)
    'variant' => 'blue' // pilihan warna: blue, green, white, dll.
])

@php
    // 2. Mapping warna mirip dengan switch case di Flutter
    $colors = [
        'blue' => 'bg-blue-50 border-blue-100 text-blue-700',
        'green' => 'bg-green-50 border-green-100 text-green-700',
        'white' => 'bg-white/10 border-white/20 text-white backdrop-blur-sm',
        'featured' => 'bg-blue-600 text-white border-transparent'
    ];

    $selectedColor = $colors[$variant] ?? $colors['blue'];
@endphp

<div {{ $attributes->merge(['class' => "inline-flex items-center gap-2 px-3 py-1 rounded-full border text-xs md:sm font-bold $selectedColor"]) }}>

    {{-- 3. Conditional Widget: Titik animasi hanya muncul jika type-nya 'status' --}}
    @if($type === 'status')
        <span class="relative flex h-2 w-2">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-current opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 bg-current"></span>
        </span>
    @endif

    {{ $slot }}
</div>
