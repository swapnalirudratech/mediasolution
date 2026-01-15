<?php
$page = 'cinema';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="bg-brand-light">

   <section class="relative pt-40 pb-32 bg-brand-gray overflow-hidden min-h-[85vh] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?auto=format&fit=crop&w=1920&q=80"
                class="w-full h-full object-cover opacity-15 transition-transform duration-1000 hover:scale-105"
                alt="Multiplex Cinema Branding">

            <div class="absolute inset-0 bg-gradient-to-r from-brand-gray via-brand-gray/85 to-transparent"></div>

            <div class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-1/3 w-[600px] h-[600px] bg-brand-accent/10 rounded-full blur-[120px] pointer-events-none"></div>

            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-brand-gray to-transparent"></div>
        </div>

        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 relative z-10">
            <div class="max-w-4xl">
                <span class="text-brand-accent font-bold uppercase tracking-[0.4em] text-[10px] mb-6 block">Premium Captive Audience</span>

                <h1 class="text-4xl md:text-8xl font-black text-brand-dark leading-[0.9] uppercase mb-8">
                    Cinema <br>
                    <span class="text-transparent" style="-webkit-text-stroke: 1.5px #7c3aed;">Advertising</span>
                </h1>

                <p class="text-gray-600 text-sm md:text-xl max-w-2xl mb-12 italic border-l-4 border-brand-accent pl-8 max-md:pl-4 leading-relaxed">
                    "Captivate audiences with blockbuster advertising. From high-impact on-screen commercials to immersive lobby branding across India's top multiplex circuits."
                </p>

                <div class="flex flex-wrap gap-6">
                    <a href="/services" class="px-10 py-4 bg-brand-accent text-white font-bold uppercase text-[10px] tracking-widest rounded-full hover:shadow-[0_10px_30px_rgba(124,58,237,0.4)] hover:scale-105 transition-all">
                        Explore Circuits
                    </a>
                    <a href="/contact" class="px-10 py-4 border border-brand-dark/20 text-brand-dark font-bold uppercase text-[10px] tracking-widest rounded-full hover:bg-brand-dark hover:text-white transition backdrop-blur-sm">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="formats" class="py-32 bg-brand-light overflow-hidden">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 space-y-32">
            
            <div class="grid md:grid-cols-2 gap-16 items-center group">
                <div class="relative order-2 md:order-1">
                    <div class="absolute inset-0 bg-brand-accent/10 rounded-[3rem] rotate-3 group-hover:rotate-6 transition-transform duration-500"></div>
                    <div class="relative rounded-[3rem] overflow-hidden shadow-2xl border border-gray-100 aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?auto=format&fit=crop&w=800&q=80" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                             alt="On Screen Advertising">
                        <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/80 to-transparent">
                            <span class="text-white font-bold uppercase tracking-widest text-sm">On-Screen</span>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div class="w-12 h-12 bg-brand-accent/10 rounded-2xl flex items-center justify-center text-brand-accent mb-6">
                        <i class="fas fa-film text-xl"></i>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-black text-brand-dark uppercase mb-6">The 70mm <br>Experience</h2>
                    <p class="text-gray-500 text-lg leading-relaxed mb-8">
                        Deliver your message in Dolby Digital surround sound. Whether it's a 10-second slide or a 60-second blockbuster film, your brand becomes the star of the show.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-brand-dark font-medium">
                            <span class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs"><i class="fas fa-check"></i></span>
                            Pre-Show & Interval Slots
                        </li>
                        <li class="flex items-center gap-3 text-brand-dark font-medium">
                            <span class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs"><i class="fas fa-check"></i></span>
                            Mute & Audio Slides
                        </li>
                        <li class="flex items-center gap-3 text-brand-dark font-medium">
                            <span class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs"><i class="fas fa-check"></i></span>
                            Regional Language Targeting
                        </li>
                    </ul>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-16 items-center group">
                <div class="order-1 md:order-2 relative">
                    <div class="absolute inset-0 bg-brand-dark/5 rounded-[3rem] -rotate-3 group-hover:-rotate-6 transition-transform duration-500"></div>
                    <div class="relative rounded-[3rem] overflow-hidden shadow-2xl border border-gray-100 aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1595769816263-9b910be24d5f?auto=format&fit=crop&w=800&q=80" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                             alt="Lobby Advertising">
                        <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/80 to-transparent">
                            <span class="text-white font-bold uppercase tracking-widest text-sm">Off-Screen / Lobby</span>
                        </div>
                    </div>
                </div>
                <div class="order-2 md:order-1 md:text-right">
                    <div class="w-12 h-12 bg-brand-dark/5 rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:ml-auto">
                        <i class="fas fa-users text-xl"></i>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-black text-brand-dark uppercase mb-6">Immersive <br>Lobby Branding</h2>
                    <p class="text-gray-500 text-lg leading-relaxed mb-8">
                        The cinema lobby is a high-traffic zone with 15-20 minutes of dwell time. Turn waiting areas into experience zones with sampling, kiosks, and displays.
                    </p>
                    <ul class="space-y-4 inline-block text-left">
                        <li class="flex items-center gap-3 text-brand-dark font-medium">
                            <span class="w-6 h-6 rounded-full bg-brand-accent/10 text-brand-accent flex items-center justify-center text-xs"><i class="fas fa-check"></i></span>
                            Standees & Life-size Cutouts
                        </li>
                        <li class="flex items-center gap-3 text-brand-dark font-medium">
                            <span class="w-6 h-6 rounded-full bg-brand-accent/10 text-brand-accent flex items-center justify-center text-xs"><i class="fas fa-check"></i></span>
                            Product Sampling Kiosks
                        </li>
                        <li class="flex items-center gap-3 text-brand-dark font-medium">
                            <span class="w-6 h-6 rounded-full bg-brand-accent/10 text-brand-accent flex items-center justify-center text-xs"><i class="fas fa-check"></i></span>
                            Box Office & Popcorn Tub Branding
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="py-24 bg-brand-gray relative">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-brand-dark uppercase mb-4">Sniper-Like <span class="text-brand-accent">Targeting</span></h2>
                <p class="text-gray-500">Don't waste money showing ads to the wrong crowd.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-8 rounded-3xl border border-gray-100 hover:border-brand-accent/50 transition-all hover:shadow-xl group">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-brand-dark uppercase mb-3">Geography</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Target specific cities, catchments, or even specific malls in premium residential areas to reach high-net-worth individuals.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-gray-100 hover:border-brand-accent/50 transition-all hover:shadow-xl group">
                    <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-full flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-film"></i>
                    </div>
                    <h3 class="text-xl font-bold text-brand-dark uppercase mb-3">Genre & Movie</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Sell sports gear during an action movie or baby products during a family animation. Match the content to the mindset.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-gray-100 hover:border-brand-accent/50 transition-all hover:shadow-xl group">
                    <div class="w-14 h-14 bg-pink-50 text-pink-600 rounded-full flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-brand-dark uppercase mb-3">Time & Week</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Focus on weekends for maximum footfall or blockbuster opening weeks to get the highest immediate reach.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-brand-dark overflow-hidden">
        <div class="w-[80vw] mx-auto mb-8 text-center">
            <p class="text-gray-400 text-xs font-bold uppercase tracking-[0.3em]">Partnering with India's Largest Chains</p>
        </div>
        
        <div class="relative flex overflow-x-hidden">
            <div class="animate-scroll whitespace-nowrap flex items-center gap-24 py-4">
                <span class="text-4xl font-black text-white/20 uppercase">PVR Cinemas</span>
                <span class="text-4xl font-black text-white/20 uppercase">INOX Live</span>
                <span class="text-4xl font-black text-white/20 uppercase">Cinepolis</span>
                <span class="text-4xl font-black text-white/20 uppercase">Miraj Cinemas</span>
                <span class="text-4xl font-black text-white/20 uppercase">Carnival</span>
                <span class="text-4xl font-black text-white/20 uppercase">Gold Cinema</span>
                <span class="text-4xl font-black text-white/20 uppercase">PVR Cinemas</span>
                <span class="text-4xl font-black text-white/20 uppercase">INOX Live</span>
                <span class="text-4xl font-black text-white/20 uppercase">Cinepolis</span>
                <span class="text-4xl font-black text-white/20 uppercase">Miraj Cinemas</span>
                <span class="text-4xl font-black text-white/20 uppercase">Carnival</span>
                <span class="text-4xl font-black text-white/20 uppercase">Gold Cinema</span>
            </div>
        </div>
    </section>

    <section class="py-24 bg-brand-light">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="bg-gradient-to-br from-brand-accent to-purple-800 rounded-[3rem] p-8 md:p-24 text-center relative overflow-hidden shadow-2xl">
                <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full -translate-x-1/2 -translate-y-1/2 blur-2xl"></div>
                <div class="absolute bottom-0 right-0 w-96 h-96 bg-black/20 rounded-full translate-x-1/3 translate-y-1/3 blur-3xl"></div>

                <div class="relative z-10">
                    <h2 class="text-3xl md:text-6xl font-black text-white uppercase mb-8">Ready for your <br>Blockbuster Moment?</h2>
                    <p class="text-purple-100 text-lg mb-12 max-w-xl mx-auto font-medium">Get a custom media plan tailored to your budget and target audience within 24 hours.</p>
                    
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="/contact" class="px-12 py-5 bg-white text-brand-accent font-black uppercase text-xs tracking-widest rounded-full hover:shadow-xl hover:scale-105 transition-all">
                            Get A Quote
                        </a>
                        <a href="tel:+91000000000" class="px-12 py-5 border border-white/30 text-white font-black uppercase text-xs tracking-widest rounded-full hover:bg-white/10 transition-all flex items-center justify-center gap-2">
                            <i class="fas fa-phone"></i> Talk to Expert
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<?php include 'includes/footer.php'; ?>