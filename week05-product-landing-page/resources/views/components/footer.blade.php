<footer id="contact" class="bg-[#080808] border-t border-white/5">

    {{-- Main Footer --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">

            {{-- Brand Column --}}
            <div class="lg:col-span-1">
                {{-- Logo --}}
                <div class="flex items-center gap-2 mb-4">
                    <svg width="32" height="32" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 28C14.268 28 8 21.732 8 14C8 11.2 8.8 8.6 10.2 6.4C5.4 8.4 2 13.2 2 18.8C2 26.532 8.268 32.8 16 32.8C21.6 32.8 26.4 29.4 28.4 24.6C26.2 26.8 24.2 28 22 28Z" fill="#d4a843"/>
                    </svg>
                    <div class="leading-tight">
                        <span class="text-white font-black text-lg tracking-tight">overnight.</span>
                        <span class="block text-[#d4a843] text-xs font-medium tracking-[0.2em] uppercase -mt-0.5">cafe</span>
                    </div>
                </div>

                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    Your late-night sanctuary. Premium coffee, cozy ambiance, and great company — open until the early hours.
                </p>

                {{-- Social Icons --}}
                <div class="flex gap-3">
                    @php
                    $socials = [
                        ['label' => 'Facebook', 'href' => '#', 'icon' => 'M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z'],
                        ['label' => 'Instagram', 'href' => '#', 'icon' => 'M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01M6.5 20.5h11a3 3 0 003-3v-11a3 3 0 00-3-3h-11a3 3 0 00-3 3v11a3 3 0 003 3z'],
                        ['label' => 'Twitter', 'href' => '#', 'icon' => 'M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z'],
                        ['label' => 'TikTok', 'href' => '#', 'icon' => 'M9 12a4 4 0 104 4V4a5 5 0 005 5'],
                    ];
                    @endphp
                    @foreach($socials as $social)
                    <a href="{{ $social['href'] }}"
                       aria-label="{{ $social['label'] }}"
                       class="w-9 h-9 rounded-lg bg-white/5 border border-white/8 flex items-center justify-center text-gray-400 hover:text-[#d4a843] hover:border-[#d4a843]/30 hover:bg-[#d4a843]/10 transition-all duration-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="{{ $social['icon'] }}"/>
                        </svg>
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-5">Quick Links</h4>
                <ul class="space-y-3">
                    @foreach(['Home' => '#home', 'Features' => '#features', 'Pricing' => '#pricing', 'Testimonials' => '#testimonials', 'Contact' => '#contact'] as $label => $href)
                    <li>
                        <a href="{{ $href }}" class="text-gray-500 hover:text-[#d4a843] text-sm transition-colors duration-200 flex items-center gap-2 group">
                            <span class="w-1 h-1 rounded-full bg-[#d4a843]/0 group-hover:bg-[#d4a843] transition-colors"></span>
                            {{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Menu --}}
            <div>
                <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-5">Our Menu</h4>
                <ul class="space-y-3">
                    @foreach(['Espresso Drinks', 'Cold Brews', 'Specialty Lattes', 'Night Snacks', 'Pastries & Cakes', 'Non-Coffee'] as $item)
                    <li>
                        <a href="#showcase" class="text-gray-500 hover:text-[#d4a843] text-sm transition-colors duration-200 flex items-center gap-2 group">
                            <span class="w-1 h-1 rounded-full bg-[#d4a843]/0 group-hover:bg-[#d4a843] transition-colors"></span>
                            {{ $item }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-5">Contact Us</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-[#d4a843] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-gray-500 text-sm">123 Night Owl St.,<br>Poblacion, Makati City</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-[#d4a843] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-500 text-sm">6:00 PM — 4:00 AM daily</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-[#d4a843] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:hello@overnight.cafe" class="text-gray-500 hover:text-[#d4a843] text-sm transition-colors">hello@overnight.cafe</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-[#d4a843] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:+63912345678" class="text-gray-500 hover:text-[#d4a843] text-sm transition-colors">+63 912 345 6789</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-gray-600 text-xs text-center sm:text-left">
                &copy; {{ date('Y') }} <span class="text-[#d4a843]">Overnight. Cafe</span>. All rights reserved.
            </p>
            <div class="flex gap-5">
                <a href="#" class="text-gray-600 hover:text-gray-400 text-xs transition-colors">Privacy Policy</a>
                <a href="#" class="text-gray-600 hover:text-gray-400 text-xs transition-colors">Terms of Service</a>
                <a href="#" class="text-gray-600 hover:text-gray-400 text-xs transition-colors">Cookies</a>
            </div>
        </div>
    </div>
</footer>
