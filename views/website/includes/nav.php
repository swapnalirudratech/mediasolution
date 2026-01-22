<nav id="navbar" class="fixed w-full z-[99999] bg-white/90 backdrop-blur-md text-brand-dark border-b border-gray-200 transition-all duration-300">
    <div class="w-[85vw] max-md:w-[90vw] mx-auto px-4 max-md:px-0 max-md:py-4 flex justify-between items-center h-20">

        <a href="/" class="font-display font-black text-3xl tracking-tighter uppercase group relative">
            MEDIAA <span class="text-brand-accent">SOLUTIONS</span>
            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-brand-accent group-hover:w-full transition-all duration-500"></span>
        </a>

        <div class="hidden md:flex space-x-4 items-center">

            <a href="/" class="px-5 py-2.5 rounded-full text-xs font-black uppercase tracking-[0.2em] transition-all duration-300 <?= ($page == 'home') ? 'bg-brand-accent/10 text-brand-accent shadow-sm ring-1 ring-brand-accent/20' : 'text-brand-dark hover:bg-gray-100/80 hover:text-brand-accent' ?>">
                Home
            </a>

            <a href="/about" class="px-5 py-2.5 rounded-full text-xs font-black uppercase tracking-[0.2em] transition-all duration-300 <?= ($page == 'about') ? 'bg-brand-accent/10 text-brand-accent shadow-sm ring-1 ring-brand-accent/20' : 'text-brand-dark hover:bg-gray-100/80 hover:text-brand-accent' ?>">
                About
            </a>

            <div class="relative group h-20 flex items-center px-2">
                <?php $isServicePage = in_array($page, ['ooh', 'digital', 'btl', 'events', 'cinema']); ?>

                <button class="flex items-center gap-3 px-5 py-2.5 rounded-full text-xs font-black uppercase tracking-[0.2em] outline-none transition-all duration-300 <?= $isServicePage ? 'bg-brand-accent/10 text-brand-accent shadow-sm ring-1 ring-brand-accent/20' : 'text-brand-dark hover:bg-gray-100/80 hover:text-brand-accent' ?>">
                    Services

                    <div class="flex flex-col gap-0.5 group-hover:gap-1 transition-all">
                        <span class="w-4 h-[2px] transition-colors <?= $isServicePage ? 'bg-brand-accent' : 'bg-brand-dark group-hover:bg-brand-accent' ?>"></span>
                        <span class="w-2 h-[2px] transition-all <?= $isServicePage ? 'bg-brand-accent w-4' : 'bg-brand-dark group-hover:w-4 group-hover:bg-brand-accent' ?>"></span>
                    </div>
                </button>

                <div class="fixed top-20 left-0 w-full bg-white opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-500 ease-[cubic-bezier(0.23,1,0.32,1)] shadow-2xl border-t border-gray-100">

                    <div class="w-[85vw] mx-auto py-12 grid grid-cols-12 gap-12">

                        <div class="col-span-3 border-r border-gray-100">
                            <p class="text-xs font-black text-brand-accent uppercase tracking-[0.3em] mb-8">Service Index</p>
                            <ul class="space-y-2">
                                <li><a href="/work" class="block py-2 text-2xl font-black transition-all <?= ($page == 'work') ? 'text-brand-dark translate-x-2' : 'text-gray-300 hover:text-brand-dark hover:translate-x-2' ?>">PORTFOLIO</a></li>
                                <li><a href="/about" class="block py-2 text-2xl font-black transition-all <?= ($page == 'about') ? 'text-brand-dark translate-x-2' : 'text-gray-300 hover:text-brand-dark hover:translate-x-2' ?>">AGENCY</a></li>
                                <li><a href="/contact" class="block py-2 text-2xl font-black transition-all <?= ($page == 'contact') ? 'text-brand-dark translate-x-2' : 'text-gray-300 hover:text-brand-dark hover:translate-x-2' ?>">CAREERS</a></li>
                            </ul>
                        </div>

                        <div class="col-span-6 grid grid-cols-2 gap-x-12 gap-y-10">
                            <a href="/OOH-and-DOOH-Services" class="group/item">
                                <span class="text-xs font-bold text-gray-300 block mb-2">01.</span>
                                <h4 class="text-lg font-black <?= ($page == 'ooh') ? 'text-brand-accent' : 'text-brand-dark' ?> uppercase group-hover/item:text-brand-accent transition-colors">OOH & DOOH</h4>
                                <p class="text-gray-500 text-xs mt-1 leading-relaxed">Prime billboards and digital screens across Pan-India networks.</p>
                            </a>
                            <a href="/Digital-and-Tech-Services" class="group/item">
                                <span class="text-xs font-bold text-gray-300 block mb-2">02.</span>
                                <h4 class="text-lg font-black <?= ($page == 'digital') ? 'text-brand-accent' : 'text-brand-dark' ?> uppercase group-hover/item:text-brand-accent transition-colors">Digital & Tech</h4>
                                <p class="text-gray-500 text-xs mt-1 leading-relaxed">Data-driven performance marketing and brand technology solutions.</p>
                            </a>
                            <a href="/BTL-and-Activations-Services" class="group/item">
                                <span class="text-xs font-bold text-gray-300 block mb-2">03.</span>
                                <h4 class="text-lg font-black <?= ($page == 'btl') ? 'text-brand-accent' : 'text-brand-dark' ?> uppercase group-hover/item:text-brand-accent transition-colors">BTL Activations</h4>
                                <p class="text-gray-500 text-xs mt-1 leading-relaxed">Direct engagement and on-ground brand experiences that convert.</p>
                            </a>
                            <a href="/Events-and-Exhibitions-Services" class="group/item">
                                <span class="text-xs font-bold text-gray-300 block mb-2">04.</span>
                                <h4 class="text-lg font-black <?= ($page == 'events') ? 'text-brand-accent' : 'text-brand-dark' ?> uppercase group-hover/item:text-brand-accent transition-colors">Events & Exhibitions</h4>
                                <p class="text-gray-500 text-xs mt-1 leading-relaxed">Bespoke stall designing and large-scale corporate event execution.</p>
                            </a>
                        </div>

                        <div class="col-span-3">
                            <a href="/Cinema-Advertising-Services">
                                <div class="bg-brand-dark rounded-2xl p-8 h-full relative overflow-hidden group/promo cursor-pointer shadow-lg transition-all ring-2 <?= ($page == 'cinema') ? 'ring-brand-accent' : 'ring-transparent' ?>">
                                    <div class="relative z-10">
                                        <p class="text-brand-accent text-xs font-bold uppercase tracking-widest mb-4">New Offering</p>
                                        <h4 class="text-white text-xl font-black uppercase">Cinema Advertising</h4>
                                        <p class="text-gray-400 text-xs mt-2 leading-relaxed">Reach captive audiences in 450+ screens nationwide.</p>
                                    </div>
                                    <div class="mt-6 relative z-10">
                                        <div class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center text-white group-hover/promo:bg-brand-accent group-hover/promo:text-white transition-all">
                                            <i class="fas fa-arrow-right text-sm"></i>
                                        </div>
                                    </div>
                                    <i class="fas fa-film absolute -bottom-4 -right-4 text-white/5 text-8xl transform rotate-12 group-hover/promo:scale-110 transition duration-500"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="bg-gray-50 py-3 border-t border-gray-100">
                        <div class="w-[85vw] mx-auto flex justify-between items-center">
                            <div class="flex gap-6">
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">Mumbai</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">Thane</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">Delhi</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">Bangalore</span>
                            </div>
                            <p class="text-[10px] font-bold text-brand-accent uppercase tracking-[0.2em]">Pan India Execution 24/7</p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="/work" class="px-5 py-2.5 rounded-full text-xs font-black uppercase tracking-[0.2em] transition-all duration-300 <?= ($page == 'work') ? 'bg-brand-accent/10 text-brand-accent shadow-sm ring-1 ring-brand-accent/20' : 'text-brand-dark hover:bg-gray-100/80 hover:text-brand-accent' ?>">
                Work
            </a>

            <a href="/contact" class="ml-4 bg-brand-accent text-white px-8 py-3 group rounded-full text-sm font-bold uppercase tracking-widest hover:bg-brand-accent/90 hover:shadow-lg hover:shadow-brand-accent/30 transition-all transform hover:-translate-y-0.5">
                Start Project
                <i class="fas fa-arrow-right ml-2 -rotate-45 group-hover:rotate-0 transition text-white"></i>
            </a>
        </div>

        <button id="menu-btn" class="md:hidden flex flex-col gap-1.5 z-[60] group">
            <span class="w-8 h-1 bg-brand-dark group-hover:bg-brand-accent transition-all duration-300 origin-center rounded-full" id="line1"></span>
            <span class="w-6 h-1 bg-brand-accent ml-auto transition-all duration-300 rounded-full" id="line2"></span>
            <span class="w-8 h-1 bg-brand-dark group-hover:bg-brand-accent transition-all duration-300 origin-center rounded-full" id="line3"></span>
        </button>
    </div>

    <div id="mobile-menu" class="fixed inset-0 bg-white h-screen z-50 translate-x-full transition-transform duration-500 ease-in-out md:hidden flex flex-col pl-4 pr-8 pt-8 space-y-4 overflow-y-auto">

        <div class="flex flex-col gap-1 border-b border-gray-100 pb-5">
            <a href="/" class="text-xl font-black uppercase tracking-tighter p-2 rounded-xl transition-all <?= ($page == 'home') ? 'text-brand-accent' : 'text-brand-dark hover:bg-gray-50' ?>">Home</a>
            <a href="/about" class="text-xl font-black uppercase tracking-tighter p-2 rounded-xl transition-all <?= ($page == 'about') ? 'text-brand-accent' : 'text-brand-dark hover:bg-gray-50' ?>">About</a>
            <a href="/work" class="text-xl font-black uppercase tracking-tighter p-2 rounded-xl transition-all <?= ($page == 'work') ? 'text-brand-accent' : 'text-brand-dark hover:bg-gray-50' ?>">Work</a>
        </div>

        <p class="text-xl font-bold uppercase tracking-widest text-brand-dark mt-4">Our Services</p>

        <div class="grid grid-cols-1 gap-2">
            <a href="/OOH-and-DOOH-Services" class="group flex items-center p-2 rounded-xl transition <?= ($page == 'ooh') ? 'bg-brand-accent/10 ring-1 ring-brand-accent/20' : 'hover:bg-gray-50' ?>">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center transition-colors <?= ($page == 'ooh') ? 'bg-brand-accent text-white' : 'bg-brand-accent/10 text-brand-accent group-hover:bg-brand-accent group-hover:text-white' ?>">
                    <i class="fas fa-city text-xl"></i>
                </div>
                <div class="ml-4">
                    <span class="text-base font-bold <?= ($page == 'ooh') ? 'text-brand-dark' : 'text-brand-dark' ?> uppercase tracking-wide block">OOH & DOOH</span>
                    <span class="text-[10px] text-gray-500 uppercase tracking-widest">Outdoor Media</span>
                </div>
            </a>

            <a href="/Digital-and-Tech-Services" class="group flex items-center p-2 rounded-xl transition <?= ($page == 'digital') ? 'bg-brand-accent/10 ring-1 ring-brand-accent/20' : 'hover:bg-gray-50' ?>">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center transition-colors <?= ($page == 'digital') ? 'bg-brand-accent text-white' : 'bg-brand-accent/10 text-brand-accent group-hover:bg-brand-accent group-hover:text-white' ?>">
                    <i class="fas fa-rocket text-xl"></i>
                </div>
                <div class="ml-4">
                    <span class="text-base font-bold <?= ($page == 'digital') ? 'text-brand-dark' : 'text-brand-dark' ?> uppercase tracking-wide block">Digital & Tech</span>
                    <span class="text-[10px] text-gray-500 uppercase tracking-widest">Growth & Data</span>
                </div>
            </a>

            <a href="/Events-and-Exhibitions-Services" class="group flex items-center p-2 rounded-xl transition <?= ($page == 'events') ? 'bg-brand-accent/10 ring-1 ring-brand-accent/20' : 'hover:bg-gray-50' ?>">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center transition-colors <?= ($page == 'events') ? 'bg-brand-accent text-white' : 'bg-brand-accent/10 text-brand-accent group-hover:bg-brand-accent group-hover:text-white' ?>">
                    <i class="fas fa-calendar-alt text-xl"></i>
                </div>
                <div class="ml-4">
                    <span class="text-base font-bold <?= ($page == 'events') ? 'text-brand-dark' : 'text-brand-dark' ?> uppercase tracking-wide block">Events</span>
                    <span class="text-[10px] text-gray-500 uppercase tracking-widest">Corporate Hub</span>
                </div>
            </a>

            <a href="/Cinema-Advertising-Services" class="group flex items-center p-2 rounded-xl transition <?= ($page == 'cinema') ? 'bg-brand-accent/10 ring-1 ring-brand-accent/20' : 'hover:bg-gray-50' ?>">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center transition-colors <?= ($page == 'cinema') ? 'bg-brand-accent text-white' : 'bg-brand-accent/10 text-brand-accent group-hover:bg-brand-accent group-hover:text-white' ?>">
                    <i class="fas fa-film text-xl"></i>
                </div>
                <div class="ml-4">
                    <span class="text-base font-bold <?= ($page == 'cinema') ? 'text-brand-dark' : 'text-brand-dark' ?> uppercase tracking-wide block">Cinema Ads</span>
                    <span class="text-[10px] text-gray-500 uppercase tracking-widest">National Screens</span>
                </div>
            </a>

            <a href="/BTL-and-Activations-Services" class="group flex items-center p-2 rounded-xl transition <?= ($page == 'btl') ? 'bg-brand-accent/10 ring-1 ring-brand-accent/20' : 'hover:bg-gray-50' ?>">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center transition-colors <?= ($page == 'btl') ? 'bg-brand-accent text-white' : 'bg-brand-accent/10 text-brand-accent group-hover:bg-brand-accent group-hover:text-white' ?>">
                    <i class="fas fa-bullhorn text-xl"></i>
                </div>
                <div class="ml-4">
                    <span class="text-base font-bold <?= ($page == 'btl') ? 'text-brand-dark' : 'text-brand-dark' ?> uppercase tracking-wide block">BTL Activations</span>
                    <span class="text-[10px] text-gray-500 uppercase tracking-widest">Brand Experience</span>
                </div>
            </a>
        </div>

        <a href="/contact" class="bg-brand-accent text-white text-center py-2.5 rounded-full font-bold uppercase tracking-widest mt-auto shadow-lg shadow-brand-dark/20">
            Start Project <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</nav>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const line1 = document.getElementById('line1');
    const line2 = document.getElementById('line2');
    const line3 = document.getElementById('line3');

    menuBtn.addEventListener('click', () => {
        // Toggle Menu Slide
        mobileMenu.classList.toggle('translate-x-full');

        // Animate Hamburger to "X"
        line1.classList.toggle('rotate-45');
        line1.classList.toggle('translate-y-2.5');

        line2.classList.toggle('opacity-0');

        line3.classList.toggle('-rotate-45');
        line3.classList.toggle('-translate-y-2.5');

        // Prevent body scroll when menu is open
        document.body.classList.toggle('overflow-hidden');
    });
</script>