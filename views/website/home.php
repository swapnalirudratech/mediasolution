<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>


<style>
    /* Custom Styles for specific agency effects */
    .hero-bg {
        background: linear-gradient(to right, rgba(15, 23, 42, 0.9), rgba(15, 23, 42, 0.6)), url('https://images.unsplash.com/photo-1596526131083-e8c633c948d2?q=80&w=2574&auto=format&fit=crop');
        background-size: cover;
        background-attachment: fixed;
        /* Parallax effect */
        background-position: center;
    }

    /* Hide scrollbar for client slider */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Hover effect for Portfolio cards */
    .portfolio-card:hover .overlay {
        opacity: 1;
        transform: translateY(0);
    }

    /* Grid Layout for Ad Formats */
    .ad-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 1.5rem;
    }

    @media (min-width: 768px) {
        .ad-grid {
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 250px);
        }

        .grid-span-2 {
            grid-column: span 2;
        }

        .grid-row-2 {
            grid-row: span 2;
        }
    }
</style>

<body class="font-sans text-slate-800 bg-white antialiased">

    <nav class="fixed w-full z-50 bg-brand-dark/95 backdrop-blur text-white border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="#" class="font-display font-bold text-3xl tracking-wide uppercase">
                    Media <span class="text-brand-accent">Solutions</span>
                </a>

                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#" class="hover:text-brand-accent transition text-sm font-semibold uppercase tracking-wider">Home</a>
                    <a href="#about" class="hover:text-brand-accent transition text-sm font-semibold uppercase tracking-wider">Agency</a>
                    <a href="#services" class="hover:text-brand-accent transition text-sm font-semibold uppercase tracking-wider">Services</a>
                    <a href="#portfolio" class="hover:text-brand-accent transition text-sm font-semibold uppercase tracking-wider">Work</a>
                    <a href="#contact" class="px-5 py-2 bg-brand-accent hover:bg-red-600 text-white font-bold uppercase text-xs tracking-widest rounded transition">Contact Us</a>
                </div>

                <div class="md:hidden">
                    <button class="text-white hover:text-brand-accent text-2xl"><i class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </nav>

    <header class="hero-bg h-screen flex items-center justify-center text-white relative">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto">
            <p class="font-display text-brand-accent text-lg md:text-xl uppercase tracking-[0.3em] mb-4 animate-fade-in-up">Since 2012</p>
            <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold leading-tight mb-8">
                WE TURN SPACES <br> INTO <span class="text-stroke text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">EXPERIENCES</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-10 font-light">
                India's premier OOH, Digital, and Brand Experience Agency. We don't just advertise; we create measurable impact.
            </p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                <a href="#portfolio" class="px-8 py-4 bg-white text-brand-dark font-display font-bold text-lg uppercase tracking-wider hover:bg-gray-100 transition">View Our Work</a>
                <a href="#contact" class="px-8 py-4 border-2 border-white text-white font-display font-bold text-lg uppercase tracking-wider hover:bg-white hover:text-brand-dark transition">Start Campaign</a>
            </div>
        </div>

        <div class="absolute bottom-10 animate-bounce">
            <i class="fas fa-chevron-down text-2xl text-white/50"></i>
        </div>
    </header>

    <div class="bg-brand-black py-6 border-b border-white/10 overflow-hidden relative">
        <div class="flex whitespace-nowrap animate-scroll w-max">
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">Trusted By Leading Brands</span>
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">•</span>
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">Real Estate Giants</span>
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">•</span>
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">FMCG Leaders</span>
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">•</span>
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">Retail Chains</span>
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">•</span>
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">Media Solutions</span>
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">•</span>
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">Trusted By Leading Brands</span>
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">•</span>
            <span class="mx-8 text-gray-500 font-display text-2xl font-bold uppercase">Real Estate Giants</span>
        </div>
    </div>

    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="font-display text-brand-dark text-4xl md:text-5xl font-bold mb-6">MORE THAN JUST<br>OUTDOOR ADVERTISING</h2>
                    <div class="w-20 h-1 bg-brand-accent mb-8"></div>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Founded in 2012, <strong>Media Solutions</strong> has evolved into one of India's most effective marketing communication companies. While our roots are deep in OOH (Out of Home), we have branched out to become a complete 360-degree agency.
                    </p>
                    <p class="text-gray-600 mb-8 text-lg leading-relaxed">
                        Located in Thane, we serve clients globally. We blend the massive reach of billboards with the precision of digital marketing and the engagement of BTL activities.
                    </p>
                    <a href="#contact" class="text-brand-accent font-bold uppercase tracking-widest hover:text-brand-dark transition border-b-2 border-brand-accent pb-1 inline-block">Read Our Story</a>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-brand-gray p-8 text-center rounded-sm hover:bg-brand-dark hover:text-white transition duration-300 group">
                        <h3 class="font-display text-5xl font-bold text-brand-accent mb-2">10+</h3>
                        <p class="font-semibold uppercase text-sm tracking-wider group-hover:text-gray-300">Years Experience</p>
                    </div>
                    <div class="bg-brand-gray p-8 text-center rounded-sm hover:bg-brand-dark hover:text-white transition duration-300 group">
                        <h3 class="font-display text-5xl font-bold text-brand-accent mb-2">500+</h3>
                        <p class="font-semibold uppercase text-sm tracking-wider group-hover:text-gray-300">Campaigns</p>
                    </div>
                    <div class="bg-brand-gray p-8 text-center rounded-sm hover:bg-brand-dark hover:text-white transition duration-300 group">
                        <h3 class="font-display text-5xl font-bold text-brand-accent mb-2">100%</h3>
                        <p class="font-semibold uppercase text-sm tracking-wider group-hover:text-gray-300">Pan India</p>
                    </div>
                    <div class="bg-brand-gray p-8 text-center rounded-sm hover:bg-brand-dark hover:text-white transition duration-300 group">
                        <h3 class="font-display text-5xl font-bold text-brand-accent mb-2">24/7</h3>
                        <p class="font-semibold uppercase text-sm tracking-wider group-hover:text-gray-300">Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-24 bg-brand-dark text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-accent font-bold uppercase tracking-widest text-sm">What We Do</span>
                <h2 class="font-display text-4xl md:text-5xl font-bold mt-2">INTEGRATED MEDIA SERVICES</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group relative overflow-hidden rounded-lg bg-gray-900 border border-gray-800">
                    <div class="p-8 relative z-10">
                        <i class="fas fa-city text-4xl text-brand-accent mb-6"></i>
                        <h3 class="font-display text-2xl font-bold mb-3">OOH & DOOH</h3>
                        <p class="text-gray-400 mb-4">Prime billboards, gantries, and digital screens at high-traffic locations across India.</p>
                        <a href="#" class="text-white font-bold text-sm uppercase tracking-wide group-hover:text-brand-accent transition">Explore OOH <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                </div>

                <div class="group relative overflow-hidden rounded-lg bg-gray-900 border border-gray-800">
                    <div class="p-8 relative z-10">
                        <i class="fas fa-film text-4xl text-brand-accent mb-6"></i>
                        <h3 class="font-display text-2xl font-bold mb-3">Cinema On-Screen</h3>
                        <p class="text-gray-400 mb-4">Captivate audiences with blockbuster advertising. On-screen ads and off-screen branding.</p>
                        <a href="#" class="text-white font-bold text-sm uppercase tracking-wide group-hover:text-brand-accent transition">Explore Cinema <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-lg bg-gray-900 border border-gray-800">
                    <div class="p-8 relative z-10">
                        <i class="fas fa-newspaper text-4xl text-brand-accent mb-6"></i>
                        <h3 class="font-display text-2xl font-bold mb-3">TV & Print</h3>
                        <p class="text-gray-400 mb-4">Traditional mainline media expertise. Newspaper ads, magazine spreads, and TV commercials.</p>
                        <a href="#" class="text-white font-bold text-sm uppercase tracking-wide group-hover:text-brand-accent transition">Explore Media <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-lg bg-gray-900 border border-gray-800">
                    <div class="p-8 relative z-10">
                        <i class="fas fa-bullhorn text-4xl text-brand-accent mb-6"></i>
                        <h3 class="font-display text-2xl font-bold mb-3">BTL Activations</h3>
                        <p class="text-gray-400 mb-4">On-ground promotions, mall activations, and direct consumer engagement strategies.</p>
                        <a href="#" class="text-white font-bold text-sm uppercase tracking-wide group-hover:text-brand-accent transition">Explore BTL <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-lg bg-gray-900 border border-gray-800">
                    <div class="p-8 relative z-10">
                        <i class="fas fa-rocket text-4xl text-brand-accent mb-6"></i>
                        <h3 class="font-display text-2xl font-bold mb-3">Digital & Tech</h3>
                        <p class="text-gray-400 mb-4">Social media marketing, SEO, and brand technology solutions that measure results.</p>
                        <a href="#" class="text-white font-bold text-sm uppercase tracking-wide group-hover:text-brand-accent transition">Explore Digital <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-lg bg-gray-900 border border-gray-800">
                    <div class="p-8 relative z-10">
                        <i class="fas fa-calendar-check text-4xl text-brand-accent mb-6"></i>
                        <h3 class="font-display text-2xl font-bold mb-3">Events</h3>
                        <p class="text-gray-400 mb-4">Corporate events, product launches, and exhibition stall designing and fabrication.</p>
                        <a href="#" class="text-white font-bold text-sm uppercase tracking-wide group-hover:text-brand-accent transition">Explore Events <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="formats" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <span class="text-brand-accent font-bold uppercase tracking-widest text-sm">Media Inventory</span>
                <h2 class="font-display text-4xl font-bold mt-2 text-brand-dark">ADVERTISING FORMATS</h2>
            </div>

            <div class="ad-grid">
                <div class="grid-span-2 grid-row-2 relative rounded-xl overflow-hidden group bg-brand-dark">
                    <img src="https://images.unsplash.com/photo-1598804784784-50729ff91508?q=80&w=2670&auto=format&fit=crop" alt="Billboard" class="w-full h-full object-cover opacity-60 transition duration-500 group-hover:opacity-40 group-hover:scale-105">
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="text-white font-display text-3xl font-bold uppercase">Large Format Billboards</h3>
                        <p class="text-gray-300 mt-2">Unmissable impact on major highways and arterials.</p>
                    </div>
                </div>

                <div class="relative rounded-xl overflow-hidden group bg-brand-dark h-64 md:h-auto">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2670&auto=format&fit=crop" alt="Bus Shelter" class="w-full h-full object-cover opacity-60 transition duration-500 group-hover:opacity-40 group-hover:scale-105">
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-white font-display text-xl font-bold uppercase">Bus Shelters (BQS)</h3>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden group bg-brand-dark h-64 md:h-auto">
                    <img src="https://images.unsplash.com/photo-1566257692808-45401410ed84?q=80&w=2535&auto=format&fit=crop" alt="Mall Media" class="w-full h-full object-cover opacity-60 transition duration-500 group-hover:opacity-40 group-hover:scale-105">
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-white font-display text-xl font-bold uppercase">Mall Media</h3>
                    </div>
                </div>

                <div class="grid-span-2 relative rounded-xl overflow-hidden group bg-brand-dark h-64 md:h-auto">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2670&auto=format&fit=crop" alt="Digital Screens" class="w-full h-full object-cover opacity-60 transition duration-500 group-hover:opacity-40 group-hover:scale-105">
                    <div class="absolute bottom-0 left-0 p-6 flex items-center">
                        <i class="fas fa-play-circle text-brand-accent text-4xl mr-4"></i>
                        <div>
                            <h3 class="text-white font-display text-2xl font-bold uppercase">DOOH Networks</h3>
                            <p class="text-gray-300 text-sm">Programmatic digital screens in high-dwell areas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-brand-darkerGray relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://upload.wikimedia.org/wikipedia/commons/thumb/b/bv/India_map_admn_2020.jpg/640px-India_map_admn_2020.jpg')] bg-cover bg-center grayscale mix-blend-overlay"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12 text-white">
                <span class="text-brand-accent font-bold uppercase tracking-widest text-sm">Our Network</span>
                <h2 class="font-display text-black text-4xl md:text-5xl font-bold mt-2">PAN-INDIA COVERAGE</h2>
                <p class="text-gray-400 mt-4 max-w-2xl mx-auto">From metro hubs to tier-2 & tier-3 cities, our media inventory connects you with audiences everywhere.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6 border border-gray-700 bg-brand-dark/50 backdrop-blur rounded-lg">
                    <div class="w-4 h-4 bg-brand-accent rounded-full mx-auto mb-4 animate-pulse-slow shadow-[0_0_15px_#FF4C29]"></div>
                    <h3 class="text-white font-display text-2xl font-bold">Metro Cities</h3>
                    <p class="text-gray-400">High-impact inventory in Mumbai, Delhi, Bangalore, Kolkata, Chennai.</p>
                </div>
                <div class="p-6 border border-gray-700 bg-brand-dark/50 backdrop-blur rounded-lg">
                    <div class="w-4 h-4 bg-brand-accent rounded-full mx-auto mb-4 animate-pulse-slow shadow-[0_0_15px_#FF4C29]"></div>
                    <h3 class="text-white font-display text-2xl font-bold">Tier 1 & 2 hubs</h3>
                    <p class="text-gray-400">Deep penetration in Pune, Ahmedabad, Hyderabad, Thane, and more.</p>
                </div>
                <div class="p-6 border border-gray-700 bg-brand-dark/50 backdrop-blur rounded-lg">
                    <div class="w-4 h-4 bg-brand-accent rounded-full mx-auto mb-4 animate-pulse-slow shadow-[0_0_15px_#FF4C29]"></div>
                    <h3 class="text-white font-display text-2xl font-bold">Hyper-Local</h3>
                    <p class="text-gray-400">Targeted BTL and transit media for specific community engagement.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="py-24 bg-brand-gray">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <span class="text-brand-accent font-bold uppercase tracking-widest text-sm">Portfolio</span>
                    <h2 class="font-display text-4xl font-bold mt-2 text-brand-dark">RECENT WORKS</h2>
                </div>
                <a href="#" class="hidden md:inline-block px-6 py-2 border border-brand-dark text-brand-dark font-bold uppercase text-sm hover:bg-brand-dark hover:text-white transition">View All Cases</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="portfolio-card relative group h-80 rounded-lg overflow-hidden cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1562654501-a0ccc0fc3fb1?q=80&w=2532&auto=format&fit=crop" alt="Billboard" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="overlay absolute inset-0 bg-brand-dark/80 opacity-0 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-brand-accent text-xs font-bold uppercase tracking-wider">OOH Campaign</span>
                        <h3 class="text-white font-display text-2xl font-bold">Fashion Week City Launch</h3>
                    </div>
                </div>

                <div class="portfolio-card relative group h-80 rounded-lg overflow-hidden cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=2670&auto=format&fit=crop" alt="Meeting" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="overlay absolute inset-0 bg-brand-dark/80 opacity-0 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-brand-accent text-xs font-bold uppercase tracking-wider">Event Management</span>
                        <h3 class="text-white font-display text-2xl font-bold">Corporate Summit 2024</h3>
                    </div>
                </div>

                <div class="portfolio-card relative group h-80 rounded-lg overflow-hidden cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1617575521317-d2974f3b56d2?q=80&w=2574&auto=format&fit=crop" alt="Digital" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="overlay absolute inset-0 bg-brand-dark/80 opacity-0 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-brand-accent text-xs font-bold uppercase tracking-wider">Digital & BTL</span>
                        <h3 class="text-white font-display text-2xl font-bold">Product Activation</h3>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center md:hidden">
                <a href="#" class="inline-block px-6 py-3 bg-brand-dark text-white font-bold uppercase text-sm">View All Cases</a>
            </div>
        </div>
    </section>


    <!-- <section class="py-20 bg-brand-accent text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20"></div>
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="font-display text-4xl md:text-5xl font-bold mb-6">READY TO BE SEEN?</h2>
            <p class="text-xl mb-8 font-light">Let's create a campaign that gets your brand the attention it deserves.</p>
            <a href="mailto:info@mediasolutions.com" class="inline-block bg-white text-brand-accent px-10 py-4 font-bold uppercase tracking-widest hover:bg-brand-dark hover:text-white transition shadow-lg">Get A Quote Now</a>
        </div>
    </section> -->

    <section class="py-24 bg-brand-dark relative overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full max-w-7xl pointer-events-none">
            <div class="absolute top-20 left-20 w-72 h-72 bg-brand-accent/10 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="text-center mb-16">
                <span class="text-brand-accent font-bold uppercase tracking-widest text-sm">Client Success</span>
                <h2 class="font-display text-4xl md:text-5xl font-bold mt-2 text-white">TRUSTED BY THE BEST</h2>
                <p class="text-gray-400 mt-4 max-w-xl mx-auto">
                    Don't just take our word for it. Here is what leading brands say about our OOH and media campaigns.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-2xl hover:border-brand-accent/50 transition duration-300 group flex flex-col relative">
                    <i class="fas fa-quote-right absolute top-8 right-8 text-6xl text-white/5 group-hover:text-brand-accent/10 transition"></i>

                    <div class="text-brand-accent text-sm mb-6 space-x-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>

                    <p class="text-gray-300 text-lg leading-relaxed mb-8 flex-grow">
                        "Media Solutions executed our pan-India billboard campaign flawlessly. The <span class="text-white font-bold">prime locations</span> they secured in Mumbai and Delhi gave us visibility we didn't think was possible within our budget."
                    </p>

                    <div class="mb-6">
                        <span class="inline-block bg-green-500/20 text-green-400 text-xs font-bold px-3 py-1 rounded-full border border-green-500/30">
                            <i class="fas fa-arrow-up mr-1"></i> 40% Increase in Footfall
                        </span>
                    </div>

                    <div class="flex items-center pt-6 border-t border-white/10">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="w-12 h-12 rounded-full border-2 border-brand-accent mr-4">
                        <div>
                            <h4 class="text-white font-bold font-display uppercase tracking-wide text-sm">Vikram Mehta</h4>
                            <p class="text-gray-500 text-xs uppercase">VP Marketing, Urban Estates</p>
                        </div>
                    </div>
                </div>

                <div class="bg-brand-accent/10 backdrop-blur-sm border border-brand-accent/30 p-8 rounded-2xl hover:bg-brand-accent/20 transition duration-300 group flex flex-col relative transform md:-translate-y-4 shadow-2xl shadow-black/50">
                    <i class="fas fa-quote-right absolute top-8 right-8 text-6xl text-brand-accent/20 transition"></i>

                    <div class="text-brand-accent text-sm mb-6 space-x-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>

                    <p class="text-white text-lg leading-relaxed mb-8 flex-grow font-medium">
                        "We needed a partner who understood both OOH and Digital. Their team integrated our bus shelter ads with a geo-targeted mobile campaign. The results were immediate and measurable."
                    </p>

                    <div class="mb-6">
                        <span class="inline-block bg-brand-accent text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg shadow-brand-accent/50">
                            <i class="fas fa-check-circle mr-1"></i> Best Campaign 2024
                        </span>
                    </div>

                    <div class="flex items-center pt-6 border-t border-white/20">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client" class="w-12 h-12 rounded-full border-2 border-white mr-4">
                        <div>
                            <h4 class="text-white font-bold font-display uppercase tracking-wide text-sm">Anjali Kapoor</h4>
                            <p class="text-white/70 text-xs uppercase">Brand Head, Fresh Foods</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-2xl hover:border-brand-accent/50 transition duration-300 group flex flex-col relative">
                    <i class="fas fa-quote-right absolute top-8 right-8 text-6xl text-white/5 group-hover:text-brand-accent/10 transition"></i>

                    <div class="text-brand-accent text-sm mb-6 space-x-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>

                    <p class="text-gray-300 text-lg leading-relaxed mb-8 flex-grow">
                        "Professionalism at its peak. From the initial pitch to the final execution report, the team at Media Solutions kept us informed. Their network in Thane and suburbs is unmatched."
                    </p>

                    <div class="mb-6">
                        <span class="inline-block bg-blue-500/20 text-blue-400 text-xs font-bold px-3 py-1 rounded-full border border-blue-500/30">
                            <i class="fas fa-chart-line mr-1"></i> Brand Awareness
                        </span>
                    </div>

                    <div class="flex items-center pt-6 border-t border-white/10">
                        <img src="https://randomuser.me/api/portraits/men/86.jpg" alt="Client" class="w-12 h-12 rounded-full border-2 border-brand-accent mr-4">
                        <div>
                            <h4 class="text-white font-bold font-display uppercase tracking-wide text-sm">Sameer Khan</h4>
                            <p class="text-gray-500 text-xs uppercase">Director, TechNova Solutions</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16">
                <span class="text-brand-accent font-bold uppercase tracking-widest text-sm">Our Ecosystem</span>
                <h2 class="font-display text-4xl font-bold mt-2 text-brand-dark">STRATEGIC PARTNERS</h2>
                <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                    We collaborate with leading media owners and technology providers to deliver the best inventory.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center">

                <div class="group flex justify-center items-center p-6 bg-white rounded-lg shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-accent/30 transition duration-300 h-32">
                    <img src="https://via.placeholder.com/150x50?text=Partner+1" alt="Partner Logo" class="max-h-12 w-auto grayscale group-hover:grayscale-0 opacity-60 group-hover:opacity-100 transition duration-500">
                </div>

                <div class="group flex justify-center items-center p-6 bg-white rounded-lg shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-accent/30 transition duration-300 h-32">
                    <img src="https://via.placeholder.com/150x50?text=Partner+2" alt="Partner Logo" class="max-h-12 w-auto grayscale group-hover:grayscale-0 opacity-60 group-hover:opacity-100 transition duration-500">
                </div>

                <div class="group flex justify-center items-center p-6 bg-white rounded-lg shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-accent/30 transition duration-300 h-32">
                    <img src="https://via.placeholder.com/150x50?text=Partner+3" alt="Partner Logo" class="max-h-12 w-auto grayscale group-hover:grayscale-0 opacity-60 group-hover:opacity-100 transition duration-500">
                </div>

                <div class="group flex justify-center items-center p-6 bg-white rounded-lg shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-accent/30 transition duration-300 h-32">
                    <img src="https://via.placeholder.com/150x50?text=Partner+4" alt="Partner Logo" class="max-h-12 w-auto grayscale group-hover:grayscale-0 opacity-60 group-hover:opacity-100 transition duration-500">
                </div>

                <div class="group flex justify-center items-center p-6 bg-white rounded-lg shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-accent/30 transition duration-300 h-32">
                    <img src="https://via.placeholder.com/150x50?text=Partner+5" alt="Partner Logo" class="max-h-12 w-auto grayscale group-hover:grayscale-0 opacity-60 group-hover:opacity-100 transition duration-500">
                </div>

                <div class="group flex justify-center items-center p-6 bg-white rounded-lg shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-accent/30 transition duration-300 h-32">
                    <img src="https://via.placeholder.com/150x50?text=Partner+6" alt="Partner Logo" class="max-h-12 w-auto grayscale group-hover:grayscale-0 opacity-60 group-hover:opacity-100 transition duration-500">
                </div>

            </div>

            <div class="text-center mt-12">
                <a href="#contact" class="inline-flex items-center text-brand-dark font-bold uppercase text-sm tracking-wider hover:text-brand-accent transition">
                    Become a Partner <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

</body>

</html>

<?php
include 'includes/footer.php';
?>