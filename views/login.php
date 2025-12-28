<!DOCTYPE html>
<html lang="en">

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/header.php"; ?>



<body
    class="bg-[url('public/assets/images/bgimg11.jpg')] bg-cover bg-center flex items-center justify-center h-screen p-4">
    <div class="bg-white rounded-2xl shadow-lg flex overflow-hidden w-full max-w-5xl h-[80%]">
        <!-- Left Side - Blue Section with curved edge -->
        <div class=" text-white p-8 relative w-1/2 rounded-r-[120px]">
            <!-- <div class="relative z-10 mt-12">
                <h1 class="text-4xl font-bold mb-1">WELCOME</h1>
                
            </div> -->

            <img src="public/assets/images/loginimg.jpg"
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

</body>

</html>