<?php
$page = 'contact';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="bg-[#172010]">
    <section class="relative pt-40 pb-20 bg-[#172010] overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-accent/5 blur-[120px] rounded-full translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-brand-accent/5 blur-[100px] rounded-full -translate-x-1/2 translate-y-1/2"></div>

        <div class="w-[80vw] mx-auto px-4 relative z-10">
            <div class="max-w-4xl">
                <span class="text-brand-accent font-bold uppercase tracking-[0.4em] text-base mb-6 block animate-pulse">Available for New Projects</span>
                <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.85] uppercase mb-10">
                    Let’s Build <br><span class="text-transparent" style="-webkit-text-stroke: 1.5px #a3e635;">Your Legacy.</span>
                </h1>
                <p class="text-gray-400 text-base md:text-lg max-w-2xl border-l-4 border-brand-accent pl-8 leading-relaxed">
                    Ready to dominate the market? Tell us about your brand goals, and our 360° team will craft a customized media strategy for you.
                </p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#0d1309] relative">
        <div class="w-[80vw] mx-auto px-4 grid lg:grid-cols-12 gap-16">

            <div class="lg:col-span-4 space-y-12">
                <div class="group cursor-default">
                    <h4 class="text-white font-black uppercase tracking-widest text-base mb-6 flex items-center">
                        <span class="w-8 h-px bg-brand-accent mr-4"></span> Our Location
                    </h4>
                    <div class="p-8 bg-[#172010] border border-white/5 rounded-[2rem] transition-all group-hover:border-brand-accent/30">
                        <p class="text-gray-300 font-bold mb-2">Media Solutions HQ</p>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6">
                            Thane, Maharashtra, India<br>
                            Serving Brands Globally.
                        </p>
                        <a href="#" class="inline-flex items-center text-brand-accent text-base font-bold uppercase tracking-widest hover:underline">
                            View on Google Maps <i class="fas fa-external-link-alt ml-2"></i>
                        </a>
                    </div>
                </div>

                <div class="space-y-6">
                    <h4 class="text-white font-black uppercase tracking-widest text-base mb-6 flex items-center">
                        <span class="w-8 h-px bg-brand-accent mr-4"></span> Direct Lines
                    </h4>
                    <div class="space-y-4">
                        <a href="mailto:contact@mediasolutions.com" class="block p-6 bg-[#172010] border border-white/5 rounded-2xl hover:bg-brand-accent group transition-all">
                            <p class="text-gray-500 text-sm uppercase font-bold group-hover:text-black/60">Email Us</p>
                            <p class="text-white font-bold group-hover:text-black">contact@mediasolutions.com</p>
                        </a>
                        <a href="tel:+918976309837" class="block p-6 bg-[#172010] border border-white/5 rounded-2xl hover:bg-brand-accent group transition-all">
                            <p class="text-gray-500 text-sm uppercase font-bold group-hover:text-black/60">Call Support</p>
                            <p class="text-white font-bold group-hover:text-black">+91 89763 09837</p>
                        </a>
                    </div>
                </div>

                <div class="relative p-10 bg-gradient-to-br from-[#172010] to-[#0d1309] rounded-[3rem] border border-brand-accent/20 overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 text-brand-accent/10 text-7xl font-black italic group-hover:scale-110 transition-transform">24h</div>
                    <p class="text-brand-accent font-bold text-base uppercase tracking-widest mb-4 relative z-10">The 24h Promise</p>
                    <p class="text-white/80 italic text-lg relative z-10">"90% of our clients receive their first customized media plan within 24 hours."</p>
                </div>
            </div>

            <div class="lg:col-span-8">
                <form action="#" class="space-y-10 bg-[#172010] p-10 md:p-16 rounded-[4rem] border border-white/5 shadow-[0_30px_100px_rgba(0,0,0,0.4)]">

                    <div>
                        <label class="text-white font-black uppercase text-base tracking-[0.3em] mb-8 block opacity-70">Step 1: Select Your Channels</label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            <?php
                            $services = ['OOH & DOOH', 'Cinema', 'BTL & Events', 'Digital', 'Mainline', 'Other'];
                            foreach ($services as $s): ?>
                                <label class="cursor-pointer">
                                    <input type="checkbox" class="hidden peer">
                                    <div class="px-4 py-5 bg-[#0d1309] border border-white/5 rounded-2xl text-gray-500 text-sm font-black uppercase tracking-widest text-center peer-checked:bg-brand-accent peer-checked:text-black peer-checked:shadow-[0_0_20px_#a3e63544] transition-all hover:border-brand-accent/50">
                                        <?php echo $s; ?>
                                    </div>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="space-y-8">
                        <label class="text-white font-black uppercase text-base tracking-[0.3em] block opacity-70">Step 2: Project Details</label>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="relative group">
                                <input type="text" required class="w-full bg-transparent border-b-2 border-white/10 py-4 text-white focus:outline-none focus:border-brand-accent transition-colors peer placeholder-transparent" id="name" placeholder="Name">
                                <label for="name" class="absolute left-0 top-4 text-gray-500 uppercase text-sm font-black tracking-widest pointer-events-none transition-all peer-focus:-top-4 peer-focus:text-brand-accent peer-not-placeholder-shown:-top-4">Full Name</label>
                            </div>
                            <div class="relative group">
                                <input type="email" required class="w-full bg-transparent border-b-2 border-white/10 py-4 text-white focus:outline-none focus:border-brand-accent transition-colors peer placeholder-transparent" id="email" placeholder="Email">
                                <label for="email" class="absolute left-0 top-4 text-gray-500 uppercase text-sm font-black tracking-widest pointer-events-none transition-all peer-focus:-top-4 peer-focus:text-brand-accent peer-not-placeholder-shown:-top-4">Email Address</label>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="relative group">
                                <input type="text" class="w-full bg-transparent border-b-2 border-white/10 py-4 text-white focus:outline-none focus:border-brand-accent transition-colors peer placeholder-transparent" id="company" placeholder="Company">
                                <label for="company" class="absolute left-0 top-4 text-gray-500 uppercase text-sm font-black tracking-widest pointer-events-none transition-all peer-focus:-top-4 peer-focus:text-brand-accent peer-not-placeholder-shown:-top-4">Company Name</label>
                            </div>
                            <div class="relative group">
                                <select class="w-full bg-transparent border-b-2 border-white/10 py-4 text-gray-500 focus:outline-none focus:border-brand-accent transition-colors appearance-none cursor-pointer">
                                    <option class="bg-[#172010]">Select Budget Range</option>
                                    <option class="bg-[#172010]">Below 5L</option>
                                    <option class="bg-[#172010]">5L - 20L</option>
                                    <option class="bg-[#172010]">20L - 50L</option>
                                    <option class="bg-[#172010]">50L+</option>
                                </select>
                                <div class="absolute right-0 top-5 pointer-events-none text-brand-accent text-base">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>

                        <div class="relative group pt-4">
                            <textarea rows="4" class="w-full bg-transparent border-b-2 border-white/10 py-4 text-white focus:outline-none focus:border-brand-accent transition-colors peer placeholder-transparent" id="message" placeholder="Message"></textarea>
                            <label for="message" class="absolute left-0 top-8 text-gray-500 uppercase text-sm font-black tracking-widest pointer-events-none transition-all peer-focus:top-0 peer-focus:text-brand-accent peer-not-placeholder-shown:top-0">Your Campaign Vision</label>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="flex w-fit items-center justify-center text-center px-8 py-2.5 bg-brand-accent rounded-full text-black text-lg tracking-wider group">
                        Send Project Brief
                        <i class="fas fa-arrow-right ml-2 -rotate-45 group-hover:rotate-0 transition text-black"></i>
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#172010] border-t border-white/5">
        <div class="w-[80vw] mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
                <div class="flex items-start gap-6">
                    <div class="text-brand-accent text-5xl font-black opacity-40">01</div>
                    <div>
                        <h5 class="text-white font-bold uppercase tracking-widest text-base mb-3">Response Time</h5>
                        <p class="text-gray-500 text-[11px] leading-relaxed">Personalized call-back within one business day from our lead strategist.</p>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div class="text-brand-accent text-5xl font-black opacity-40">02</div>
                    <div>
                        <h5 class="text-white font-bold uppercase tracking-widest text-base mb-3">Holistic Approach</h5>
                        <p class="text-gray-500 text-[11px] leading-relaxed">Integrated planning that covers both massive physical reach and digital conversion.</p>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div class="text-brand-accent text-5xl font-black opacity-40">03</div>
                    <div>
                        <h5 class="text-white font-bold uppercase tracking-widest text-base mb-3">Live Reporting</h5>
                        <p class="text-gray-500 text-[11px] leading-relaxed">Transparency is key. We provide daily updates and photographic audits of all sites.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php include 'includes/footer.php'; ?>