<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body>
    <!-- <section class="relative pt-32 pb-20 bg-[#172010] overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[400px] bg-brand-accent/5 blur-[120px] rounded-full"></div>

        <div class="w-[80vw] mx-auto px-4 relative z-10 text-center">
            <span class="text-brand-accent font-bold uppercase tracking-[0.4em] text-sm mb-6 block">Memorable Brand Experiences</span>
            <h1 class="text-6xl md:text-8xl font-black text-white leading-none uppercase mb-8">
                Events <span class="text-transparent" style="-webkit-text-stroke: 1px #a3e635;">&</span> <br>
                Exhibitions
            </h1>
            <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto mb-12 italic">
                "From conceptual stall designing to large-scale corporate launches. We build the stage where your brand becomes the protagonist."
            </p>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="/services" class="px-10 py-4 bg-brand-accent text-black font-bold uppercase text-sm tracking-widest rounded-full hover:shadow-[0_10px_30px_rgba(163,230,53,0.3)] transition-all">Our Capabilities</a>
                <a href="/contact" class="px-10 py-4 border border-white/20 text-white font-bold uppercase text-sm tracking-widest rounded-full hover:bg-white/5 transition">Book a Consultation</a>
            </div>
        </div>
    </section> -->
    <section class="relative pt-40 pb-32 bg-[#172010] overflow-hidden min-h-[85vh] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=1920&q=80"
                class="w-full h-full object-cover opacity-90"
                alt="Exhibition Stall Design">

            <div class="absolute inset-0 bg-gradient-to-r from-[#172010] via-[#172010]/80 to-transparent"></div>

            <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-[#a3e635]/10 blur-[150px] rounded-full -translate-x-1/2 -translate-y-1/2"></div>

            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-[#172010] to-transparent"></div>
        </div>

        <div class="w-[80vw] mx-auto px-4 relative z-10">
            <div class="max-w-4xl">
                <span class="text-[#a3e635] font-bold uppercase tracking-[0.4em] text-sm mb-6 block">Memorable Brand Experiences</span>

                <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] uppercase mb-8">
                    Events <span class="text-transparent" style="-webkit-text-stroke: 1px #a3e635;">&</span> <br>
                    Exhibitions
                </h1>

                <p class="text-gray-300 text-lg md:text-xl max-w-2xl mb-12 italic border-l-4 border-[#a3e635] pl-8 leading-relaxed">
                    "From conceptual stall designing to large-scale corporate launches. We build the stage where your brand becomes the protagonist."
                </p>

                <div class="flex flex-wrap gap-6">
                    <a href="/services" class="px-10 py-4 bg-[#a3e635] text-black font-bold uppercase text-sm tracking-widest rounded-full hover:shadow-[0_10px_30px_rgba(163,230,53,0.3)] hover:scale-105 transition-all">
                        Our Capabilities
                    </a>
                    <a href="/contact" class="px-10 py-4 border border-white/20 text-white font-bold uppercase text-sm tracking-widest rounded-full hover:bg-white/10 transition backdrop-blur-sm">
                        Book a Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="py-24 bg-[#0d1309]">
        <div class="w-[80vw] mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">

                <div class="group bg-[#172010] p-1 rounded-[2.5rem] overflow-hidden border border-white/5 hover:border-brand-accent/30 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2.2rem] h-80">
                        <img src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?auto=format&fit=crop&w=800&q=80" alt="Exhibition Design" class="w-full h-full object-cover group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#172010] via-transparent to-transparent"></div>
                    </div>
                    <div class="p-10">
                        <h3 class="text-3xl font-bold text-white uppercase mb-4">Stall Designing <br><span class="text-brand-accent">& Fabrication</span></h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">Customized 3D designs that maximize space and brand visibility. We handle the entire process from structural design to on-site fabrication.</p>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-3 py-1 bg-white/5 rounded-md text-sm text-gray-300 uppercase font-bold tracking-widest">3D Modeling</span>
                            <span class="px-3 py-1 bg-white/5 rounded-md text-sm text-gray-300 uppercase font-bold tracking-widest">Octanorm Systems</span>
                            <span class="px-3 py-1 bg-white/5 rounded-md text-sm text-gray-300 uppercase font-bold tracking-widest">Wooden Stalls</span>
                        </div>
                    </div>
                </div>

                <div class="group bg-[#172010] p-1 rounded-[2.5rem] overflow-hidden border border-white/5 hover:border-brand-accent/30 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2.2rem] h-80">
                        <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=800&q=80" alt="Corporate Events" class="w-full h-full object-cover group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#172010] via-transparent to-transparent"></div>
                    </div>
                    <div class="p-10">
                        <h3 class="text-3xl font-bold text-white uppercase mb-4">Corporate <br><span class="text-brand-accent">Engagements</span></h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">Flawless execution of product launches, dealer meets, and corporate award ceremonies with end-to-end tech and stage support.</p>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-3 py-1 bg-white/5 rounded-md text-sm text-gray-300 uppercase font-bold tracking-widest">Product Launches</span>
                            <span class="px-3 py-1 bg-white/5 rounded-md text-sm text-gray-300 uppercase font-bold tracking-widest">AV & Sound</span>
                            <span class="px-3 py-1 bg-white/5 rounded-md text-sm text-gray-300 uppercase font-bold tracking-widest">Live Streaming</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="py-24 bg-[#172010]">
        <div class="w-[80vw] mx-auto px-4">
            <h2 class="text-4xl font-black text-white uppercase mb-16">The Journey to <br><span class="text-brand-accent">Opening Day</span></h2>

            <div class="grid md:grid-cols-4 gap-12 relative">
                <div class="hidden md:block absolute top-12 left-0 w-full h-px bg-white/10 z-0"></div>

                <div class="relative z-10 text-center md:text-left">
                    <div class="w-12 h-12 bg-brand-accent text-black rounded-xl flex items-center justify-center font-black mb-6 mx-auto md:mx-0">1</div>
                    <h4 class="text-white font-bold mb-2 uppercase">Brief & Strategy</h4>
                    <p class="text-gray-500 text-xs">Understanding your brand goals and exhibition floor plans.</p>
                </div>

                <div class="relative z-10 text-center md:text-left">
                    <div class="w-12 h-12 bg-brand-accent text-black rounded-xl flex items-center justify-center font-black mb-6 mx-auto md:mx-0">2</div>
                    <h4 class="text-white font-bold mb-2 uppercase">3D Visualization</h4>
                    <p class="text-gray-500 text-xs">Rendered concepts showing every angle of your stall or event stage.</p>
                </div>

                <div class="relative z-10 text-center md:text-left">
                    <div class="w-12 h-12 bg-brand-accent text-black rounded-xl flex items-center justify-center font-black mb-6 mx-auto md:mx-0">3</div>
                    <h4 class="text-white font-bold mb-2 uppercase">Fabrication</h4>
                    <p class="text-gray-500 text-xs">Precise construction using high-quality materials at our workshops.</p>
                </div>

                <div class="relative z-10 text-center md:text-left">
                    <div class="w-12 h-12 bg-brand-accent text-black rounded-xl flex items-center justify-center font-black mb-6 mx-auto md:mx-0">4</div>
                    <h4 class="text-white font-bold mb-2 uppercase">Launch & Support</h4>
                    <p class="text-gray-500 text-xs">On-site management and 24/7 support during the event duration.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 bg-[#0d1309] overflow-hidden">
        <div class="w-[80vw] mx-auto px-4 grid md:grid-cols-2 gap-20 items-center">
            <div class="order-2 md:order-1">
                <h2 class="text-4xl font-black text-white uppercase mb-6 leading-tight">Thane Roots, <br><span class="text-brand-accent">Global Standards</span></h2>
                <p class="text-gray-400 mb-8 italic">"We bring Indian craftsmanship and global design trends together to make your exhibition presence stand out in any city, worldwide."</p>
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <p class="text-3xl font-black text-white">100+</p>
                        <p class="text-brand-accent text-sm font-bold uppercase tracking-widest mt-2">Stalls Yearly</p>
                    </div>
                    <div>
                        <p class="text-3xl font-black text-white">15+</p>
                        <p class="text-brand-accent text-sm font-bold uppercase tracking-widest mt-2">Exhibition Centers</p>
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2 relative">
                <div class="absolute -right-20 -top-20 w-80 h-80 bg-brand-accent/10 rounded-full blur-3xl"></div>
                <div class="relative bg-[#172010] p-4 rounded-3xl border border-white/10 rotate-3 transition-transform hover:rotate-0 duration-500 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=1200&q=80" class="rounded-2xl" alt="Exhibition Space">
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 bg-[#172010]">
        <div class="w-[80vw] mx-auto px-4">
            <div class="bg-brand-accent rounded-[3.5rem] p-12 md:p-24 text-center">
                <h2 class="text-4xl md:text-6xl font-black text-[#172010] uppercase mb-8">Ready to own <br>the floor?</h2>
                <p class="text-[#172010]/70 font-bold mb-12 max-w-xl mx-auto italic">Get a custom 3D design concept and quotation for your upcoming exhibition or corporate event.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contact" class="px-12 py-5 bg-[#172010] text-white font-black uppercase text-xs tracking-[0.2em] rounded-full hover:shadow-2xl transition-all">Request a Design</a>
                    <a href="/services" class="px-12 py-5 border-2 border-[#172010] text-[#172010] font-black uppercase text-xs tracking-[0.2em] rounded-full hover:bg-[#172010] hover:text-white transition-all">View Our Gallery</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
include 'includes/footer.php';
?>