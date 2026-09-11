@props([
    'variant' => 'primary',   // primary | secondary | ghost | outline
    'size'    => 'md',         // sm | md | lg
    'href'    => null,
    'type'    => 'button',
])

@php
$base = 'inline-flex items-center justify-center gap-2 font-semibold rounded-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0a0a0a]';

$variants = [
    'primary'   => 'bg-[#d4a843] text-[#0a0a0a] hover:bg-[#f0c060] focus:ring-[#d4a843] amber-glow',
    'secondary' => 'bg-white/10 text-white hover:bg-white/20 border border-white/20 focus:ring-white/30',
    'ghost'     => 'text-[#d4a843] hover:text-[#f0c060] hover:bg-[#d4a843]/10 focus:ring-[#d4a843]/30',
    'outline'   => 'border border-[#d4a843] text-[#d4a843] hover:bg-[#d4a843] hover:text-[#0a0a0a] focus:ring-[#d4a843]',
];

$sizes = [
    'sm' => 'px-4 py-2 text-sm',
    'md' => 'px-6 py-3 text-sm',
    'lg' => 'px-8 py-4 text-base',
];

$classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
