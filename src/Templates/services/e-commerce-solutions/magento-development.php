<?php
// Set page title
$pageTitle = "Magento Development Services";

// Start output buffering to capture content
ob_start();
?>

<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-gradient-to-b from-slate-900 to-slate-950 pt-24">
    <!-- Enhanced animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-orange-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/3 w-96 h-96 bg-red-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <!-- Added floating elements -->
        <div class="absolute top-1/3 right-1/4 w-32 h-32 border border-orange-500/20 rounded-full animate-float"></div>
        <div class="absolute bottom-1/4 left-1/3 w-40 h-40 border border-red-500/20 rounded-full animate-float delay-1000"></div>
        <!-- E-commerce elements animation -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-5">
            <!-- Shopping cart icon -->
            <i class="fas fa-shopping-cart text-[200px] text-orange-300 opacity-10"></i>
            <!-- Magento logo stylized -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-48 h-48 border-4 border-red-500/10 rounded-full"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-40 h-2 bg-red-500/10"></div>
        </div>
    </div>
    
    <!-- Content with enhanced animations -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-6 flex justify-center">
                <i class="fab fa-magento text-5xl text-orange-500 opacity-80"></i>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-orange-400 to-red-500 animate-fade-in">
                Magento Development
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 animate-fade-in delay-200">
                Create powerful, scalable, and customized e-commerce solutions with Adobe Commerce (Magento)
            </p>
            <div class="flex flex-wrap justify-center gap-4 animate-fade-in delay-300">
                <a href="#contact" class="group relative inline-flex items-center justify-center px-8 py-3 font-medium text-lg text-white transition-all duration-300">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-orange-600 to-red-600 rounded-lg"></span>
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-orange-500 to-red-500 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"></span>
                    <span class="relative flex items-center">
                        Get Started
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </a>
                <a href="#services" class="group relative inline-flex items-center justify-center px-8 py-3 font-medium text-lg text-gray-300 transition-all duration-300">
                    <span class="absolute inset-0 border border-gray-700 rounded-lg group-hover:border-gray-600"></span>
                    <span class="relative flex items-center">
                        Learn More
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Key Magento Services Section -->
<section id="services" class="py-20 bg-slate-900 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-orange-900/5 to-red-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-orange-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 animate-fade-in">
                Our Magento Development Services
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Magento 2 Development -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-500/10 to-red-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-orange-500/30 h-full">
                        <div class="text-orange-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fab fa-magento"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-orange-400 transition-colors">Magento 2 Development</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Custom Magento 2 (Adobe Commerce) store development with tailored functionality for your business needs.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-orange-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Custom store setup</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-orange-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Multi-store implementation</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Custom Module Development -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-red-500/10 to-orange-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-red-500/30 h-full">
                        <div class="text-red-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-red-400 transition-colors">Custom Module Development</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Extend Magento's functionality with custom modules tailored to your specific business requirements.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-red-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Payment gateway integration</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-red-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Custom checkout processes</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Theme Development -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-amber-500/10 to-orange-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-amber-500/30 h-full">
                        <div class="text-amber-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-amber-400 transition-colors">Theme Development</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Custom Magento themes that align with your brand identity and provide exceptional user experiences.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Responsive design</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Custom product pages</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Migration Services -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-red-500/10 to-amber-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-red-500/30 h-full">
                        <div class="text-red-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-red-400 transition-colors">Migration Services</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Seamless migration from Magento 1 to Magento 2 with zero data loss and minimal downtime.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-red-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>

