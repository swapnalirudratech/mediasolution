<?php
$page = 'faq';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body>
     <div class="w-full bg-gray-900 h-[50vh] items-center justify-center flex">
        <h1 class="lg:text-5xl md:text-4xl text-3xl font-semibold text-center text-white">Frequently Asked Questions</h1>
    </div>
    <!-- <div>
        <h1 class="text-5xl font-semibold text-center text-gray-900 my-10">Frequently Asked Questions</h1>
    </div> -->
    <section class="w-full mx-auto py-16 max-md:py-8">
        <div class="w-[70vw] max-md:w-[90vw] mx-auto flex flex-col items-center justify-center">
            <!-- <div class="w-full">
                <p class="text-xl font-semibold text-left text-gray-900 mb-10">FAQs</p>
            </div> -->
            <div class="space-y-4 divide-y divide-gray-200 w-full">

                <!-- FAQ Item -->
                <div class="bg-white overflow-hidden">
                    <button onclick="toggleFAQ(this)"
                        class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-900 hover:bg-gray-100 transition">
                        Q1: What products does Animocare Private Limited export?
                        <span class="ml-4 transform transition-transform"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="hidden p-5 text-gray-700 leading-relaxed">
                        Animocare Private Limited exports a variety of high-quality products including food items, edible oils, fertilizers, and other essential goods to international markets.
                    </div>
                </div>

                <div class="bg-white overflow-hidden">
                    <button onclick="toggleFAQ(this)"
                        class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-900 hover:bg-gray-100 transition">
                        Q2: Which countries do you ship to?
                        <span class="ml-4 transform transition-transform"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="hidden p-5 text-gray-700 leading-relaxed">
                        Animocare Private Limited ships globally, covering major international markets across Asia, Europe, Africa, and the Americas, ensuring timely delivery and reliable service.
                    </div>
                </div>

                <div class="bg-white overflow-hidden">
                    <button onclick="toggleFAQ(this)"
                        class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-900 hover:bg-gray-100 transition">
                        Q3: How can I place an order?
                        <span class="ml-4 transform transition-transform"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="hidden p-5 text-gray-700 leading-relaxed">
                        Orders can be placed directly through our website, via email, or by contacting our sales team. We provide personalized support for all orders, big or small.
                    </div>
                </div>

                <div class="bg-white overflow-hidden">
                    <button onclick="toggleFAQ(this)"
                        class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-900 hover:bg-gray-100 transition">
                        Q4: What are your shipping timelines?
                        <span class="ml-4 transform transition-transform"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="hidden p-5 text-gray-700 leading-relaxed">
                        Shipping timelines depend on the product and destination, but Animocare Private Limited ensures fast and reliable delivery, with updates provided at every stage of transit.
                    </div>
                </div>

                <div class="bg-white overflow-hidden">
                    <button onclick="toggleFAQ(this)"
                        class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-900 hover:bg-gray-100 transition">
                        Q5: What payment methods are accepted?
                        <span class="ml-4 transform transition-transform"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="hidden p-5 text-gray-700 leading-relaxed">
                        We accept international bank transfers, major credit/debit cards, and popular digital payment methods depending on the region.
                    </div>
                </div>

                <div class="bg-white overflow-hidden">
                    <button onclick="toggleFAQ(this)"
                        class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-900 hover:bg-gray-100 transition">
                        Q6: How does Animocare Private Limited ensure product quality?
                        <span class="ml-4 transform transition-transform"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="hidden p-5 text-gray-700 leading-relaxed">
                        Quality is our priority. All products go through strict quality checks and are sourced from trusted suppliers to ensure they meet international standards.
                    </div>
                </div>

                <div class="bg-white overflow-hidden">
                    <button onclick="toggleFAQ(this)"
                        class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-900 hover:bg-gray-100 transition">
                        Q7: Can I track my shipment?
                        <span class="ml-4 transform transition-transform"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="hidden p-5 text-gray-700 leading-relaxed">
                        Yes. Animocare Private Limited provides tracking details for all shipments so you can monitor delivery progress in real-time.
                    </div>
                </div>

                <div class="bg-white overflow-hidden">
                    <button onclick="toggleFAQ(this)"
                        class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-900 hover:bg-gray-100 transition">
                        Q8: Does Animocare Private Limited offer customized packaging?
                        <span class="ml-4 transform transition-transform"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="hidden p-5 text-gray-700 leading-relaxed">
                        Yes, we offer customized packaging solutions to meet client requirements, ensuring products arrive safely and in brand-consistent presentation.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        function toggleFAQ(button) {
            const answer = button.nextElementSibling;
            const icon = button.querySelector("span");

            if (answer.classList.contains("hidden")) {
                answer.classList.remove("hidden");
                icon.style.transform = "rotate(180deg)";
            } else {
                answer.classList.add("hidden");
                icon.style.transform = "rotate(0deg)";
            }
        }
    </script>
</body>
<?php include 'includes/footer.php'; ?>