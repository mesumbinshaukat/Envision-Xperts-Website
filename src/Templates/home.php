<?php
// Set page title
$pageTitle = "Home";

// Start output buffering to capture content
ob_start();
?>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center py-24 overflow-hidden bg-dark-900">
    <!-- Animated background elements -->
    <div class="absolute inset-0 bg-gradient-mesh opacity-20"></div>
    
    <!-- Animated shapes -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Glowing orbs -->
        <div class="absolute top-1/4 -right-20 w-96 h-96 bg-glow-purple/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute -bottom-32 -left-20 w-96 h-96 bg-glow-blue/20 rounded-full blur-3xl animate-pulse-slow delay-1000"></div>
        
        <!-- Geometric shapes -->
        <div class="absolute top-20 left-[20%] w-20 h-20 border border-primary-500/20 rounded-xl animate-float">
            <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-transparent"></div>
        </div>
        <div class="absolute bottom-32 right-[15%] w-24 h-24 border border-accent-500/20 animate-morph">
            <div class="absolute inset-0 bg-gradient-to-r from-accent-500/10 to-transparent"></div>
        </div>
        
        <!-- Grid pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(rgba(59,130,246,0.02)_1px,transparent_1px),linear-gradient(to_right,rgba(59,130,246,0.02)_1px,transparent_1px)] bg-[size:24px_24px]"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="space-y-8 animate-fade-in">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-gradient-to-r from-primary-500/10 to-accent-500/10 border border-primary-500/20 backdrop-blur-sm">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                    </span>
                    <span class="text-sm text-primary-400">Software Development Agency</span>
                </div>

                <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight">
                    Transform Your 
                    <span class="relative">
                        <span class="relative z-10 bg-gradient-to-r from-primary-400 to-accent-400 text-transparent bg-clip-text">Digital Vision</span>
                        <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-primary-500/40 to-accent-500/40 blur-sm"></span>
                    </span>
                    Into Reality
                </h1>

                <p class="text-xl text-gray-300 leading-relaxed max-w-2xl">
                    We create innovative web solutions that help businesses thrive in the digital age. 
                    Our team of experts delivers cutting-edge technology solutions tailored to your needs.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="/envisionxperts.com/contact" class="group relative inline-flex items-center justify-center px-8 py-3 font-medium text-lg text-white transition-all duration-200 ease-in-out">
                        <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-primary-600 to-accent-600 rounded-lg"></span>
                        <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-primary-500 to-accent-500 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        <span class="relative flex items-center">
                            Start Your Project
                            <svg class="w-5 h-5 ml-2 -mr-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </a>

                    <a href="/envisionxperts.com/portfolio" class="group relative inline-flex items-center justify-center px-8 py-3 font-medium text-lg text-gray-300 transition-all duration-200">
                        <span class="absolute inset-0 border border-gray-700 rounded-lg group-hover:border-gray-600"></span>
                        <span class="relative flex items-center">
                            View Our Work
                            <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-8 pt-8 mt-8 border-t border-gray-800">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-lg blur-lg transition-all group-hover:blur-xl"></div>
                        <div class="relative bg-dark-800/50 backdrop-blur-sm p-4 rounded-lg border border-gray-800">
                            <div class="text-3xl font-bold text-white mb-1 bg-gradient-to-r from-primary-400 to-accent-400 bg-clip-text text-transparent">100+</div>
                            <div class="text-gray-400 text-sm">Projects Delivered</div>
                        </div>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-lg blur-lg transition-all group-hover:blur-xl"></div>
                        <div class="relative bg-dark-800/50 backdrop-blur-sm p-4 rounded-lg border border-gray-800">
                            <div class="text-3xl font-bold text-white mb-1 bg-gradient-to-r from-primary-400 to-accent-400 bg-clip-text text-transparent">5+</div>
                            <div class="text-gray-400 text-sm">Years Experience</div>
                        </div>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-lg blur-lg transition-all group-hover:blur-xl"></div>
                        <div class="relative bg-dark-800/50 backdrop-blur-sm p-4 rounded-lg border border-gray-800">
                            <div class="text-3xl font-bold text-white mb-1 bg-gradient-to-r from-primary-400 to-accent-400 bg-clip-text text-transparent">50+</div>
                            <div class="text-gray-400 text-sm">Happy Clients</div>
                        </div>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-lg blur-lg transition-all group-hover:blur-xl"></div>
                        <div class="relative bg-dark-800/50 backdrop-blur-sm p-4 rounded-lg border border-gray-800">
                            <div class="text-3xl font-bold text-white mb-1 bg-gradient-to-r from-primary-400 to-accent-400 bg-clip-text text-transparent">24/7</div>
                            <div class="text-gray-400 text-sm">Support</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Visual -->
            <div class="relative">
                <!-- Abstract geometric art -->
                <div class="relative aspect-square">
                    <!-- Morphing blob -->
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-500/20 to-accent-500/20 animate-morph"></div>
                    
                    <!-- Glowing circles -->
                    <div class="absolute top-1/4 left-1/4 w-32 h-32 bg-glow-blue/30 rounded-full blur-2xl animate-pulse-slow"></div>
                    <div class="absolute bottom-1/4 right-1/4 w-40 h-40 bg-glow-purple/30 rounded-full blur-2xl animate-pulse-slow delay-700"></div>
                    
                    <!-- Geometric patterns -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="relative w-64 h-64">
                            <!-- Rotating squares -->
                            <div class="absolute inset-0 border-2 border-primary-500/20 rounded-3xl animate-spin-slow"></div>
                            <div class="absolute inset-0 border-2 border-accent-500/20 rounded-3xl animate-spin-slow" style="animation-direction: reverse;"></div>
                            
                            <!-- Center piece -->
                            <div class="absolute inset-8 bg-dark-800/50 backdrop-blur-sm rounded-2xl border border-gray-800 flex items-center justify-center">
                                <div class="text-6xl bg-gradient-to-r from-primary-400 to-accent-400 bg-clip-text text-transparent">
                                    <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <div class="w-6 h-10 border-2 border-primary-500/20 rounded-full relative">
            <div class="w-2 h-2 bg-primary-500 rounded-full absolute left-1/2 top-2 -translate-x-1/2 animate-bounce"></div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-24 bg-dark-800/50 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16 animate-fadeIn">
            <span class="inline-block px-4 py-2 rounded-full bg-emerald-500/10 text-emerald-400 text-sm font-medium mb-4">
                Our Expertise
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Comprehensive Digital Solutions
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                We offer a wide range of services to help your business succeed in the digital world.
                Our expert team delivers cutting-edge solutions tailored to your needs.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Web Development -->
            <div class="service-card group">
                <div class="service-card-inner">
                    <div class="service-card-front">
                        <div class="service-icon">
                            <svg class="w-12 h-12 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mt-6 mb-4">Web Development</h3>
                        <p class="text-gray-400">Custom websites and web applications built with cutting-edge technologies.</p>
                    </div>
                    <div class="service-card-back">
                        <h4 class="text-lg font-semibold text-white mb-4">Technologies We Use</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                React, Vue, Angular
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Node.js, PHP, Python
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                MySQL, MongoDB
                            </li>
                        </ul>
                        <a href="/envisionxperts.com/services/web-development" class="btn-text mt-6 inline-flex items-center">
                            Learn More 
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile Development -->
            <div class="service-card group">
                <div class="service-card-inner">
                    <div class="service-card-front">
                        <div class="service-icon">
                            <svg class="w-12 h-12 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mt-6 mb-4">Mobile Development</h3>
                        <p class="text-gray-400">Native and cross-platform mobile applications for iOS and Android.</p>
                    </div>
                    <div class="service-card-back">
                        <h4 class="text-lg font-semibold text-white mb-4">Technologies We Use</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                React Native
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Flutter & Dart
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Swift & Kotlin
                            </li>
                        </ul>
                        <a href="/envisionxperts.com/services/mobile-development" class="btn-text mt-6 inline-flex items-center">
                            Learn More 
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cloud Solutions -->
            <div class="service-card group">
                <div class="service-card-inner">
                    <div class="service-card-front">
                        <div class="service-icon">
                            <svg class="w-12 h-12 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mt-6 mb-4">Cloud Solutions</h3>
                        <p class="text-gray-400">Scalable cloud infrastructure and DevOps services for modern businesses.</p>
                    </div>
                    <div class="service-card-back">
                        <h4 class="text-lg font-semibold text-white mb-4">Technologies We Use</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                AWS & Azure
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Docker & Kubernetes
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                CI/CD Pipeline
                            </li>
                        </ul>
                        <a href="/envisionxperts.com/services/cloud-solutions" class="btn-text mt-6 inline-flex items-center">
                            Learn More 
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced CTA Section -->
<section class="relative py-24 overflow-hidden">
    <!-- Background effects -->
    <div class="absolute inset-0 bg-gradient-radial from-primary-500/5 via-transparent to-transparent"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(59,130,246,0.02)_1px,transparent_1px),linear-gradient(to_bottom,rgba(59,130,246,0.02)_1px,transparent_1px)] bg-[size:14px_24px]"></div>
    
    <div class="container mx-auto px-4 relative">
        <div class="max-w-5xl mx-auto">
            <div class="relative p-8 md:p-12 rounded-3xl overflow-hidden animate-on-scroll">
                <!-- Glowing background -->
                <div class="absolute inset-0 bg-gradient-to-r from-primary-900/50 to-accent-900/50 backdrop-blur-xl"></div>
                <div class="absolute inset-[1px] bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-3xl"></div>
                
                <!-- Animated shapes -->
                <div class="absolute top-0 left-1/4 w-64 h-64 bg-primary-500/10 rounded-full blur-3xl animate-pulse-slow"></div>
                <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-accent-500/10 rounded-full blur-3xl animate-pulse-slow delay-700"></div>
                
                <!-- Content -->
                <div class="relative text-center space-y-8">
                    <h2 class="text-4xl md:text-5xl font-bold text-white">
                        Ready to Transform Your Digital Vision?
                    </h2>
                    <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                        Let's build something extraordinary together. Our team is ready to turn your ideas into reality.
                    </p>
                    <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
                        <a href="/envisionxperts.com/contact" class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white transition-all duration-300 ease-in-out">
                            <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-primary-600 to-accent-600 rounded-lg"></span>
                            <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-primary-500 to-accent-500 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            <span class="relative flex items-center">
                                Book a Free Consultation
                                <svg class="w-6 h-6 ml-2 -mr-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </span>
                        </a>
                        <a href="/envisionxperts.com/portfolio" class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-gray-300 transition-all duration-300">
                            <span class="absolute inset-0 border border-gray-700 rounded-lg group-hover:border-gray-600"></span>
                            <span class="relative flex items-center">
                                View Our Work
                                <svg class="w-6 h-6 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Why Choose Us</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">We combine expertise, innovation, and dedication to deliver exceptional results.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="text-center">
                <div class="bg-gray-800 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">Fast Delivery</h3>
                <p class="text-gray-400">Quick turnaround without compromising quality</p>
            </div>

            <!-- Feature 2 -->
            <div class="text-center">
                <div class="bg-gray-800 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">Secure Solutions</h3>
                <p class="text-gray-400">Built with security best practices</p>
            </div>

            <!-- Feature 3 -->
            <div class="text-center">
                <div class="bg-gray-800 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">24/7 Support</h3>
                <p class="text-gray-400">Always available to help you</p>
            </div>

            <!-- Feature 4 -->
            <div class="text-center">
                <div class="bg-gray-800 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">Innovative Solutions</h3>
                <p class="text-gray-400">Cutting-edge technology stack</p>
            </div>
        </div>
    </div>
</section>

<!-- Clients Logo Strip -->
<section class="bg-slate-950 py-6 border-y border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="marquee-container">
            <div class="marquee-content">
                <div class="flex space-x-16 items-center">
                    <div class="client-logo">
                        <img src="/assets/images/clients/client1.svg" alt="Client 1" class="h-8 md:h-10 opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="client-logo">
                        <img src="/assets/images/clients/client2.svg" alt="Client 2" class="h-8 md:h-10 opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="client-logo">
                        <img src="/assets/images/clients/client3.svg" alt="Client 3" class="h-8 md:h-10 opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="client-logo">
                        <img src="/assets/images/clients/client4.svg" alt="Client 4" class="h-8 md:h-10 opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="client-logo">
                        <img src="/assets/images/clients/client5.svg" alt="Client 5" class="h-8 md:h-10 opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="client-logo">
                        <img src="/assets/images/clients/client6.svg" alt="Client 6" class="h-8 md:h-10 opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-24 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/10 to-blue-900/10"></div>
    <div class="absolute top-1/2 -translate-y-1/2 right-0 w-1/2 h-full bg-gradient-to-l from-emerald-500/5 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Image Column -->
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-tr from-emerald-500/20 to-blue-500/20 mix-blend-overlay"></div>
                    <img src="/envisionxperts.com/public/assets/images/team-photo.jpg" alt="Our Team" class="w-full h-auto">
                </div>
                <!-- Stats -->
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800">
                        <div class="text-3xl font-bold text-white mb-2">100+</div>
                        <div class="text-gray-400">Projects Completed</div>
                    </div>
                    <div class="bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800">
                        <div class="text-3xl font-bold text-white mb-2">50+</div>
                        <div class="text-gray-400">Happy Clients</div>
                    </div>
                </div>
            </div>
            
            <!-- Content Column -->
            <div class="space-y-8">
                <span class="inline-block px-4 py-2 rounded-full bg-emerald-500/10 text-emerald-400 text-sm font-medium">
                    About Us
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-white">
                    Transforming Ideas into Digital Excellence
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed">
                    At EnvisionXperts, we're more than just a software development company. We're a team of passionate innovators, 
                    dedicated to transforming your digital vision into reality. With over 5 years of experience in delivering 
                    cutting-edge solutions, we've helped businesses across various industries achieve their digital transformation goals.
                </p>
                
                <!-- Mission -->
                <div class="border-l-4 border-emerald-500 pl-6 my-8">
                    <h3 class="text-xl font-semibold text-white mb-3">Our Mission</h3>
                    <p class="text-gray-300">
                        To empower businesses with innovative digital solutions that drive growth, enhance efficiency, 
                        and create lasting value in an ever-evolving technological landscape.
                    </p>
                </div>
                
                <!-- Values -->
                <div class="grid grid-cols-2 gap-6 mt-8">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-2">Quality First</h4>
                            <p class="text-gray-400">We never compromise on the quality of our deliverables</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-2">Innovation</h4>
                            <p class="text-gray-400">Staying ahead with cutting-edge technologies</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="/envisionxperts.com/about" class="btn-primary">
                        Learn More About Us
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-dark-800/50 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/5 to-blue-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-emerald-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 rounded-full bg-emerald-500/10 text-emerald-400 text-sm font-medium mb-4">
                Client Testimonials
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                What Our Clients Say
            </h2>
            <p class="text-gray-400 max-w-2xl mx-auto">
                Don't just take our word for it. Here's what our clients have to say about their experience working with us.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="testimonial-card bg-dark-900/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-full overflow-hidden">
                        <img src="/envisionxperts.com/public/assets/images/testimonials/client1.jpg" alt="Sarah Johnson" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-white font-semibold">Sarah Johnson</h4>
                        <p class="text-gray-400 text-sm">CEO, TechStart Inc.</p>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="flex gap-1 text-emerald-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <blockquote class="text-gray-300 leading-relaxed mb-6">
                    "EnvisionXperts delivered beyond our expectations. Their team's expertise and dedication to quality 
                    resulted in a web application that has significantly improved our business operations."
                </blockquote>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-card bg-dark-900/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-full overflow-hidden">
                        <img src="/envisionxperts.com/public/assets/images/testimonials/client2.jpg" alt="Michael Chen" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-white font-semibold">Michael Chen</h4>
                        <p class="text-gray-400 text-sm">CTO, InnovateCorp</p>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="flex gap-1 text-emerald-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <blockquote class="text-gray-300 leading-relaxed mb-6">
                    "The mobile app developed by EnvisionXperts has revolutionized how we interact with our customers. 
                    Their attention to detail and user experience is outstanding."
                </blockquote>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-card bg-dark-900/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-full overflow-hidden">
                        <img src="/envisionxperts.com/public/assets/images/testimonials/client3.jpg" alt="Emily Rodriguez" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-white font-semibold">Emily Rodriguez</h4>
                        <p class="text-gray-400 text-sm">Product Manager, FutureScale</p>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="flex gap-1 text-emerald-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <blockquote class="text-gray-300 leading-relaxed mb-6">
                    "Working with EnvisionXperts was a game-changer for our business. Their cloud solutions have 
                    improved our efficiency and scalability beyond measure."
                </blockquote>
            </div>
        </div>
        
        <!-- Call to Action -->
        <div class="text-center mt-16">
            <a href="/envisionxperts.com/case-studies" class="btn-secondary">
                View Success Stories
                <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>



<!-- Scroll to top button -->
<button id="scrollToTop" class="fixed bottom-8 right-8 p-2 rounded-full bg-primary-500/10 border border-primary-500/20 backdrop-blur-sm opacity-0 invisible transition-all duration-300 hover:bg-primary-500/20">
    <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
    </svg>
</button>

<script>
// Scroll animations
document.addEventListener('DOMContentLoaded', function() {
    // Scroll animations
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.animate-on-scroll');
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            const isVisible = (elementTop < window.innerHeight - 100) && (elementBottom > 0);
            
            if (isVisible) {
                element.classList.add('is-visible');
            }
        });
    };

    // Scroll to top button
    const scrollToTopBtn = document.getElementById('scrollToTop');
    const toggleScrollButton = () => {
        if (window.pageYOffset > 200) {
            scrollToTopBtn.classList.remove('opacity-0', 'invisible');
        } else {
            scrollToTopBtn.classList.add('opacity-0', 'invisible');
        }
    };

    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Event listeners
    window.addEventListener('scroll', () => {
        animateOnScroll();
        toggleScrollButton();
    });
    
    // Initial check for elements
    animateOnScroll();
    toggleScrollButton();
});
</script>

<?php
// End output buffering and return the captured content
$content = ob_get_clean();

// Return the content
echo $content;
