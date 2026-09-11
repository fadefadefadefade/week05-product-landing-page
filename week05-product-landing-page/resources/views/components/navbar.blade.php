<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-transparent nav-blur transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">

            {{-- Logo --}}
            <a href="#home" class="flex items-center gap-2 group">
                <div class="relative">
                    {{-- Moon + steam SVG logo mark --}}
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        {{-- Steam lines --}}
                        <path d="M12 8 Q13 5 12 2" stroke="#d4a843" stroke-width="1.5" stroke-linecap="round" class="steam-1" opacity="0.7"/>
                        <path d="M16 8 Q17 4 16 1" stroke="#d4a843" stroke-width="1.5" stroke-linecap="round" class="steam-2" opacity="0.7"/>
                        {{-- Moon crescent --}}
                        <path d="M22 28C14.268 28 8 21.732 8 14C8 11.2 8.8 8.6 10.2 6.4C5.4 8.4 2 13.2 2 18.8C2 26.532 8.268 32.8 16 32.8C21.6 32.8 26.4 29.4 28.4 24.6C26.2 26.8 24.2 28 22 28Z" fill="#d4a843"/>
                    </svg>
                </div>
                <div class="leading-tight">
                    <span class="text-white font-black text-xl tracking-tight">overnight.</span>
                    <span class="block text-[#d4a843] text-xs font-medium tracking-[0.2em] uppercase -mt-1">cafe</span>
                </div>
            </a>

            {{-- Desktop Nav Links --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-sm text-gray-400 hover:text-white transition-colors duration-200 font-medium">Home</a>
                <a href="#features" class="text-sm text-gray-400 hover:text-white transition-colors duration-200 font-medium">Features</a>
                <a href="#pricing" class="text-sm text-gray-400 hover:text-white transition-colors duration-200 font-medium">Pricing</a>
                <a href="#testimonials" class="text-sm text-gray-400 hover:text-white transition-colors duration-200 font-medium">Testimonials</a>
                <a href="#contact" class="text-sm text-gray-400 hover:text-white transition-colors duration-200 font-medium">Contact</a>
            </div>

            {{-- Desktop CTA Buttons --}}
            <div class="hidden md:flex items-center gap-3">
                <a href="#contact"
                   class="text-sm text-gray-300 hover:text-white font-medium px-4 py-2 rounded-lg hover:bg-white/5 transition-all duration-200">
                    Sign In
                </a>
                <a href="#contact"
                   class="text-sm font-semibold px-5 py-2.5 rounded-lg bg-[#d4a843] text-[#0a0a0a] hover:bg-[#f0c060] transition-all duration-200 amber-glow">
                    Get Started
                </a>
            </div>

            {{-- Mobile Hamburger --}}
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg text-gray-400 hover:text-white hover:bg-white/10 transition-all">
                <svg id="menu-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden bg-[#0a0a0a]/98 border-t border-white/5 nav-blur">
        <div class="px-4 py-6 space-y-1">
            <a href="#home" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-lg transition-all font-medium">Home</a>
            <a href="#features" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-lg transition-all font-medium">Features</a>
            <a href="#pricing" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-lg transition-all font-medium">Pricing</a>
            <a href="#testimonials" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-lg transition-all font-medium">Testimonials</a>
            <a href="#contact" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-lg transition-all font-medium">Contact</a>
            <div class="pt-4 flex flex-col gap-3">
                <a href="#contact" class="text-center py-3 border border-white/20 text-white rounded-lg hover:bg-white/5 transition-all font-medium">Sign In</a>
                <a href="#contact" class="text-center py-3 bg-[#d4a843] text-[#0a0a0a] rounded-lg hover:bg-[#f0c060] transition-all font-semibold">Get Started</a>
            </div>
        </div>
    </div>
</nav>
