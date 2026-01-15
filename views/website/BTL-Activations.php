<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body>
    <section class="relative pt-40 pb-32 bg-brand-gray overflow-hidden min-h-[85vh] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1920&q=80"
                class="w-full h-full object-cover opacity-20"
                alt="BTL Activation Background">

            <div class="absolute inset-0 bg-gradient-to-r from-brand-gray via-brand-gray/80 to-transparent"></div>

            <svg class="absolute top-0 right-0 w-1/2 h-full opacity-10 pointer-events-none" viewBox="0 0 500 500">
                <path d="M0,100 C150,200 350,0 500,100 L500,500 L0,500 Z" class="fill-brand-accent"></path>
            </svg>

            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-brand-gray to-transparent"></div>
        </div>

        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 relative z-10">
            <div class="max-w-4xl">
                <span class="text-brand-accent font-bold uppercase tracking-[0.3em] text-xs mb-6 block">Direct Consumer Engagement</span>

                <h1 class="text-3xl md:text-8xl font-black text-brand-dark leading-[0.9] uppercase mb-8">
                    BTL & <br>
                    <span class="text-brand-accent">Activations</span>
                </h1>

                <p class="text-gray-600 text-sm md:text-xl max-w-2xl border-l-4 border-brand-accent pl-8 max-md:pl-4 mb-12">
                    Turning brand messages into physical experiences. We create on-ground promotions and mall activations that drive direct interaction and immediate results.
                </p>

                <div class="flex flex-wrap gap-5">
                    <a href="/services" class="px-10 py-4 max-md:py-3 bg-brand-accent text-white font-bold uppercase text-[10px] tracking-widest rounded-full hover:shadow-[0_10px_30px_rgba(124,58,237,0.3)] hover:scale-105 transition-all">
                        View Activation Types
                    </a>
                    <a href="/contact" class="px-10 py-4 max-md:py-3 border border-brand-dark/20 text-brand-dark font-bold uppercase text-[10px] tracking-widest rounded-full hover:bg-brand-dark hover:text-white transition backdrop-blur-sm">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="solutions" class="py-24 max-md:py-14 bg-brand-gray">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="p-10 max-md:p-6 bg-brand-light rounded-3xl border border-gray-200 shadow-sm hover:shadow-lg hover:border-brand-accent/40 transition-all group">
                    <div class="w-14 h-14 bg-brand-accent rounded-2xl flex items-center justify-center mb-8 rotate-3 group-hover:rotate-12 transition-transform shadow-lg shadow-brand-accent/20">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl max-md:text-xl font-bold text-brand-dark mb-4 uppercase">Mall Activations</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">High-footfall setups in premium malls across India including atrium displays, kiosks, and interactive zones.</p>
                </div>

                <div class="p-10 max-md:p-6 bg-brand-light rounded-3xl border border-gray-200 shadow-sm hover:shadow-lg hover:border-brand-accent/40 transition-all group">
                    <div class="w-14 h-14 bg-brand-accent rounded-2xl flex items-center justify-center mb-8 -rotate-3 group-hover:rotate-0 transition-transform shadow-lg shadow-brand-accent/20">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m4 0h1m-5 10h1m4 0h1m-5-4h1m4 0h1"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl max-md:text-xl font-bold text-brand-dark mb-4 uppercase">Corporate & RWA</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Direct engagement in corporate hubs and premium residential complexes to reach decision-makers and families.</p>
                </div>

                <div class="p-10 max-md:p-6 bg-brand-light rounded-3xl border border-gray-200 shadow-sm hover:shadow-lg hover:border-brand-accent/40 transition-all group">
                    <div class="w-14 h-14 bg-brand-accent rounded-2xl flex items-center justify-center mb-8 rotate-6 group-hover:rotate-0 transition-transform shadow-lg shadow-brand-accent/20">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-1.5-.454M21 12.727v3.547a3.3 3.3 0 01-3.3 3.3H6.3a3.3 3.3 0 01-3.3-3.3v-3.547c.477.31 1.012.454 1.5.454a2.704 2.704 0 003 0 2.704 2.704 0 013 0 2.704 2.704 0 003 0 2.704 2.704 0 013 0 2.704 2.704 0 001.5-.454M21 6.727v3.546c-.477-.31-1.012-.454-1.5-.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-1.5.454M3 9.727V6.727A3.3 3.3 0 016.3 3.427h11.4a3.3 3.3 0 013.3 3.3v3.046c-.494-.1-1.022-.077-1.5.154a2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-1.5-.154z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl max-md:text-xl font-bold text-brand-dark mb-4 uppercase">Sampling & Demos</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Product trials and live demonstrations that convert "leads" into "loyal customers" through first-hand experience.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-14 bg-brand-light border-y border-gray-100">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <h2 class="text-4xl font-black text-brand-dark uppercase text-center mb-20">Our Execution <span class="text-brand-accent">Blueprint</span></h2>

            <div class="grid md:grid-cols-4 gap-4">
                <div class="relative p-8 bg-brand-gray rounded-2xl border-t-4 border-brand-accent shadow-sm">
                    <span class="text-6xl font-black text-brand-dark/5 absolute top-4 right-4 leading-none">01</span>
                    <h4 class="text-brand-dark font-bold mb-3 uppercase">Site Selection</h4>
                    <p class="text-gray-500 text-xs">Identifying high-conversion hotspots based on demographic data.</p>
                </div>
                <div class="relative p-8 bg-brand-gray rounded-2xl border-t-4 border-brand-accent shadow-sm">
                    <span class="text-6xl font-black text-brand-dark/5 absolute top-4 right-4 leading-none">02</span>
                    <h4 class="text-brand-dark font-bold mb-3 uppercase">Fabrication</h4>
                    <p class="text-gray-500 text-xs">In-house production of stalls, kiosks, and promotional materials.</p>
                </div>
                <div class="relative p-8 bg-brand-gray rounded-2xl border-t-4 border-brand-accent shadow-sm">
                    <span class="text-6xl font-black text-brand-dark/5 absolute top-4 right-4 leading-none">03</span>
                    <h4 class="text-brand-dark font-bold mb-3 uppercase">Staffing</h4>
                    <p class="text-gray-500 text-xs">Trained promoters and brand ambassadors to represent your vision.</p>
                </div>
                <div class="relative p-8 bg-brand-gray rounded-2xl border-t-4 border-brand-accent shadow-sm">
                    <span class="text-6xl font-black text-brand-dark/5 absolute top-4 right-4 leading-none">04</span>
                    <h4 class="text-brand-dark font-bold mb-3 uppercase">Reporting</h4>
                    <p class="text-gray-500 text-xs">Real-time data collection and comprehensive campaign audit.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="impact" class="py-24 max-md:py-14 bg-brand-accent relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>

        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 flex flex-col md:flex-row items-center justify-between gap-12 relative z-10">
            <div class="max-w-md">
                <h2 class="text-4xl font-bold text-white uppercase mb-6 leading-tight">National Reach, <br><span class="text-brand-accentLight">Local Impact</span></h2>
                <p class="text-brand-accentLight">With teams stationed in every major metro, we can launch simultaneous activations across 50+ cities in 24 hours.</p>
            </div>

            <div class="flex gap-8 md:gap-16">
                <div class="text-center">
                    <p class="text-5xl font-black text-white">500+</p>
                    <p class="text-brand-accentLight text-[10px] uppercase font-bold tracking-widest mt-2">Annual Events</p>
                </div>
                <div class="w-px h-16 bg-white/20"></div>
                <div class="text-center">
                    <p class="text-5xl font-black text-white">10M+</p>
                    <p class="text-brand-accentLight text-[10px] uppercase font-bold tracking-widest mt-2">Engagements</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-14 bg-brand-gray">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="bg-gradient-to-r from-brand-light to-brand-accentLight/20 border border-brand-accent/20 rounded-[4rem] p-8 md:p-20 flex flex-col items-center text-center shadow-lg">
                <h2 class="text-3xl md:text-5xl font-black text-brand-dark uppercase mb-8">Let's Get Your Brand <br><span class="text-brand-accent">On the Street</span></h2>
                <p class="text-gray-500 mb-12 max-w-xl max-md:text-sm italic">"From Thane to the rest of India, we manage the logistics so you can focus on the leads."</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/contact" class="px-12 max-md:px-8 py-5 max-md:py-3 bg-brand-accent text-white font-black uppercase text-xs tracking-widest rounded-full hover:scale-105 transition-transform shadow-lg shadow-brand-accent/20">Inquire for Activation</a>
                    <a href="/services" class="px-12 py-5 max-md:py-3 border border-brand-dark/10 text-brand-dark font-black uppercase text-xs tracking-widest rounded-full hover:bg-brand-dark hover:text-white transition-all">View Gallery</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
include 'includes/footer.php';
?>