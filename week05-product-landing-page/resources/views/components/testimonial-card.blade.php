@props([
    'name'     => 'Customer',
    'position' => 'Regular',
    'review'   => '',
    'avatar'   => null,
    'initials' => 'C',
    'rating'   => 5,
])

<div {{ $attributes->merge(['class' => 'group bg-[#111111] border border-white/5 hover:border-[#d4a843]/20 rounded-2xl p-6 card-lift flex flex-col gap-4']) }}>

    {{-- Stars --}}
    <div class="flex gap-1">
        @for($i = 1; $i <= 5; $i++)
        <svg class="w-4 h-4 {{ $i <= $rating ? 'text-[#d4a843]' : 'text-gray-700' }}" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
        </svg>
        @endfor
    </div>

    {{-- Quote mark --}}
    <svg class="w-8 h-8 text-[#d4a843]/20" fill="currentColor" viewBox="0 0 32 32">
        <path d="M10 8C6.134 8 3 11.134 3 15v9h9v-9H6c0-2.206 1.794-4 4-4V8zm16 0c-3.866 0-7 3.134-7 7v9h9v-9h-6c0-2.206 1.794-4 4-4V8z"/>
    </svg>

    {{-- Review text --}}
    <p class="text-gray-400 text-sm leading-relaxed flex-1 italic">
        "{{ $review }}"
    </p>

    {{-- Author --}}
    <div class="flex items-center gap-3 pt-4 border-t border-white/5">
        {{-- Avatar --}}
        @if($avatar)
        <img src="{{ $avatar }}" alt="{{ $name }}" class="w-10 h-10 rounded-full object-cover border-2 border-[#d4a843]/30">
        @else
        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#d4a843] to-[#b8860b] flex items-center justify-center text-[#0a0a0a] font-black text-sm flex-shrink-0">
            {{ strtoupper(substr($initials, 0, 1)) }}
        </div>
        @endif

        <div>
            <div class="text-white font-semibold text-sm">{{ $name }}</div>
            <div class="text-gray-500 text-xs">{{ $position }}</div>
        </div>
    </div>
</div>
