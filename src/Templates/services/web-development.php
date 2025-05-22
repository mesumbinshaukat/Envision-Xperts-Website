<?php
// Set page title
$pageTitle = "Web Development Services";

// Start output buffering to capture content
ob_start();
?>

<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-gradient-to-b from-slate-900 to-slate-950 pt-24">
    <!-- Animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/3 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-500">
                Web Development Services
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8">
                Transform your digital presence with our cutting-edge web development solutions
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#contact" class="btn-primary-gradient px-8 py-3 rounded-lg text-white font-medium hover:shadow-lg transition-all duration-300">
                    Get Started
                </a>
                <a href="#services" class="btn-secondary px-8 py-3 rounded-lg text-white font-medium hover:shadow-lg transition-all duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section id="services" class="py-20 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
                Our Web Development Expertise
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Frontend Development -->
                <div class="bg-slate-800 rounded-xl p-6 hover:shadow-xl transition-all duration-300">
                    <div class="text-blue-400 text-4xl mb-4">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Frontend Development</h3>
                    <p class="text-gray-400">
                        Modern, responsive, and interactive user interfaces built with the latest technologies.
                    </p>
                </div>
                
                <!-- Backend Development -->
                <div class="bg-slate-800 rounded-xl p-6 hover:shadow-xl transition-all duration-300">
                    <div class="text-blue-400 text-4xl mb-4">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Backend Development</h3>
                    <p class="text-gray-400">
                        Robust server-side solutions with scalable architecture and secure APIs.
                    </p>
                </div>
                
                <!-- Full-Stack Development -->
                <div class="bg-slate-800 rounded-xl p-6 hover:shadow-xl transition-all duration-300">
                    <div class="text-blue-400 text-4xl mb-4">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Full-Stack Development</h3>
                    <p class="text-gray-400">
                        End-to-end solutions that seamlessly integrate frontend and backend systems.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="py-20 bg-slate-950">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
                Technologies We Use
            </h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- React -->
                <div class="text-center">
                    <div class="text-5xl mb-4">
                        <i class="fab fa-react text-blue-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold">React</h3>
                </div>
                
                <!-- Node.js -->
                <div class="text-center">
                    <div class="text-5xl mb-4">
                        <i class="fab fa-node-js text-green-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold">Node.js</h3>
                </div>
                
                <!-- PHP -->
                <div class="text-center">
                    <div class="text-5xl mb-4">
                        <i class="fab fa-php text-purple-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold">PHP</h3>
                </div>
                
                <!-- Python -->
                <div class="text-center">
                    <div class="text-5xl mb-4">
                        <i class="fab fa-python text-yellow-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold">Python</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
                Our Development Process
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Planning -->
                <div class="relative">
                    <div class="bg-slate-800 rounded-xl p-6">
                        <div class="text-blue-400 text-4xl mb-4">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Planning</h3>
                        <p class="text-gray-400">
                            Detailed project planning and requirement analysis
                        </p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2">
                        <i class="fas fa-chevron-right text-blue-400"></i>
                    </div>
                </div>
                
                <!-- Design -->
                <div class="relative">
                    <div class="bg-slate-800 rounded-xl p-6">
                        <div class="text-blue-400 text-4xl mb-4">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Design</h3>
                        <p class="text-gray-400">
                            Creating intuitive and engaging user interfaces
                        </p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2">
                        <i class="fas fa-chevron-right text-blue-400"></i>
                    </div>
                </div>
                
                <!-- Development -->
                <div class="relative">
                    <div class="bg-slate-800 rounded-xl p-6">
                        <div class="text-blue-400 text-4xl mb-4">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Development</h3>
                        <p class="text-gray-400">
                            Clean, efficient, and maintainable code implementation
                        </p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2">
                        <i class="fas fa-chevron-right text-blue-400"></i>
                    </div>
                </div>
                
                <!-- Testing & Launch -->
                <div class="bg-slate-800 rounded-xl p-6">
                    <div class="text-blue-400 text-4xl mb-4">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Testing & Launch</h3>
                    <p class="text-gray-400">
                        Thorough testing and smooth deployment process
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-slate-950">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
                Start Your Project
            </h2>
            
            <form class="bg-slate-800 rounded-xl p-8" action="/contact" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'] ?? ''); ?>">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full bg-slate-700 border border-slate-600 rounded-lg px-4 py-2 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full bg-slate-700 border border-slate-600 rounded-lg px-4 py-2 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Project Details</label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full bg-slate-700 border border-slate-600 rounded-lg px-4 py-2 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn-primary-gradient px-8 py-3 rounded-lg text-white font-medium hover:shadow-lg transition-all duration-300">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
// End output buffering and return the captured content
$content = ob_get_clean();

// Return the content
echo $content;
?> 