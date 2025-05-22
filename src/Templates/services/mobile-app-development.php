<?php
// Set page title
$pageTitle = "Mobile App Development Services";

// Start output buffering to capture content
ob_start();
?>

<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-gradient-to-b from-slate-900 to-slate-950 pt-24">
    <!-- Enhanced animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-purple-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/3 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <!-- Added floating elements -->
        <div class="absolute top-1/3 right-1/4 w-32 h-32 border border-purple-500/20 rounded-full animate-float"></div>
        <div class="absolute bottom-1/4 left-1/3 w-40 h-40 border border-blue-500/20 rounded-full animate-float delay-1000"></div>
        <!-- Mobile phone outline animation -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-96 border-2 border-blue-500/20 rounded-3xl animate-float-slow opacity-30"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-60 h-80 border border-purple-500/20 rounded-2xl animate-float delay-2000 opacity-20"></div>
    </div>
    
    <!-- Content with enhanced animations -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-blue-500 animate-fade-in">
                Mobile App Development
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 animate-fade-in delay-200">
                Transform your ideas into powerful mobile applications that engage users and drive growth
            </p>
            <div class="flex flex-wrap justify-center gap-4 animate-fade-in delay-300">
                <a href="#contact" class="group relative inline-flex items-center justify-center px-8 py-3 font-medium text-lg text-white transition-all duration-300">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-600 to-blue-600 rounded-lg"></span>
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"></span>
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

<!-- Services Overview with enhanced interactivity -->
<section id="services" class="py-20 bg-slate-900 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-purple-900/5 to-blue-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-purple-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 animate-fade-in">
                Our Mobile App Development Expertise
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- iOS Development -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-blue-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-purple-500/30 h-full">
                        <div class="text-purple-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fab fa-apple"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-purple-400 transition-colors">iOS Development</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors mb-4">
                            Native iOS apps built with Swift and Objective-C for seamless Apple ecosystem integration.
                        </p>
                        <a href="/envisionxperts.com/services/mobile-app-development/ios-development" class="inline-flex items-center text-purple-400 hover:text-purple-300 transition-colors">
                            Learn More
                            <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Android Development -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-blue-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-purple-500/30 h-full">
                        <div class="text-purple-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fab fa-android"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-purple-400 transition-colors">Android Development</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors mb-4">
                            Powerful Android applications using Kotlin and Java with Material Design principles.
                        </p>
                        <a href="/envisionxperts.com/services/mobile-app-development/android-development" class="inline-flex items-center text-purple-400 hover:text-purple-300 transition-colors">
                            Learn More
                            <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Cross-Platform Apps -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-blue-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-purple-500/30 h-full">
                        <div class="text-purple-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-purple-400 transition-colors">Cross-Platform Apps</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors mb-4">
                            Build once, deploy everywhere with React Native and Flutter for maximum reach.
                        </p>
                        <a href="/envisionxperts.com/services/mobile-app-development/cross-platform-apps" class="inline-flex items-center text-purple-400 hover:text-purple-300 transition-colors">
                            Learn More
                            <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Hybrid Apps -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-blue-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-purple-500/30 h-full">
                        <div class="text-purple-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-code-branch"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-purple-400 transition-colors">Hybrid Apps</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors mb-4">
                            Web technologies powering mobile apps with Ionic and Cordova frameworks.
                        </p>
                        <a href="/envisionxperts.com/services/mobile-app-development/hybrid-apps" class="inline-flex items-center text-purple-400 hover:text-purple-300 transition-colors">
                            Learn More
                            <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Mobile App Maintenance -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-blue-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-purple-500/30 h-full">
                        <div class="text-purple-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-purple-400 transition-colors">Mobile App Maintenance</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors mb-4">
                            Ongoing support, updates and enhancements to keep your app running smoothly.
                        </p>
                        <a href="/envisionxperts.com/services/mobile-app-development/mobile-app-maintenance" class="inline-flex items-center text-purple-400 hover:text-purple-300 transition-colors">
                            Learn More
                            <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Mobile UX Design -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-blue-500/10 rounded-xl

