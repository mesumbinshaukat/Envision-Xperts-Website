<?php
// Set page title
$pageTitle = "Our Services";

// Start output buffering to capture content
ob_start();
?>

<!-- Services Hero Section -->
<section class="relative py-24 bg-dark-900 overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-mesh opacity-20"></div>
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-accent-500/5 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <span class="inline-block px-4 py-2 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-4">
                Our Services
            </span>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Comprehensive Digital Solutions
            </h1>
            <p class="text-xl text-gray-300 leading-relaxed">
                We deliver cutting-edge technology solutions tailored to your business needs. 
                From web development to cloud solutions, we've got you covered.
            </p>
        </div>
    </div>
</section>

<!-- Services Grid Section -->
<section class="py-24 bg-dark-800/50 relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Web Development -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 transition-all group-hover:border-primary-500/30 h-full">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4 group-hover:text-primary-400 transition-colors">Web Development</h3>
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
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 transition-all group-hover:border-primary-500/30 h-full">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4 group-hover:text-primary-400 transition-colors">Mobile Applications</h3>
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
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 transition-all group-hover:border-primary-500/30 h-full">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4 group-hover:text-primary-400 transition-colors">Cloud Solutions</h3>
                    <p class="text-gray-400 mb-6">Scalable cloud infrastructure and services to power your digital transformation.</p>
                    <a href="/envisionxperts.com/services/cloud-solutions" class="inline-flex items-center text-primary-400 hover:text-primary-300 transition-colors">
                        Learn More
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- AI/ML Solutions -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 transition-all group-hover:border-primary-500/30 h-full">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4 group-hover:text-primary-400 transition-colors">AI/ML Solutions</h3>
                    <p class="text-gray-400 mb-6">Intelligent solutions powered by cutting-edge artificial intelligence and machine learning.</p>
                    <a href="/envisionxperts.com/services/ai-ml" class="inline-flex items-center text-primary-400 hover:text-primary-300 transition-colors">
                        Learn More
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- DevOps -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 transition-all group-hover:border-primary-500/30 h-full">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4 group-hover:text-primary-400 transition-colors">DevOps</h3>
                    <p class="text-gray-400 mb-6">Streamline your development and operations with modern DevOps practices.</p>
                    <a href="/envisionxperts.com/services/devops" class="inline-flex items-center text-primary-400 hover:text-primary-300 transition-colors">
                        Learn More
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Cybersecurity -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-2xl blur-xl transition-all group-hover:blur-2xl"></div>
                <div class="relative bg-dark-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-800 transition-all group-hover:border-primary-500/30 h-full">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary-500/20 to-accent-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4 group-hover:text-primary-400 transition-colors">Cybersecurity</h3>
                    <p class="text-gray-400 mb-6">Comprehensive security solutions to protect your digital assets and infrastructure.</p>
                    <a href="/envisionxperts.com/services/cybersecurity" class="inline-flex items-center text-primary-400 hover:text-primary-300 transition-colors">
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

<!-- CTA Section -->
<section class="py-24 bg-dark-900 relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Transform Your Business?
            </h2>
            <p class="text-xl text-gray-300 mb-8">
                Let's discuss how our services can help you achieve your digital goals.
            </p>
            <a href="/envisionxperts.com/contact" class="group relative inline-flex items-center justify-center px-8 py-4 font-medium text-lg text-white transition-all duration-300 ease-out">
                <!-- Animated background -->
                <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-primary-600 via-accent-500 to-primary-600 rounded-lg transition-all duration-500 group-hover:scale-105"></span>
                
                <!-- Shimmer effect -->
                <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 -translate-x-full group-hover:translate-x-full"></span>
                
                <!-- Content -->
                <span class="relative flex items-center">
                    Get Started
                    <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>

<?php
// End output buffering and return the captured content
$content = ob_get_clean();

// Return the content
echo $content;
?> 