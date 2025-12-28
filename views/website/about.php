<?php
$page = 'about';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="overflow-x-hidden">

  <section class="relative h-screen max-md:h-[70vh] flex items-center justify-start bg-cover bg-center" style="background-image: url('/public/assets/images/abt.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 max-w-3xl px-6 lg:px-20">
      <h1 class="lg:text-5xl md:text-4xl text-2xl font-bold text-white leading-tight">
        <div>About Animocare Private Limited</div>
        <div class="text-brand">Empowering Global Trade</div>
      </h1>

      <p class="mt-6 text-base text-gray-200 max-md:hidden">
        Animocare Private Limited is a global import-export company providing quality food products, edible oils, and fertilizers worldwide.
      </p>

    </div>
  </section>

  <section class="bg-white py-20 w-full">
    <div class="w-[80%] max-md:w-[90%] mx-auto flex flex-col lg:flex-row items-center gap-10">

      <!-- Left: Image -->
      <div class="lg:w-1/2">
        <img src="/public/assets/images/4.jpg" alt="Animocare Private Limited Team at Work" class="rounded-xl shadow-lg w-full lg:h-[55vh] md:h-[60vh] object-cover">
      </div>

      <!-- Right: Content -->
      <div class="lg:w-1/2">
        <p class="text-sm text-brand font-semibold uppercase mb-3 flex items-center gap-2">
          <span class="text-brand">✦</span> About Us
        </p>
        <h2 class="text-3xl md:text-4xl font-bold mb-4 leading-snug">
          Building Global Trade <br> with Trust & Excellence
        </h2>
        <p class="text-gray-600 mb-6">
          At <strong>Animocare Private Limited</strong>, we are dedicated to enabling seamless international commerce by specializing in the import and export of food commodities, edible oils, fertilizers, and allied products. With a strong global network and robust compliance practices, we connect suppliers and buyers across borders with efficiency, transparency, and care.
        </p>

        <p class=" text-brand font-semibold uppercase mb-3 flex items-center gap-2">
          Our Business Divisions

        </p>

        <!-- Feature 1 -->
        <div class="flex items-start gap-4 mb-5">
          <div class="text-brand text-2xl">
            <i class="fas fa-seedling"></i>
          </div>
          <div>
            <h4 class="font-bold text-lg">Agri & Food Trade</h4>
            <p class="text-gray-600 text-sm">
              We source and supply grains, pulses, edible oils, and a wide range of agricultural products, backed by proper certifications, food safety protocols, and cold chain logistics.
            </p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="flex items-start gap-4 mb-8">
          <div class="text-brand text-2xl">
            <i class="fas fa-industry"></i>
          </div>
          <div>
            <h4 class="font-bold text-lg">Fertilizer & Industrial Supplies</h4>
            <p class="text-gray-600 text-sm">
              We deliver high-grade fertilizers and related products that adhere to international quality and regulatory standards, supporting sustainable agricultural and industrial growth.
            </p>
          </div>
        </div>

        <!-- Button -->
        <a href="/contact" class="inline-block bg-gradient-to-r from-brand to-light text-white px-6 py-3 max-md:px-4 max-md:py-2 max-md:text-sm rounded-full font-semibold shadow hover:opacity-90 transition">
          Connect us →
        </a>
      </div>
    </div>
  </section>

  <section class="py-28 max-md:py-16 bg-gray-50 relative w-full h-auto">
    <div class="absolute bottom-0 left-0 z-20 w-full h-full max-md:hidden">
      <img src="/public/assets/images/bgimg.png" alt="" class="h-full w-auto opacity-20">
    </div>
    <div class="text-center max-w-3xl mx-auto mb-16 max-md:w-[90%] max-md:mb-8">
      <p class="text-sm font-semibold text-brand mb-2 flex items-center justify-center gap-2">
        <span class="text-brand">✦</span> OUR WORKING PROCESS
      </p>
      <h2 class="text-3xl md:text-4xl font-bold leading-snug">
        How Animocare Private Limited Delivers <br> Seamless Global Trade
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 w-[70%] max-md:w-[90%] mx-auto">

      <!-- Single Step -->
      <div class="flex flex-col items-start group gap-3 bg-white z-30 p-6 rounded-xl">
        <!-- Icon -->
        <div class="flex-shrink-0 w-14 h-14 rounded-full bg-light text-white flex items-center justify-center text-xl">
          <i class="fas fa-warehouse"></i>
        </div>

        <!-- Line -->
        <div class="h-[1px] w-full bg-gray-200 transition-all duration-300 group-hover:bg-light"></div>

        <!-- Text -->
        <div>
          <h3 class="text-lg font-bold mb-1">01. Sourcing Quality Products</h3>
          <p class="text-sm text-gray-600">
            Trusted suppliers ensure top-tier food, oils, and agro products globally.
          </p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="flex flex-col items-start group gap-3 bg-white z-30 p-6 rounded-xl">
        <div class="flex-shrink-0 w-14 h-14 rounded-full bg-light text-white flex items-center justify-center text-xl">
          <i class="fas fa-shipping-fast"></i>
        </div>
        <div class="h-[1px] w-full bg-gray-200 transition-all duration-300 group-hover:bg-light"></div>
        <div>
          <h3 class="text-lg font-bold mb-1">02. Efficient Logistics</h3>
          <p class="text-sm text-gray-600">
            Smooth shipping via air, sea & land with real-time tracking.
          </p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="flex flex-col items-start group gap-3 bg-white z-30 p-6 rounded-xl">
        <div class="flex-shrink-0 w-14 h-14 rounded-full bg-light text-white flex items-center justify-center text-xl">
          <i class="fas fa-check-circle"></i>
        </div>
        <div class="h-[1px] w-full bg-gray-200 transition-all duration-300 group-hover:bg-light"></div>
        <div>
          <h3 class="text-lg font-bold mb-1">03. Quality & Compliance</h3>
          <p class="text-sm text-gray-600">
            Certifications and quality checks ensure safety and freshness.
          </p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="flex flex-col items-start group gap-3 bg-white z-30 p-6 rounded-xl">
        <div class="flex-shrink-0 w-14 h-14 rounded-full bg-light text-white flex items-center justify-center text-xl">
          <i class="fas fa-handshake"></i>
        </div>
        <div class="h-[1px] w-full bg-gray-200 transition-all duration-300 group-hover:bg-light"></div>
        <div>
          <h3 class="text-lg font-bold mb-1">04. Long-Term Partnerships</h3>
          <p class="text-sm text-gray-600">
            We build trust and deliver consistent excellence in trade.
          </p>
        </div>
      </div>

    </div>
  </section>

<section class="pt-16 bg-white">
  <!-- Header -->
  <div class="text-center max-w-3xl mx-auto mb-12 px-4">
    <p class="text-sm font-semibold text-brand flex items-center justify-center gap-2 mb-2 flex-wrap">
      <span class="text-brand">✦</span> OUR STORY
    </p>
    <h2 class="text-3xl md:text-4xl font-bold leading-snug">
      The Journey of Animocare Private Limited
    </h2>
  </div>

  <!-- Timeline Container -->
  <div class="relative w-[90%] sm:w-[80%] lg:w-[60%] mx-auto">
    <!-- Vertical line (hidden on mobile) -->
    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full border-l-2 border-gray-200"></div>

    <!-- Timeline Item 1 -->
    <div class="flex flex-col md:flex-row items-center mb-16 md:mb-24 relative">
      <!-- Left Image -->
      <div class="w-full md:w-1/2 px-4 md:px-6 md:pr-12 mb-6 md:mb-0">
        <img src="/public/assets/images/story1.jpg" alt="Beginning" class="rounded-xl shadow-md w-full object-cover h-56 sm:h-64">
      </div>

      <!-- Dot (only on desktop) -->
      <div class="hidden md:flex flex-col justify-center items-center absolute left-1/2 transform -translate-x-1/2 h-full">
        <div class="w-3 h-3 bg-brand rounded-full"></div>
      </div>

      <!-- Right Text -->
      <div class="w-full md:w-1/2 px-4 md:px-6 md:pl-12 text-center md:text-left">
        <h3 class="text-lg sm:text-xl font-bold mb-2">01. Humble Beginnings</h3>
        <p class="text-gray-600 text-sm sm:text-base">
          Founded with a vision to transform the import-export landscape, Animocare Private Limited began as a modest operation committed to integrity and service excellence.
        </p>
      </div>
    </div>

    <!-- Timeline Item 2 -->
    <div class="flex flex-col md:flex-row-reverse items-center mb-16 md:mb-24 relative">
      <!-- Right Image -->
      <div class="w-full md:w-1/2 px-4 md:px-6 md:pl-12 mb-6 md:mb-0">
        <img src="/public/assets/images/story2.jpg" alt="Growth" class="rounded-xl shadow-md w-full object-cover h-56 sm:h-64">
      </div>

      <!-- Dot (only on desktop) -->
      <div class="hidden md:flex flex-col justify-center items-center absolute left-1/2 transform -translate-x-1/2 h-full">
        <div class="w-3 h-3 bg-brand rounded-full"></div>
      </div>

      <!-- Left Text -->
      <div class="w-full md:w-1/2 px-4 md:px-6 md:pr-12 text-center md:text-left">
        <h3 class="text-lg sm:text-xl font-bold mb-2">02. Expanding Our Reach</h3>
        <p class="text-gray-600 text-sm sm:text-base">
          Through strategic partnerships and an unwavering focus on quality, we steadily grew into new markets, bridging producers and buyers across continents.
        </p>
      </div>
    </div>

    <!-- Timeline Item 3 -->
    <div class="flex flex-col md:flex-row items-center mb-8 md:mb-24 relative">
      <!-- Left Image -->
      <div class="w-full md:w-1/2 px-4 md:px-6 md:pr-12 mb-6 md:mb-0">
        <img src="/public/assets/images/story3.jpg" alt="Today" class="rounded-xl shadow-md w-full object-cover h-56 sm:h-64">
      </div>

      <!-- Dot (only on desktop) -->
      <div class="hidden md:flex flex-col justify-center items-center absolute left-1/2 transform -translate-x-1/2 h-full">
        <div class="w-3 h-3 bg-brand rounded-full"></div>
      </div>

      <!-- Right Text -->
      <div class="w-full md:w-1/2 px-4 md:px-6 md:pl-12 text-center md:text-left">
        <h3 class="text-lg sm:text-xl font-bold mb-2">03. Animocare Private Limited Today</h3>
        <p class="text-gray-600 text-sm sm:text-base">
          Animocare Private Limited is working hard to be recognized as a trusted name in international trade—known for ethical sourcing, transparent logistics, and an uncompromising commitment to excellence.
        </p>
      </div>
    </div>
  </div>
</section>



</body>
<?php include 'includes/footer.php'; ?>