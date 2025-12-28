<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>

<style>
    .hero-bg {
        background-image: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.7)), url('https://images.unsplash.com/photo-1542204165-65bf26472b9b?q=80&w=2574&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
    }
</style>

<body class="font-sans text-gray-700 antialiased bg-gray-50">

   
    <section class="hero-bg relative h-screen min-h-[600px] flex items-center justify-center text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-brand-600/30 border border-brand-400/30 text-brand-100 text-sm font-semibold mb-6 backdrop-blur-sm">
                Established 2012
            </span>
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                Connect Brands with Audiences <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Across India & Worldwide</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
                One of India's most known marketing communications companies. Deep expertise in OOH, Digital, and Brand Technology.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#services" class="px-8 py-3 bg-brand-600 rounded-full font-semibold hover:bg-brand-700 transition transform hover:-translate-y-1">
                    Explore Services
                </a>
                <a href="#contact" class="px-8 py-3 bg-transparent border border-white rounded-full font-semibold hover:bg-white hover:text-brand-900 transition">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-brand-100 rounded-full mix-blend-multiply filter blur-xl opacity-70"></div>
                    <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2574&auto=format&fit=crop" alt="Office team" class="relative rounded-2xl shadow-2xl z-10">
                    <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-xl shadow-xl z-20 border-l-4 border-brand-600">
                        <p class="text-4xl font-bold text-brand-900">10+</p>
                        <p class="text-gray-600 font-medium">Years of Excellence</p>
                    </div>
                </div>

                <div>
                    <h2 class="text-brand-600 font-bold tracking-wide uppercase text-sm mb-2">About Media Solutions</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Driven by Creativity, Innovation, & Measurability.</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Founded in 2012, Media Solutions is a premier marketing communications agency. We specialize in connecting brands with their ideal audiences through strategic outdoor advertising and digital integration.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Whether it's a massive billboard campaign or a targeted BTL activity, we deliver campaigns that inspire, engage, and create measurable impact.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i> OOH & DOOH Specialists
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i> Pan-India Presence
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i> Sustainable Solutions
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Our Core Services</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Comprehensive marketing solutions ranging from traditional outdoor media to modern digital technologies.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-brand-50 rounded-lg flex items-center justify-center text-brand-600 text-2xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition">
                        <i class="fas fa-billboard"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">OOH & DOOH</h3>
                    <p class="text-gray-600">Outdoor advertising that captures attention. From traditional billboards to Digital Out of Home screens.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-brand-50 rounded-lg flex items-center justify-center text-brand-600 text-2xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition">
                        <i class="fas fa-tv"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">TV & Print Media</h3>
                    <p class="text-gray-600">Mainline media services including television commercials and newspaper advertising campaigns.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-brand-50 rounded-lg flex items-center justify-center text-brand-600 text-2xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition">
                        <i class="fas fa-film"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cinema On-Screen</h3>
                    <p class="text-gray-600">Engage captive audiences with high-impact cinema advertising before movies and during intervals.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-brand-50 rounded-lg flex items-center justify-center text-brand-600 text-2xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">BTL Activity</h3>
                    <p class="text-gray-600">Below The Line activities, activations, and direct engagement to create personal connections with consumers.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-brand-50 rounded-lg flex items-center justify-center text-brand-600 text-2xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Digital Marketing</h3>
                    <p class="text-gray-600">Brand technology solutions and digital strategies to complement your offline presence.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-brand-50 rounded-lg flex items-center justify-center text-brand-600 text-2xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Event Management</h3>
                    <p class="text-gray-600">End-to-end planning and execution of corporate events, launches, and promotional gatherings.</p>
                </div>
            </div>
        </div>
    </section>



</body>

</html>
<?php
include 'includes/footer.php';
?>