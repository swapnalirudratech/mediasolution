<body class="bg-[#F5F0E1] min-h-screen flex items-center justify-center p-4">
    <!-- Background design elements -->
    <div class="absolute top-0 right-0 w-2/3 h-full">
        <div class="absolute top-0 right-0 w-full h-full bg-[#EADBC8] rounded-bl-[40%]"></div>
        <!-- <div class="absolute top-20 right-20 w-32 h-32 bg-[#D2B48C] rounded-full"></div>
        <div class="absolute bottom-40 right-40 w-40 h-40 bg-[#8B5E3C] rounded-full opacity-50"></div> -->
    </div>

    <!-- Main container -->
    <div class="w-full max-w-5xl bg-white rounded-xl shadow-xl overflow-hidden z-10 flex">
        <!-- Left side - Login form -->
        <div class="w-full lg:w-1/2 p-10 lg:p-14">
            <!-- Logo -->
            <!-- <div class="flex items-center mb-14">
                <div class="h-10 w-10 rounded-lg bg-gradient-to-br from-teal-400 to-teal-600 flex items-center justify-center text-white font-bold text-xl">
                    <i class="fas fa-hotel"></i>
                </div>
                <span class="ml-2 text-gray-700 font-medium">LuxStay</span>
            </div> -->

            <!-- Login form -->
            <div class="max-w-md">
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Login</h2>
                    <p class="text-[#8B5E3C]">Please enter your credentials to access the dashboard</p>
                </div>

                <form id="loginForm" class="space-y-6" method="post" action="" enctype="multipart/form-data">
                    <!-- Email input -->
                    <div class="relative">
                        <div class="flex items-center p-3 bg-gray-50 rounded-lg border border-gray-200">
                            <span class="text-[#8B5E3C] mr-3">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" id="email" name="email" required placeholder="Email or username"
                                class="w-full bg-transparent focus:outline-none text-gray-700">
                            <p id="emailError" class="mt-1 text-sm text-red-600 hidden"></p>
                        </div>
                        <div class="absolute -top-2 left-3 px-1 bg-white">
                            <label for="email" class="text-xs text-gray-400">EMAIL</label>
                        </div>
                    </div>

                    <!-- Password input -->
                    <div class="relative">
                        <div class="flex items-center p-3 bg-gray-50 rounded-lg border border-gray-200">
                            <span class="text-[#8B5E3C] mr-3">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" id="password" name="password" required placeholder="Password"
                                class="w-full bg-transparent focus:outline-none text-gray-700">
                            <button type="button" id="togglePassword" onclick="togglePasswordVisibility()"
                                class="text-gray-400 hover:text-teal-500">
                                <i class="fas fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                        <div class="absolute -top-2 left-3 px-1 bg-white">
                            <label class="text-xs text-gray-400">PASSWORD</label>
                        </div>
                    </div>

                    <!-- Remember me and Forgot password -->
                    <!-- <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" class="w-4 h-4 text-teal-500 border-gray-300 rounded focus:ring-teal-500">
                            <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
                        </div>
                        <a href="#" class="text-sm text-teal-600 hover:underline">Forgot password?</a>
                    </div> -->

                    <input type="hidden" name="isdistributor" value="0">

                    <!-- Login button -->
                    <button type="submit" name="login"
                        class="w-full py-3 bg-gradient-to-r from-[#8B5E3C] to-[#4A3225] text-white font-medium rounded-lg hover:from-[#4A3225] hover:to-[#8B5E3C] transition-colors shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        Login
                    </button>
                </form>
            </div>
        </div>

        <!-- Right side - Simplified Hotel Illustration -->
        <div class="hidden lg:block w-1/2 bg-[#f5f0e1] p-12 relative">
            <div class="w-full h-full flex items-center justify-center">
                <div class="relative w-64">
                    <!-- Room key illustration -->
                    <div
                        class="absolute -top-12 -right-4 w-20 h-12 bg-white rounded-lg shadow-md transform rotate-12 flex flex-col justify-center p-2">
                        <div class="h-1.5 w-full bg-[#8B5E3C] mb-1"></div>
                        <div class="h-1.5 w-12 bg-gray-300"></div>
                    </div>

                    <!-- Simple dashboard mockup -->
                    <div class="bg-white rounded-lg shadow-lg p-4 z-10 relative">
                        <!-- Header -->
                        <div class="flex justify-between items-center mb-4">
                            <div class="h-3 w-20 bg-[#8B5E3C] rounded-full"></div>
                            <div class="h-6 w-6 rounded-full bg-teal-100 flex items-center justify-center">
                                <div class="h-3 w-3 rounded-full bg-[#8B5E3C]"></div>
                            </div>
                        </div>

                        <!-- Room status boxes -->
                        <div class="grid grid-cols-3 gap-2 mb-4">
                            <div class="h-16 bg-green-100 rounded p-2">
                                <div class="h-2 w-12 bg-green-500 rounded-full mb-2"></div>
                                <div class="h-6 w-6 rounded-full bg-green-200 flex items-center justify-center">
                                    <span class="text-xs text-green-700">24</span>
                                </div>
                            </div>
                            <div class="h-16 bg-blue-100 rounded p-2">
                                <div class="h-2 w-12 bg-blue-500 rounded-full mb-2"></div>
                                <div class="h-6 w-6 rounded-full bg-blue-200 flex items-center justify-center">
                                    <span class="text-xs text-blue-700">8</span>
                                </div>
                            </div>
                            <div class="h-16 bg-amber-100 rounded p-2">
                                <div class="h-2 w-12 bg-amber-500 rounded-full mb-2"></div>
                                <div class="h-6 w-6 rounded-full bg-amber-200 flex items-center justify-center">
                                    <span class="text-xs text-amber-700">3</span>
                                </div>
                            </div>
                        </div>

                        <!-- Calendar header -->
                        <!-- <div class="h-4 w-20 bg-[#8B5E3C] rounded-full mb-2"></div> -->

                        <!-- Minimal calendar -->
                        <!-- <div class="grid grid-cols-7 gap-1">
                            <div class="h-6 w-6 flex items-center justify-center">
                                <div class="h-4 w-4 rounded-full border border-gray-300"></div>
                            </div>
                            <div class="h-6 w-6 flex items-center justify-center">
                                <div class="h-4 w-4 rounded-full border border-gray-300"></div>
                            </div>
                            <div class="h-6 w-6 flex items-center justify-center">
                                <div class="h-4 w-4 rounded-full border border-gray-300"></div>
                            </div>
                            <div class="h-6 w-6 flex items-center justify-center">
                                <div class="h-4 w-4 rounded-full bg-[#8B5E3C]"></div>
                            </div>
                            <div class="h-6 w-6 flex items-center justify-center">
                                <div class="h-4 w-4 rounded-full border border-gray-300"></div>
                            </div>
                            <div class="h-6 w-6 flex items-center justify-center">
                                <div class="h-4 w-4 rounded-full border border-gray-300"></div>
                            </div>
                            <div class="h-6 w-6 flex items-center justify-center">
                                <div class="h-4 w-4 rounded-full border border-gray-300"></div>
                            </div>
                        </div> -->

                        <!-- Bottom list items -->
                        <div class="mt-4 space-y-2">
                            <div class="flex items-center">
                                <div class="h-6 w-6 rounded-full bg-teal-100 flex items-center justify-center mr-2">
                                    <i class="fas fa-check text-xs text-[#8B5E3C]"></i>
                                </div>
                                <div class="h-3 w-32 bg-gray-200 rounded-full"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="h-6 w-6 rounded-full bg-teal-100 flex items-center justify-center mr-2">
                                    <i class="fas fa-check text-xs text-[#8B5E3C]"></i>
                                </div>
                                <div class="h-3 w-28 bg-gray-200 rounded-full"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Hotel service icons in a subtle vertical arrangement -->
                    <div class="absolute -left-16 top-6 space-y-3">
                        <div
                            class="w-10 h-10 rounded-full bg-white shadow-sm flex items-center justify-center text-teal-500">
                            <i class="fas fa-concierge-bell text-base"></i>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full bg-white shadow-sm flex items-center justify-center text-teal-500">
                            <i class="fas fa-utensils text-base"></i>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full bg-white shadow-sm flex items-center justify-center text-teal-500">
                            <i class="fas fa-coffee text-base"></i>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full bg-white shadow-sm flex items-center justify-center text-teal-500">
                            <i class="fas fa-hamburger text-base"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/footerscript.php"; ?>
</body>






<body
    class="bg-[url('public/assets/images/bgimg11.jpg')] bg-cover bg-center flex items-center justify-center h-screen p-4">
    <div class="bg-white rounded-2xl shadow-lg flex overflow-hidden w-full max-w-5xl h-[80%]">
        <!-- Left Side - Blue Section with curved edge -->
        <div class=" text-white p-8 relative w-1/2 rounded-r-[120px]">
            <!-- <div class="relative z-10 mt-12">
                <h1 class="text-4xl font-bold mb-1">WELCOME</h1>
                
            </div> -->

            <img src="public/assets/images/e-learning-concept-man-teaching-on-screen-with-a-book-man-watching-online-class-online-education-home-schooling-online-book-distance-education-and-online-business-school-isolated-illustration-free-vector.jpg"
                alt="" class="w-full h-full object-cover">
        </div>

        <!-- Right Side - Sign In Form -->
        <div class="bg-white p-8 w-1/2 flex flex-col justify-center relative">
            <!-- Decorative circles on right side -->
            <div class="absolute -top-14 -right-14 w-32 h-32 rounded-full bg-blue-100"></div>
            <div class="absolute bottom-0 right-10 w-16 h-16 rounded-full bg-blue-100"></div>

            <div class="relative z-10 px-4">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Log in</h2>
                <p class="text-gray-500 text-xs mb-6">Please enter your credentials to access the dashboard</p>

                <form id="loginForm" class="space-y-6" method="post" action="" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label class="flex items-center border border-gray-300 rounded-lg px-3 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <input type="email" id="email" name="email" required placeholder="Email or username"
                                class="outline-none bg-transparent w-full text-sm" />
                            <p id="emailError" class="mt-1 text-sm text-red-600 hidden"></p>
                        </label>
                    </div>

                    <div class="mb-4">
                        <label class="flex items-center border border-gray-300 rounded-lg px-3 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <input type="password" id="password" name="password" required placeholder="Password"
                                class="outline-none bg-transparent w-full text-sm  p-2 pr-10" />

                            <button type="button" onclick="togglePasswordVisibility()"
                                class="absolute right-10 text-gray-400 hover:text-teal-500">
                                <i class="fas fa-eye" id="eyeIcon"></i>
                            </button>
                        </label>
                    </div>

                    <button type="submit" name="login"
                        class="w-full bg-blue-600 text-white py-2 rounded-lg font-medium hover:bg-blue-700 transition-colors mb-4">
                        Sing in
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            const eyeIcon = document.getElementById("eyeIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
 <?php include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/footerscript.php"; ?>
</body>