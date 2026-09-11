@extends('layouts.app')

@section('title', 'Overnight. Cafe — Your Late-Night Sanctuary')

@section('content')

    {{-- Hero --}}
    <x-hero />

    {{-- Features Section --}}
    <section id="features" class="py-24 lg:py-32 bg-[#0d0d0d] relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute left-0 top-1/2 w-96 h-96 bg-[#d4a843]/4 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block text-[#d4a843] text-xs font-bold uppercase tracking-[0.3em] mb-4">Why Choose Us</span>
                <h2 class="text-4xl lg:text-5xl font-black text-white leading-tight">
                    Everything You Need<br>
                    <span class="gradient-text">After Dark.</span>
                </h2>
                <p class="text-gray-500 mt-4 max-w-xl mx-auto text-lg">
                    We've crafted every detail of Overnight Cafe to make your late-night experience unforgettable.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-5 max-w-3xl mx-auto">
                <x-feature-card
                    icon="🌙"
                    title="Open Till 4 AM"
                    description="When every other cafe closes, we're just getting started. Perfect for night owls, creatives, and late-shift workers."
                    :accent="true"
                />
                <x-feature-card
                    icon="☕"
                    title="Specialty Coffee"
                    description="Hand-selected beans from local farms, brewed to perfection by our trained baristas every single night."
                />
                <x-feature-card
                    icon="🎵"
                    title="Curated Night Playlist"
                    description="From lo-fi beats to jazz and indie — our nightly playlists set the perfect mood for focus or conversation."
                />
                <x-feature-card
                    icon="🍞"
                    title="Fresh Night Bites"
                    description="Hot sandwiches, pastries, and light meals made fresh throughout the night. Fuel for your late-night sessions."
                />
            </div>
        </div>
    </section>

    {{-- Product Showcase --}}
    <x-showcase />

    {{-- Menu / Drinks Section --}}
    <section id="pricing" class="py-24 lg:py-32 bg-[#0a0a0a] relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute right-1/4 bottom-0 w-[500px] h-[400px] bg-[#d4a843]/4 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Header --}}
            <div class="text-center mb-16">
                <span class="inline-block text-[#d4a843] text-xs font-bold uppercase tracking-[0.3em] mb-4">Our Drinks</span>
                <h2 class="text-4xl lg:text-5xl font-black text-white leading-tight">
                    The <span class="gradient-text">Overnight Menu.</span>
                </h2>
                <p class="text-gray-500 mt-4 max-w-xl mx-auto text-lg">
                    From classic espressos to specialty lattes and refreshers — there's something for every night owl.
                </p>
            </div>

            {{-- Menu Grid --}}
            <div class="grid lg:grid-cols-2 gap-8">

                {{-- COFFEE --}}
                <div class="bg-[#111111] border border-white/5 rounded-2xl p-6 lg:p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-[#d4a843] font-black text-xl uppercase tracking-wider">Coffee</h3>
                        <div class="flex gap-4 text-xs text-gray-500 font-bold uppercase tracking-wider">
                            <span>Iced</span>
                            <span>Hot</span>
                        </div>
                    </div>
                    <div class="space-y-3">
                        @php $coffeeItems = [
                            ['Americano',             69,  89],
                            ['Sweet Americano',       79,  99],
                            ['Overnight Latte',       89, 109],
                            ['Spanish Latte',         89, 109],
                            ['Mocha Latte',           99, 119],
                            ['Vanilla Latte',         99, 119],
                            ['Roasted Almond Latte',  99, 119],
                            ['Macadamia Nut Latte',   99, 119],
                            ['Hazelnut Latte',        99, 119],
                            ['Seasalt Latte',         99, 119],
                            ['Salted Caramel',       109, 129],
                            ['Caramel Macchiato',    109, 129],
                            ['White Chocolate Mocha',109, 129],
                            ['Coffee Jelly',         109, 129],
                            ['Biscoff Latte',        119, 139],
                        ]; @endphp
                        @foreach($coffeeItems as $item)
                        <div class="flex items-center justify-between py-2 border-b border-white/5 last:border-0 group hover:bg-white/2 rounded-lg px-2 -mx-2 transition-colors">
                            <span class="text-gray-300 text-sm group-hover:text-white transition-colors">{{ $item[0] }}</span>
                            <div class="flex gap-6 text-sm font-bold">
                                <span class="text-[#d4a843] w-8 text-right">{{ $item[1] }}</span>
                                <span class="text-white w-8 text-right">{{ $item[2] }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Right column: Matcha + Non-Coffee + Refreshers + Add-ons --}}
                <div class="space-y-6">

                    {{-- MATCHA SERIES --}}
                    <div class="bg-[#111111] border border-white/5 rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-5">
                            <h3 class="text-[#d4a843] font-black text-xl uppercase tracking-wider">Matcha Series</h3>
                            <div class="flex gap-4 text-xs text-gray-500 font-bold uppercase tracking-wider">
                                <span>Iced</span>
                                <span>Hot</span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            @php $matchaItems = [
                                ['Matcha Latte',      99,  119],
                                ['Strawberry Matcha', 119, 139],
                                ['Seasalt Matcha',    119, 139],
                            ]; @endphp
                            @foreach($matchaItems as $item)
                            <div class="flex items-center justify-between py-2 border-b border-white/5 last:border-0 group hover:bg-white/2 rounded-lg px-2 -mx-2 transition-colors">
                                <span class="text-gray-300 text-sm group-hover:text-white transition-colors">{{ $item[0] }}</span>
                                <div class="flex gap-6 text-sm font-bold">
                                    <span class="text-[#d4a843] w-8 text-right">{{ $item[1] }}</span>
                                    <span class="text-white w-8 text-right">{{ $item[2] }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- NON-COFFEE BASED --}}
                    <div class="bg-[#111111] border border-white/5 rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-5">
                            <h3 class="text-[#d4a843] font-black text-xl uppercase tracking-wider">Non-Coffee Based</h3>
                            <div class="flex gap-4 text-xs text-gray-500 font-bold uppercase tracking-wider">
                                <span>Iced</span>
                                <span>Hot</span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            @php $nonCoffeeItems = [
                                ['Choco Latte',      89,  109],
                                ['Strawberry Milk',  89,  109],
                                ['Cookies & Cream',  89,  109],
                                ['Ube Milk',         89,  109],
                                ['Biscoff Milk',     109, 129],
                                ['Pistachio (Dubai)',130, 150],
                            ]; @endphp
                            @foreach($nonCoffeeItems as $item)
                            <div class="flex items-center justify-between py-2 border-b border-white/5 last:border-0 group hover:bg-white/2 rounded-lg px-2 -mx-2 transition-colors">
                                <span class="text-gray-300 text-sm group-hover:text-white transition-colors">{{ $item[0] }}</span>
                                <div class="flex gap-6 text-sm font-bold">
                                    <span class="text-[#d4a843] w-8 text-right">{{ $item[1] }}</span>
                                    <span class="text-white w-8 text-right">{{ $item[2] }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- REFRESHERS + ADD-ONS side by side --}}
                    <div class="grid grid-cols-2 gap-4">

                        {{-- REFRESHERS --}}
                        <div class="bg-[#111111] border border-white/5 rounded-2xl p-5">
                            <h3 class="text-[#d4a843] font-black text-base uppercase tracking-wider mb-4">Refreshers</h3>
                            <div class="space-y-3">
                                @php $refreshers = [
                                    ['Strawberry',  79],
                                    ['Green Apple', 79],
                                    ['Lychee',      79],
                                ]; @endphp
                                @foreach($refreshers as $item)
                                <div class="flex items-center justify-between py-1.5 border-b border-white/5 last:border-0">
                                    <span class="text-gray-300 text-xs">{{ $item[0] }}</span>
                                    <span class="text-[#d4a843] text-sm font-bold">{{ $item[1] }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- ADD-ONS --}}
                        <div class="bg-[#111111] border border-white/5 rounded-2xl p-5">
                            <h3 class="text-[#d4a843] font-black text-base uppercase tracking-wider mb-4">Add-ons</h3>
                            <div class="space-y-3">
                                @php $addons = [
                                    ['Extra Shot',        20],
                                    ['Extra Syrup 15ml',  15],
                                    ['Extra Sauce 20ml',  15],
                                ]; @endphp
                                @foreach($addons as $item)
                                <div class="flex items-center justify-between py-1.5 border-b border-white/5 last:border-0">
                                    <span class="text-gray-300 text-xs">{{ $item[0] }}</span>
                                    <span class="text-[#d4a843] text-sm font-bold">+{{ $item[1] }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Menu image reference --}}
            <div class="mt-10 text-center">
                <p class="text-gray-600 text-sm mb-4">View our full printed menu</p>
                <a href="{{ asset('images/price.jpg') }}" target="_blank"
                   class="inline-flex items-center gap-2 text-[#d4a843] border border-[#d4a843]/30 px-5 py-2.5 rounded-lg hover:bg-[#d4a843]/10 transition-all text-sm font-semibold">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    See Full Menu Image
                </a>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <x-cta-section />

@endsection
