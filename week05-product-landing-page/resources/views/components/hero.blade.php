<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">

    {{-- Background gradient blobs --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#d4a843]/8 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/3 right-1/4 w-80 h-80 bg-[#d4a843]/5 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#d4a843]/3 rounded-full blur-3xl"></div>
        {{-- Grid pattern --}}
        <div class="absolute inset-0 opacity-[0.03]"
             style="background-image: linear-gradient(rgba(212,168,67,0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(212,168,67,0.5) 1px, transparent 1px); background-size: 60px 60px;">
        </div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            {{-- Left: Text Content --}}
            <div class="text-center lg:text-left">

                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 bg-[#d4a843]/10 border border-[#d4a843]/30 text-[#d4a843] text-xs font-semibold px-4 py-2 rounded-full mb-6 tracking-wider uppercase">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#d4a843] animate-pulse"></span>
                    Now Open Until 4 AM
                </div>

                {{-- Headline --}}
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black leading-[1.05] tracking-tight mb-6">
                    <span class="text-white">Where the</span><br>
                    <span class="gradient-text amber-text-glow">Night Stays</span><br>
                    <span class="text-white">Alive.</span>
                </h1>

                {{-- Description --}}
                <p class="text-lg text-gray-400 leading-relaxed mb-8 max-w-lg mx-auto lg:mx-0">
                    Overnight Cafe is your late-night sanctuary — a place where great coffee, warm ambiance,
                    and good company meet when the rest of the world is asleep.
                </p>

                {{-- CTA Buttons --}}
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <x-button href="#contact" variant="primary" size="lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Visit Us Tonight
                    </x-button>
                    <x-button href="#features" variant="secondary" size="lg">
                        Explore the Menu
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </x-button>
                </div>

                {{-- Stats --}}
                <div class="flex gap-8 justify-center lg:justify-start mt-12 pt-12 border-t border-white/10">
                    <div>
                        <div class="text-3xl font-black text-white">5K+</div>
                        <div class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Happy Customers</div>
                    </div>
                    <div class="w-px bg-white/10"></div>
                    <div>
                        <div class="text-3xl font-black text-white">50+</div>
                        <div class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Drinks & Meals</div>
                    </div>
                    <div class="w-px bg-white/10"></div>
                    <div>
                        <div class="text-3xl font-black text-white">4★</div>
                        <div class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Avg Rating</div>
                    </div>
                </div>
            </div>

            {{-- Right: Illustration --}}
            <div class="relative flex items-center justify-center">
                {{-- Outer glow ring --}}
                <div class="absolute w-80 h-80 lg:w-[420px] lg:h-[420px] rounded-full bg-[#d4a843]/5 border border-[#d4a843]/10"></div>
                <div class="absolute w-64 h-64 lg:w-[340px] lg:h-[340px] rounded-full bg-[#d4a843]/8 border border-[#d4a843]/15"></div>

                {{-- Main coffee cup illustration --}}
                <div class="relative z-10 moon-float">
                    <svg width="280" height="300" viewBox="0 0 280 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                        {{-- Steam --}}
                        <path class="steam-1" d="M100 80 Q95 65 100 50" stroke="#d4a843" stroke-width="3" stroke-linecap="round" opacity="0.6"/>
                        <path class="steam-2" d="M140 75 Q135 58 140 42" stroke="#d4a843" stroke-width="3" stroke-linecap="round" opacity="0.6"/>
                        <path class="steam-3" d="M180 80 Q185 63 180 48" stroke="#d4a843" stroke-width="3" stroke-linecap="round" opacity="0.6"/>

                        {{-- Cup body --}}
                        <path d="M70 100 L80 220 Q80 230 90 230 L190 230 Q200 230 200 220 L210 100 Z"
                              fill="#1a1a1a" stroke="#d4a843" stroke-width="2"/>

                        {{-- Cup top rim --}}
                        <ellipse cx="140" cy="100" rx="70" ry="12" fill="#222222" stroke="#d4a843" stroke-width="2"/>

                        {{-- Coffee surface --}}
                        <ellipse cx="140" cy="100" rx="62" ry="10" fill="#3d2b0a"/>

                        {{-- Latte art - moon & stars --}}
                        <path d="M155 96 Q148 90 148 100 Q148 108 155 104 Q146 106 143 100 Q140 94 143 96 Q148 90 155 96Z"
                              fill="#d4a843" opacity="0.8"/>
                        <circle cx="120" cy="98" r="2" fill="#d4a843" opacity="0.6"/>
                        <circle cx="165" cy="103" r="1.5" fill="#d4a843" opacity="0.5"/>

                        {{-- Cup handle --}}
                        <path d="M200 130 Q230 130 230 165 Q230 200 200 200"
                              stroke="#d4a843" stroke-width="6" fill="none" stroke-linecap="round"/>

                        {{-- Saucer --}}
                        <ellipse cx="140" cy="240" rx="90" ry="14" fill="#1a1a1a" stroke="#d4a843" stroke-width="1.5"/>
                        <ellipse cx="140" cy="238" rx="70" ry="10" fill="#222222"/>

                        {{-- Moon decoration --}}
                        <path d="M230 50 Q220 40 220 55 Q220 70 230 65 Q216 66 212 55 Q208 44 212 46 Q220 40 230 50Z"
                              fill="#d4a843" opacity="0.9"/>

                        {{-- Stars --}}
                        <circle cx="55" cy="60" r="2" fill="#d4a843" opacity="0.5"/>
                        <circle cx="240" cy="120" r="1.5" fill="#d4a843" opacity="0.4"/>
                        <circle cx="40" cy="150" r="1" fill="#d4a843" opacity="0.3"/>
                        <circle cx="250" cy="80" r="1" fill="#d4a843" opacity="0.4"/>
                        <circle cx="30" cy="200" r="1.5" fill="#d4a843" opacity="0.3"/>
                    </svg>
                </div>

                {{-- Floating badges --}}
                <div class="absolute top-8 right-4 lg:right-0 bg-[#111111] border border-[#d4a843]/30 rounded-xl px-4 py-3 shadow-xl">
                    <div class="flex items-center gap-2">
                        <span class="text-xl">☕</span>
                        <div>
                            <div class="text-white text-xs font-bold">Specialty Brew</div>
                            <div class="text-[#d4a843] text-xs">Just served</div>
                        </div>
                    </div>
                </div>

                <div class="absolute bottom-16 left-0 lg:-left-6 bg-[#111111] border border-[#d4a843]/30 rounded-xl px-4 py-3 shadow-xl">
                    <div class="flex items-center gap-2">
                        <span class="text-xl">🌙</span>
                        <div>
                            <div class="text-white text-xs font-bold">Open Tonight</div>
                            <div class="text-[#d4a843] text-xs">6PM — 4AM</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-gray-600">
        <span class="text-xs uppercase tracking-widest">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-[#d4a843]/50 to-transparent"></div>
    </div>
</section>
