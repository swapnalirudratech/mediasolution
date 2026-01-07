<?php
$page = 'services';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body>
    <!-- <section class="relative pt-32 pb-20 bg-[#172010] overflow-hidden">
        <div class="w-[80vw] mx-auto px-4 relative z-10 text-center">
            <span class="text-brand-accent font-bold uppercase tracking-[0.4em] text-xs mb-6 block">Our Track Record</span>
            <h1 class="text-6xl md:text-8xl font-black text-white leading-none uppercase mb-8">
                Selected <br>
                <span class="text-brand-accent">Campaigns</span>
            </h1>
            <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto mb-12 italic">
                "500+ campaigns executed with precision. From local activations in Thane to massive Pan-India product launches."
            </p>
        </div>
    </section> -->
    <section class="relative pt-40 pb-32 bg-[#172010] overflow-hidden min-h-[85vh] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="/public/assets/images/3.jpg"
                class="w-full h-full object-cover opacity-90"
                alt="Campaign Portfolio Background">

            <div class="absolute inset-0 bg-gradient-to-r from-[#172010] via-[#172010]/90 to-transparent"></div>

            <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-[#a3e635]/10 blur-[130px] rounded-full -translate-x-1/2 -translate-y-1/4"></div>

            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-[#172010] to-transparent"></div>
        </div>

        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 relative z-10">
            <div class="max-w-4xl">
                <span class="text-[#a3e635] font-bold uppercase tracking-[0.4em] text-[10px] mb-6 block">Our Track Record</span>

                <h1 class="text-4xl md:text-8xl font-black text-white leading-none uppercase mb-8">
                    Selected <br>
                    <span class="text-[#a3e635]">Campaigns</span>
                </h1>

                <p class="text-gray-300 text-sm md:text-xl max-w-2xl mb-12 italic border-l-4 border-[#a3e635] pl-8 max-md:pl-4 leading-relaxed">
                    "500+ campaigns executed with precision. From local activations in Thane to massive Pan-India product launches across every media touchpoint."
                </p>

                <div class="flex gap-12 pt-4">
                    <div>
                        <p class="text-white font-black text-2xl uppercase">500+</p>
                        <p class="text-[#a3e635] text-[9px] font-bold uppercase tracking-widest">Successful Projects</p>
                    </div>
                    <div>
                        <p class="text-white font-black text-2xl uppercase">50+</p>
                        <p class="text-[#a3e635] text-[9px] font-bold uppercase tracking-widest">Cities Covered</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-14 bg-[#0d1309]/90">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-[4/3] mb-6 bg-gray-900">
                        <img src="/public/assets/images/b1.jpg" class="w-full h-full object-cover  group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" alt="OOH Campaign">
                        <div class="absolute top-6 left-6">
                            <span class="bg-black/50 backdrop-blur-md text-white text-[10px] font-bold px-4 py-2 rounded-full uppercase tracking-widest border border-white/10">OOH / Airport</span>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-white uppercase group-hover:text-brand-accent transition-colors">Global E-Commerce Giant</h3>
                    <p class="text-gray-500 text-sm mt-2">Dominated T3 International terminal for 6 months with high-impact static and digital displays.</p>
                </div>

                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-[4/3] mb-6 bg-gray-900">
                        <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?auto=format&fit=crop&w=1200" class="w-full h-full object-cover  group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" alt="Cinema Campaign">
                        <div class="absolute top-6 left-6">
                            <span class="bg-black/50 backdrop-blur-md text-white text-[10px] font-bold px-4 py-2 rounded-full uppercase tracking-widest border border-white/10">Cinema / Pan India</span>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-white uppercase group-hover:text-brand-accent transition-colors">Blockbuster Launch Series</h3>
                    <p class="text-gray-500 text-sm mt-2">Executed on-screen commercial campaigns across 450+ screens in PVR and Inox circuits.</p>
                </div>

                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-[4/3] mb-6 bg-gray-900">
                        <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=1200" class="w-full h-full object-cover  group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" alt="BTL Activation">
                        <div class="absolute top-6 left-6">
                            <span class="bg-black/50 backdrop-blur-md text-white text-[10px] font-bold px-4 py-2 rounded-full uppercase tracking-widest border border-white/10">BTL / Corporate</span>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-white uppercase group-hover:text-brand-accent transition-colors">Automobile Tech Showcase</h3>
                    <p class="text-gray-500 text-sm mt-2">Strategic mall activations across top 10 metros, engaging over 50,000 potential customers.</p>
                </div>

                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-[4/3] mb-6 bg-gray-900">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1200" class="w-full h-full object-cover  group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" alt="Digital Campaign">
                        <div class="absolute top-6 left-6">
                            <span class="bg-black/50 backdrop-blur-md text-white text-[10px] font-bold px-4 py-2 rounded-full uppercase tracking-widest border border-white/10">Digital / Performance</span>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-white uppercase group-hover:text-brand-accent transition-colors">Omnichannel Retail Strategy</h3>
                    <p class="text-gray-500 text-sm mt-2">Integrated OOH with a hyper-local digital funnel, resulting in a 40% increase in store footfall.</p>
                </div>

            </div>

            <div class="mt-20 text-center">
                <button class="px-12 py-5 border border-brand-accent text-brand-accent font-black uppercase text-[10px] tracking-widest rounded-full hover:bg-brand-accent hover:text-[#172010] transition-all">Load More Projects</button>
            </div>
        </div>
    </section>

    <section class="py-20 bg-[#172010] border-y border-white/5">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
            <div>
                <p class="text-brand-accent text-4xl font-black mb-2">300+</p>
                <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest">Active Brands</p>
            </div>
            <div>
                <p class="text-brand-accent text-4xl font-black mb-2">50+</p>
                <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest">Cities Covered</p>
            </div>
            <div>
                <p class="text-brand-accent text-4xl font-black mb-2">12M+</p>
                <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest">Impressions Monthly</p>
            </div>
            <div>
                <p class="text-brand-accent text-4xl font-black mb-2">98%</p>
                <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest">Client Retention</p>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-14 bg-[#0d1309]">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 text-center">
            <h2 class="text-4xl md:text-6xl font-black text-white uppercase mb-8 leading-tight">Your Brand Could <br>Be <span class="text-brand-accent">Next.</span></h2>
            <p class="text-gray-400 mb-12 max-w-xl mx-auto italic text-lg">Let’s add your success story to our portfolio. We have the space, the tech, and the creative vision.</p>
            <a href="/contact" class="inline-block px-12 py-5 max-md:py-3 bg-brand-accent text-black font-black uppercase text-xs tracking-[0.2em] rounded-full hover:shadow-[0_0_30px_rgba(163,230,53,0.3)] transition-all">Start a Conversation</a>
        </div>
    </section>
</body>

<?php include 'includes/footer.php'; ?>