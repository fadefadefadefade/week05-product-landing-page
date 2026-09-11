<section id="showcase" class="py-24 lg:py-32 bg-[#0d0d0d] relative overflow-hidden">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute right-0 top-0 w-[500px] h-[500px] bg-[#d4a843]/4 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section header --}}
        <div class="text-center mb-16">
            <span class="inline-block text-[#d4a843] text-xs font-bold uppercase tracking-[0.3em] mb-4">The Experience</span>
            <h2 class="text-4xl lg:text-5xl font-black text-white leading-tight">
                More Than Just Coffee.<br>
                <span class="gradient-text">It's a Lifestyle.</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-xl mx-auto text-lg">
                From our curated menu to our night-owl ambiance — every detail is designed for those who thrive after dark.
            </p>
        </div>

        {{-- Main Showcase Grid --}}
        <div class="grid lg:grid-cols-2 gap-8 items-center mb-12">

            {{-- Left: Large screen mockup --}}
            <div class="relative">
                <div class="bg-[#111111] border border-white/8 rounded-2xl overflow-hidden shadow-2xl">
                    {{-- Browser bar --}}
                    <div class="bg-[#1a1a1a] border-b border-white/8 px-4 py-3 flex items-center gap-3">
                        <div class="flex gap-1.5">
                            <div class="w-3 h-3 rounded-full bg-red-500/60"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500/60"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500/60"></div>
                        </div>
                        <div class="flex-1 bg-[#0a0a0a] rounded-md px-3 py-1 text-xs text-gray-500 text-center">
                            overnight.cafe/menu
                        </div>
                    </div>
                    {{-- Dashboard content --}}
                    <div class="p-6 space-y-4">
                        <div class="flex items-center justify-between">
                            <h4 class="text-white font-bold text-sm">Tonight's Specials</h4>
                            <span class="text-[#d4a843] text-xs bg-[#d4a843]/10 px-2 py-1 rounded-full">Live Menu</span>
                        </div>
                        {{-- Menu items --}}
                        @php
                        $items = [
                            ['name' => 'Midnight Espresso', 'desc' => 'Double shot, dark roast', 'price' => '₱120', 'tag' => '🌙'],
                            ['name' => 'Starlight Latte',   'desc' => 'Oat milk, vanilla cloud', 'price' => '₱150', 'tag' => '⭐'],
                            ['name' => 'Eclipse Cold Brew', 'desc' => '18-hr slow brew',          'price' => '₱160', 'tag' => '🌑'],
                            ['name' => 'Amber Honey Flat',  'desc' => 'Wildflower honey drizzle',  'price' => '₱145', 'tag' => '🍯'],
                        ];
                        @endphp
                        @foreach($items as $item)
                        <div class="flex items-center justify-between p-3 bg-[#1a1a1a] rounded-xl hover:bg-[#222] transition-colors">
                            <div class="flex items-center gap-3">
                                <span class="text-xl">{{ $item['tag'] }}</span>
                                <div>
                                    <div class="text-white text-xs font-semibold">{{ $item['name'] }}</div>
                                    <div class="text-gray-500 text-xs">{{ $item['desc'] }}</div>
                                </div>
                            </div>
                            <span class="text-[#d4a843] text-sm font-bold">{{ $item['price'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Right: Highlights --}}
            <div class="space-y-6">
                <h3 class="text-2xl lg:text-3xl font-black text-white">
                    A digital menu experience <span class="gradient-text">built for night owls.</span>
                </h3>
                <p class="text-gray-500 leading-relaxed">
                    Browse our rotating specials, reserve your corner spot, and pre-order your favorite brew —
                    all from your phone before you even step through the door.
                </p>

                @php
                $highlights = [
                    ['icon' => '📱', 'title' => 'Mobile-First Ordering', 'desc' => 'Pre-order from your phone, skip the wait.'],
                    ['icon' => '🔔', 'title' => 'Real-Time Notifications', 'desc' => 'Get notified when your order is ready.'],
                    ['icon' => '📍', 'title' => 'Seat Reservations', 'desc' => 'Reserve your cozy corner in advance.'],
                    ['icon' => '⚡', 'title' => 'Lightning Fast Service', 'desc' => 'Average prep time under 5 minutes.'],
                ];
                @endphp

                <div class="grid grid-cols-2 gap-4">
                    @foreach($highlights as $h)
                    <div class="bg-[#111111] border border-white/5 rounded-xl p-4 hover:border-[#d4a843]/20 transition-colors">
                        <span class="text-2xl mb-2 block">{{ $h['icon'] }}</span>
                        <div class="text-white text-sm font-semibold mb-1">{{ $h['title'] }}</div>
                        <div class="text-gray-500 text-xs">{{ $h['desc'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Bottom: Mobile view --}}
        <div class="grid md:grid-cols-3 gap-6 mt-8">
            @php
            $mobileCards = [
                ['emoji' => '🌙', 'title' => 'Night Mode UI',    'desc' => 'Dark-optimized interface, easy on the eyes at 2AM.'],
                ['emoji' => '☕', 'title' => 'Live Brew Tracker', 'desc' => 'Watch your coffee being brewed step by step.'],
                ['emoji' => '🎵', 'title' => 'Playlist Voting',  'desc' => 'Vote for the next song playing in the cafe.'],
            ];
            @endphp
            @foreach($mobileCards as $card)
            <div class="bg-[#111111] border border-white/5 hover:border-[#d4a843]/20 rounded-2xl p-6 text-center card-lift">
                <span class="text-4xl block mb-3">{{ $card['emoji'] }}</span>
                <h4 class="text-white font-bold mb-2">{{ $card['title'] }}</h4>
                <p class="text-gray-500 text-sm">{{ $card['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
