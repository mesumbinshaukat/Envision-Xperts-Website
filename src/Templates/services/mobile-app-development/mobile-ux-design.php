<?php
// Set page title
$pageTitle = "Mobile UX Design Services";

// Start output buffering to capture content
ob_start();
?>

<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-gradient-to-b from-slate-900 to-slate-950 pt-24">
    <!-- Enhanced animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-purple-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/3 w-96 h-96 bg-pink-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <!-- Added floating elements -->
        <div class="absolute top-1/3 right-1/4 w-32 h-32 border border-purple-500/20 rounded-full animate-float"></div>
        <div class="absolute bottom-1/4 left-1/3 w-40 h-40 border border-pink-500/20 rounded-full animate-float delay-1000"></div>
        <!-- Design elements animation -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-5">
            <!-- Mobile frame outline -->
            <div class="w-64 h-96 border-2 border-purple-500/20 rounded-3xl animate-float-slow"></div>
            <!-- UI elements inside -->
            <div class="absolute top-8 left-1/2 transform -translate-x-1/2 w-48 h-4 bg-pink-500/10 rounded-full"></div>
            <div class="absolute top-20 left-1/2 transform -translate-x-1/2 w-56 h-24 bg-purple-500/10 rounded-lg"></div>
            <div class="absolute top-48 left-1/2 transform -translate-x-1/2 w-48 h-4 bg-pink-500/10 rounded-full"></div>
            <div class="absolute top-56 left-1/2 transform -translate-x-1/2 w-56 h-24 bg-purple-500/10 rounded-lg"></div>
        </div>
    </div>
    
    <!-- Content with enhanced animations -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-6 flex justify-center">
                <i class="fas fa-paint-brush text-5xl text-purple-400 opacity-80"></i>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-pink-400 animate-fade-in">
                Mobile UX Design
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 animate-fade-in delay-200">
                Create intuitive, engaging, and visually stunning mobile experiences that delight users
            </p>
            <div class="flex flex-wrap justify-center gap-4 animate-fade-in delay-300">
                <a href="#contact" class="group relative inline-flex items-center justify-center px-8 py-3 font-medium text-lg text-white transition-all duration-300">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg"></span>
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"></span>
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

<!-- Key Services Section -->
<section id="services" class="py-20 bg-slate-900 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-purple-900/5 to-pink-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-purple-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 animate-fade-in">
                Our Mobile UX Design Services
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- User Interface Design -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-purple-500/30 h-full">
                        <div class="text-purple-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-purple-400 transition-colors">User Interface Design</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Visually stunning and highly functional interfaces that align with your brand identity and delight users.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Custom UI components</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Visual language development</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- User Experience Design -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-pink-500/10 to-purple-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-pink-500/30 h-full">
                        <div class="text-pink-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-pink-400 transition-colors">User Experience Design</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Create intuitive, seamless, and engaging user journeys that enhance satisfaction and boost conversion rates.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-pink-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">User flow optimization</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-pink-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Interaction design</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Wireframing and Prototyping -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-violet-500/10 to-fuchsia-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-violet-500/30 h-full">
                        <div class="text-violet-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-violet-400 transition-colors">Wireframing & Prototyping</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Visualize and test concepts before development with interactive wireframes and prototypes.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-violet-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Low and high-fidelity wireframes</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-violet-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Interactive prototypes</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Design System Creation -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-fuchsia-500/10 to-rose-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-fuchsia-500/30 h-full">
                        <div class="text-fuchsia-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-fuchsia-400 transition-colors">Design System Creation</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Develop comprehensive design systems for consistent user experiences and efficient development.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-fuchsia-400 mr-2 mt-1" fill="none"

