<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body>
    <section class="relative pt-40 pb-32 bg-[#172010] overflow-hidden min-h-[85vh] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="/public/assets/images/1.jpg"
                class="w-full h-full object-cover opacity-90"
                alt="Tech Infrastructure">

            <div class="absolute inset-0 bg-gradient-to-r from-[#172010] via-[#172010]/90 to-transparent"></div>

            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#a3e635 0.5px, transparent 0.5px); background-size: 30px 30px;"></div>

            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-[#172010] to-transparent"></div>
        </div>

        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 relative z-10">
            <div class="max-w-3xl">
                <div class="inline-block px-4 py-1.5 border border-[#a3e635]/30 rounded-full bg-[#a3e635]/5 mb-8">
                    <span class="text-[#a3e635] font-bold uppercase tracking-widest text-[10px]">Data-Driven Brand Growth</span>
                </div>

                <h1 class="text-4xl md:text-8xl font-black text-white leading-none uppercase mb-8">
                    Digital <span class="text-[#a3e635]">&</span> <br>
                    <span class="relative">
                        Technology
                        <!-- <span class="absolute -bottom-2 left-0 w-full h-2 bg-[#a3e635]/20"></span> -->
                    </span>
                </h1>

                <p class="text-gray-300 text-sm md:text-xl leading-relaxed mb-12 border-l-4 border-[#a3e635] pl-6 max-md:pl-4">
                    Bridging the gap between traditional OOH and modern performance marketing with measurable, result-oriented tech solutions.
                </p>

                <div class="flex flex-wrap gap-6">
                    <a href="/services" class="px-10 py-4 bg-[#a3e635] text-black font-bold uppercase text-[10px] tracking-widest rounded-full hover:scale-105 hover:shadow-[0_0_30px_rgba(163,230,53,0.4)] transition-all">
                        Our Tech Stack
                    </a>
                    <a href="/contact" class="px-10 py-4 border border-white/20 text-white font-bold uppercase text-[10px] tracking-widest rounded-full hover:bg-white/10 transition backdrop-blur-sm">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="solutions" class="py-24 max-md:py-14 bg-[#0d1309]">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="grid md:grid-cols-3 gap-0 border border-white/10 rounded-[2rem] overflow-hidden">

                <div class="p-12 max-md:p-6 bg-[#172010] border-r border-white/10 hover:bg-brand-accent/5 transition-colors group">
                    <div class="text-brand-accent mb-8 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 uppercase">Search & SEO</h3>
                    <p class="text-gray-500 leading-relaxed mb-6">Dominating search results with data-backed SEO strategies and high-performance PPC campaigns that convert.</p>
                    <ul class="text-sm text-gray-400 space-y-2 uppercase tracking-tighter">
                        <li>• Technical SEO Audits</li>
                        <li>• Contextual Backlinking</li>
                        <li>• ROI-Focused SEM</li>
                    </ul>
                </div>

                <div class="p-12 max-md:p-6 bg-[#172010] border-r border-white/10 hover:bg-brand-accent/5 transition-colors group">
                    <div class="text-brand-accent mb-8 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 uppercase">Social Marketing</h3>
                    <p class="text-gray-500 leading-relaxed mb-6">Creating viral content and managing communities across platforms to build brand loyalty and engagement.</p>
                    <ul class="text-sm text-gray-400 space-y-2 uppercase tracking-tighter">
                        <li>• Creative Content Production</li>
                        <li>• Influencer Collaborations</li>
                        <li>• Paid Social Funnels</li>
                    </ul>
                </div>

                <div class="p-12 max-md:p-6 bg-[#172010] hover:bg-brand-accent/5 transition-colors group">
                    <div class="text-brand-accent mb-8 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 uppercase">Brand Technology</h3>
                    <p class="text-gray-500 leading-relaxed mb-6">Developing custom technology solutions like AR filters, interactive microsites, and measurable dashboards.</p>
                    <ul class="text-sm text-gray-400 space-y-2 uppercase tracking-tighter">
                        <li>• MarTech Integrations</li>
                        <li>• Interactive Brand Apps</li>
                        <li>• Real-time Data Viz</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <section class="py-24 max-md:py-14 bg-[#172010] relative overflow-hidden">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4 grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-black text-white uppercase mb-8 leading-tight">If it can't be measured, <br><span class="text-brand-accent">it doesn't count.</span></h2>
                <p class="text-gray-400 mb-8 italic">"Unlike traditional agencies, we provide a unified dashboard that tracks your OOH impressions alongside your digital conversions."</p>

                <div class="space-y-4">
                    <div class="flex items-center gap-4 p-4 bg-white/5 rounded-xl border border-white/10">
                        <div class="w-2 h-2 rounded-full bg-brand-accent animate-pulse"></div>
                        <span class="text-white text-sm font-semibold uppercase tracking-widest">Real-time Analytics Tracking</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white/5 rounded-xl border border-white/10">
                        <div class="w-2 h-2 rounded-full bg-brand-accent"></div>
                        <span class="text-white text-sm font-semibold uppercase tracking-widest">Conversion Rate Optimization (CRO)</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white/5 rounded-xl border border-white/10">
                        <div class="w-2 h-2 rounded-full bg-brand-accent"></div>
                        <span class="text-white text-sm font-semibold uppercase tracking-widest">Unified Omnichannel Reporting</span>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -inset-4 bg-brand-accent/20 blur-3xl rounded-full"></div>
                <div class="relative bg-[#0d1309] border border-white/10 rounded-3xl p-8 shadow-2xl">
                    <div class="flex items-end gap-2 h-40 mb-6">
                        <div class="flex-1 bg-white/5 h-[30%] rounded-t-lg transition-all hover:h-[80%] hover:bg-brand-accent"></div>
                        <div class="flex-1 bg-white/5 h-[50%] rounded-t-lg transition-all hover:h-[90%] hover:bg-brand-accent"></div>
                        <div class="flex-1 bg-brand-accent h-[70%] rounded-t-lg"></div>
                        <div class="flex-1 bg-white/5 h-[40%] rounded-t-lg transition-all hover:h-[60%] hover:bg-brand-accent"></div>
                        <div class="flex-1 bg-white/5 h-[60%] rounded-t-lg transition-all hover:h-[100%] hover:bg-brand-accent"></div>
                    </div>
                    <div class="flex justify-between items-center border-t border-white/10 pt-6">
                        <div>
                            <p class="text-gray-500 text-[10px] uppercase font-bold tracking-widest">Campaign Growth</p>
                            <p class="text-white text-2xl font-black">+240%</p>
                        </div>
                        <div class="px-4 py-2 bg-brand-accent/10 rounded-lg text-brand-accent text-[10px] font-bold">LIVE FEED</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 max-md:py-14 bg-[#0d1309]">
        <div class="w-[80vw] max-md:w-[90vw] mx-auto md:px-4">
            <div class="bg-gradient-to-br from-[#172010] to-[#0d1309] border-2 border-brand-accent/30 rounded-[3rem] p-8 md:p-20 text-center relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-brand-accent to-transparent opacity-30"></div>

                <h2 class="text-3xl md:text-5xl font-black text-white uppercase mb-8">Upgrade Your Brand's <br><span class="text-brand-accent">Digital Intelligence</span></h2>
                <p class="text-gray-400 mb-12 max-w-lg max-md:text-sm mx-auto">From Thane to a global stage—let’s build a digital presence that outshines the competition.</p>

                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contact" class="px-12 py-5 max-md:py-3 bg-brand-accent text-black font-black uppercase text-sm tracking-widest rounded-full hover:scale-105 transition-all">Start My Audit</a>
                    <a href="/services" class="px-12 py-5 max-md:py-3 border border-white/20 text-white font-black uppercase text-sm tracking-widest rounded-full hover:bg-white/5 transition-all">View Case Studies</a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

<?php
include 'includes/footer.php';
?>