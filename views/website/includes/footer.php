 <footer class="relative py-10 bg-[#172010] overflow-hidden group w-full">

     <div class="absolute inset-0 z-0">
         <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?q=80&w=2613&auto=format&fit=crop" alt="City Night" class="w-full h-full object-cover opacity-50 group-hover:scale-105 transition duration-[2s]">
         <div class="absolute inset-0 bg-gradient-to-r from-[#172010]/80 via-[#172010]/90 to-[#172010]/80"></div>
     </div>

     <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-brand-accent/20 rounded-full blur-[100px] animate-pulse"></div>
     <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-brand-accent/20 rounded-full blur-[100px]"></div>

     <div class="w-[80vw] max-md:w-[90vw] mx-auto px-0 sm:px-6 lg:px-8 relative z-10">

         <div class="py-12 max-md:py-4">
             <p class="text-8xl max-md:text-4xl whitespace-nowrap text-white text-center mb-8 font-extrabold font-display">Media <span class="text-brand-accent">Solutions</span></p>
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
                         <a href="mailto:info@mediasolutions.com" class="hover:text-white transition">info@mediasolutions.com</a>
                     </li>
                     <li class="flex items-center gap-3">
                         <i class="fas fa-envelope text-brand-accent"></i>
                         <a href="mailto:contact@mediasolutions.com" class="hover:text-white transition">contact@mediasolutions.com</a>
                     </li>
                     <li class="flex items-center gap-3">
                         <i class="fas fa-globe text-brand-accent"></i>
                         <a href="http://www.mediasolutions.com" class="hover:text-white transition">www.mediasolutions.com</a>
                     </li>
                 </ul>
             </div>

             <div class="mb-12 max-md:mb-4 text-white">
                 <h4 class="text-white font-display font-bold text-xl uppercase mb-6 tracking-wide">Media Solutions</h4>
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
             <p class="max-md:text-center">&copy; <?= date('Y') ?> Media Solutions. All Rights Reserved.</p>
             <div class="space-x-4 mt-4 md:mt-0">
                 <a href="#" class="hover:text-white">Privacy Policy</a>
                 <a href="#" class="hover:text-white">Terms of Service</a>
             </div>
         </div>
     </div>
 </footer>