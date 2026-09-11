@props([
    'plan'     => 'Starter',
    'price'    => '₱0',
    'period'   => '/month',
    'desc'     => '',
    'features' => [],
    'popular'  => false,
    'cta'      => 'Get Started',
])

<div {{ $attributes->merge(['class' => 'relative flex flex-col rounded-2xl p-8 card-lift ' .
    ($popular
        ? 'bg-[#d4a843] text-[#0a0a0a] shadow-2xl shadow-[#d4a843]/20 scale-105'
        : 'bg-[#111111] border border-white/8 hover:border-[#d4a843]/30 text-white')
]) }}>

    {{-- Popular badge --}}
    @if($popular)
    <div class="absolute -top-4 left-1/2 -translate-x-1/2">
        <span class="bg-[#0a0a0a] text-[#d4a843] text-xs font-black px-4 py-1.5 rounded-full border border-[#d4a843]/50 uppercase tracking-widest shadow-lg">
            Most Popular
        </span>
    </div>
    @endif

    {{-- Plan name --}}
    <div class="mb-6">
        <h3 class="text-sm font-bold uppercase tracking-[0.2em] mb-1 {{ $popular ? 'text-[#0a0a0a]/70' : 'text-[#d4a843]' }}">
            {{ $plan }}
        </h3>
        <div class="flex items-end gap-1 mt-3">
            <span class="text-4xl font-black">{{ $price }}</span>
            <span class="text-sm mb-2 {{ $popular ? 'text-[#0a0a0a]/60' : 'text-gray-500' }}">{{ $period }}</span>
        </div>
        @if($desc)
        <p class="text-sm mt-2 {{ $popular ? 'text-[#0a0a0a]/70' : 'text-gray-500' }}">{{ $desc }}</p>
        @endif
    </div>

    {{-- Divider --}}
    <div class="h-px {{ $popular ? 'bg-[#0a0a0a]/20' : 'bg-white/8' }} mb-6"></div>

    {{-- Features list --}}
    <ul class="space-y-3 flex-1 mb-8">
        @foreach($features as $feature)
        <li class="flex items-start gap-3 text-sm">
            <svg class="w-4 h-4 mt-0.5 flex-shrink-0 {{ $popular ? 'text-[#0a0a0a]' : 'text-[#d4a843]' }}" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="{{ $popular ? 'text-[#0a0a0a]/80' : 'text-gray-400' }}">{{ $feature }}</span>
        </li>
        @endforeach
    </ul>

    {{-- CTA Button --}}
    <a href="#contact"
       class="block text-center py-3.5 px-6 rounded-xl font-bold text-sm transition-all duration-200
              {{ $popular
                  ? 'bg-[#0a0a0a] text-white hover:bg-[#1a1a1a]'
                  : 'bg-[#d4a843]/10 border border-[#d4a843]/30 text-[#d4a843] hover:bg-[#d4a843] hover:text-[#0a0a0a]'
              }}">
        {{ $cta }}
    </a>
</div>
