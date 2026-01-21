 <style>
    /* KEYFRAMES */
    @keyframes scroll-left {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    @keyframes scroll-right {
      0% {
        transform: translateX(-50%);
      }

      100% {
        transform: translateX(0);
      }
    }

    .animate-scroll-left {
      animation: scroll-left 40s linear infinite;
    }

    .animate-scroll-right {
      animation: scroll-right 40s linear infinite;
    }

    .marquee-wrapper:hover .animate-scroll-left,
    .marquee-wrapper:hover .animate-scroll-right {
      animation-play-state: paused;
    }

    /* Optional: Fades the edges for a cleaner look */
    .fade-edges {
      mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
      -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }
  </style>

 <section class="py-24 max-md:py-14 bg-white overflow-hidden">
    <div class="w-[80vw] mx-auto px-4 text-center mb-16 max-md:mb-8">
      <h2 class="text-4xl font-bold text-brand-dark uppercase">Our Ecosystem</h2>
      <p class="text-gray-500 mt-4 max-w-xl mx-auto italic">Trusted by the biggest names in the industry.</p>
    </div>

    <div class="marquee-wrapper w-full flex flex-col gap-20 max-md:gap-10 fade-edges">

      <div class="relative w-full overflow-hidden">
        <div class="flex animate-scroll-left whitespace-nowrap gap-16 max-md:gap-0 w-max">
          <div class="flex items-center gap-16 max-md:gap-0">
            <img src="/public/assets/logos/1.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/2.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/3.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/4.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/5.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/6.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
          </div>
          <div class="flex items-center gap-16 max-md:gap-0">
            <img src="/public/assets/logos/1.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/2.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/3.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/4.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/5.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/6.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
          </div>
          <div class="flex items-center gap-16 max-md:gap-0">
            <img src="/public/assets/logos/1.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/2.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/3.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/4.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/5.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/6.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
          </div>
        </div>
      </div>

      <div class="relative w-full overflow-hidden">
        <div class="flex animate-scroll-right whitespace-nowrap gap-16 max-md:gap-0 w-max">
          <div class="flex items-center gap-16 max-md:gap-0">
            <img src="/public/assets/logos/7.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/8.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/9.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/10.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/11.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/12.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/13.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
          </div>
          <div class="flex items-center gap-16 max-md:gap-0">
            <img src="/public/assets/logos/7.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/8.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/9.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/10.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/11.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/12.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/13.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
          </div>
          <div class="flex items-center gap-16 max-md:gap-0">
            <img src="/public/assets/logos/7.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/8.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/9.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/10.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/11.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/12.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
            <img src="/public/assets/logos/13.png" class="h-24 w-40 max-md:h-20 max-md:w-32 object-cover rounded-md">
          </div>
        </div>
      </div>

    </div>
  </section>