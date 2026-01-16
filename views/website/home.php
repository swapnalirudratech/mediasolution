<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>

<style>
    /* Custom Styles */
    .hero-bg {
        /* Added a slight purple tint to the overlay for branding consistency */
        background: linear-gradient(to right, rgba(17, 24, 39, 0.9), rgba(88, 28, 135, 0.4)), url('/public/assets/images/b3.jpg');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
    }

    /* Clean Scrollbar */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Modern Card Hover Effects */
    .service-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(124, 58, 237, 0.15), 0 10px 10px -5px rgba(124, 58, 237, 0.04);
        border-color: rgba(124, 58, 237, 0.3);
    }

    /* Grid Layout for Ad Formats */
    .ad-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    @media (min-width: 768px) {
        .ad-grid {
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 280px);
            /* Taller rows for better visibility */
        }

        .grid-span-2 {
            grid-column: span 2;
        }

        .grid-row-2 {
            grid-row: span 2;
        }
    }

    /* Text Stroke Utility */
    .text-stroke-dark {
        -webkit-text-stroke: 1px #111827;
        color: transparent;
    }
</style>

<style>
    /* KEYFRAMES */
    @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    @keyframes scroll-right {
        0% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(0);
        }
    }

    /* Optional: Fades the edges for a cleaner look */
    .fade-edges {
        mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }
</style>

<body class="bg-brand-gray text-gray-600 font-sans selection:bg-brand-accent selection:text-white">

    <div class="hero-bg h-[90vh] flex items-center justify-center text-white relative overflow-hidden bg-gray-900">

        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-60">
            <source src="/public/assets/video/bg-vdo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-brand-accent/30 rounded-[100%] blur-[120px] opacity-60"></div>
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-blue-600/10 rounded-full blur-[100px]"></div>

        <div class="relative z-10 text-center px-4 max-w-7xl mx-auto">

            <div class="inline-flex items-center gap-2 mb-8 px-5 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-md animate-fade-in-up shadow-[0_0_20px_rgba(255,255,255,0.1)]">
                <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                <span class="text-gray-300 font-bold tracking-[0.2em] text-xs uppercase">
                    Now Streaming
                </span>
            </div>

            <h1 class="text-6xl md:text-7xl lg:text-8xl font-black leading-[0.95] mb-8 tracking-tighter">
                <span class="block text-white drop-shadow-lg">
                    ICONIC <span class="text-transparent" style="-webkit-text-stroke: 1px #ffffff;">OOH</span>
                </span>

                <span class="relative inline-block mt-2">
                    <span class="relative inline-block mt-2">
                        DYNAMIC <span class="text-brand-accent bg-white px-2 py-0.5 rounded-lg">DOOH</span>
                    </span>
                </span>
            </h1>

            <p class="text-lg md:text-xl text-white max-w-4xl mx-auto mb-12 font-light leading-relaxed text-balance">
                We blend the <strong>massive scale of OOH</strong> with the <strong>programmatic precision of DOOH</strong>.
                Dominate city skylines and cinema screens with <span class="text-white border-b border-brand-accent/50 pb-0.5">campaigns that are impossible to ignore</span>.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="/contact" class="bg-brand-accent text-white px-8 py-3 group rounded-full text-sm font-bold uppercase tracking-widest hover:bg-brand-accent/90 hover:shadow-lg hover:shadow-brand-accent/30 transition-all transform hover:-translate-y-0.5">
                    Start Your Campaign
                    <i class="fas fa-arrow-right ml-2 -rotate-45 group-hover:rotate-0 transition text-white"></i>
                </a>
            </div>
        </div>

    </div>

    <style>
        @keyframes scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        .animate-infinite-scroll {
            animation: scroll 25s linear infinite;
        }
    </style>

    <div class="relative py-8 overflow-hidden bg-white border-b border-gray-100">
        <div class="absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-white to-transparent z-20"></div>
        <div class="absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-white to-transparent z-20"></div>

        <div class="flex whitespace-nowrap animate-scroll w-max items-center">
            <div class="flex items-center">
                <span class="px-12 text-brand-dark text-4xl font-black uppercase tracking-tighter">OOH & DOOH</span>
                <i class="fas fa-star text-brand-accent text-xl"></i>
                <span class="px-12 text-gray-300 text-4xl font-black uppercase tracking-tighter italic">Cinema Ads</span>
                <i class="fas fa-circle text-xs text-gray-300"></i>
                <span class="px-12 text-stroke-dark text-4xl font-black uppercase tracking-tighter">BTL Activations</span>
                <i class="fas fa-star text-brand-accent text-xl"></i>
                <span class="px-12 text-brand-dark text-4xl font-black uppercase tracking-tighter">Digital Tech</span>
                <i class="fas fa-circle text-xs text-gray-300"></i>
                <span class="px-12 text-gray-300 text-4xl font-black uppercase tracking-tighter italic">Events</span>
                <i class="fas fa-star text-brand-accent text-xl"></i>
                <span class="px-12 text-stroke-dark text-4xl font-black uppercase tracking-tighter">Media Buying</span>
            </div>
            <div class="flex items-center">
                <span class="px-12 text-brand-dark text-4xl font-black uppercase tracking-tighter">OOH & DOOH</span>
                <i class="fas fa-star text-brand-accent text-xl"></i>
                <span class="px-12 text-gray-300 text-4xl font-black uppercase tracking-tighter italic">Cinema Ads</span>
                <i class="fas fa-circle text-xs text-gray-300"></i>
                <span class="px-12 text-stroke-dark text-4xl font-black uppercase tracking-tighter">BTL Activations</span>
                <i class="fas fa-star text-brand-accent text-xl"></i>
                <span class="px-12 text-brand-dark text-4xl font-black uppercase tracking-tighter">Digital Tech</span>
                <i class="fas fa-circle text-xs text-gray-300"></i>
                <span class="px-12 text-gray-300 text-4xl font-black uppercase tracking-tighter italic">Events</span>
                <i class="fas fa-star text-brand-accent text-xl"></i>
                <span class="px-12 text-stroke-dark text-4xl font-black uppercase tracking-tighter">Media Buying</span>
            </div>
        </div>
    </div>

    <section class="py-24 bg-white relative">
        <div class="w-[85vw] max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

                <div class="lg:col-span-7">
                    <span class="text-brand-accent font-bold uppercase tracking-widest text-sm mb-2 block">Who We Are</span>
                    <h2 class="text-brand-dark text-4xl md:text-6xl font-black mb-8 leading-tight">
                        MORE THAN JUST<br>OUTDOOR ADVERTISING
                    </h2>

                    <div class="prose prose-lg text-gray-600 mb-10">
                        <p>
                            Founded in 2012, <strong>Media Solutions</strong> has evolved into one of India's most effective marketing communication companies. While our roots are deep in OOH (Out of Home), we have branched out to become a complete 360-degree agency.
                        </p>
                        <p>
                            Located in Thane, we serve clients globally. We blend the massive reach of billboards with the precision of digital marketing and the engagement of BTL activities.
                        </p>
                    </div>

                    <a href="/about" class="inline-flex items-center gap-2 text-brand-dark font-bold border-b-2 border-brand-accent pb-1 hover:text-brand-accent transition">
                        Read Our Full Story <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="lg:col-span-5 w-full" id="stats-section">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-brand-gray p-8 rounded-2xl border border-gray-100 hover:border-brand-accent/30 transition group">
                            <h3 class="text-5xl font-black text-brand-dark mb-1 counter" data-target="12">0</h3>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest group-hover:text-brand-accent transition">Years Exp.</p>
                        </div>

                        <div class="bg-brand-accent text-white p-8 rounded-2xl shadow-xl shadow-brand-accent/20 transform translate-y-4">
                            <h3 class="text-5xl font-black mb-1 counter" data-target="500">0</h3>
                            <p class="text-xs font-bold text-white/80 uppercase tracking-widest">Campaigns</p>
                        </div>

                        <div class="bg-brand-gray p-8 rounded-2xl border border-gray-100 hover:border-brand-accent/30 transition group">
                            <h3 class="text-5xl font-black text-brand-dark mb-1 counter" data-target="100">0</h3>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest group-hover:text-brand-accent transition">Pan India %</p>
                        </div>

                        <div class="bg-brand-gray p-8 rounded-2xl border border-gray-100 hover:border-brand-accent/30 transition group transform translate-y-4">
                            <h3 class="text-5xl font-black text-brand-dark mb-1 counter" data-target="24">0</h3>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest group-hover:text-brand-accent transition">Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-brand-gray">
        <div class="w-[85vw] max-w-7xl mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <span class="bg-brand-accent/10 text-brand-accent px-4 py-2 rounded-full text-xs font-bold uppercase tracking-widest">Our Expertise</span>
                <h2 class="text-4xl md:text-5xl font-black mt-6 text-brand-dark">INTEGRATED MEDIA SERVICES</h2>
                <p class="text-gray-500 mt-4 text-lg">Comprehensive solutions designed to put your brand in front of the right eyes, at the right time.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="service-card bg-white p-8 rounded-2xl border border-gray-100 relative overflow-hidden group">
                    <div class="w-14 h-14 bg-brand-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-accent group-hover:text-white transition-colors duration-300">
                        <i class="fas fa-city text-2xl text-brand-accent group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-3">OOH & DOOH</h3>
                    <p class="text-gray-500 mb-6 leading-relaxed">Prime billboards, gantries, and digital screens at high-traffic locations across India.</p>
                    <a href="/OOH-and-DOOH-Services" class="inline-flex items-center text-sm font-bold uppercase text-brand-accent tracking-wide group-hover:translate-x-2 transition-transform">
                        Explore <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="service-card bg-white p-8 rounded-2xl border border-gray-100 relative overflow-hidden group">
                    <div class="w-14 h-14 bg-brand-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-accent group-hover:text-white transition-colors duration-300">
                        <i class="fas fa-film text-2xl text-brand-accent group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-3">Cinema Ads</h3>
                    <p class="text-gray-500 mb-6 leading-relaxed">Captivate audiences with blockbuster advertising. On-screen ads and off-screen branding.</p>
                    <a href="/Cinema-Advertising-Services" class="inline-flex items-center text-sm font-bold uppercase text-brand-accent tracking-wide group-hover:translate-x-2 transition-transform">
                        Explore <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="service-card bg-white p-8 rounded-2xl border border-gray-100 relative overflow-hidden group">
                    <div class="w-14 h-14 bg-brand-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-accent group-hover:text-white transition-colors duration-300">
                        <i class="fas fa-newspaper text-2xl text-brand-accent group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-3">TV & Print</h3>
                    <p class="text-gray-500 mb-6 leading-relaxed">Traditional mainline media expertise. Newspaper ads, magazine spreads, and TV commercials.</p>
                    <a href="/Digital-and-Tech-Services" class="inline-flex items-center text-sm font-bold uppercase text-brand-accent tracking-wide group-hover:translate-x-2 transition-transform">
                        Explore <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="service-card bg-white p-8 rounded-2xl border border-gray-100 relative overflow-hidden group">
                    <div class="w-14 h-14 bg-brand-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-accent group-hover:text-white transition-colors duration-300">
                        <i class="fas fa-bullhorn text-2xl text-brand-accent group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-3">BTL Activations</h3>
                    <p class="text-gray-500 mb-6 leading-relaxed">On-ground promotions, mall activations, and direct consumer engagement strategies.</p>
                    <a href="/BTL-and-Activations-Services" class="inline-flex items-center text-sm font-bold uppercase text-brand-accent tracking-wide group-hover:translate-x-2 transition-transform">
                        Explore <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="service-card bg-white p-8 rounded-2xl border border-gray-100 relative overflow-hidden group">
                    <div class="w-14 h-14 bg-brand-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-accent group-hover:text-white transition-colors duration-300">
                        <i class="fas fa-rocket text-2xl text-brand-accent group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-3">Digital & Tech</h3>
                    <p class="text-gray-500 mb-6 leading-relaxed">Social media marketing, SEO, and brand technology solutions that measure results.</p>
                    <a href="/Digital-and-Tech-Services" class="inline-flex items-center text-sm font-bold uppercase text-brand-accent tracking-wide group-hover:translate-x-2 transition-transform">
                        Explore <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="service-card bg-white p-8 rounded-2xl border border-gray-100 relative overflow-hidden group">
                    <div class="w-14 h-14 bg-brand-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-accent group-hover:text-white transition-colors duration-300">
                        <i class="fas fa-calendar-check text-2xl text-brand-accent group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-3">Events</h3>
                    <p class="text-gray-500 mb-6 leading-relaxed">Corporate events, product launches, and exhibition stall designing and fabrication.</p>
                    <a href="/Events-and-Exhibitions-Services" class="inline-flex items-center text-sm font-bold uppercase text-brand-accent tracking-wide group-hover:translate-x-2 transition-transform">
                        Explore <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="w-[85vw] max-w-7xl mx-auto">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <span class="text-brand-accent font-bold uppercase tracking-widest text-sm mb-2 block">Our Inventory</span>
                    <h2 class="text-4xl font-black text-brand-dark">ADVERTISING FORMATS</h2>
                </div>
            </div>

            <div class="ad-grid">
                <div class="grid-span-2 grid-row-2 relative rounded-3xl overflow-hidden group cursor-pointer">
                    <img src="/public/assets/images/Billboards.png" alt="Billboard" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <span class="bg-brand-accent text-white px-3 py-1 rounded text-xs font-bold uppercase mb-3 inline-block">Premium</span>
                        <h3 class="text-white text-3xl font-bold uppercase mb-2">Large Format Billboards</h3>
                        <p class="text-gray-300 text-sm max-w-sm">Unmissable impact on major highways and arterials.</p>
                    </div>
                </div>

                <div class="relative rounded-3xl overflow-hidden group cursor-pointer min-h-[250px]">
                    <img src="/public/assets/images/Bus-Shelters.png" alt="Bus Shelter" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-white text-xl font-bold uppercase">Bus Shelters</h3>
                    </div>
                </div>

                <div class="relative rounded-3xl overflow-hidden group cursor-pointer min-h-[250px]">
                    <img src="/public/assets/images/Mall-Media.png" alt="Mall Media" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-white text-xl font-bold uppercase">Mall Media</h3>
                    </div>
                </div>

                <div class="grid-span-2 relative rounded-3xl overflow-hidden group cursor-pointer bg-brand-dark min-h-[250px]">
                    <img src="/public/assets/images/b3.jpg" alt="Digital Screens" class="w-full h-full object-cover opacity-60 transition duration-700 group-hover:scale-110 group-hover:opacity-40">
                    <div class="absolute bottom-0 left-0 p-8 w-full">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-white text-2xl font-bold uppercase mb-1">DOOH Networks</h3>
                                <p class="text-gray-400 text-xs">Programmatic digital screens</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative rounded-3xl overflow-hidden group cursor-pointer min-h-[250px]">
                    <img src="/public/assets/images/airport.png" alt="Airport Media" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-white text-xl font-bold uppercase">Airport Media</h3>
                    </div>
                </div>

                <div class="md:col-span-2 relative rounded-3xl overflow-hidden group cursor-pointer min-h-[250px]">
                    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover ">
                        <source src="/public/assets/video/vdo2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="absolute bottom-0 right-0 p-8">
                        <div class="w-12 h-12 rounded-full bg-brand-accent flex items-center justify-center text-white group-hover:scale-110 transition">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-3xl overflow-hidden group cursor-pointer min-h-[250px]">
                    <img src="/public/assets/images/btl-img-3.png" alt="Transit Advertising" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-white text-xl font-bold uppercase">Transit Ads</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-brand-gray">
        <div class="w-[85vw] max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between md:items-end mb-16">
                <div>
                    <span class="text-brand-accent font-bold uppercase tracking-widest text-sm mb-2 block">Our Work</span>
                    <h2 class="text-4xl font-black text-brand-dark">RECENT CASE STUDIES</h2>
                </div>
                <a href="#" class="hidden md:inline-flex items-center gap-2 px-6 py-3 border border-gray-300 rounded-full font-bold text-sm hover:border-brand-accent hover:text-brand-accent transition">
                    View All Cases <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group cursor-pointer">
                    <div class="rounded-2xl overflow-hidden mb-5 relative shadow-lg">
                        <img src="/public/assets/images/1.jpg" alt="Billboard" class="w-full h-80 object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded text-xs font-bold uppercase tracking-wider">OOH Campaign</div>
                    </div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-2 group-hover:text-brand-accent transition">Fashion Week City Launch</h3>
                    <p class="text-gray-500 line-clamp-2">Complete city domination using large format billboards and digital gantries.</p>
                </div>

                <div class="group cursor-pointer">
                    <div class="rounded-2xl overflow-hidden mb-5 relative shadow-lg">
                        <img src="/public/assets/images/3.jpg" alt="Meeting" class="w-full h-80 object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded text-xs font-bold uppercase tracking-wider">Event</div>
                    </div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-2 group-hover:text-brand-accent transition">Corporate Summit 2024</h3>
                    <p class="text-gray-500 line-clamp-2">End-to-end event management including stage fabrication and guest handling.</p>
                </div>

                <div class="group cursor-pointer">
                    <div class="rounded-2xl overflow-hidden mb-5 relative shadow-lg">
                        <img src="/public/assets/images/7.avif" alt="Digital" class="w-full h-80 object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded text-xs font-bold uppercase tracking-wider">Digital & BTL</div>
                    </div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-2 group-hover:text-brand-accent transition">Product Activation</h3>
                    <p class="text-gray-500 line-clamp-2">Interactive mall activation combined with a social media influencer campaign.</p>
                </div>
            </div>

            <div class="mt-10 text-center md:hidden">
                <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-brand-dark text-white rounded-full font-bold text-sm">
                    View All Cases <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-accentLight/30 rounded-full blur-[120px] translate-x-1/2 -translate-y-1/2 opacity-50"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-blue-100/50 rounded-full blur-[100px] -translate-x-1/2 translate-y-1/2"></div>

        <div class="w-[85vw] max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-brand-dark">TRUSTED BY BRANDS</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-xl shadow-gray-200/50 flex flex-col hover:border-brand-accent/30 transition duration-300">
                    <div class="flex text-yellow-400 mb-6 text-sm gap-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic leading-relaxed mb-8 flex-grow">"Media Solutions executed our pan-India billboard campaign flawlessly. The prime locations they secured gave us visibility we didn't think was possible."</p>
                    <div class="flex items-center gap-4 border-t border-gray-100 pt-6">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-12 h-12 rounded-full ring-2 ring-gray-100">
                        <div>
                            <h4 class="font-bold text-brand-dark text-sm">Vikram Mehta</h4>
                            <p class="text-xs text-gray-500 uppercase">VP Marketing, Urban Estates</p>
                        </div>
                    </div>
                </div>

                <div class="bg-brand-dark text-white p-8 rounded-3xl shadow-2xl flex flex-col transform md:-translate-y-6 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-accent rounded-full blur-[60px] opacity-40"></div>
                    <div class="flex text-brand-accent mb-6 text-sm gap-1 relative z-10">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-300 italic leading-relaxed mb-8 flex-grow relative z-10">"We needed a partner who understood both OOH and Digital. Their team integrated our bus shelter ads with a geo-targeted mobile campaign."</p>
                    <div class="flex items-center gap-4 border-t border-white/10 pt-6 relative z-10">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-12 h-12 rounded-full ring-2 ring-brand-accent">
                        <div>
                            <h4 class="font-bold text-white text-sm">Anjali Kapoor</h4>
                            <p class="text-xs text-gray-400 uppercase">Brand Head, Fresh Foods</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-xl shadow-gray-200/50 flex flex-col hover:border-brand-accent/30 transition duration-300">
                    <div class="flex text-yellow-400 mb-6 text-sm gap-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 italic leading-relaxed mb-8 flex-grow">"Professionalism at its peak. From the initial pitch to the final execution report, the team at Media Solutions kept us informed."</p>
                    <div class="flex items-center gap-4 border-t border-gray-100 pt-6">
                        <img src="https://randomuser.me/api/portraits/men/86.jpg" class="w-12 h-12 rounded-full ring-2 ring-gray-100">
                        <div>
                            <h4 class="font-bold text-brand-dark text-sm">Sameer Khan</h4>
                            <p class="text-xs text-gray-500 uppercase">Director, TechNova</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white relative overflow-hidden">
        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-[1px] bg-gray-100 hidden"></div>

        <div class="w-[85vw] max-w-7xl mx-auto relative z-10">
            <div class="flex flex-col md:flex-row justify-between md:items-end mb-20">
                <div>
                    <span class="text-brand-accent font-bold uppercase tracking-widest text-sm mb-2 block">The Workflow</span>
                    <h2 class="text-4xl font-black text-brand-dark">FROM BRIEF TO <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-accent to-purple-600">BLOCKBUSTER</span></h2>
                </div>
                <p class="text-gray-500 max-w-md mt-4 md:mt-0 text-right md:text-left">
                    We don't guess. We map. A data-backed approach to ensure every rupee spent converts into visibility.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="group relative bg-white p-8 pt-12 border border-gray-100 rounded-2xl hover:border-brand-accent/50 hover:shadow-2xl hover:shadow-brand-accent/10 transition duration-500">
                    <div class="absolute -top-6 left-8 w-12 h-12 bg-brand-dark text-white rounded-xl flex items-center justify-center font-black text-lg shadow-lg group-hover:bg-brand-accent group-hover:scale-110 transition duration-300">01</div>
                    <h3 class="text-xl font-bold text-brand-dark mb-3">Discovery & Map</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">We analyze your target audience heatmaps. Where do they live, work, and commute? We find the gaps your competitors missed.</p>
                </div>

                <div class="group relative bg-white p-8 pt-12 border border-gray-100 rounded-2xl hover:border-brand-accent/50 hover:shadow-2xl hover:shadow-brand-accent/10 transition duration-500 md:mt-12">
                    <div class="absolute -top-6 left-8 w-12 h-12 bg-white border border-gray-200 text-brand-dark rounded-xl flex items-center justify-center font-black text-lg shadow-lg group-hover:bg-brand-accent group-hover:text-white group-hover:border-brand-accent group-hover:scale-110 transition duration-300">02</div>
                    <h3 class="text-xl font-bold text-brand-dark mb-3">Media Buying</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Leveraging our network, we negotiate the best rates for prime inventory. Billboards, screens, or mall spaces—we secure the best spots.</p>
                </div>

                <div class="group relative bg-white p-8 pt-12 border border-gray-100 rounded-2xl hover:border-brand-accent/50 hover:shadow-2xl hover:shadow-brand-accent/10 transition duration-500">
                    <div class="absolute -top-6 left-8 w-12 h-12 bg-white border border-gray-200 text-brand-dark rounded-xl flex items-center justify-center font-black text-lg shadow-lg group-hover:bg-brand-accent group-hover:text-white group-hover:border-brand-accent group-hover:scale-110 transition duration-300">03</div>
                    <h3 class="text-xl font-bold text-brand-dark mb-3">Execution</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Rapid deployment. Our on-ground team ensures high-quality printing, mounting, and digital integration within strict timelines.</p>
                </div>

                <div class="group relative bg-white p-8 pt-12 border border-gray-100 rounded-2xl hover:border-brand-accent/50 hover:shadow-2xl hover:shadow-brand-accent/10 transition duration-500 md:mt-12">
                    <div class="absolute -top-6 left-8 w-12 h-12 bg-white border border-gray-200 text-brand-dark rounded-xl flex items-center justify-center font-black text-lg shadow-lg group-hover:bg-brand-accent group-hover:text-white group-hover:border-brand-accent group-hover:scale-110 transition duration-300">04</div>
                    <h3 class="text-xl font-bold text-brand-dark mb-3">Audit & Report</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Transparency is key. We provide geo-tagged execution photos and impact reports so you know exactly what you paid for.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-brand-dark relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-accent/10 rounded-full blur-[100px] translate-x-1/2 -translate-y-1/2"></div>

        <div class="w-[85vw] max-w-7xl mx-auto relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div>
                    <h2 class="text-5xl md:text-6xl font-black text-white leading-tight mb-6">
                        STOP WHISPERING. <br>
                        <span class="text-brand-accent">START SHOUTING.</span>
                    </h2>
                    <p class="text-gray-400 text-lg mb-10 max-w-lg">
                        Your audience is out there. They are driving past empty billboards and staring at screens. Let's put your brand where their eyes are.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/contact" class="px-8 py-4 bg-brand-accent text-white rounded-full font-bold text-lg hover:bg-white hover:text-brand-dark transition-all duration-300 shadow-lg shadow-brand-accent/20 text-center">
                            Get a Free Media Plan
                        </a>
                        <a href="tel:+918976309837" class="px-8 py-4 border border-white/20 text-white rounded-full font-bold text-lg hover:bg-white/10 transition-all duration-300 flex items-center justify-center gap-2">
                            <i class="fas fa-phone text-brand-accent"></i> 91 89763 09837
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <!-- <div class="absolute inset-0 bg-gradient-to-r from-brand-dark to-transparent z-10"></div> -->
                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl p-8 transform  transition duration-500">
                        <h3 class="text-white font-bold text-xl mb-6 uppercase tracking-wider border-b border-white/10 pb-4">The Growth Package</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check-circle text-brand-accent mr-4 text-xl"></i>
                                <span>Customized OOH Media Plan</span>
                            </li>
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check-circle text-brand-accent mr-4 text-xl"></i>
                                <span>Competitor Analysis</span>
                            </li>
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check-circle text-brand-accent mr-4 text-xl"></i>
                                <span>Digital Integration Strategy</span>
                            </li>
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check-circle text-brand-accent mr-4 text-xl"></i>
                                <span>Creative Consultation</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include 'views/website/includes/partners_carousel.php'; ?>

    <script>
        const observerOptions = {
            threshold: 0.5
        };
        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.counter');
                    counters.forEach(counter => {
                        const updateCount = () => {
                            const target = +counter.getAttribute('data-target');
                            const count = +counter.innerText.replace('+', '').replace('%', '').replace('/7', '');
                            const speed = target / 50;
                            if (count < target) {
                                counter.innerText = Math.ceil(count + speed);
                                setTimeout(updateCount, 30);
                            } else {
                                if (target === 12 || target === 500) counter.innerText = target + '+';
                                else if (target === 100) counter.innerText = target + '%';
                                else if (target === 24) counter.innerText = '24/7';
                            }
                        };
                        updateCount();
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        counterObserver.observe(document.getElementById('stats-section'));
    </script>

</body>

</html>

<?php
include 'includes/footer.php';
?>