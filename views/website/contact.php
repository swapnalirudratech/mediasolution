<?php
$page = 'contact';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body>
    <section class="relative pt-32 pb-12 bg-[#172010] overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#a3e635]/5 -skew-x-12 transform translate-x-32"></div>

        <div class="w-[80vw] mx-auto px-4 relative z-10">
            <div class="max-w-3xl">
                <span class="text-[#a3e635] font-bold uppercase tracking-[0.4em] text-sm mb-4 block">Let's Collaborate</span>
                <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] uppercase mb-8">
                    Start a <br><span class="text-[#a3e635]">Project.</span>
                </h1>
                <p class="text-gray-400 text-lg md:text-xl border-l-2 border-white/20 pl-8">
                    Ready to dominate the market? Tell us about your brand goals, and our 360° team will craft a customized media strategy for you.
                </p>
            </div>
        </div>
    </section>
    <section class="py-20 bg-[#172010]">
        <div class="w-[80vw] mx-auto px-4 grid lg:grid-cols-3 gap-16">

            <div class="lg:col-span-1 space-y-12">
                <div>
                    <h4 class="text-white font-bold uppercase tracking-widest mb-6">Our Location</h4>
                    <p class="text-gray-400 leading-relaxed">
                        Media Solutions HQ<br>
                        Thane, Maharashtra, India<br>
                        Serving Brands Globally.
                    </p>
                </div>

                <div>
                    <h4 class="text-white font-bold uppercase tracking-widest mb-6">Contact Details</h4>
                    <p class="text-gray-400 mb-2 hover:text-[#a3e635] transition cursor-pointer">hello@mediasolutions.in</p>
                    <p class="text-gray-400 hover:text-[#a3e635] transition cursor-pointer">+91 98765 43210</p>
                </div>

                <div class="p-8 bg-[#0d1309] rounded-3xl border border-white/5">
                    <p class="text-[#a3e635] font-bold text-xs uppercase tracking-widest mb-4">Quick Fact</p>
                    <p class="text-white/80 italic">"90% of our clients receive their first customized media plan within 24 hours of submitting this form."</p>
                </div>
            </div>

            <div class="lg:col-span-2">
                <form action="#" class="space-y-8 bg-[#0d1309] p-8 md:p-12 rounded-[3rem] border border-white/10 shadow-2xl">

                    <div>
                        <label class="text-white font-bold uppercase text-sm tracking-[0.2em] mb-6 block">What services are you interested in?</label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            <label class="cursor-pointer group">
                                <input type="checkbox" class="hidden peer">
                                <div class="px-4 py-3 bg-[#172010] border border-white/5 rounded-xl text-gray-400 text-sm font-bold uppercase tracking-widest text-center peer-checked:bg-[#a3e635] peer-checked:text-black peer-checked:border-[#a3e635] transition-all">OOH & DOOH</div>
                            </label>
                            <label class="cursor-pointer group">
                                <input type="checkbox" class="hidden peer">
                                <div class="px-4 py-3 bg-[#172010] border border-white/5 rounded-xl text-gray-400 text-sm font-bold uppercase tracking-widest text-center peer-checked:bg-[#a3e635] peer-checked:text-black peer-checked:border-[#a3e635] transition-all">Cinema</div>
                            </label>
                            <label class="cursor-pointer group">
                                <input type="checkbox" class="hidden peer">
                                <div class="px-4 py-3 bg-[#172010] border border-white/5 rounded-xl text-gray-400 text-sm font-bold uppercase tracking-widest text-center peer-checked:bg-[#a3e635] peer-checked:text-black peer-checked:border-[#a3e635] transition-all">BTL & Events</div>
                            </label>
                            <label class="cursor-pointer group">
                                <input type="checkbox" class="hidden peer">
                                <div class="px-4 py-3 bg-[#172010] border border-white/5 rounded-xl text-gray-400 text-sm font-bold uppercase tracking-widest text-center peer-checked:bg-[#a3e635] peer-checked:text-black peer-checked:border-[#a3e635] transition-all">Digital</div>
                            </label>
                            <label class="cursor-pointer group">
                                <input type="checkbox" class="hidden peer">
                                <div class="px-4 py-3 bg-[#172010] border border-white/5 rounded-xl text-gray-400 text-sm font-bold uppercase tracking-widest text-center peer-checked:bg-[#a3e635] peer-checked:text-black peer-checked:border-[#a3e635] transition-all">Mainline</div>
                            </label>
                            <label class="cursor-pointer group">
                                <input type="checkbox" class="hidden peer">
                                <div class="px-4 py-3 bg-[#172010] border border-white/5 rounded-xl text-gray-400 text-sm font-bold uppercase tracking-widest text-center peer-checked:bg-[#a3e635] peer-checked:text-black peer-checked:border-[#a3e635] transition-all">Other</div>
                            </label>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-white/50 text-sm uppercase font-bold tracking-widest ml-2">Full Name</label>
                            <input type="text" placeholder="e.g. Rahul Sharma" class="w-full bg-[#172010] border border-white/5 rounded-2xl px-6 py-4 text-white placeholder-gray-600 focus:outline-none focus:border-[#a3e635]/50 transition">
                        </div>
                        <div class="space-y-2">
                            <label class="text-white/50 text-sm uppercase font-bold tracking-widest ml-2">Email Address</label>
                            <input type="email" placeholder="rahul@company.com" class="w-full bg-[#172010] border border-white/5 rounded-2xl px-6 py-4 text-white placeholder-gray-600 focus:outline-none focus:border-[#a3e635]/50 transition">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-white/50 text-sm uppercase font-bold tracking-widest ml-2">Estimated Budget</label>
                            <select class="w-full bg-[#172010] border border-white/5 rounded-2xl px-6 py-4 text-gray-500 focus:outline-none focus:border-[#a3e635]/50 transition appearance-none">
                                <option>Select Range</option>
                                <option>Below 5L</option>
                                <option>5L - 20L</option>
                                <option>20L - 50L</option>
                                <option>50L+</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="text-white/50 text-sm uppercase font-bold tracking-widest ml-2">Company Name</label>
                            <input type="text" placeholder="Brand Name" class="w-full bg-[#172010] border border-white/5 rounded-2xl px-6 py-4 text-white placeholder-gray-600 focus:outline-none focus:border-[#a3e635]/50 transition">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-white/50 text-sm uppercase font-bold tracking-widest ml-2">Tell us about your campaign goals</label>
                        <textarea rows="4" placeholder="I want to launch a new product in Mumbai and Delhi..." class="w-full bg-[#172010] border border-white/5 rounded-2xl px-6 py-4 text-white placeholder-gray-600 focus:outline-none focus:border-[#a3e635]/50 transition"></textarea>
                    </div>

                    <button type="submit" class="w-full py-5 bg-[#a3e635] text-[#172010] font-black uppercase text-xs tracking-[0.3em] rounded-2xl hover:shadow-[0_20px_40px_rgba(163,230,53,0.2)] transition-all transform hover:-translate-y-1">
                        Send Project Brief
                    </button>
                </form>
            </div>
        </div>
    </section>
    <section class="py-24 bg-[#0d1309]">
        <div class="w-[80vw] mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <div class="space-y-4">
                    <div class="text-[#a3e635] text-4xl font-black">24h</div>
                    <h5 class="text-white font-bold uppercase tracking-widest text-xs">Response Time</h5>
                    <p class="text-gray-500 text-xs">We respect your time. Expect a call-back within one business day.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-[#a3e635] text-4xl font-black">360°</div>
                    <h5 class="text-white font-bold uppercase tracking-widest text-xs">Holistic Approach</h5>
                    <p class="text-gray-500 text-xs">From planning to execution and digital reporting, we handle it all.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-[#a3e635] text-4xl font-black">PAN</div>
                    <h5 class="text-white font-bold uppercase tracking-widest text-xs">India Presence</h5>
                    <p class="text-gray-500 text-xs">Located in Thane, with local teams active in every major city.</p>
                </div>
            </div>
        </div>
    </section>
</body>

<?php include 'includes/footer.php'; ?>