<?php
// Set page title
$pageTitle = "Mobile App Maintenance Services";

// Start output buffering to capture content
ob_start();
?>

<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-gradient-to-b from-slate-900 to-slate-950 pt-24">
    <!-- Enhanced animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-teal-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/3 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <!-- Added floating elements -->
        <div class="absolute top-1/3 right-1/4 w-32 h-32 border border-teal-500/20 rounded-full animate-float"></div>
        <div class="absolute bottom-1/4 left-1/3 w-40 h-40 border border-blue-500/20 rounded-full animate-float delay-1000"></div>
        <!-- Maintenance cycle animation -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="w-48 h-48 border-2 border-teal-500/10 rounded-full animate-spin-slow"></div>
            <div class="absolute inset-0 w-40 h-40 border-2 border-blue-500/10 rounded-full animate-spin-slow animate-reverse m-auto"></div>
            <div class="absolute inset-0 w-32 h-32 border-2 border-cyan-500/10 rounded-full animate-spin-slow m-auto"></div>
        </div>
    </div>
    
    <!-- Content with enhanced animations -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-6 flex justify-center">
                <i class="fas fa-tools text-5xl text-teal-400 opacity-80"></i>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-blue-400 animate-fade-in">
                Mobile App Maintenance
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 animate-fade-in delay-200">
                Ensure your app's longevity, security, and performance with our comprehensive maintenance services
            </p>
            <div class="flex flex-wrap justify-center gap-4 animate-fade-in delay-300">
                <a href="#contact" class="group relative inline-flex items-center justify-center px-8 py-3 font-medium text-lg text-white transition-all duration-300">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-teal-600 to-blue-600 rounded-lg"></span>
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-teal-500 to-blue-500 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"></span>
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

<!-- Key Maintenance Services Section -->
<section id="services" class="py-20 bg-slate-900 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-teal-900/5 to-blue-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-teal-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 animate-fade-in">
                Key Mobile App Maintenance Services
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Regular Updates & Bug Fixes -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-teal-500/10 to-cyan-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-teal-500/30 h-full">
                        <div class="text-teal-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-teal-400 transition-colors">Regular Updates & Bug Fixes</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Keep your app running smoothly with regular updates, bug fixes, and improvements to enhance user experience.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-teal-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Proactive bug detection</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-teal-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Scheduled maintenance releases</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Performance Optimization -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 to-blue-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-cyan-500/30 h-full">
                        <div class="text-cyan-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-cyan-400 transition-colors">Performance Optimization</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Enhance your app's speed, responsiveness, and resource efficiency through regular performance analysis and optimization.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-cyan-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Memory usage optimization</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-cyan-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Load time improvements</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Security Patches -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-indigo-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-blue-500/30 h-full">
                        <div class="text-blue-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-blue-400 transition-colors">Security Patches</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Protect your app and user data with timely security updates and vulnerability assessments to prevent potential threats.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Vulnerability assessments</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Security compliance updates</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Feature Enhancements -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/10 to-purple-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-indigo-500/30 h-full">
                        <div class="text-indigo-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-plus-circle"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-indigo-400 transition-colors">Feature Enhancements</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Continuously improve your app with new features and enhancements based on user feedback and market trends.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-indigo-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">User-requested features</span>
                            </li>
                            <li class="

