<?php
$page = 'about';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body>
  <section class="relative pt-40 pb-24 bg-[#172010] overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');"></div>

    <div class="w-[80vw] mx-auto px-4 relative z-10">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div>
          <span class="text-brand-accent font-bold uppercase tracking-[0.4em] text-xs mb-6 block">Est. 2012 • Thane, India</span>
          <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] uppercase mb-8">
            The <span class="text-brand-accent">Agency</span> <br>Redefined.
          </h1>
          <p class="text-gray-400 text-lg leading-relaxed mb-10 border-l-2 border-brand-accent pl-8">
            Media Solutions started with a single billboard and a bold vision. Today, we are a 360-degree engine driving growth for 300+ global brands.
          </p>
          <div class="flex items-center gap-8">
            <div class="text-center">
              <p class="text-4xl font-black text-white">13+</p>
              <p class="text-brand-accent text-[10px] font-bold uppercase tracking-widest">Years</p>
            </div>
            <div class="w-px h-10 bg-white/10"></div>
            <div class="text-center">
              <p class="text-4xl font-black text-white">500+</p>
              <p class="text-brand-accent text-[10px] font-bold uppercase tracking-widest">Campaigns</p>
            </div>
          </div>
        </div>
        <div class="relative">
          <div class="absolute -inset-4 bg-brand-accent/10 blur-3xl rounded-full"></div>
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" class="rounded-[2rem] shadow-2xl relative z-10 border border-white/10" alt="Team Collaboration">
        </div>
      </div>
    </div>
  </section>
  <section class="py-24 bg-[#0d1309]">
    <div class="w-[80vw] mx-auto px-4">
      <div class="max-w-3xl mb-20">
        <h2 class="text-4xl font-bold text-white uppercase mb-6 leading-tight">We blend the <span class="text-brand-accent">Massive Reach</span> of Billboards with <span class="text-white">Digital Precision.</span></h2>
        <p class="text-gray-400">Our philosophy is simple: Be where the people are. Whether they are looking up at a gantry or down at their phones, we ensure your brand message is inseparable from their daily journey.</p>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="p-10 bg-[#172010] rounded-3xl border border-white/5 transition-all hover:bg-brand-accent/5 group">
          <h4 class="text-white font-bold text-xl mb-4 uppercase group-hover:text-brand-accent transition-colors">Massive Reach</h4>
          <p class="text-gray-500 text-sm leading-relaxed">Dominating skylines with prime assets in high-traffic zones, ensuring your brand is impossible to ignore.</p>
        </div>
        <div class="p-10 bg-[#172010] rounded-3xl border border-white/5 transition-all hover:bg-brand-accent/5 group">
          <h4 class="text-white font-bold text-xl mb-4 uppercase group-hover:text-brand-accent transition-colors">Deep Engagement</h4>
          <p class="text-gray-500 text-sm leading-relaxed">Through BTL and Events, we turn passive viewers into active participants in your brand story.</p>
        </div>
        <div class="p-10 bg-[#172010] rounded-3xl border border-white/5 transition-all hover:bg-brand-accent/5 group">
          <h4 class="text-white font-bold text-xl mb-4 uppercase group-hover:text-brand-accent transition-colors">Smart Conversion</h4>
          <p class="text-gray-500 text-sm leading-relaxed">Our digital tech layer tracks results and optimizes every rupee you spend for maximum ROI.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-24 bg-[#172010] border-y border-white/5">
    <div class="w-[80vw] mx-auto px-4 grid md:grid-cols-4 gap-12">
      <div class="text-center md:text-left">
        <div class="text-brand-accent mb-6">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
          </svg>
        </div>
        <h5 class="text-white font-bold uppercase tracking-widest text-sm mb-2">100% Pan India</h5>
        <p class="text-gray-500 text-xs leading-relaxed">Execution capabilities across every Tier-1, 2, and 3 city in India.</p>
      </div>
      <div class="text-center md:text-left">
        <div class="text-brand-accent mb-6">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h5 class="text-white font-bold uppercase tracking-widest text-sm mb-2">24/7 Support</h5>
        <p class="text-gray-500 text-xs leading-relaxed">Round-the-clock monitoring and support for all live campaigns.</p>
      </div>
      <div class="text-center md:text-left">
        <div class="text-brand-accent mb-6">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
        </div>
        <h5 class="text-white font-bold uppercase tracking-widest text-sm mb-2">Integrity First</h5>
        <p class="text-gray-500 text-xs leading-relaxed">Transparent reporting with verified photographic and digital audits.</p>
      </div>
      <div class="text-center md:text-left">
        <div class="text-brand-accent mb-6">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
        </div>
        <h5 class="text-white font-bold uppercase tracking-widest text-sm mb-2">Rapid Response</h5>
        <p class="text-gray-500 text-xs leading-relaxed">Fast-track fabrication and deployment to meet tight market deadlines.</p>
      </div>
    </div>
  </section>
  <section class="py-24 bg-[#0d1309] overflow-hidden">
    <div class="w-[80vw] mx-auto px-4 text-center mb-16">
      <h2 class="text-4xl font-bold text-white uppercase">Our Ecosystem</h2>
      <p class="text-gray-500 mt-4 max-w-xl mx-auto italic">Trusted by the biggest names in the industry.</p>
    </div>

  </section>
  <section class="py-24 bg-[#172010]">
    <div class="w-[80vw] mx-auto px-4">
      <div class="relative bg-brand-accent rounded-[4rem] p-12 md:p-24 overflow-hidden">
        <div class="absolute -left-10 -bottom-10 w-64 h-64 bg-black/5 rounded-full"></div>

        <div class="relative z-10 flex flex-col items-center text-center">
          <h2 class="text-4xl md:text-6xl font-black text-[#172010] uppercase mb-8 leading-tight">Your Brand. <br>Our Mission.</h2>
          <p class="text-[#172010]/80 font-bold mb-12 max-w-xl italic">"We are more than just a vendor; we are your strategic communication partner. Let's build something unforgettable together."</p>
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="/contact" class="px-12 py-5 bg-[#172010] text-white font-black uppercase text-xs tracking-[0.2em] rounded-full hover:scale-105 transition-all">Work With Us</a>
            <a href="/services" class="px-12 py-5 border-2 border-[#172010] text-[#172010] font-black uppercase text-xs tracking-[0.2em] rounded-full hover:bg-[#172010] hover:text-white transition-all">Explore Services</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

<?php include 'includes/footer.php'; ?>