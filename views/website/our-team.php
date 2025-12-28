<?php
$page = 'our-team';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="overflow-x-hidden">
    <section class="relative h-screen max-md:h-[70vh] flex items-center justify-start bg-cover bg-center"
        style="background-image: url('/public/assets/images/team.jpg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>

        <div class="relative z-10 max-w-3xl px-6 lg:px-20">
            <h1 class="lg:text-5xl md:text-4xl text-2xl font-bold text-white leading-tight">
                <div class="md:mb-3">Our Team</div>
                <div class="mb-3 text-brand">People Behind Animocare Private Limited</div>
            </h1>

            <p class="mt-6 text-base text-gray-200 max-md:hidden">
                Meet the dedicated professionals driving Animocare Private Limited’s mission to connect global markets with trust and excellence.
            </p>
        </div>
    </section>

    <div class="w-full max-md:w-[90%] mx-auto py-14">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <span class="text-brand font-semibold tracking-wide uppercase">
                <span class="text-brand">✦</span> Our Team
            </span>
            <h2 class="text-4xl max-md:text-3xl font-extrabold mt-3 mb-4">
                Meet the People <br />
                Behind Animocare Private Limited’s Global Success
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                A diverse team of professionals dedicated to building trust, driving innovation, and connecting markets worldwide.
            </p>
        </div>


        <!-- Team Grid -->
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8 max-md:gap-6 md:mb-12 w-[70vw] max-md:w-full mx-auto">
            <!-- Team Member 1 -->
            <div class="group cursor-pointer">
                <div class="bg-white md:p-6">
                    <div class="relative overflow-hidden mb-6 max-md:mb-1">
                        <img src="/public/assets/images/profile.jpeg"
                            alt="Demon Cats"
                            class="w-full md:h-64 lg:h-80 max-md:h-36 object-cover transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-l from-brand-brandto-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>


                        <div
                            class="absolute top-4 right-4 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-8 group-hover:translate-x-0">
                            <div class="flex flex-col space-y-3">
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <h3
                            class="text-xl max-md:text-base font-semibold text-gray-900 group-hover:text-brand-brandnsition-colors duration-300">
                            Demon Cats</h3>
                        <p class="text-gray-500 max-md:text-sm group-hover:text-gray-700 transition-colors duration-300">Logistics Partner</p>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="group cursor-pointer">
                <div class="bg-white md:p-6">
                    <div class="relative overflow-hidden mb-6 max-md:mb-1">
                        <img src="/public/assets/images/profile.jpeg"
                            alt="Sammy Flaws"
                            class="w-full md:h-64 lg:h-80 max-md:h-36 object-cover transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-l from-brand-brandto-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>

                        <div
                            class="absolute top-4 right-4 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-8 group-hover:translate-x-0">
                            <div class="flex flex-col space-y-3">
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <h3
                            class="text-xl max-md:text-base font-semibold text-gray-900 group-hover:text-brand-brandnsition-colors duration-300">
                            Demon Cats</h3>
                        <p class="text-gray-500 max-md:text-sm group-hover:text-gray-700 transition-colors duration-300">Logistics Partner</p>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="group cursor-pointer">
                <div class="bg-white md:p-6">
                    <div class="relative overflow-hidden mb-6 max-md:mb-1">
                        <img src="/public/assets/images/profile.jpeg"
                            alt="Emily Carter"
                            class="w-full md:h-64 lg:h-80 max-md:h-36 object-cover transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-l from-brand-brandto-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>

                        <div
                            class="absolute top-4 right-4 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-8 group-hover:translate-x-0">
                            <div class="flex flex-col space-y-3">
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <h3
                            class="text-xl max-md:text-base font-semibold text-gray-900 group-hover:text-brand-brandnsition-colors duration-300">
                            Demon Cats</h3>
                        <p class="text-gray-500 max-md:text-sm group-hover:text-gray-700 transition-colors duration-300">Logistics Partner</p>
                    </div>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="group cursor-pointer">
                <div class="bg-white md:p-6">
                    <div class="relative overflow-hidden mb-6 max-md:mb-1">
                        <img src="/public/assets/images/profile.jpeg"
                            alt="Simon Cyrene"
                            class="w-full md:h-64 lg:h-80 max-md:h-36 object-cover transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-l from-brand-brandto-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>

                        <div
                            class="absolute top-4 right-4 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-8 group-hover:translate-x-0">
                            <div class="flex flex-col space-y-3">
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <h3
                            class="text-xl max-md:text-base font-semibold text-gray-900 group-hover:text-brand-brandnsition-colors duration-300">
                            Demon Cats</h3>
                        <p class="text-gray-500 max-md:text-sm group-hover:text-gray-700 transition-colors duration-300">Logistics Partner</p>
                    </div>
                </div>
            </div>

            <!-- Team Member 5 -->
            <div class="group cursor-pointer">
                <div class="bg-white md:p-6">
                    <div class="relative overflow-hidden mb-6 max-md:mb-1">
                        <img src="/public/assets/images/profile.jpeg"
                            alt="Paul Flawus"
                            class="w-full md:h-64 lg:h-80 max-md:h-36 object-cover transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-l from-brand-brandto-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>

                        <div
                            class="absolute top-4 right-4 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-8 group-hover:translate-x-0">
                            <div class="flex flex-col space-y-3">
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <h3
                            class="text-xl max-md:text-base font-semibold text-gray-900 group-hover:text-brand-brandnsition-colors duration-300">
                            Demon Cats</h3>
                        <p class="text-gray-500 max-md:text-sm group-hover:text-gray-700 transition-colors duration-300">Logistics Partner</p>
                    </div>
                </div>
            </div>

            <!-- Team Member 6 -->
            <div class="group cursor-pointer">
                <div class="bg-white md:p-6">
                    <div class="relative overflow-hidden mb-6 max-md:mb-1">
                        <img src="/public/assets/images/profile.jpeg"
                            alt="Melissa Doe"
                            class="w-full md:h-64 lg:h-80 max-md:h-36 object-cover transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-l from-brand-brandto-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>

                        <div
                            class="absolute top-4 right-4 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-8 group-hover:translate-x-0">
                            <div class="flex flex-col space-y-3">
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <h3
                            class="text-xl max-md:text-base font-semibold text-gray-900 group-hover:text-brand-brandnsition-colors duration-300">
                            Demon Cats</h3>
                        <p class="text-gray-500 max-md:text-sm group-hover:text-gray-700 transition-colors duration-300">Logistics Partner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add subtle entrance animation
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.group');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>
<?php include 'includes/footer.php'; ?>