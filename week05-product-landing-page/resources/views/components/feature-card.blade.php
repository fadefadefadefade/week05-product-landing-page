@props([
    'icon'        => '☕',
    'title'       => 'Feature',
    'description' => '',
    'accent'      => false,
])

<div {{ $attributes->merge(['class' => 'group relative bg-[#111111] border border-white/5 hover:border-[#d4a843]/30 rounded-2xl p-6 card-lift cursor-default']) }}>

    {{-- Hover glow top line --}}
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-[#d4a843]/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-t-2xl"></div>

    {{-- Icon --}}
    <div class="w-12 h-12 rounded-xl bg-[#d4a843]/10 border border-[#d4a843]/20 flex items-center justify-center mb-4 group-hover:bg-[#d4a843]/15 transition-colors duration-300">
        <span class="text-2xl">{{ $icon }}</span>
    </div>

    {{-- Title --}}
    <h3 class="text-white font-bold text-lg mb-2 group-hover:text-[#f0c060] transition-colors duration-300">
        {{ $title }}
    </h3>

    {{-- Description --}}
    <p class="text-gray-500 text-sm leading-relaxed">
        {{ $description }}
    </p>

    {{-- Bottom accent --}}
    @if($accent)
    <div class="mt-4 pt-4 border-t border-white/5">
        <span class="text-[#d4a843] text-xs font-semibold uppercase tracking-wider">Featured</span>
    </div>
    @endif
</div>
