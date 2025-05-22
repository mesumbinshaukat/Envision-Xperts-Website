<?php
// Set page title
$pageTitle = "Web Development Services";

// Start output buffering to capture content
ob_start();
?>

<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-gradient-to-b from-slate-900 to-slate-950 pt-24">
    <!-- Enhanced animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/3 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <!-- Added floating elements -->
        <div class="absolute top-1/3 right-1/4 w-32 h-32 border border-blue-500/20 rounded-full animate-float"></div>
        <div class="absolute bottom-1/4 left-1/3 w-40 h-40 border border-purple-500/20 rounded-full animate-float delay-1000"></div>
        <!-- Added grid pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(rgba(59,130,246,0.05)_1px,transparent_1px),linear-gradient(to_right,rgba(59,130,246,0.05)_1px,transparent_1px)] bg-[size:24px_24px] animate-[grid_20s_linear_infinite]"></div>
    </div>
    
    <!-- Content with enhanced animations -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-500 animate-fade-in">
                Web Development Services
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 animate-fade-in delay-200">
                Transform your digital presence with our cutting-edge web development solutions
            </p>
            <div class="flex flex-wrap justify-center gap-4 animate-fade-in delay-300">
                <a href="#contact" class="group relative inline-flex items-center justify-center px-8 py-3 font-medium text-lg text-white transition-all duration-300">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg"></span>
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"></span>
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
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/5 to-purple-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 animate-fade-in">
                Our Web Development Expertise
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Frontend Development -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-blue-500/30">
                        <div class="text-blue-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-blue-400 transition-colors">Frontend Development</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Modern, responsive, and interactive user interfaces built with the latest technologies.
                        </p>
                    </div>
                </div>
                
                <!-- Backend Development -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-blue-500/30">
                        <div class="text-blue-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-blue-400 transition-colors">Backend Development</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Robust server-side solutions with scalable architecture and secure APIs.
                        </p>
                    </div>
                </div>
                
                <!-- Full-Stack Development -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-blue-500/30">
                        <div class="text-blue-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-blue-400 transition-colors">Full-Stack Development</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            End-to-end solutions that seamlessly integrate frontend and backend systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Section with enhanced interactivity -->
<section class="py-16 bg-dark-900 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900/5 to-accent-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-2 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-4">
                Our Tech Stack
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                <span class="relative">
                    <span class="relative z-10 bg-gradient-to-r from-primary-400 to-accent-400 text-transparent bg-clip-text">Technologies We Use</span>
                    <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-primary-500/40 to-accent-500/40 blur-sm"></span>
                </span>
            </h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                We leverage cutting-edge technologies to build robust, scalable, and high-performance web applications.
            </p>
        </div>

        <!-- Frontend Technologies -->
        <div class="mb-16">
            <div class="text-center mb-8">
                <span class="inline-block px-4 py-2 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-4">
                    Frontend Technologies
                </span>
                <h3 class="text-2xl font-bold text-white mb-4">Modern Frontend Stack</h3>
                <p class="text-gray-400">Building responsive and interactive user interfaces with the latest frameworks</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- React -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-primary-500/30">
                        <div class="text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fab fa-react text-primary-400 group-hover:text-primary-300 transition-colors"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white group-hover:text-primary-400 transition-colors">React</h4>
                        <p class="text-gray-400 text-sm mt-2">Component-based UI library</p>
                    </div>
                </div>
                
                <!-- Vue.js -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-primary-500/30">
                        <div class="text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fab fa-vuejs text-primary-400 group-hover:text-primary-300 transition-colors"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white group-hover:text-primary-400 transition-colors">Vue.js</h4>
                        <p class="text-gray-400 text-sm mt-2">Progressive JavaScript framework</p>
                    </div>
                </div>
                
                <!-- Angular -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-primary-500/30">
                        <div class="text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fab fa-angular text-primary-400 group-hover:text-primary-300 transition-colors"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white group-hover:text-primary-400 transition-colors">Angular</h4>
                        <p class="text-gray-400 text-sm mt-2">Platform for building web applications</p>
                    </div>
                </div>
                
                <!-- Next.js -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-primary-500/30">
                        <div class="text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-code text-primary-400 group-hover:text-primary-300 transition-colors"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white group-hover:text-primary-400 transition-colors">Next.js</h4>
                        <p class="text-gray-400 text-sm mt-2">React framework for production</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Backend Technologies -->
        <div class="mb-16">
            <div class="text-center mb-8">
                <span class="inline-block px-4 py-2 rounded-full bg-emerald-500/10 text-emerald-400 text-sm font-medium mb-4">
                    Backend Technologies
                </span>
                <h3 class="text-2xl font-bold text-white mb-4">Robust Backend Solutions</h3>
                <p class="text-gray-400">Powering applications with scalable and secure server-side technologies</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Node.js -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/10 to-blue-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-emerald-500/30">
                        <div class="text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fab fa-node-js text-emerald-400 group-hover:text-emerald-300 transition-colors"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white group-hover:text-emerald-400 transition-colors">Node.js</h4>
                        <p class="text-gray-400 text-sm mt-2">JavaScript runtime environment</p>
                    </div>
                </div>
                
                <!-- PHP -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/10 to-blue-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-emerald-500/30">
                        <div class="text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fab fa-php text-emerald-400 group-hover:text-emerald-300 transition-colors"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white group-hover:text-emerald-400 transition-colors">PHP</h4>
                        <p class="text-gray-400 text-sm mt-2">Server-side scripting language</p>
                    </div>
                </div>
                
                <!-- Python -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/10 to-blue-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-emerald-500/30">
                        <div class="text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fab fa-python text-emerald-400 group-hover:text-emerald-300 transition-colors"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white group-hover:text-emerald-400 transition-colors">Python</h4>
                        <p class="text-gray-400 text-sm mt-2">Versatile programming language</p>
                    </div>
                </div>
                
                <!-- Java -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/10 to-blue-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-emerald-500/30">
                        <div class="text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fab fa-java text-emerald-400 group-hover:text-emerald-300 transition-colors"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white group-hover:text-emerald-400 transition-colors">Java</h4>
                        <p class="text-gray-400 text-sm mt-2">Enterprise-grade platform</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Databases -->
        <div>
            <div class="text-center mb-8">
                <span class="inline-block px-4 py-2 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-4">
                    Databases
                </span>
                <h3 class="text-2xl font-bold text-white mb-4">Data Management Solutions</h3>
                <p class="text-gray-400">Efficient and secure database solutions for your applications</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                <!-- MongoDB -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-primary-500/30">
                        <div class="text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-database text-primary-400 group-hover:text-primary-300 transition-colors"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white group-hover:text-primary-400 transition-colors">MongoDB</h4>
                        <p class="text-gray-400 text-sm mt-2">NoSQL database for modern applications</p>
                    </div>
                </div>
                
                <!-- MySQL -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-primary-500/30">
                        <div class="text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-database text-primary-400 group-hover:text-primary-300 transition-colors"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white group-hover:text-primary-400 transition-colors">MySQL</h4>
                        <p class="text-gray-400 text-sm mt-2">Relational database management system</p>
                    </div>
                </div>
                
                <!-- PostgreSQL -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-accent-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-dark-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-primary-500/30">
                        <div class="text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-database text-primary-400 group-hover:text-primary-300 transition-colors"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white group-hover:text-primary-400 transition-colors">PostgreSQL</h4>
                        <p class="text-gray-400 text-sm mt-2">Advanced open-source database</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section with enhanced interactivity -->
<section class="py-20 bg-slate-900 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/5 to-purple-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 animate-fade-in">
                Our Development Process
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Planning -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-blue-500/30">
                        <div class="text-blue-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-blue-400 transition-colors">Planning</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Detailed project planning and requirement analysis
                        </p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2 text-blue-400 opacity-0 group-hover:opacity-100 transition-opacity">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
                
                <!-- Design -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-blue-500/30">
                        <div class="text-blue-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-blue-400 transition-colors">Design</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Creating intuitive and engaging user interfaces
                        </p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2 text-blue-400 opacity-0 group-hover:opacity-100 transition-opacity">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
                
                <!-- Development -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-blue-500/30">
                        <div class="text-blue-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-blue-400 transition-colors">Development</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Clean, efficient, and maintainable code implementation
                        </p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2 text-blue-400 opacity-0 group-hover:opacity-100 transition-opacity">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
                
                <!-- Testing & Launch -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-xl blur-xl transition-all group-hover:blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 transition-all group-hover:border-blue-500/30">
                        <div class="text-blue-400 text-4xl mb-4 transform transition-transform group-hover:scale-110">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-white group-hover:text-blue-400 transition-colors">Testing & Launch</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition-colors">
                            Thorough testing and smooth deployment process
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section with enhanced interactivity -->
<section id="contact" class="py-20 bg-slate-950 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/5 to-purple-900/5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-500/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 animate-fade-in">
                Start Your Project
            </h2>
            
            <form class="group relative bg-slate-800/50 backdrop-blur-sm rounded-xl p-8 border border-gray-800 transition-all duration-300 hover:border-blue-500/30" action="/contact" method="POST">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-500/5 to-purple-500/5 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'] ?? ''); ?>">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div class="relative">
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full bg-slate-700/50 border border-gray-600 rounded-lg px-4 py-2 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                    </div>
                    
                    <div class="relative">
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full bg-slate-700/50 border border-gray-600 rounded-lg px-4 py-2 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Project Details</label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full bg-slate-700/50 border border-gray-600 rounded-lg px-4 py-2 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"></textarea>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="group relative inline-flex items-center justify-center px-8 py-3 font-medium text-lg text-white transition-all duration-300">
                        <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg"></span>
                        <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        <span class="relative flex items-center">
                            Send Message
                            <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
/* Base Animations */
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

@keyframes grid {
    0% { transform: translateY(0); }
    100% { transform: translateY(24px); }
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

/* Tech Icon Styles */
.tech-icon {
    position: relative;
    padding: 1rem;
    background: rgba(59, 130, 246, 0.05);
    border-radius: 0.75rem;
    transition: all 0.3s ease;
}

.tech-icon:hover {
    transform: translateY(-2px);
    background: rgba(59, 130, 246, 0.1);
}

.tech-icon::after {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 0.75rem;
    padding: 1px;
    background: linear-gradient(45deg, rgba(59, 130, 246, 0.5), rgba(16, 185, 129, 0.5));
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.tech-icon:hover::after {
    opacity: 1;
}

/* Enhanced Service Icon Styles */
.service-icon {
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
}

.service-icon:hover {
    transform: translateY(-4px);
}

.service-icon::after {
    content: '';
    position: absolute;
    inset: -4px;
    background: linear-gradient(45deg, rgba(59,130,246,0.1), rgba(16,185,129,0.1));
    border-radius: 1rem;
    opacity: 0;
    transition: opacity 0.5s ease;
    z-index: -1;
}

.service-icon:hover::after {
    opacity: 1;
}

/* Enhanced Animations */
@keyframes float-slow {
    0%, 100% { transform: translateY(0) rotateX(0) rotateY(0); }
    25% { transform: translateY(-10px) rotateX(5deg) rotateY(5deg); }
    75% { transform: translateY(10px) rotateX(-5deg) rotateY(-5deg); }
}

@keyframes shimmer {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}

.animate-float-slow {
    animation: float-slow 8s ease-in-out infinite;
}

.animate-shimmer {
    animation: shimmer 8s linear infinite;
}

/* Particle Animation */
.particle-container {
    position: absolute;
    inset: 0;
}

.particle {
    position: absolute;
    width: 2px;
    height: 2px;
    background: rgba(59, 130, 246, 0.3);
    border-radius: 50%;
    pointer-events: none;
}

/* Interactive Hover Effects */
.hover-scale {
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.hover-scale:hover {
    transform: scale(1.05);
}

/* Code Animation Styles */
.code-animation {
    position: relative;
    height: 100%;
    overflow: hidden;
}

.code-line {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.5s forwards;
    line-height: 1.5;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
}

.animate-blink {
    animation: blink 1s step-end infinite;
}

/* Enhanced Tech Stack Card Styles */
.tech-stack-card {
    position: relative;
    padding: 2rem;
    background: rgba(30, 41, 59, 0.5);
    border-radius: 1rem;
    border: 1px solid rgba(59, 130, 246, 0.1);
    transition: all 0.3s ease;
    overflow: hidden;
}

.tech-stack-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(45deg, rgba(59, 130, 246, 0.1), rgba(16, 185, 129, 0.1));
    opacity: 0;
    transition: opacity 0.3s ease;
}

.tech-stack-card:hover {
    transform: translateY(-5px);
    border-color: rgba(59, 130, 246, 0.3);
    box-shadow: 0 10px 30px -10px rgba(59, 130, 246, 0.2);
}

.tech-stack-card:hover::before {
    opacity: 1;
}

.tech-stack-card .icon {
    position: relative;
    z-index: 1;
    transition: transform 0.3s ease;
}

.tech-stack-card:hover .icon {
    transform: scale(1.1) rotate(5deg);
}

.tech-stack-card .glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at center, rgba(59, 130, 246, 0.2), transparent 70%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.tech-stack-card:hover .glow {
    opacity: 1;
}

/* Shimmer Effect */
.shimmer {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255, 255, 255, 0.1),
        transparent
    );
    transform: translateX(-100%);
    transition: transform 0.5s ease;
}

.tech-stack-card:hover .shimmer {
    transform: translateX(100%);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for fade-in animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -10% 0px'
    });

    // Observe all sections
    document.querySelectorAll('section').forEach(section => {
        observer.observe(section);
    });

    // Enhanced form interactions
    const form = document.querySelector('form');
    if (form) {
        const inputs = form.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('scale-105');
            });
            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('scale-105');
            });
        });
    }
});
</script>

<?php
// End output buffering and return the captured content
$content = ob_get_clean();

// Return the content
echo $content;
?> 