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
            {{-- Header --}}
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

            {{-- Feature Cards Grid --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
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
                    icon="📶"
                    title="High-Speed WiFi"
                    description="Blazing fast, reliable connection so you can work, stream, or study without interruption all night long."
                />
                <x-feature-card
                    icon="🛋️"
                    title="Cozy Workspaces"
                    description="Private booths, communal tables, and power outlets at every seat. Designed for productivity and comfort."
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

    {{-- Pricing Section --}}
    <section id="pricing" class="py-24 lg:py-32 bg-[#0a0a0a] relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute right-1/4 bottom-0 w-[500px] h-[400px] bg-[#d4a843]/4 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Header --}}
            <div class="text-center mb-16">
                <span class="inline-block text-[#d4a843] text-xs font-bold uppercase tracking-[0.3em] mb-4">Membership Plans</span>
                <h2 class="text-4xl lg:text-5xl font-black text-white leading-tight">
                    Pick Your <span class="gradient-text">Night Pass.</span>
                </h2>
                <p class="text-gray-500 mt-4 max-w-xl mx-auto text-lg">
                    From casual drop-ins to dedicated regulars — we have a plan that fits your night.
                </p>
            </div>

            {{-- Pricing Cards --}}
            <div class="grid md:grid-cols-3 gap-6 lg:gap-8 items-center max-w-5xl mx-auto">
                <x-pricing-card
                    plan="Starter"
                    price="Free"
                    period=""
                    desc="Perfect for first-timers and casual visitors."
                    :features="[
                        'Walk-in access anytime',
                        'Standard WiFi (20 Mbps)',
                        'Access to communal tables',
                        'Order from regular menu',
                        '1 loyalty stamp per visit',
                    ]"
                    cta="Walk In Free"
                />
                <x-pricing-card
                    plan="Professional"
                    price="₱599"
                    period="/month"
                    desc="For regulars who own the night."
                    :popular="true"
                    :features="[
                        'Priority seating reservation',
                        'High-speed WiFi (100 Mbps)',
                        'Private booth access',
                        '10% off all orders',
                        'Monthly free specialty drink',
                        'Members-only events',
                        'Early access to new menu',
                    ]"
                    cta="Get Night Pass"
                />
                <x-pricing-card
                    plan="Enterprise"
                    price="₱1,999"
                    period="/month"
                    desc="For teams and power users."
                    :features="[
                        'Dedicated private room',
                        'Dedicated fiber WiFi line',
                        'Unlimited free brewed coffee',
                        '20% off all orders',
                        'Event space booking (2x/mo)',
                        'Branded loyalty card',
                        'Account manager support',
                        'Custom ambient preferences',
                    ]"
                    cta="Contact Sales"
                />
            </div>

            <p class="text-center text-gray-600 text-sm mt-10">
                All plans include access to our base menu and free water station.
                <a href="#contact" class="text-[#d4a843] hover:underline ml-1">Questions? Talk to us →</a>
            </p>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section id="testimonials" class="py-24 lg:py-32 bg-[#0d0d0d] relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute left-1/3 top-0 w-96 h-96 bg-[#d4a843]/4 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Header --}}
            <div class="text-center mb-16">
                <span class="inline-block text-[#d4a843] text-xs font-bold uppercase tracking-[0.3em] mb-4">What They Say</span>
                <h2 class="text-4xl lg:text-5xl font-black text-white leading-tight">
                    Loved by <span class="gradient-text">Night Owls.</span>
                </h2>
                <p class="text-gray-500 mt-4 max-w-xl mx-auto text-lg">
                    Don't just take our word for it — here's what our community says.
                </p>
            </div>

            {{-- Testimonial Cards --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-testimonial-card
                    name="Marco Reyes"
                    position="Freelance Developer"
                    initials="M"
                    :rating="5"
                    review="Overnight Cafe literally saved my deadlines. Fast WiFi, great coffee, and the vibe at 2AM is absolutely unmatched. This is my second office now."
                />
                <x-testimonial-card
                    name="Aisha Santos"
                    position="Graphic Designer"
                    initials="A"
                    :rating="5"
                    review="I've tried every late-night cafe in the city. None of them come close. The Starlight Latte alone is worth the trip. Cozy, quiet, and the playlist is perfect."
                />
                <x-testimonial-card
                    name="Diego Lim"
                    position="Medical Student"
                    initials="D"
                    :rating="5"
                    review="As a med student pulling all-nighters, this place is a lifesaver. Comfortable seats, great lighting for studying, and the staff is super friendly."
                />
                <x-testimonial-card
                    name="Camille Cruz"
                    position="Content Creator"
                    initials="C"
                    :rating="5"
                    review="The aesthetic alone makes it worth visiting. Every corner is Instagram-worthy. The Midnight Espresso is now part of my nightly ritual."
                />
                <x-testimonial-card
                    name="Ryan Tan"
                    position="Startup Founder"
                    initials="R"
                    :rating="5"
                    review="We host our late-night team syncs here every week. The Enterprise plan is a steal. Private room, dedicated WiFi — it's better than our actual office."
                />
                <x-testimonial-card
                    name="Lea Mendoza"
                    position="Writer & Blogger"
                    initials="L"
                    :rating="5"
                    review="I wrote my entire first novel here. Something about the night energy just unlocks creativity. Overnight Cafe is where my best work happens."
                />
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <x-cta-section />

@endsection
