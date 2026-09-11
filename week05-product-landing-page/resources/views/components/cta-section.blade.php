<section id="cta" class="py-24 lg:py-32 relative overflow-hidden">

    {{-- Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-[#111111] via-[#0f0e0a] to-[#0a0a0a]"></div>
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[400px] bg-[#d4a843]/8 rounded-full blur-3xl"></div>
        {{-- Grid --}}
        <div class="absolute inset-0 opacity-[0.025]"
             style="background-image: linear-gradient(rgba(212,168,67,0.8) 1px, transparent 1px), linear-gradient(90deg, rgba(212,168,67,0.8) 1px, transparent 1px); background-size: 40px 40px;">
        </div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        {{-- Moon icon --}}
        <div class="flex justify-center mb-8">
            <div class="w-16 h-16 rounded-2xl bg-[#d4a843]/10 border border-[#d4a843]/30 flex items-center justify-center moon-float">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M26 18C18.268 18 12 11.732 12 4C12 2.8 12.16 1.64 12.44 0.52C7.24 2.4 3.6 7.36 3.6 13.2C3.6 20.932 9.868 27.2 17.6 27.2C23.44 27.2 28.4 23.56 30.28 18.36C28.96 18.12 27.48 18 26 18Z"
                          fill="#d4a843"/>
                </svg>
            </div>
        </div>

        {{-- Headline --}}
        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight mb-6">
            Ready to Own<br>
            <span class="gradient-text amber-text-glow">the Night?</span>
        </h2>

        <p class="text-xl text-gray-400 leading-relaxed mb-10 max-w-2xl mx-auto">
            Join thousands of night owls who've made Overnight Cafe their second home.
            Your table is waiting. Your coffee is brewing.
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
            <x-button href="#contact" variant="primary" size="lg" class="text-base px-10 py-4">
                🌙 Start Free Trial
            </x-button>
            <x-button href="#contact" variant="secondary" size="lg" class="text-base px-10 py-4">
                📞 Contact Sales
            </x-button>
        </div>

        {{-- Register nudge --}}
        <p class="text-gray-600 text-sm">
            No credit card required.
            <a href="#contact" class="text-[#d4a843] hover:text-[#f0c060] underline underline-offset-2 transition-colors">
                Register for free →
            </a>
        </p>

        {{-- Trust badges --}}
        <div class="flex flex-wrap justify-center gap-6 mt-12 pt-12 border-t border-white/8">
            @php
            $badges = [
                ['icon' => '🔒', 'text' => 'Secure & Private'],
                ['icon' => '⚡', 'text' => 'Instant Access'],
                ['icon' => '🎯', 'text' => 'Cancel Anytime'],
                ['icon' => '💬', 'text' => '24/7 Support'],
            ];
            @endphp
            @foreach($badges as $badge)
            <div class="flex items-center gap-2 text-gray-500 text-sm">
                <span>{{ $badge['icon'] }}</span>
                <span>{{ $badge['text'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
