<?php
// Set page title
$pageTitle = "Home";

// Start output buffering to capture content
ob_start();
?>

<style>
/* Animations */
@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(2deg); }
}

@keyframes pulse-slow {
    0%, 100% { opacity: 0.5; transform: scale(1); }
    50% { opacity: 0.8; transform: scale(1.05); }
}

@keyframes morph {
    0%, 100% { border-radius: 60% 40% 30% 70%/60% 30% 70% 40%; transform: rotate(0deg); }
    50% { border-radius: 30% 60% 70% 40%/50% 60% 30% 60%; transform: rotate(180deg); }
}

@keyframes draw {
    0% { stroke-dasharray: 1000; stroke-dashoffset: 1000; opacity: 0; }
    100% { stroke-dasharray: 1000; stroke-dashoffset: 0; opacity: 1; }
}

@keyframes spin-slow {
    from { transform: rotate(0deg) scale(1); }
    to { transform: rotate(360deg) scale(1.1); }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes scaleIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}

/* Animation Classes */
.animate-float {
    animation: float 6s ease-in-out infinite;
    will-change: transform;
}

.animate-pulse-slow {
    animation: pulse-slow 4s ease-in-out infinite;
    will-change: transform, opacity;
}

.animate-morph {
    animation: morph 8s ease-in-out infinite;
    will-change: transform, border-radius;
}

.animate-draw {
    animation: draw 2s ease-in-out forwards;
    will-change: stroke-dashoffset, opacity;
}

.animate-spin-slow {
    animation: spin-slow 20s linear infinite;
    will-change: transform;
}

.animate-fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1),
                transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: opacity, transform;
}

.animate-fade-in.is-visible {
    opacity: 1;
    transform: translateY(0);
}

.animate-scale-in {
    opacity: 0;
    transform: scale(0.95);
    transition: opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1),
                transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: opacity, transform;
}

.animate-scale-in.is-visible {
    opacity: 1;
    transform: scale(1);
}

/* Transitions */
.transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
    will-change: transform, opacity, background-color;
}

.transition-transform {
    transition-property: transform;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
    will-change: transform;
}

.transition-opacity {
    transition-property: opacity;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
    will-change: opacity;
}

/* Glassmorphism */
.backdrop-blur-sm {
    backdrop-filter: blur(8px);
}

.backdrop-blur-md {
    backdrop-filter: blur(12px);
}

.backdrop-blur-lg {
    backdrop-filter: blur(16px);
}

/* Gradients */
.bg-gradient-mesh {
    background-image: radial-gradient(circle at 50% 50%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                      radial-gradient(circle at 0% 0%, rgba(16, 185, 129, 0.1) 0%, transparent 50%);
}

.bg-gradient-radial {
    background-image: radial-gradient(circle at center, var(--tw-gradient-stops));
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: rgba(17, 24, 39, 0.5);
}

::-webkit-scrollbar-thumb {
    background: rgba(59, 130, 246, 0.5);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: rgba(59, 130, 246, 0.7);
}

/* Text Colors */
.text-primary {
    color: #3B82F6;
}

.text-accent {
    color: #10B981;
}

.text-white {
    color: #FFFFFF;
}

.text-gray-300 {
    color: #D1D5DB;
}

.text-gray-400 {
    color: #9CA3AF;
}

/* Background Colors */
.bg-dark-900 {
    background-color: #111827;
}

.bg-dark-800 {
    background-color: #1F2937;
}

/* Section Spacing */
.section-spacing {
    padding-top: 6rem;
    padding-bottom: 6rem;
}

/* Card Styles */
.card {
    background-color: rgba(31, 41, 55, 0.5);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(75, 85, 99, 0.2);
    border-radius: 1rem;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: transform, border-color, box-shadow;
}

.card:hover {
    transform: translateY(-5px) scale(1.02);
    border-color: rgba(59, 130, 246, 0.3);
    box-shadow: 0 10px 30px -10px rgba(59, 130, 246, 0.2);
}

/* Enhanced Button Hover Effects */
.btn-primary {
    position: relative;
    overflow: hidden;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: transform, box-shadow;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px -5px rgba(59, 130, 246, 0.4);
}

.btn-primary::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: width 0.6s ease-out, height 0.6s ease-out;
}

.btn-primary:hover::after {
    width: 300px;
    height: 300px;
}

/* Enhanced Scroll Animations */
.scroll-reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: opacity, transform;
}

.scroll-reveal.is-visible {
    opacity: 1;
    transform: translateY(0);
}

/* Enhanced Loading States */
.loading {
    position: relative;
    overflow: hidden;
}

.loading::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 50%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255, 255, 255, 0.1),
        transparent
    );
    animation: loading 1.5s infinite;
}

@keyframes loading {
    0% { left: -100%; }
    100% { left: 200%; }
}

/* Enhanced button animations */
@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

@keyframes pulse-glow {
    0%, 100% { opacity: 0.5; transform: scale(1); }
    50% { opacity: 0.8; transform: scale(1.05); }
}

/* Add these to your existing styles */
.group:hover .animate-shimmer {
    animation: shimmer 1.5s infinite;
}

.group:hover .animate-pulse-glow {
    animation: pulse-glow 2s infinite;
}
</style>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center py-24 overflow-hidden bg-dark-900">
    <!-- Animated background elements -->
    <div class="absolute inset-0 bg-gradient-mesh opacity-20"></div>
    
    <!-- Animated shapes -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Glowing orbs with enhanced animations -->
        <div class="absolute top-1/4 -right-20 w-96 h-96 bg-glow-purple/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute -bottom-32 -left-20 w-96 h-96 bg-glow-blue/20 rounded-full blur-3xl animate-pulse-slow delay-1000"></div>
        
        <!-- Interactive geometric shapes -->
        <div class="absolute top-20 left-[20%] w-20 h-20 border border-primary-500/20 rounded-xl animate-float">
            <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-transparent"></div>
            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" class="animate-draw" />
            </svg>
        </div>
        <div class="absolute bottom-32 right-[15%] w-24 h-24 border border-accent-500/20 animate-morph">
            <div class="absolute inset-0 bg-gradient-to-r from-accent-500/10 to-transparent"></div>
            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                <circle cx="12" cy="12" r="10" class="animate-draw" />
                <path d="M12 6v6l4 2" class="animate-draw" />
            </svg>
        </div>
        
        <!-- Enhanced grid pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(rgba(59,130,246,0.02)_1px,transparent_1px),linear-gradient(to_right,rgba(59,130,246,0.02)_1px,transparent_1px)] bg-[size:24px_24px]"></div>
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

                <!-- Stats with enhanced animations -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-8 pt-8 mt-8 border-t border-gray-800">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-lg blur-lg transition-all group-hover:blur-xl"></div>
                        <div class="relative bg-dark-800/50 backdrop-blur-sm p-4 rounded-lg border border-gray-800">
                            <div class="text-3xl font-bold text-white mb-1 bg-gradient-to-r from-primary-400 to-accent-400 bg-clip-text text-transparent">
                                <span class="counter" data-target="100" data-duration="2000">0</span>+
                            </div>
                            <div class="text-gray-400 text-sm">Projects Delivered</div>
                        </div>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-lg blur-lg transition-all group-hover:blur-xl"></div>
                        <div class="relative bg-dark-800/50 backdrop-blur-sm p-4 rounded-lg border border-gray-800">
                            <div class="text-3xl font-bold text-white mb-1 bg-gradient-to-r from-primary-400 to-accent-400 bg-clip-text text-transparent">
                                <span class="counter" data-target="5" data-duration="2000">0</span>+
                            </div>
                            <div class="text-gray-400 text-sm">Years Experience</div>
                        </div>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-lg blur-lg transition-all group-hover:blur-xl"></div>
                        <div class="relative bg-dark-800/50 backdrop-blur-sm p-4 rounded-lg border border-gray-800">
                            <div class="text-3xl font-bold text-white mb-1 bg-gradient-to-r from-primary-400 to-accent-400 bg-clip-text text-transparent">
                                <span class="counter" data-target="50" data-duration="2000">0</span>+
                            </div>
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

            <!-- Hero Visual with SVG Animation -->
            <div class="relative hidden lg:block">
                <div class="relative w-full aspect-square">
                    <!-- Main SVG Animation -->
                    <svg class="w-full h-full" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Animated circles -->
                        <circle cx="200" cy="200" r="150" class="animate-pulse-slow" stroke="url(#gradient1)" stroke-width="2" fill="none"/>
                        <circle cx="200" cy="200" r="100" class="animate-pulse-slow delay-300" stroke="url(#gradient2)" stroke-width="2" fill="none"/>
                        <circle cx="200" cy="200" r="50" class="animate-pulse-slow delay-700" stroke="url(#gradient3)" stroke-width="2" fill="none"/>
                        
                        <!-- Animated paths -->
                        <path d="M200 50 L200 350" class="animate-draw" stroke="url(#gradient4)" stroke-width="2"/>
                        <path d="M50 200 L350 200" class="animate-draw delay-500" stroke="url(#gradient4)" stroke-width="2"/>
                        
                        <!-- Floating elements -->
                        <g class="animate-float">
                            <circle cx="200" cy="100" r="10" fill="url(#gradient5)"/>
                            <circle cx="300" cy="200" r="10" fill="url(#gradient5)"/>
                            <circle cx="200" cy="300" r="10" fill="url(#gradient5)"/>
                            <circle cx="100" cy="200" r="10" fill="url(#gradient5)"/>
                        </g>
                        
                        <!-- Gradients -->
                        <defs>
                            <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#10B981" stop-opacity="0.5"/>
                                <stop offset="100%" stop-color="#3B82F6" stop-opacity="0.5"/>
                            </linearGradient>
                            <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#10B981" stop-opacity="0.3"/>
                                <stop offset="100%" stop-color="#3B82F6" stop-opacity="0.3"/>
                            </linearGradient>
                            <linearGradient id="gradient3" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#10B981" stop-opacity="0.2"/>
                                <stop offset="100%" stop-color="#3B82F6" stop-opacity="0.2"/>
                            </linearGradient>
                            <linearGradient id="gradient4" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#10B981"/>
                                <stop offset="100%" stop-color="#3B82F6"/>
                            </linearGradient>
                            <linearGradient id="gradient5" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#10B981"/>
                                <stop offset="100%" stop-color="#3B82F6"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced scroll indicator -->
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
                    <h3 class="text-xl font-semibold text-white mb-4">Web Development</h3>
                    <p class="text-gray-400 mb-6">Custom web applications built with modern technologies and best practices.</p>
                    <a href="/envisionxperts.com/services/web-development" class="inline-flex items-center text-primary-400 hover:text-primary-300 transition-colors">
                        Learn More
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Mobile Apps -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 transition-all group-hover:border-gray-700">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Mobile Applications</h3>
                    <p class="text-gray-400 mb-6">Native and cross-platform mobile apps that deliver exceptional user experiences.</p>
                    <a href="/envisionxperts.com/services/mobile-apps" class="inline-flex items-center text-primary-400 hover:text-primary-300 transition-colors">
                        Learn More
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Cloud Solutions -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 transition-all group-hover:border-gray-700">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Cloud Solutions</h3>
                    <p class="text-gray-400 mb-6">Scalable cloud infrastructure and services to power your digital transformation.</p>
                    <a href="/envisionxperts.com/services/cloud-solutions" class="inline-flex items-center text-primary-400 hover:text-primary-300 transition-colors">
                        Learn More
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-dark-900 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900/5 to-accent-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-12 mt-8">
            <span class="inline-block px-4 py-2 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-4">
                Why Choose Us
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Excellence in Every Detail
            </h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto mb-8">
                We combine expertise, innovation, and dedication to deliver exceptional results that drive your business forward.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Feature cards content -->
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-16 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/10 to-blue-900/10"></div>
    <div class="absolute top-1/2 -translate-y-1/2 right-0 w-1/2 h-full bg-gradient-to-l from-emerald-500/5 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Image Column -->
            <div class="relative group">
                <div class="relative rounded-2xl overflow-hidden transform transition-all duration-500 group-hover:scale-[1.02]">
                    <div class="absolute inset-0 bg-gradient-to-tr from-emerald-500/20 to-blue-500/20 mix-blend-overlay transition-opacity duration-500 group-hover:opacity-75"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-500/10 to-accent-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Interactive Team Animation -->
                    <div class="relative w-full aspect-square">
                        <!-- Animated background grid -->
                        <div class="absolute inset-0 bg-[linear-gradient(rgba(59,130,246,0.05)_1px,transparent_1px),linear-gradient(to_right,rgba(59,130,246,0.05)_1px,transparent_1px)] bg-[size:24px_24px]"></div>
                        
                        <!-- Animated circles with adjusted positions -->
                        <div class="absolute top-1/4 left-1/4 w-32 h-32 border-2 border-primary-500/20 rounded-full animate-spin-slow"></div>
                        <div class="absolute bottom-1/4 right-1/4 w-40 h-40 border-2 border-accent-500/20 rounded-full animate-spin-slow" style="animation-delay: -10s"></div>
                        
                        <!-- Interactive geometric shapes with adjusted positions -->
                        <div class="absolute top-1/4 left-1/4 w-16 h-16 border border-primary-500/20 rounded-xl animate-float" style="animation-delay: -1s; z-index: 1;">
                            <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-transparent"></div>
                            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" class="animate-draw" />
                            </svg>
                        </div>
                        
                        <div class="absolute bottom-1/3 right-1/3 w-20 h-20 border border-accent-500/20 animate-morph" style="animation-delay: -2s; z-index: 2;">
                            <div class="absolute inset-0 bg-gradient-to-r from-accent-500/10 to-transparent"></div>
                            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                                <circle cx="12" cy="12" r="10" class="animate-draw" />
                                <path d="M12 6v6l4 2" class="animate-draw" />
                            </svg>
                        </div>
                        
                        <!-- Floating elements with adjusted positions -->
                        <div class="absolute top-1/4 right-1/4 w-4 h-4 bg-primary-500/20 rounded-full animate-pulse-slow" style="z-index: 3;"></div>
                        <div class="absolute bottom-1/4 left-1/4 w-3 h-3 bg-accent-500/20 rounded-full animate-float" style="animation-delay: -2s; z-index: 3;"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-4 h-4 bg-primary-500/20 rounded-full animate-pulse-slow" style="z-index: 3;"></div>
                        
                        <!-- Team representation with adjusted z-index -->
                        <div class="absolute inset-0 flex items-center justify-center" style="z-index: 4;">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-white mb-4">Our Team</div>
                                <div class="text-gray-400">Dedicated professionals working together</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Stats with enhanced hover effects -->
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="relative group/stat">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-xl blur-lg transition-all group-hover/stat:blur-xl"></div>
                        <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover/stat:border-primary-500/30">
                            <div class="text-3xl font-bold text-white mb-2 group-hover/stat:text-primary-400 transition-colors">100+</div>
                            <div class="text-gray-400 group-hover/stat:text-gray-300 transition-colors">Projects Completed</div>
                        </div>
                    </div>
                    <div class="relative group/stat">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-xl blur-lg transition-all group-hover/stat:blur-xl"></div>
                        <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover/stat:border-primary-500/30">
                            <div class="text-3xl font-bold text-white mb-2 group-hover/stat:text-primary-400 transition-colors">50+</div>
                            <div class="text-gray-400 group-hover/stat:text-gray-300 transition-colors">Happy Clients</div>
                        </div>
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
                
                <!-- About Us Button -->
                <div class="mt-8">
                    <a href="/envisionxperts.com/about" class="group relative inline-flex items-center justify-center px-8 py-4 font-medium text-lg text-white transition-all duration-300 ease-out">
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
                            <span class="relative z-10">Learn More About Us</span>
                            <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                        
                        <!-- Interactive particles -->
                        <span class="absolute inset-0 overflow-hidden rounded-lg">
                            <span class="absolute -inset-[100%] animate-[spin_3s_linear_infinite] bg-[conic-gradient(from_90deg_at_50%_50%,#3B82F6_0%,#10B981_25%,#3B82F6_50%,#10B981_75%,#3B82F6_100%)] opacity-0 group-hover:opacity-20 transition-opacity duration-500"></span>
                        </span>
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
            <div class="testimonial-card bg-dark-900/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 group hover:border-primary-500/30 transition-all duration-300">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary-500/20 to-accent-500/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" class="animate-pulse"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold group-hover:text-primary-400 transition-colors">Sarah Johnson</h4>
                        <p class="text-gray-400 text-sm">CEO, TechStart Inc.</p>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="flex gap-1 text-emerald-500">
                        <svg class="w-5 h-5 animate-pulse-slow" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 animate-pulse-slow delay-100" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 animate-pulse-slow delay-200" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 animate-pulse-slow delay-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 animate-pulse-slow delay-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <blockquote class="text-gray-300 leading-relaxed mb-6 group-hover:text-white transition-colors">
                    "EnvisionXperts delivered beyond our expectations. Their team's expertise and dedication to quality 
                    resulted in a web application that has significantly improved our business operations."
                </blockquote>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-card bg-dark-900/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 group hover:border-primary-500/30 transition-all duration-300">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary-500/20 to-accent-500/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" class="animate-pulse"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold group-hover:text-primary-400 transition-colors">Michael Chen</h4>
                        <p class="text-gray-400 text-sm">CTO, InnovateCorp</p>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="flex gap-1 text-emerald-500">
                        <svg class="w-5 h-5 animate-pulse-slow" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 animate-pulse-slow delay-100" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 animate-pulse-slow delay-200" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 animate-pulse-slow delay-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 animate-pulse-slow delay-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <blockquote class="text-gray-300 leading-relaxed mb-6 group-hover:text-white transition-colors">
                    "The mobile app developed by EnvisionXperts has revolutionized how we interact with our customers. 
                    Their attention to detail and user experience is outstanding."
                </blockquote>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-card bg-dark-900/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 group hover:border-primary-500/30 transition-all duration-300">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary-500/20 to-accent-500/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" class="animate-pulse"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold group-hover:text-primary-400 transition-colors">Emily Rodriguez</h4>
                        <p class="text-gray-400 text-sm">Product Manager, FutureScale</p>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="flex gap-1 text-emerald-500">
                        <svg class="w-5 h-5 animate-pulse-slow" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 animate-pulse-slow delay-100" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 animate-pulse-slow delay-200" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 animate-pulse-slow delay-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 animate-pulse-slow delay-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <blockquote class="text-gray-300 leading-relaxed mb-6 group-hover:text-white transition-colors">
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
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced scroll animations with Intersection Observer
    const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                if (entry.target.classList.contains('animate-counter')) {
                    animateCounter(entry.target);
                }
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -10% 0px'
    });

    // Observe all elements with animation classes
    document.querySelectorAll('.animate-fade-in, .animate-scale-in, .scroll-reveal, .animate-counter').forEach(el => {
        scrollObserver.observe(el);
    });

    // Enhanced counter animation with easing
    function animateCounter(counter) {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = parseInt(counter.getAttribute('data-duration')) || 2000;
        const start = 0;
        const startTime = performance.now();

        function updateCounter(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            // Easing function for smooth animation
            const easeOutQuart = 1 - Math.pow(1 - progress, 4);
            const current = Math.floor(easeOutQuart * (target - start) + start);
            
            counter.textContent = current;
            
            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            }
        }

        requestAnimationFrame(updateCounter);
    }

    // Initialize counters when they become visible
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                if (!counter.classList.contains('counted')) {
                    counter.classList.add('counted');
                    animateCounter(counter);
                }
            }
        });
    }, {
        threshold: 0.5,
        rootMargin: '0px'
    });

    // Observe all counter elements
    document.querySelectorAll('.counter').forEach(counter => {
        counterObserver.observe(counter);
    });

    // Smooth scroll with enhanced behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Enhanced hover effects for cards
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Parallax effect for background elements
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        document.querySelectorAll('.parallax').forEach(element => {
            const speed = element.dataset.speed || 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // Enhanced button hover effects
    document.querySelectorAll('.btn-primary').forEach(button => {
        button.addEventListener('mouseenter', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            this.style.setProperty('--x', `${x}px`);
            this.style.setProperty('--y', `${y}px`);
        });
    });
});
</script>

<?php
// End output buffering and return the captured content
$content = ob_get_clean();

// Return the content
echo $content;
?>