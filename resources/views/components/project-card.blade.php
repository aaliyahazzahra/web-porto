@props([
    'title', 
    'image',           
    'tags' => [],      
    'isFeatured' => false 
])

@php
    
    $cardClasses = $isFeatured 
        ? 'bg-[#0f2d33] border-teal-500/30 shadow-2xl scale-[1.02] z-10' 
        : 'bg-[#0a1e22] border-white/5 hover:border-teal-500/20';
@endphp

<div {{ $attributes->merge(['class' => "flex flex-col rounded-[2rem] overflow-hidden transition-all duration-300 group border $cardClasses"]) }}>
    
    {{-- Picture --}}
    <div class="relative aspect-video overflow-hidden">
        <img src="{{ $image }}" 
             alt="{{ $title }}" 
             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
        
        @if($isFeatured)
            <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-teal-500 text-[10px] font-bold text-white uppercase tracking-wider shadow-lg">
                Featured
            </div>
        @endif
    </div>

    {{-- Text --}}
    <div class="p-6 md:p-8 flex flex-col flex-grow">
        <h3 class="text-xl md:text-2xl font-bold text-white mb-3 group-hover:text-teal-400 transition-colors">
            {{ $title }}
        </h3>
        
        <p class="text-sm md:text-base text-gray-400 mb-6 line-clamp-3">
            {{ $slot }}
        </p>

        {{-- Tags/Pills --}}
        <div class="mt-auto flex flex-wrap gap-2">
            @foreach($tags as $tag)
                <span class="px-3 py-1 rounded-full bg-white/5 border border-white/10 text-[11px] font-medium text-gray-400">
                    {{ $tag }}
                </span>
            @endforeach
        </div>
    </div>
</div>