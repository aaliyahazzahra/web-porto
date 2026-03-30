@extends('layouts.app')

@section('content')
<div class="py-20 bg-slate-50">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-10">Proyek Unggulan</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($projects as $p)
            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl transition group">
                <img src="{{ $p['image'] }}" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                <div class="p-6">
                    <span class="text-xs font-bold text-blue-600 uppercase tracking-wider">{{ $p['tag'] }}</span>
                    <h3 class="text-xl font-bold mt-2 mb-2">{{ $p['title'] }}</h3>
                    <p class="text-slate-600 mb-4">{{ $p['desc'] }}</p>
                    <a href="#" class="text-blue-600 font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                        Detail Proyek <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
