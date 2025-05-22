<?php
// Set page title
$pageTitle = "iOS App Development Services";

// Start output buffering to capture content
ob_start();
?>

<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-gradient-to-b from-slate-900 to-slate-950 pt-24">
    <!-- Enhanced animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/3 w-96 h-96 bg-gray-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <!-- Added floating elements -->
        <div class="absolute top-1/3 right-1/4 w-32 h-32 border border-blue-500/20 rounded-full animate-float"></div>
        <div class="absolute bottom-1/4 left-1/3 w-40 h-40 border border-gray-500/20 rounded-full animate-float delay-1000"></div>
        <!-- Apple logo animation -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-5 animate-float-slow">
            <i class="fab fa-apple text-[400px] text-gray-200"></i>
        </div>
    </div>
    
    <!-- Content with enhanced animations -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-6 flex justify-center">
                <i class="fab fa-apple text-5xl text-white opacity-80"></i>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-gray-300 animate-fade-in">
                iOS App Development
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 animate-fade-in delay-200">
                Elegant, powerful, and seamless native applications for the Apple ecosystem
            </p>
            <div class="flex flex-wrap justify-center gap-4 animate-fade-in delay-300">
                <a href="#contact" class="group relative inline-flex items-center justify-center px-8 py-3 font-medium text-lg text-white transition-all duration-300">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-600 to-gray-600 rounded-lg"></span>
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-500 to-gray-500 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"></span>
                    <span class="relative flex items-center">
                        Get Started
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </a>
                <a href="#features" class="group relative inline-flex items-center justify-center px-8 py-3 font-medium text-lg text-gray-300 transition-all duration-300">
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

<!-- Key Features Section -->
<section id="features" class="py-20 bg-slate-900 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/5 to-gray-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 animate-fade-in">
                Key Features of Our iOS Development
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Swift & Objective-C Expertise -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-gray-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-8 rounded-xl border border-gray-800 transition-all group-hover:border-blue-500/30 h-full">
                        <div class="text-blue-400 text-4xl mb-6 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="text-2xl font-semibold mb-4 text-white group-hover:text-blue-400 transition-colors">Swift & Objective-C Expertise</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Our iOS developers are proficient in both Swift and Objective-C, leveraging the latest language features to build high-performance, future-proof applications.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Modern Swift programming with SwiftUI</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Legacy Objective-C codebase maintenance</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Hybrid Swift/Objective-C integration</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Native UI Components -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-gray-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-8 rounded-xl border border-gray-800 transition-all group-hover:border-blue-500/30 h-full">
                        <div class="text-blue-400 text-4xl mb-6 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="text-2xl font-semibold mb-4 text-white group-hover:text-blue-400 transition-colors">Native UI Components</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            We design beautiful user interfaces that follow Apple's Human Interface Guidelines while maintaining your brand identity.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">UIKit & SwiftUI implementation</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Adaptive layouts for all iOS devices</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Custom animations and transitions</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Apple Ecosystem Integration -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-gray-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-8 rounded-xl border border-gray-800 transition-all group-hover:border-blue-500/30 h-full">
                        <div class="text-blue-400 text-4xl mb-6 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3 class="text-2xl font-semibold mb-4 text-white group-hover:text-blue-400 transition-colors">Apple Ecosystem Integration</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Seamlessly integrate your app with Apple's ecosystem of devices and services for a cohesive user experience.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">iCloud sync & backup</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Apple Watch & tvOS extensions</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-400 group-hover:text-gray-300">Handoff & Continuity features</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- App Store Optimization -->
                <div class="group relative transform transition-all duration-300 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-gray-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative

