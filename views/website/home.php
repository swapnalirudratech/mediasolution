<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>


<style>
    /* Custom Styles for specific agency effects */
    .hero-bg {
        background: linear-gradient(to right, rgba(15, 23, 42, 0.9), rgba(15, 23, 42, 0.6)), url('/public/assets/images/b3.jpg');
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

<body class="">

    <div class="hero-bg h-[90vh] flex items-center justify-center text-white relative">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto">
            <p class="text-brand-accent text-lg md:text-xl uppercase tracking-[0.3em] mb-4 animate-fade-in-up">Since 2012</p>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight mb-8">
                WE TURN SPACES <br> INTO <span class="text-stroke text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">EXPERIENCES</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-10 font-light">
                India's premier OOH, Digital, and Brand Experience Agency. We don't just advertise; we create measurable impact.
            </p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                <a href="/contact" class="px-8 py-2.5 bg-brand-accent rounded-full text-black text-lg tracking-wider group">
                    Start Campaign
                    <i class="fas fa-arrow-right ml-2 -rotate-45 group-hover:rotate-0 transition text-black"></i>
                </a>
            </div>
        </div>

        <div class="absolute bottom-10 animate-bounce">
            <i class="fas fa-chevron-down text-2xl text-white/50"></i>
        </div>
    </div>

    <div class="bg-gradient-to-r from-[#0f1807] via-brand-accent/70 to-[#0f1807] py-6 overflow-hidden relative">
        <div class="flex whitespace-nowrap animate-scroll w-max">
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">Trusted By Leading Brands</span>
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">•</span>
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">Real Estate Giants</span>
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">•</span>
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">FMCG Leaders</span>
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">•</span>
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">Retail Chains</span>
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">•</span>
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">Media Solutions</span>
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">•</span>
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">Trusted By Leading Brands</span>
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">•</span>
            <span class="mx-8 text-gray-500  text-2xl font-bold uppercase">Real Estate Giants</span>
        </div>
    </div>

    <section class="py-24 bg-[#0f1807]">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class=" text-brand-accent text-4xl md:text-5xl font-bold mb-6">MORE THAN JUST<br>OUTDOOR ADVERTISING</h2>
                    <div class="w-full h-[1px] bg-gradient-to-r from-brand-accent to-transparent mb-8"></div>
                    <p class="text-gray-200 mb-6 text-lg leading-relaxed">
                        Founded in 2012, <strong>Media Solutions</strong> has evolved into one of India's most effective marketing communication companies. While our roots are deep in OOH (Out of Home), we have branched out to become a complete 360-degree agency.
                    </p>
                    <p class="text-gray-200 mb-8 text-lg leading-relaxed">
                        Located in Thane, we serve clients globally. We blend the massive reach of billboards with the precision of digital marketing and the engagement of BTL activities.
                    </p>
                    <a href="/about" class="px-8 py-2.5 bg-brand-accent rounded-full text-black text-lg tracking-wider group">
                        Read Our Story
                        <i class="fas fa-arrow-right ml-2 -rotate-45 group-hover:rotate-0 transition text-black"></i>
                    </a>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class=" p-8 text-center rounded-sm">
                        <h3 class=" text-5xl font-bold text-brand-accent mb-2">10+</h3>
                        <p class="font-semibold uppercase text-gray-200 text-sm tracking-wider">Years Experience</p>
                    </div>
                    <div class=" p-8 text-center rounded-sm">
                        <h3 class=" text-5xl font-bold text-brand-accent mb-2">500+</h3>
                        <p class="font-semibold uppercase text-gray-200 text-sm tracking-wider">Campaigns</p>
                    </div>
                    <div class=" p-8 text-center rounded-sm">
                        <h3 class=" text-5xl font-bold text-brand-accent mb-2">100%</h3>
                        <p class="font-semibold uppercase text-gray-200 text-sm tracking-wider">Pan India</p>
                    </div>
                    <div class=" p-8 text-center rounded-sm">
                        <h3 class=" text-5xl font-bold text-brand-accent mb-2">24/7</h3>
                        <p class="font-semibold uppercase text-gray-200 text-sm tracking-wider">Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#172010] text-white">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-accent font-bold uppercase tracking-widest text-sm">What We Do</span>
                <h2 class=" text-4xl md:text-5xl font-bold mt-2">INTEGRATED MEDIA SERVICES</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group bg-gradient-to-br from-brand-accent/20 to-transparent relative overflow-hidden rounded-lg border border-gray-800">
                    <div class="p-8 relative z-10">
                        <i class="fas fa-city text-4xl text-brand-accent mb-6"></i>
                        <h3 class=" text-2xl font-bold mb-3">OOH & DOOH</h3>
                        <p class="text-gray-400 mb-4">Prime billboards, gantries, and digital screens at high-traffic locations across India.</p>
                        <a href="/OOH-and-DOOH-Services" class="font-bold text-sm uppercase tracking-wide text-brand-accent transition">Explore OOH <i class="fas fa-arrow-right ml-1 -rotate-45 group-hover:rotate-0 transition"></i></a>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                </div>

                <div class="group bg-gradient-to-br from-brand-accent/20 to-transparent relative overflow-hidden rounded-lg border border-gray-800">
                    <div class="p-8 relative z-10">
                        <i class="fas fa-film text-4xl text-brand-accent mb-6"></i>
                        <h3 class=" text-2xl font-bold mb-3">Cinema On-Screen</h3>
                        <p class="text-gray-400 mb-4">Captivate audiences with blockbuster advertising. On-screen ads and off-screen branding.</p>
                        <a href="/Cinema-Advertising-Services" class="font-bold text-sm uppercase tracking-wide text-brand-accent transition">Explore Cinema <i class="fas fa-arrow-right ml-1 -rotate-45 group-hover:rotate-0 transition"></i></a>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                </div>

                <div class="group bg-gradient-to-br from-brand-accent/20 to-transparent relative overflow-hidden rounded-lg border border-gray-800">
                    <div class="p-8 relative z-10">
                        <i class="fas fa-newspaper text-4xl text-brand-accent mb-6"></i>
                        <h3 class=" text-2xl font-bold mb-3">TV & Print</h3>
                        <p class="text-gray-400 mb-4">Traditional mainline media expertise. Newspaper ads, magazine spreads, and TV commercials.</p>
                        <a href="/Digital-and-Tech-Services" class="font-bold text-sm uppercase tracking-wide text-brand-accent transition">Explore Media <i class="fas fa-arrow-right ml-1 -rotate-45 group-hover:rotate-0 transition"></i></a>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                </div>

                <div class="group bg-gradient-to-br from-brand-accent/20 to-transparent relative overflow-hidden rounded-lg border border-gray-800">
                    <div class="p-8 relative z-10">
                        <i class="fas fa-bullhorn text-4xl text-brand-accent mb-6"></i>
                        <h3 class=" text-2xl font-bold mb-3">BTL Activations</h3>
                        <p class="text-gray-400 mb-4">On-ground promotions, mall activations, and direct consumer engagement strategies.</p>
                        <a href="/BTL-and-Activations-Services" class="font-bold text-sm uppercase tracking-wide text-brand-accent transition">Explore BTL <i class="fas fa-arrow-right ml-1 -rotate-45 group-hover:rotate-0 transition"></i></a>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                </div>

                <div class="group bg-gradient-to-br from-brand-accent/20 to-transparent relative overflow-hidden rounded-lg border border-gray-800">
                    <div class="p-8 relative z-10">
                        <i class="fas fa-rocket text-4xl text-brand-accent mb-6"></i>
                        <h3 class=" text-2xl font-bold mb-3">Digital & Tech</h3>
                        <p class="text-gray-400 mb-4">Social media marketing, SEO, and brand technology solutions that measure results.</p>
                        <a href="/Digital-and-Tech-Services" class="font-bold text-sm uppercase tracking-wide text-brand-accent transition">Explore Digital <i class="fas fa-arrow-right ml-1 -rotate-45 group-hover:rotate-0 transition"></i></a>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                </div>

                <div class="group bg-gradient-to-br from-brand-accent/20 to-transparent relative overflow-hidden rounded-lg border border-gray-800">
                    <div class="p-8 relative z-10">
                        <i class="fas fa-calendar-check text-4xl text-brand-accent mb-6"></i>
                        <h3 class=" text-2xl font-bold mb-3">Events</h3>
                        <p class="text-gray-400 mb-4">Corporate events, product launches, and exhibition stall designing and fabrication.</p>
                        <a href="/Events-and-Exhibitions-Services" class="font-bold text-sm uppercase tracking-wide text-brand-accent transition">Explore Events <i class="fas fa-arrow-right ml-1 -rotate-45 group-hover:rotate-0 transition"></i></a>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#0f1807]">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <span class="text-brand-accent font-bold uppercase tracking-widest text-sm">Media Inventory</span>
                <h2 class=" text-4xl font-bold mt-2 text-white">ADVERTISING FORMATS</h2>
            </div>

            <div class="ad-grid">
                <div class="grid-span-2 grid-row-2 relative rounded-xl overflow-hidden group bg-brand-dark">
                    <img src="/public/assets/images/b1.jpg" alt="Billboard" class="w-full h-full object-cover opacity-60 transition duration-500 group-hover:opacity-40 group-hover:scale-105">
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="text-white  text-3xl font-bold uppercase">Large Format Billboards</h3>
                        <p class="text-gray-300 mt-2">Unmissable impact on major highways and arterials.</p>
                    </div>
                </div>

                <div class="relative rounded-xl overflow-hidden group bg-brand-dark h-64 md:h-auto">
                    <img src="/public/assets/images/b2.jpg" alt="Bus Shelter" class="w-full h-full object-cover opacity-60 transition duration-500 group-hover:opacity-40 group-hover:scale-105">
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-white  text-xl font-bold uppercase">Bus Shelters (BQS)</h3>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden group bg-brand-dark h-64 md:h-auto">
                    <img src="/public/assets/images/b1.jpg" alt="Mall Media" class="w-full h-full object-cover opacity-60 transition duration-500 group-hover:opacity-40 group-hover:scale-105">
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-white  text-xl font-bold uppercase">Mall Media</h3>
                    </div>
                </div>

                <div class="grid-span-2 relative rounded-xl overflow-hidden group bg-brand-dark h-64 md:h-auto">
                    <img src="/public/assets/images/b3.jpg" alt="Digital Screens" class="w-full h-full object-cover opacity-60 transition duration-500 group-hover:opacity-40 group-hover:scale-105">
                    <div class="absolute bottom-0 left-0 p-6 flex items-center">
                        <i class="fas fa-play-circle text-brand-accent text-4xl mr-4"></i>
                        <div>
                            <h3 class="text-white  text-2xl font-bold uppercase">DOOH Networks</h3>
                            <p class="text-gray-300 text-sm">Programmatic digital screens in high-dwell areas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#172010]">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <span class="text-brand-accent font-bold uppercase tracking-widest text-sm">Portfolio</span>
                    <h2 class=" text-4xl font-bold mt-2 text-white">RECENT WORKS</h2>
                </div>
                <a href="#" class="hidden md:inline-block px-6 py-2 border border-brand-dark text-brand-dark font-bold uppercase text-sm hover:bg-brand-dark hover:text-white transition">View All Cases</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="portfolio-card relative group h-80 rounded-lg overflow-hidden cursor-pointer">
                    <img src="/public/assets/images/1.jpg" alt="Billboard" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="overlay absolute inset-0 bg-brand-dark/80 opacity-0 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-brand-accent text-xs font-bold uppercase tracking-wider">OOH Campaign</span>
                        <h3 class="text-white  text-2xl font-bold">Fashion Week City Launch</h3>
                    </div>
                </div>

                <div class="portfolio-card relative group h-80 rounded-lg overflow-hidden cursor-pointer">
                    <img src="/public/assets/images/3.jpg" alt="Meeting" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="overlay absolute inset-0 bg-brand-dark/80 opacity-0 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-brand-accent text-xs font-bold uppercase tracking-wider">Event Management</span>
                        <h3 class="text-white  text-2xl font-bold">Corporate Summit 2024</h3>
                    </div>
                </div>

                <div class="portfolio-card relative group h-80 rounded-lg overflow-hidden cursor-pointer">
                    <img src="/public/assets/images/7.avif" alt="Digital" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="overlay absolute inset-0 bg-brand-dark/80 opacity-0 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-brand-accent text-xs font-bold uppercase tracking-wider">Digital & BTL</span>
                        <h3 class="text-white  text-2xl font-bold">Product Activation</h3>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center md:hidden">
                <a href="#" class="inline-block px-6 py-3 bg-brand-dark text-white font-bold uppercase text-sm">View All Cases</a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#0f1807] relative overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full max-w-7xl pointer-events-none">
            <div class="absolute top-20 left-20 w-72 h-72 bg-brand-accent/10 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px]"></div>
        </div>

        <div class="w-[80vw] max-md:w-[90vw] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="text-center mb-16">
                <span class="text-brand-accent font-bold uppercase tracking-widest text-sm">Client Success</span>
                <h2 class=" text-4xl md:text-5xl font-bold mt-2 text-white">TRUSTED BY THE BEST</h2>
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

                    <p class="text-gray-300 text-base italic leading-relaxed mb-8 flex-grow">
                        "Media Solutions executed our pan-India billboard campaign flawlessly. The <span class="text-white font-bold">prime locations</span> they secured in Mumbai and Delhi gave us visibility we didn't think was possible within our budget."
                    </p>

                    <!-- <div class="mb-6">
                        <span class="inline-block bg-green-500/20 text-green-400 text-xs font-bold px-3 py-1 rounded-full border border-green-500/30">
                            <i class="fas fa-arrow-up mr-1"></i> 40% Increase in Footfall
                        </span>
                    </div> -->

                    <div class="flex items-center pt-6 border-t border-white/10">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="w-12 h-12 rounded-full border-2 border-brand-accent mr-4">
                        <div>
                            <h4 class="text-white font-bold  uppercase tracking-wide text-sm">Vikram Mehta</h4>
                            <p class="text-gray-500 text-xs uppercase">VP Marketing, Urban Estates</p>
                        </div>
                    </div>
                </div>

                <div class="bg-brand-accent/10 backdrop-blur-sm border border-brand-accent/30 p-8 rounded-2xl hover:bg-brand-accent/20 transition duration-300 group flex flex-col relative transform md:-translate-y-8 shadow-2xl shadow-black/50">
                    <i class="fas fa-quote-right absolute top-8 right-8 text-6xl text-brand-accent/20 transition"></i>

                    <div class="text-brand-accent text-sm mb-6 space-x-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>

                    <p class="text-gray-300 text-base italic leading-relaxed mb-8 flex-grow">
                        "We needed a partner who understood both OOH and Digital. Their team integrated our bus shelter ads with a geo-targeted mobile campaign. The results were immediate and measurable."
                    </p>

                    <!-- <div class="mb-6">
                        <span class="inline-block bg-brand-accent text-black text-xs font-bold px-3 py-1 rounded-full shadow-lg shadow-brand-accent/50">
                            <i class="fas fa-check-circle mr-1"></i> Best Campaign 2024
                        </span>
                    </div> -->

                    <div class="flex items-center pt-6 border-t border-white/20">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client" class="w-12 h-12 rounded-full border-2 border-white mr-4">
                        <div>
                            <h4 class="text-white font-bold  uppercase tracking-wide text-sm">Anjali Kapoor</h4>
                            <p class="text-white/70 text-xs uppercase">Brand Head, Fresh Foods</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-2xl hover:border-brand-accent/50 transition duration-300 group flex flex-col relative">
                    <i class="fas fa-quote-right absolute top-8 right-8 text-6xl text-white/5 group-hover:text-brand-accent/10 transition"></i>

                    <div class="text-brand-accent text-sm mb-6 space-x-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>

                    <p class="text-gray-300 text-base italic leading-relaxed mb-8 flex-grow">
                        "Professionalism at its peak. From the initial pitch to the final execution report, the team at Media Solutions kept us informed. Their network in Thane and suburbs is unmatched."
                    </p>

                    <!-- <div class="mb-6">
                        <span class="inline-block bg-blue-500/20 text-blue-400 text-xs font-bold px-3 py-1 rounded-full border border-blue-500/30">
                            <i class="fas fa-chart-line mr-1"></i> Brand Awareness
                        </span>
                    </div> -->

                    <div class="flex items-center pt-6 border-t border-white/10">
                        <img src="https://randomuser.me/api/portraits/men/86.jpg" alt="Client" class="w-12 h-12 rounded-full border-2 border-brand-accent mr-4">
                        <div>
                            <h4 class="text-white font-bold  uppercase tracking-wide text-sm">Sameer Khan</h4>
                            <p class="text-gray-500 text-xs uppercase">Director, TechNova Solutions</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

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

        .animate-scroll-left {
            animation: scroll-left 40s linear infinite;
        }

        .animate-scroll-right {
            animation: scroll-right 40s linear infinite;
        }

        .marquee-wrapper:hover .animate-scroll-left,
        .marquee-wrapper:hover .animate-scroll-right {
            animation-play-state: paused;
        }

        /* Optional: Fades the edges for a cleaner look */
        .fade-edges {
            mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        }
    </style>

    <section class="py-24 bg-[#172010] overflow-hidden w-full">
        <div class="max-w-7xl mx-auto px-4 text-center mb-16">
            <span class="text-[#a3e635] font-bold uppercase tracking-widest text-sm">Our Ecosystem</span>
            <h2 class="text-4xl font-bold mt-2 text-white uppercase">Strategic Partners</h2>
            <p class="text-gray-400 mt-4 max-w-2xl mx-auto">
                We collaborate with leading media owners and technology providers to deliver the best inventory.
            </p>
        </div>

        <div class="marquee-wrapper w-full flex flex-col gap-20 fade-edges">

            <div class="relative w-full overflow-hidden">
                <div class="flex animate-scroll-left whitespace-nowrap gap-16 w-max">
                    <div class="flex items-center gap-16">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                    </div>
                    <div class="flex items-center gap-16">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                    </div>
                </div>
            </div>

            <div class="relative w-full overflow-hidden">
                <div class="flex animate-scroll-right whitespace-nowrap gap-16 w-max">
                    <div class="flex items-center gap-16">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                    </div>
                    <div class="flex items-center gap-16">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="/public/assets/images/663c91e021d5068fcc78936a_amazon-seeklogo-01.png" class="h-10 w-auto opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">
                    </div>
                </div>
            </div>

        </div>
    </section>

</body>

</html>

<?php
include 'includes/footer.php';
?>