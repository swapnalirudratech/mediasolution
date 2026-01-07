<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body>
    <section class="relative pt-40 pb-32 bg-[#172010] overflow-hidden min-h-[85vh] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?auto=format&fit=crop&w=1920&q=80"
                class="w-full h-full object-cover opacity-90 transition-transform duration-1000 hover:scale-105"
                alt="Multiplex Cinema Branding">

            <div class="absolute inset-0 bg-gradient-to-r from-[#172010] via-[#172010]/85 to-transparent"></div>

            <div class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-1/3 w-[600px] h-[600px] bg-[#a3e635]/10 rounded-full blur-[120px] pointer-events-none"></div>

            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-[#172010] to-transparent"></div>
        </div>

        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 relative z-10">
            <div class="max-w-4xl">
                <span class="text-[#a3e635] font-bold uppercase tracking-[0.4em] text-[10px] mb-6 block">Premium Captive Audience</span>

                <h1 class="text-4xl md:text-8xl font-black text-white leading-[0.9] uppercase mb-8">
                    Cinema <br>
                    <span class="text-transparent" style="-webkit-text-stroke: 1.5px #a3e635;">Advertising</span>
                </h1>

                <p class="text-gray-300 text-sm md:text-xl max-w-2xl mb-12 italic border-l-4 border-[#a3e635] pl-8 max-md:pl-4 leading-relaxed drop-shadow-2xl">
                    "Captivate audiences with blockbuster advertising. From high-impact on-screen commercials to immersive lobby branding across India's top multiplex circuits."
                </p>

                <div class="flex flex-wrap gap-6">
                    <a href="/services" class="px-10 py-4 bg-[#a3e635] text-black font-bold uppercase text-[10px] tracking-widest rounded-full hover:shadow-[0_10px_30px_rgba(163,230,53,0.4)] hover:scale-105 transition-all">
                        Explore Circuits
                    </a>
                    <a href="/contact" class="px-10 py-4 border border-white/20 text-white font-bold uppercase text-[10px] tracking-widest rounded-full hover:bg-white/10 transition backdrop-blur-sm">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="screens" class="py-24 max-md:py-14 bg-[#0d1309]">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="grid md:grid-cols-2 gap-16 items-center">

                <div class="space-y-8">
                    <div class="relative group overflow-hidden rounded-3xl aspect-video bg-gray-900 border border-white/10">
                        <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?auto=format&fit=crop&w=800&q=80" alt="Cinema Screen" class="w-full h-full object-cover opacity-60 group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#172010] to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="bg-brand-accent text-black text-[10px] font-black px-3 py-1 rounded-full uppercase">High Impact</span>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-3xl max-md:text-xl font-bold text-white uppercase mb-4">On-Screen Commercials</h2>
                        <p class="text-gray-400 leading-relaxed max-md:text-sm mb-6">Deliver your message on 70mm screens with Dolby Digital sound. We offer placement during blockbusters with guaranteed 100% viewability and high brand recall.</p>
                        <ul class="grid grid-cols-2 gap-4 text-sm text-gray-300">
                            <li class="flex items-center gap-2"><span class="text-brand-accent">✔</span> Mute Slides</li>
                            <li class="flex items-center gap-2"><span class="text-brand-accent">✔</span> Audio Slides</li>
                            <li class="flex items-center gap-2"><span class="text-brand-accent">✔</span> Video Ads (15-60s)</li>
                            <li class="flex items-center gap-2"><span class="text-brand-accent">✔</span> Regional Targeting</li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="relative group overflow-hidden rounded-3xl aspect-video bg-gray-900 border border-white/10">
                        <img src="https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?auto=format&fit=crop&w=800&q=80" alt="Lobby Branding" class="w-full h-full object-cover opacity-60 group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#172010] to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="bg-brand-accent text-black text-[10px] font-black px-3 py-1 rounded-full uppercase">Engagement</span>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-3xl max-md:text-xl font-bold text-white uppercase mb-4">Off-Screen Branding</h2>
                        <p class="text-gray-400 leading-relaxed max-md:text-sm mb-6">Dominate the cinema lobby where audiences spend 15-20 minutes of dwell time. Perfect for experiential marketing and direct consumer interaction.</p>
                        <ul class="grid grid-cols-2 gap-4 text-sm text-gray-300">
                            <li class="flex items-center gap-2"><span class="text-brand-accent">✔</span> Standees & Cutouts</li>
                            <li class="flex items-center gap-2"><span class="text-brand-accent">✔</span> Seat Branding</li>
                            <li class="flex items-center gap-2"><span class="text-brand-accent">✔</span> Box Office Branding</li>
                            <li class="flex items-center gap-2"><span class="text-brand-accent">✔</span> Sampling Kiosks</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-[#172010] border-y border-white/5">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="text-center mb-12">
                <h3 class="text-white font-bold uppercase tracking-widest text-sm">Our Network Includes</h3>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-24 opacity-50 grayscale hover:grayscale-0 transition-all">
                <span class="text-2xl font-black text-white">PVR</span>
                <span class="text-2xl font-black text-white">INOX</span>
                <span class="text-2xl font-black text-white">CINEPOLIS</span>
                <span class="text-2xl font-black text-white">MIRAJ</span>
                <span class="text-2xl font-black text-white">CARNIVAL</span>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-14 bg-[#0d1309]">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="max-w-4xl">
                <h2 class="text-4xl font-bold text-white uppercase mb-12">Why Cinema <span class="text-brand-accent">Works</span></h2>

                <div class="grid md:grid-cols-3 gap-10">
                    <div class="p-8 rounded-2xl bg-[#172010] border-l-2 border-brand-accent">
                        <h4 class="text-brand-accent font-bold mb-3 uppercase tracking-tighter">Zero Distraction</h4>
                        <p class="text-gray-400 text-sm">Unlike mobile or TV, cinema audiences cannot skip or scroll past your ad. You have their undivided attention.</p>
                    </div>

                    <div class="p-8 rounded-2xl bg-[#172010] border-l-2 border-brand-accent">
                        <h4 class="text-brand-accent font-bold mb-3 uppercase tracking-tighter">Targeted Demographics</h4>
                        <p class="text-gray-400 text-sm">Choose screens based on film genre, geography, or ticket pricing to reach your exact customer profile.</p>
                    </div>

                    <div class="p-8 rounded-2xl bg-[#172010] border-l-2 border-brand-accent">
                        <h4 class="text-brand-accent font-bold mb-3 uppercase tracking-tighter">Massive Recall</h4>
                        <p class="text-gray-400 text-sm">The combination of sight, sound, and a relaxed environment leads to the highest brand recall in the media mix.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-14 bg-[#172010]">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="relative overflow-hidden bg-brand-accent rounded-[3rem] px-8 md:px-6 py-20 max-md:py-14 text-center">
                <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-black/10 rounded-full"></div>

                <div class="relative z-10">
                    <h2 class="text-3xl md:text-6xl font-black text-[#172010] uppercase mb-6 leading-tight">Put Your Brand <br>Center Stage</h2>
                    <p class="text-[#172010]/80 font-semibold mb-10 max-w-lg max-md:text-sm mx-auto">Get exclusive rates for Pan India cinema circuits and specialized lobby branding solutions.</p>
                    <div class="flex flex-col md:flex-row justify-center gap-4">
                        <a href="#contact" class="px-10 py-5 max-md:py-3 bg-[#172010] text-white font-bold uppercase text-xs tracking-widest rounded-full hover:shadow-xl transition-all">Request Rate Card</a>
                        <a href="#btl" class="px-10 py-5 max-md:py-3 border-2 border-[#172010] text-[#172010] font-bold uppercase text-xs tracking-widest rounded-full hover:bg-[#172010] hover:text-white transition-all">Explore BTL Services</a>
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