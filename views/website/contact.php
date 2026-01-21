<?php
$page = 'contact';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="bg-brand-gray">
    <section class="relative pt-40 pb-20 bg-brand-gray overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-accent/5 blur-[120px] rounded-full translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-brand-accent/5 blur-[100px] rounded-full -translate-x-1/2 translate-y-1/2"></div>

        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 relative z-10">
            <div class="max-w-4xl">
                <span class="text-brand-accent font-bold uppercase tracking-[0.4em] text-base mb-6 block animate-pulse">Available for New Projects</span>

                <h1 class="text-4xl md:text-8xl font-black text-brand-dark leading-[0.85] uppercase mb-10">
                    Let’s Build <br><span class="text-transparent" style="-webkit-text-stroke: 1.5px #7c3aed;">Your Legacy.</span>
                </h1>

                <p class="text-gray-600 text-sm md:text-lg max-w-2xl border-l-4 border-brand-accent pl-8 max-md:pl-4 leading-relaxed">
                    Ready to dominate the market? Tell us about your brand goals, and our 360° team will craft a customized media strategy for you.
                </p>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-14 bg-brand-light relative">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 grid lg:grid-cols-12 gap-16">

            <div class="lg:col-span-4 space-y-12 max-md:order-2">

                <div class="group cursor-default">
                    <h4 class="text-brand-dark font-black uppercase tracking-widest text-base mb-6 flex items-center">
                        <span class="w-8 h-px bg-brand-accent mr-4"></span> Our Location
                    </h4>
                    <div class="p-8 max-md:p-6 bg-brand-gray border border-gray-200 rounded-[2rem] max-md:rounded-xl transition-all group-hover:border-brand-accent/30 shadow-sm">
                        <p class="text-brand-dark font-bold mb-2">Mediaa Solutions HQ</p>
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
                    <h4 class="text-brand-dark font-black uppercase tracking-widest text-base mb-6 flex items-center">
                        <span class="w-8 h-px bg-brand-accent mr-4"></span> Direct Lines
                    </h4>
                    <div class="space-y-4">
                        <a href="mailto:contact@mediasolutions.com" class="block p-6 bg-brand-gray border border-gray-200 rounded-2xl max-md:rounded-xl hover:bg-brand-accent group transition-all shadow-sm">
                            <p class="text-gray-500 text-sm uppercase font-bold group-hover:text-white/80">Email Us</p>
                            <p class="text-brand-dark font-bold group-hover:text-white">contact@mediasolutions.com</p>
                        </a>
                        <a href="tel:+918976309837" class="block p-6 bg-brand-gray border border-gray-200 rounded-2xl max-md:rounded-xl hover:bg-brand-accent group transition-all shadow-sm">
                            <p class="text-gray-500 text-sm uppercase font-bold group-hover:text-white/80">Call Support</p>
                            <p class="text-brand-dark font-bold group-hover:text-white">+91 89763 09837</p>
                        </a>
                    </div>
                </div>

                <div class="relative p-10 max-md:p-6 bg-brand-accent rounded-[3rem] max-md:rounded-xl shadow-xl shadow-brand-accent/30 overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 text-white/10 text-7xl max-md:text-5xl font-black italic group-hover:scale-110 transition-transform">24h</div>
                    <p class="text-white font-bold text-base uppercase tracking-widest mb-4 relative z-10">The 24h Promise</p>
                    <p class="text-white/90 italic text-lg max-md:text-base relative z-10">"90% of our clients receive their first customized media plan within 24 hours."</p>
                </div>
            </div>

            <div class="lg:col-span-8 max-md:order-1">
                <form action="#" class="space-y-10 bg-white p-6 md:p-16 rounded-[4rem] max-md:rounded-xl border border-gray-200 shadow-2xl">

                    <div>
                        <label class="text-brand-dark font-black uppercase text-base tracking-[0.3em] mb-8 block opacity-70">Step 1: Select Your Channels</label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 max-md:gap-2">
                            <?php
                            $services = ['OOH & DOOH', 'BTL & Events', 'Cinema', 'Digital', 'Mainline', 'Other'];
                            foreach ($services as $s): ?>
                                <label class="cursor-pointer">
                                    <input type="checkbox" class="hidden peer">
                                    <div class="px-4 py-5 max-md:py-2 max-md:px-3 bg-gray-50 border border-gray-200 rounded-2xl max-md:rounded-xl text-gray-500 text-sm max-md:text-xs font-black uppercase tracking-widest text-center peer-checked:bg-brand-accent peer-checked:text-white peer-checked:shadow-lg peer-checked:border-brand-accent transition-all hover:border-brand-accent/50">
                                        <?php echo $s; ?>
                                    </div>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="space-y-8">
                        <label class="text-brand-dark font-black uppercase text-base tracking-[0.3em] block opacity-70">Step 2: Project Details</label>

                        <div class="grid md:grid-cols-2 gap-8 max-md:gap-6">
                            <div class="relative group">
                                <input type="text" required class="w-full bg-transparent border-b-2 border-gray-300 py-4 text-brand-dark focus:outline-none focus:border-brand-accent transition-colors peer placeholder-transparent" id="name" placeholder="Name">
                                <label for="name" class="absolute left-0 top-4 text-gray-400 uppercase text-sm font-black tracking-widest pointer-events-none transition-all peer-focus:-top-4 peer-focus:text-brand-accent peer-not-placeholder-shown:-top-4">Full Name</label>
                            </div>
                            <div class="relative group">
                                <input type="email" required class="w-full bg-transparent border-b-2 border-gray-300 py-4 text-brand-dark focus:outline-none focus:border-brand-accent transition-colors peer placeholder-transparent" id="email" placeholder="Email">
                                <label for="email" class="absolute left-0 top-4 text-gray-400 uppercase text-sm font-black tracking-widest pointer-events-none transition-all peer-focus:-top-4 peer-focus:text-brand-accent peer-not-placeholder-shown:-top-4">Email Address</label>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8 max-md:gap-6">
                            <div class="relative group">
                                <input type="text" class="w-full bg-transparent border-b-2 border-gray-300 py-4 text-brand-dark focus:outline-none focus:border-brand-accent transition-colors peer placeholder-transparent" id="company" placeholder="Company">
                                <label for="company" class="absolute left-0 top-4 text-gray-400 uppercase text-sm font-black tracking-widest pointer-events-none transition-all peer-focus:-top-4 peer-focus:text-brand-accent peer-not-placeholder-shown:-top-4">Company Name</label>
                            </div>
                            <div class="relative group">
                                <select class="w-full bg-transparent border-b-2 border-gray-300 py-4 text-gray-500 focus:outline-none focus:border-brand-accent transition-colors appearance-none cursor-pointer">
                                    <option class="bg-white">Select Budget Range</option>
                                    <option class="bg-white">Below 5L</option>
                                    <option class="bg-white">5L - 20L</option>
                                    <option class="bg-white">20L - 50L</option>
                                    <option class="bg-white">50L+</option>
                                </select>
                                <div class="absolute right-0 top-5 pointer-events-none text-brand-accent text-base">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>

                        <div class="relative group pt-4 max-md:pt-0">
                            <textarea rows="4" class="w-full bg-transparent border-b-2 border-gray-300 py-4 max-md:py-0 text-brand-dark focus:outline-none focus:border-brand-accent transition-colors peer placeholder-transparent" id="message" placeholder="Message"></textarea>
                            <label for="message" class="absolute left-0 top-8 text-gray-400 uppercase text-sm font-black tracking-widest pointer-events-none transition-all peer-focus:top-0 peer-focus:text-brand-accent peer-not-placeholder-shown:top-0">Your Campaign Vision</label>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="flex w-fit items-center justify-center text-center px-8 py-2.5 bg-brand-accent rounded-full text-white text-lg max-md:text-sm tracking-wider group shadow-lg hover:shadow-brand-accent/40 transition-all">
                            Send Project Brief
                            <i class="fas fa-arrow-right ml-2 -rotate-45 group-hover:rotate-0 transition text-white"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="py-24 max-md:py-14 bg-brand-gray border-t border-gray-200">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
                <div class="flex items-start gap-6">
                    <div class="text-brand-accent text-5xl font-black opacity-40">01</div>
                    <div>
                        <h5 class="text-brand-dark font-bold uppercase tracking-widest text-base mb-3">Response Time</h5>
                        <p class="text-gray-500 text-[11px] leading-relaxed">Personalized call-back within one business day from our lead strategist.</p>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div class="text-brand-accent text-5xl font-black opacity-40">02</div>
                    <div>
                        <h5 class="text-brand-dark font-bold uppercase tracking-widest text-base mb-3">Holistic Approach</h5>
                        <p class="text-gray-500 text-[11px] leading-relaxed">Integrated planning that covers both massive physical reach and digital conversion.</p>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div class="text-brand-accent text-5xl font-black opacity-40">03</div>
                    <div>
                        <h5 class="text-brand-dark font-bold uppercase tracking-widest text-base mb-3">Live Reporting</h5>
                        <p class="text-gray-500 text-[11px] leading-relaxed">Transparency is key. We provide daily updates and photographic audits of all sites.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php include 'includes/footer.php'; ?>