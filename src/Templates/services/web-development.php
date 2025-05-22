<?php
// Set page title
$pageTitle = "Web Development Services";

// Start output buffering to capture content
ob_start();
?>

<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center py-24 overflow-hidden bg-dark-900">
    <!-- Animated background elements -->
    <div class="absolute inset-0 bg-gradient-mesh opacity-20"></div>
    
    <!-- Animated shapes -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Glowing orbs -->
        <div class="absolute top-1/4 -right-20 w-96 h-96 bg-glow-purple/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute -bottom-32 -left-20 w-96 h-96 bg-glow-blue/20 rounded-full blur-3xl animate-pulse-slow delay-1000"></div>
        
        <!-- Grid pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(rgba(59,130,246,0.02)_1px,transparent_1px),linear-gradient(to_right,rgba(59,130,246,0.02)_1px,transparent_1px)] bg-[size:24px_24px] animate-[grid_20s_linear_infinite]"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="space-y-8">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-gradient-to-r from-primary-500/10 to-accent-500/10 border border-primary-500/20 backdrop-blur-sm">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                    </span>
                    <span class="text-sm text-primary-400">Web Development</span>
                </div>

                <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight">
                    Transform Your Digital 
                    <span class="relative">
                        <span class="relative z-10 bg-gradient-to-r from-primary-400 to-accent-400 text-transparent bg-clip-text">Presence</span>
                        <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-primary-500/40 to-accent-500/40 blur-sm"></span>
                    </span>
                </h1>

                <p class="text-xl text-gray-300 leading-relaxed max-w-2xl">
                    We craft cutting-edge web solutions that drive business growth. From responsive websites to complex web applications, 
                    our expert team delivers scalable, secure, and high-performance digital experiences.
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

                    <a href="#services" class="group relative inline-flex items-center justify-center px-8 py-3 font-medium text-lg text-gray-300 transition-all duration-200">
                        <span class="absolute inset-0 border border-gray-700 rounded-lg group-hover:border-gray-600"></span>
                        <span class="relative flex items-center">
                            Explore Services
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
                            <div class="text-3xl font-bold text-white mb-1 bg-gradient-to-r from-primary-400 to-accent-400 bg-clip-text text-transparent">
                                <span class="counter" data-target="200" data-duration="2000">0</span>+
                            </div>
                            <div class="text-gray-400 text-sm">Websites Built</div>
                        </div>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-lg blur-lg transition-all group-hover:blur-xl"></div>
                        <div class="relative bg-dark-800/50 backdrop-blur-sm p-4 rounded-lg border border-gray-800">
                            <div class="text-3xl font-bold text-white mb-1 bg-gradient-to-r from-primary-400 to-accent-400 bg-clip-text text-transparent">
                                <span class="counter" data-target="98" data-duration="2000">0</span>%
                            </div>
                            <div class="text-gray-400 text-sm">Client Satisfaction</div>
                        </div>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-lg blur-lg transition-all group-hover:blur-xl"></div>
                        <div class="relative bg-dark-800/50 backdrop-blur-sm p-4 rounded-lg border border-gray-800">
                            <div class="text-3xl font-bold text-white mb-1 bg-gradient-to-r from-primary-400 to-accent-400 bg-clip-text text-transparent">
                                <span class="counter" data-target="50" data-duration="2000">0</span>+
                            </div>
                            <div class="text-gray-400 text-sm">Web Apps</div>
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

            <!-- Interactive Code Animation -->
            <div class="relative hidden lg:block">
                <div class="relative w-full aspect-square">
                    <div class="absolute inset-0 perspective-1000">
                        <div class="relative w-full h-full transform-style-3d animate-float-slow">
                            <!-- Code Animation Container -->
                            <div class="absolute inset-0 bg-gradient-to-br from-primary-500/10 to-accent-500/10 rounded-2xl backdrop-blur-sm border border-primary-500/20 transform translate-z-50 transition-all duration-500 hover:scale-105">
                                <div class="absolute inset-0 p-8">
                                    <!-- Code Lines -->
                                    <div class="space-y-4">
                                        <div class="flex items-center space-x-4 animate-fade-in" style="animation-delay: 0.1s">
                                            <span class="text-primary-400">const</span>
                                            <span class="text-white">webApp</span>
                                            <span class="text-gray-400">=</span>
                                            <span class="text-accent-400">createApp</span>
                                            <span class="text-gray-400">(</span>
                                            <span class="text-white">config</span>
                                            <span class="text-gray-400">);</span>
                                        </div>
                                        <div class="flex items-center space-x-4 animate-fade-in" style="animation-delay: 0.2s">
                                            <span class="text-primary-400">async</span>
                                            <span class="text-white">function</span>
                                            <span class="text-accent-400">init</span>
                                            <span class="text-gray-400">()</span>
                                            <span class="text-gray-400">{</span>
                                        </div>
                                        <div class="flex items-center space-x-4 animate-fade-in" style="animation-delay: 0.3s">
                                            <span class="text-gray-400">&nbsp;&nbsp;await</span>
                                            <span class="text-white">webApp</span>
                                            <span class="text-gray-400">.</span>
                                            <span class="text-accent-400">bootstrap</span>
                                            <span class="text-gray-400">();</span>
                                        </div>
                                        <div class="flex items-center space-x-4 animate-fade-in" style="animation-delay: 0.4s">
                                            <span class="text-gray-400">}</span>
                                        </div>
                                    </div>
                                    
                                    <!-- Animated Cursor -->
                                    <div class="absolute bottom-8 left-8 w-2 h-4 bg-primary-400/50 animate-blink"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Offer Section -->
<section id="services" class="py-24 bg-dark-800/50 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 rounded-full bg-emerald-500/10 text-emerald-400 text-sm font-medium mb-4">
                Our Expertise
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Comprehensive Web Solutions
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                We offer a wide range of web development services to help your business succeed in the digital world.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Custom Web Development -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 transition-all group-hover:border-gray-700">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Custom Web Development</h3>
                    <p class="text-gray-400 mb-6">Tailored web solutions built with modern technologies and best practices.</p>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-emerald-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Responsive Design
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-emerald-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Modern Frameworks
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-emerald-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Performance Optimized
                        </li>
                    </ul>
                </div>
            </div>

            <!-- E-commerce Solutions -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 transition-all group-hover:border-gray-700">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">E-commerce Solutions</h3>
                    <p class="text-gray-400 mb-6">Powerful online stores with seamless shopping experiences.</p>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-emerald-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Secure Payments
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-emerald-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Inventory Management
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-emerald-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Order Processing
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Web Applications -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 transition-all group-hover:border-gray-700">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Web Applications</h3>
                    <p class="text-gray-400 mb-6">Scalable and secure web applications for your business needs.</p>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-emerald-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Real-time Features
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-emerald-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            API Integration
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-emerald-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Cloud Deployment
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-24 bg-dark-900 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900/5 to-accent-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-4">
                Why Choose Us
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Excellence in Web Development
            </h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto mb-8">
                We combine expertise, innovation, and dedication to deliver exceptional web solutions that drive your business forward.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Feature 1 -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-2xl border border-gray-800 transition-all group-hover:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Fast Development</h3>
                    <p class="text-gray-400">Quick turnaround times without compromising on quality.</p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-2xl border border-gray-800 transition-all group-hover:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Secure & Reliable</h3>
                    <p class="text-gray-400">Enterprise-grade security and 99.9% uptime guarantee.</p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-2xl border border-gray-800 transition-all group-hover:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Scalable Solutions</h3>
                    <p class="text-gray-400">Built to grow with your business needs.</p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-2xl border border-gray-800 transition-all group-hover:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Expert Team</h3>
                    <p class="text-gray-400">Skilled developers with years of experience.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-dark-800/50 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/5 to-blue-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-emerald-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Transform Your Digital Presence?
            </h2>
            <p class="text-xl text-gray-400 mb-8">
                Let's discuss how we can help you achieve your business goals with our web development expertise.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/envisionxperts.com/contact" class="group relative inline-flex items-center justify-center px-8 py-4 font-medium text-lg text-white transition-all duration-300 ease-out">
                    <!-- Animated background -->
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-primary-600 via-accent-500 to-primary-600 rounded-lg transition-all duration-500 group-hover:scale-105"></span>
                    
                    <!-- Shimmer effect -->
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 -translate-x-full group-hover:translate-x-full"></span>
                    
                    <!-- Glow effect -->
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-primary-500/30 to-accent-500/30 rounded-lg blur-xl opacity-0 group-hover:opacity-100 transition-all duration-500 group-hover:scale-110"></span>
                    
                    <!-- Border gradient -->
                    <span class="absolute inset-0 rounded-lg p-[1px] bg-gradient-to-r from-primary-500 to-accent-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                    
                    <!-- Content -->
                    <span class="relative flex items-center">
                        <span class="relative z-10">Get Started Now</span>
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </a>
                
                <a href="/envisionxperts.com/portfolio" class="group relative inline-flex items-center justify-center px-8 py-4 font-medium text-lg text-gray-300 transition-all duration-300">
                    <span class="absolute inset-0 border border-gray-700 rounded-lg group-hover:border-gray-600"></span>
                    <span class="relative flex items-center">
                        View Our Work
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
// End output buffering and return the captured content
$content = ob_get_clean();

// Return the content
echo $content;
?> 