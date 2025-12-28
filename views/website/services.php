<?php
$page = 'services';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="overflow-x-hidden">
    <section class="relative h-screen max-md:h-[70vh] flex items-center justify-start bg-cover bg-center" style="background-image: url('/public/assets/images/6.jpg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>

        <div class="relative z-10 max-w-3xl px-6 lg:px-20">
            <h1 class="lg:text-5xl md:text-4xl text-2xl font-bold text-white leading-tight">
                <div class="md:mb-3">Our Services</div>
                <div class="mb-3 text-brand">Simplifying Global Trade</div>
            </h1>

            <p class="mt-6 text-base text-gray-200 max-md:hidden">
                End-to-end import and export solutions built on trust, quality, and global reach.
            </p>
        </div>
    </section>

    <section class="w-full mx-auto md:px-6 py-20 max-md:py-10">
        <!-- Header -->
        <div class="text-center mb-12 max-md:w-[90%] mx-auto">
            <span class="text-brand font-semibold tracking-wide uppercase">
                <span class="text-brand">✦</span> Featured Services</span>
            <h2 class="text-4xl max-md:text-3xl font-extrabold mt-3 mb-4">
                Find The Perfect Global Trade <br />
                Solution With Our Service
            </h2>
            <p class="text-gray-600 max-w-2xl max-md:w-[90%] mx-auto">
                From sourcing and procurement to logistics and distribution, Animocare Private Limited provides end-to-end import–export
                services. Our experts ensure quality, compliance, and efficiency at every stage of the global supply chain.
            </p>
        </div>

        <!-- Service Grid -->
        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8 w-[80%] max-md:w-[90%] mx-auto">
            <!-- Card 1 -->
            <div class="bg-white h-full rounded-2xl shadow-sm p-6 max-md:border hover:shadow-lg transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-6 max-md:mb-3">
                        <h3 class="text-2xl max-md:text-lg font-semibold">Global Sourcing</h3>
                        <div class="bg-light p-2 rounded-full text-white h-14 w-14 max-md:h-10 max-md:w-10 flex items-center justify-center">
                            <i class="fa-solid fa-globe text-2xl max-md:text-lg"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        We identify and source premium-quality agricultural and industrial products from trusted global suppliers.
                    </p>
                </div>
                <img src="/public/assets/images/banner1.jpg" alt="Global Sourcing" class="rounded-xl h-56 max-md:h-40 w-full object-cover mt-auto" />
            </div>

            <!-- Card 2 -->
            <div class="bg-white h-full rounded-2xl shadow-sm p-6 max-md:border hover:shadow-lg transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-6 max-md:mb-3">
                        <h3 class="text-2xl max-md:text-lg font-semibold">International Shipping & Logistics</h3>
                        <div class="bg-light p-2 rounded-full text-white h-14 w-14 max-md:h-10 max-md:w-10 flex items-center justify-center">
                            <i class="fa-solid fa-ship text-2xl max-md:text-lg"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Reliable, fast, and cost-effective shipping solutions across sea, air, and land—ensuring timely deliveries worldwide.
                    </p>
                </div>
                <img src="/public/assets/images/s2.jpg" alt="International Shipping" class="rounded-xl h-56 max-md:h-40 w-full object-cover mt-auto" />
            </div>

            <!-- Card 3 -->
            <!-- <div class="bg-white h-full rounded-2xl shadow-sm p-6 max-md:border hover:shadow-lg transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-6 max-md:mb-3">
                        <h3 class="text-2xl max-md:text-lg font-semibold">Warehousing & Distribution</h3>
                        <div class="bg-light p-2 rounded-full text-white h-14 w-14 max-md:h-10 max-md:w-10 flex items-center justify-center">
                            <i class="fa-solid fa-warehouse text-2xl max-md:text-lg"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Comprehensive storage and fulfillment solutions ensuring product safety, accessibility, and real-time tracking.
                    </p>
                </div>
                <img src="/public/assets/images/s3.jpg" alt="Warehousing" class="rounded-xl h-56 max-md:h-40 w-full object-cover mt-auto" />
            </div> -->

            <!-- Card 4 -->
            <div class="bg-white h-full rounded-2xl shadow-sm p-6 max-md:border hover:shadow-lg transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-6 max-md:mb-3">
                        <h3 class="text-2xl max-md:text-lg font-semibold">Customs & Compliance</h3>
                        <div class="bg-light p-2 rounded-full text-white h-14 w-14 max-md:h-10 max-md:w-10 flex items-center justify-center">
                            <i class="fa-solid fa-file-signature text-2xl max-md:text-lg"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Expert management of international trade regulations, customs documentation, and certification processes.
                    </p>
                </div>
                <img src="/public/assets/images/s4.jpg" alt="Customs & Compliance" class="rounded-xl h-56 max-md:h-40 w-full object-cover mt-auto" />
            </div>

            <!-- Card 5 -->
            <div class="bg-white h-full rounded-2xl shadow-sm p-6 max-md:border hover:shadow-lg transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-6 max-md:mb-3">
                        <h3 class="text-2xl max-md:text-lg font-semibold">Sustainable & Ethical Sourcing</h3>
                        <div class="bg-light p-2 rounded-full text-white h-14 w-14 max-md:h-10 max-md:w-10 flex items-center justify-center">
                            <i class="fa-solid fa-leaf text-2xl max-md:text-lg"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Committed to responsible sourcing practices that protect the environment and support ethical global supply chains.
                    </p>
                </div>
                <img src="/public/assets/images/s5.jpg" alt="Sustainable Sourcing" class="rounded-xl h-56 max-md:h-40 w-full object-cover mt-auto" />
            </div>

            <!-- Card 6 -->
            <div class="bg-white h-full rounded-2xl shadow-sm p-6 max-md:border hover:shadow-lg transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-6 max-md:mb-3">
                        <h3 class="text-2xl max-md:text-lg font-semibold">Food & Commodity Trading</h3>
                        <div class="bg-light p-2 rounded-full text-white h-14 w-14 max-md:h-10 max-md:w-10 flex items-center justify-center">
                            <i class="fa-solid fa-seedling text-2xl max-md:text-lg"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Specializing in the import and export of food items, edible oils, fertilizers, and agricultural commodities.
                    </p>
                </div>
                <img src="/public/assets/images/s6.jpg" alt="Food & Commodity Trading" class="rounded-xl h-56 max-md:h-40 w-full object-cover mt-auto" />
            </div>
        </div>



        <!-- Pagination -->
        <!-- <div class="flex justify-center items-center mt-12 space-x-2">
            <button class="h-3 w-3 bg-brand rounded-full"></button>
            <button class="h-3 w-3 bg-gray-300 rounded-full"></button>
            <span class="text-gray-500 text-sm font-medium ml-4">1 / 2 →</span>
        </div> -->
    </section>
</body>
<?php include 'includes/footer.php'; ?>