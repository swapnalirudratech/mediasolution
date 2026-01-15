<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body>
    <section class="relative pt-40 pb-32 bg-brand-gray overflow-hidden min-h-[80vh] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="/public/assets/images/9.avif"
                class="w-full h-full object-cover opacity-20"
                alt="Billboard Skyline">

            <div class="absolute inset-0 bg-gradient-to-r from-brand-gray via-brand-gray/80 to-transparent"></div>

            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-brand-gray to-transparent"></div>
        </div>

        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-accentLight/30 skew-x-12 transform translate-x-20 z-1"></div>

        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 relative z-10">
            <div class="max-w-3xl">
                <span class="text-brand-accent font-bold uppercase tracking-[0.3em] text-sm mb-4 block">Dominating the Skyline</span>

                <h1 class="text-4xl md:text-8xl font-black text-brand-dark leading-none uppercase mb-8">
                    OOH <span class="text-transparent" style="-webkit-text-stroke: 1px #7c3aed;">&</span> <br>
                    <span class="text-brand-accent">DOOH</span>
                </h1>

                <p class="text-gray-600 text-xl max-md:text-sm leading-relaxed mb-10 border-l-4 border-brand-accent pl-6 max-md:pl-4">
                    From prime billboards to high-tech digital screens at India's highest traffic locations. We don't just place ads; we claim territory.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="/services" class="px-8 py-4 bg-brand-accent text-white font-bold uppercase text-xs tracking-widest rounded-full hover:scale-105 hover:shadow-[0_0_30px_rgba(124,58,237,0.4)] transition-all">
                        Explore Inventory
                    </a>
                    <a href="/contact" class="px-8 py-4 border border-brand-accent text-brand-accent font-bold uppercase text-xs tracking-widest rounded-full hover:bg-brand-accent hover:text-white transition backdrop-blur-sm">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="inventory" class="py-24 max-md:py-14 bg-white">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <h2 class="text-4xl font-bold text-brand-dark uppercase max-w-md">Our Premium Media Inventory</h2>
                <p class="text-gray-500 max-w-sm">Strategically located assets designed for maximum dwell time and visibility.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 p-8 hover:border-brand-accent/30 hover:shadow-xl shadow-gray-200/50 transition-all duration-500">
                    <div class="h-48 mb-6 overflow-hidden rounded-lg bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=800&q=80" alt="Billboards" class="w-full h-full object-cover group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110">
                    </div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-3">Traditional Billboards</h3>
                    <ul class="text-gray-500 space-y-2 text-sm">
                        <li>• Large Format Unipoles</li>
                        <li>• Strategic Gantries</li>
                        <li>• Building Wraps</li>
                    </ul>
                </div>

                <div class="group relative overflow-hidden rounded-2xl bg-brand-accent p-8 shadow-[0_20px_50px_rgba(124,58,237,0.3)] transition-all duration-500 transform md:-translate-y-4">
                    <div class="h-48 mb-6 overflow-hidden rounded-lg bg-black/20">
                        <img src="https://images.unsplash.com/photo-1617396900799-f4ec2b43c7ae?auto=format&fit=crop&w=800&q=80" alt="Digital OOH" class="w-full h-full object-cover transition-all duration-700">
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Digital Screens (DOOH)</h3>
                    <ul class="text-white/80 space-y-2 text-sm font-medium">
                        <li>• Real-time Content Updates</li>
                        <li>• Programmatic Buying</li>
                        <li>• Interactive 3D Anamorphics</li>
                    </ul>
                </div>

                <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 p-8 hover:border-brand-accent/30 hover:shadow-xl shadow-gray-200/50 transition-all duration-500">
                    <div class="h-48 mb-6 overflow-hidden rounded-lg bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=800&q=80" alt="Transit" class="w-full h-full object-cover group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110">
                    </div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-3">Transit Media</h3>
                    <ul class="text-gray-500 space-y-2 text-sm">
                        <li>• Airport Branding (Pan India)</li>
                        <li>• Metro Train & Station Ads</li>
                        <li>• Bus Wraps & Shelters</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="stats" class="py-20 bg-brand-gray border-y border-gray-200">
        <div class="w-[80vw] mx-auto grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
            <div>
                <div class="text-5xl max-md:text-3xl font-black text-brand-accent mb-2">30+</div>
                <div class="text-brand-dark font-bold uppercase text-xs tracking-widest">Major Cities</div>
            </div>
            <div>
                <div class="text-5xl max-md:text-3xl font-black text-brand-accent mb-2">1.2M+</div>
                <div class="text-brand-dark font-bold uppercase text-xs tracking-widest">Daily Impressions</div>
            </div>
            <div>
                <div class="text-5xl max-md:text-3xl font-black text-brand-accent mb-2">1500+</div>
                <div class="text-brand-dark font-bold uppercase text-xs tracking-widest">Premium Sites</div>
            </div>
            <div>
                <div class="text-5xl max-md:text-3xl font-black text-brand-accent mb-2">100%</div>
                <div class="text-brand-dark font-bold uppercase text-xs tracking-widest">Campaign Audit</div>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-14 bg-white relative">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 grid md:grid-cols-2 items-center gap-20">
            <div class="relative">
                <div class="absolute -top-10 -left-10 w-40 h-40 border-t-2 border-l-2 border-brand-accent/30"></div>
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1200&q=80" class="rounded-3xl shadow-2xl shadow-gray-300 relative z-10" alt="Campaign Planning">
            </div>

            <div>
                <h2 class="text-4xl font-bold text-brand-dark uppercase mb-8 leading-tight">Beyond Just <span class="text-brand-accent">Space Selling</span></h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 shrink-0 rounded-full bg-brand-accent/10 flex items-center justify-center text-brand-accent font-bold">01</div>
                        <div>
                            <h4 class="text-brand-dark font-bold mb-1">Data-Driven Site Selection</h4>
                            <p class="text-gray-500 text-sm italic">We use heatmaps and mobility data to ensure your billboard is where your target audience lives and moves.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 shrink-0 rounded-full bg-brand-accent/10 flex items-center justify-center text-brand-accent font-bold">02</div>
                        <div>
                            <h4 class="text-brand-dark font-bold mb-1">Creative Optimization</h4>
                            <p class="text-gray-500 text-sm">Our 360-degree expertise means we design content specifically for OOH—bold, readable, and unforgettable.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 shrink-0 rounded-full bg-brand-accent/10 flex items-center justify-center text-brand-accent font-bold">03</div>
                        <div>
                            <h4 class="text-brand-dark font-bold mb-1">End-to-End Execution</h4>
                            <p class="text-gray-500 text-sm">From printing and fabrication to 24/7 lighting maintenance and campaign photography.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-14 bg-brand-gray text-center">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto px-4 bg-brand-accent py-16 max-md:py-10 rounded-[3rem] shadow-xl shadow-brand-accent/20">
            <h2 class="text-3xl md:text-5xl font-black text-white uppercase mb-6">Ready to dominate <br>the outdoors?</h2>
            <p class="text-white/80 font-medium mb-10 max-w-lg max-md:text-sm mx-auto italic">Get a customized media plan for your brand today across our Pan India network.</p>
            <a href="/contact" class="inline-block px-10 py-5 max-md:py-3 bg-white text-brand-accent font-bold uppercase text-[11px] tracking-[0.2em] rounded-full hover:scale-105 hover:shadow-lg transition-all">Request a Media Deck</a>
        </div>
    </section>

</body>

</html>

<?php
include 'includes/footer.php';
?>