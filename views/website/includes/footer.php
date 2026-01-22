 <footer class="relative py-10 bg-[#1a1a1a] overflow-hidden group w-full">

     <div class="absolute inset-0 z-0">
         <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?q=80&w=2613&auto=format&fit=crop" alt="City Night" class="w-full h-full object-cover opacity-50 group-hover:scale-105 transition duration-[2s]">
         <div class="absolute inset-0 bg-gradient-to-r from-[#1a1a1a]/70 via-[#1a1a1a]/80 to-[#1a1a1a]/70"></div>
     </div>

     <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-brand-accent/20 rounded-full blur-[100px] animate-pulse"></div>
     <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-brand-accent/20 rounded-full blur-[100px]"></div>

     <div class="w-[80vw] max-md:w-[90vw] mx-auto px-0 sm:px-6 lg:px-8 relative z-10">

         <div class="py-12 max-md:py-4">
             <p class="text-8xl max-md:text-4xl whitespace-nowrap text-white text-center mb-8 font-extrabold font-display">Mediaa <span class="text-brand-accent">Solutions</span></p>
             <div class="w-[50%] mx-auto h-[1px] bg-gradient-to-r from-transparent via-brand-accent to-transparent mb-8"></div>
         </div>

         <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-md:gap-6 mb-12">

             <div class="mb-12 max-md:mb-4 text-white">
                 <h4 class="text-white font-display font-bold text-xl uppercase mb-6 tracking-wide">Main Office</h4>
                 <p class="leading-loose">
                     Bharat Mahal, B Wing - 23<br>
                     Thane East, 400603<br>
                     (Near Shiv Sena Office)<br>
                     Maharashtra, India
                 </p>
             </div>

             <div class="mb-12 max-md:mb-4 text-white">
                 <h4 class="text-white font-display font-bold text-xl uppercase mb-6 tracking-wide">Contact</h4>
                 <ul class="space-y-4">
                     <li class="flex items-center gap-3">
                         <i class="fas fa-phone text-brand-accent"></i>
                         <a href="tel:+918976309837" class="hover:text-white transition">+91 89763 09837</a>
                     </li>
                     <li class="flex items-center gap-3">
                         <i class="fas fa-envelope text-brand-accent"></i>
                         <a href="mailto:info@mediaasolutions.com" class="hover:text-white transition">info@mediaasolutions.com</a>
                     </li>
                     <li class="flex items-center gap-3">
                         <i class="fas fa-envelope text-brand-accent"></i>
                         <a href="mailto:contactus@mediaasolutions.com" class="hover:text-white transition">contactus@mediaasolutions.com</a>
                     </li>
                     <!-- <li class="flex items-center gap-3">
                         <i class="fas fa-globe text-brand-accent"></i>
                         <a href="http://www.mediasolutions.com" class="hover:text-white transition">www.mediasolutions.com</a>
                     </li> -->
                 </ul>
             </div>

             <div class="mb-12 max-md:mb-4 text-white">
                 <h4 class="text-white font-display font-bold text-xl uppercase mb-6 tracking-wide">Mediaa Solutions</h4>
                 <p class="mb-6">
                     Driven by creativity, innovation, measurability, and sustainability. Connecting brands with audiences since 2012.
                 </p>
                 <div class="flex space-x-4">
                     <a href="#" class="w-8 h-8 border border-gray-600 flex items-center justify-center hover:bg-brand-accent hover:border-brand-accent hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                     <a href="#" class="w-8 h-8 border border-gray-600 flex items-center justify-center hover:bg-brand-accent hover:border-brand-accent hover:text-white transition"><i class="fab fa-instagram"></i></a>
                     <a href="#" class="w-8 h-8 border border-gray-600 flex items-center justify-center hover:bg-brand-accent hover:border-brand-accent hover:text-white transition"><i class="fab fa-linkedin-in"></i></a>
                 </div>
             </div>
         </div>

         <div class="border-t border-gray-500 pt-8 flex flex-col md:flex-row justify-between items-center text-white">
             <p class="max-md:text-center">&copy; <?= date('Y') ?> Mediaa Solutions. All Rights Reserved.</p>
             <div class="space-x-4 mt-4 md:mt-0">
                 <a href="#" class="hover:text-white">Privacy Policy</a>
                 <a href="#" class="hover:text-white">Terms of Service</a>
             </div>
         </div>
     </div>

     <!------------------------ fix buttons------------------------ -->

     <div class="fixed top-1/2 right-0 transform -translate-y-1/2 flex flex-col gap-2 z-50">
         <a
             href="tel:+918976309837"
             class="w-12 h-12 max-md:w-10 max-md:h-10 bg-blue-500 hover:bg-blue-600 text-white rounded-l-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 flex items-center justify-center"
             aria-label="Call Us">
             <i class="fa-solid fa-phone text-xl max-md:text-sm"></i>
         </a>
         <a
             href="https://wa.me/8976309837"
             target="_blank"
             class="w-12 h-12 max-md:w-10 max-md:h-10 bg-green-500 hover:bg-green-600 text-white rounded-l-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 flex items-center justify-center"
             aria-label="Chat on WhatsApp">
             <i class="fa-brands fa-whatsapp text-2xl max-md:text-lg"></i>
         </a>
     </div>
     <div class="fixed bottom-4 right-4 max-md:bottom-3 max-md:right-3 z-50">
         <button
             id="scrollButton"
             class="w-12 h-12 max-md:w-10 max-md:h-10 bg-brand-accent hover:bg-brand-accent text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 flex items-center justify-center opacity-0 pointer-events-none">
             <i id="scrollIcon" class="fas fa-arrow-down max-md:text-sm"></i>
         </button>
     </div>

     <script>
         const scrollButton = document.getElementById('scrollButton');
         const scrollIcon = document.getElementById('scrollIcon');

         function updateScrollButton() {
             const scrollPosition = window.scrollY;
             const pageHeight = document.documentElement.scrollHeight - window.innerHeight;

             // Show/hide button based on scroll position
             if (scrollPosition > 50) {
                 scrollButton.classList.remove('opacity-0', 'pointer-events-none');
                 scrollButton.classList.add('opacity-100');
             } else {
                 scrollButton.classList.add('opacity-0', 'pointer-events-none');
                 scrollButton.classList.remove('opacity-100');
             }

             // Change icon depending on scroll position
             if (scrollPosition > pageHeight / 2) {
                 scrollIcon.classList.remove('fa-arrow-down');
                 scrollIcon.classList.add('fa-arrow-up');
             } else {
                 scrollIcon.classList.remove('fa-arrow-up');
                 scrollIcon.classList.add('fa-arrow-down');
             }
         }

         // Scroll smoothly to top or bottom
         scrollButton.addEventListener('click', () => {
             const scrollPosition = window.scrollY;
             const pageHeight = document.documentElement.scrollHeight - window.innerHeight;

             if (scrollPosition < pageHeight / 2) {
                 window.scrollTo({
                     top: document.body.scrollHeight,
                     behavior: 'smooth'
                 });
             } else {
                 window.scrollTo({
                     top: 0,
                     behavior: 'smooth'
                 });
             }
         });

         // Listen to scroll events
         window.addEventListener('scroll', updateScrollButton);

         // Initial check
         updateScrollButton();
     </script>
 </footer>