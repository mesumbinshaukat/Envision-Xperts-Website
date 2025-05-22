<?php
$current_page = $_SERVER['REQUEST_URI'];
$base_path = '/envisionxperts.com';

// Define services for dropdown
$services = [
    'web-development' => 'Web Development',
    'mobile-apps' => 'Mobile Applications',
    'cloud-solutions' => 'Cloud Solutions',
    'ai-ml' => 'AI/ML Solutions',
    'devops' => 'DevOps',
    'cybersecurity' => 'Cybersecurity'
];
?>

<header id="main-header" class="fixed top-0 left-0 right-0 bg-slate-900/90 backdrop-blur-md z-50 transition-all duration-300 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <div class="text-blue-500 text-3xl">
                    <i class="fas fa-cube rotate-12 transform inline-block"></i>
                </div>
                <a href="<?= $base_path ?>/" class="text-xl md:text-2xl font-bold text-white tracking-tight relative overflow-hidden group">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-indigo-600">
                        EnvisionXperts
                    </span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="<?= $base_path ?>/" class="text-gray-300 hover:text-white transition-colors duration-200 <?= $current_page == $base_path.'/' ? 'text-white' : '' ?>">Home</a>
                
                <!-- Services Dropdown -->
                <div class="relative group">
                    <a href="<?= $base_path ?>/services" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center space-x-1 <?= strpos($current_page, $base_path.'/services') === 0 ? 'text-white' : '' ?>">
                        <span>Services</span>
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-48 bg-slate-900/95 backdrop-blur-md rounded-lg shadow-xl border border-slate-800 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top scale-95 group-hover:scale-100 z-[9999]">
                        <div class="py-2">
                            <?php foreach ($services as $slug => $name): ?>
                            <a href="<?= $base_path ?>/services/<?= $slug ?>" 
                               class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-slate-800/50 transition-colors">
                                <?= $name ?>
                            </a>
                            <?php endforeach; ?>
                            <div class="border-t border-slate-700 my-1"></div>
                            <a href="<?= $base_path ?>/services" 
                               class="block px-4 py-2 text-blue-400 hover:text-blue-300 hover:bg-slate-800/50 transition-colors">
                                View All Services
                            </a>
                        </div>
                    </div>
                </div>
                
                <a href="<?= $base_path ?>/portfolio" class="text-gray-300 hover:text-white transition-colors duration-200 <?= $current_page == $base_path.'/portfolio' ? 'text-white' : '' ?>">Portfolio</a>
                <a href="<?= $base_path ?>/contact" class="text-gray-300 hover:text-white transition-colors duration-200 <?= $current_page == $base_path.'/contact' ? 'text-white' : '' ?>">Contact</a>
                <a href="<?= $base_path ?>/get-started" class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-4 py-2 rounded-md hover:shadow-lg transition-all duration-300 flex items-center">
                    Get Started
                    <i class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-100 focus:outline-none" aria-label="Toggle navigation menu">
                <div class="burger-icon">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </div>
            </button>
        </nav>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden fixed inset-0 bg-slate-950/98 backdrop-blur-lg z-[9999] transform translate-x-full transition-transform duration-500 ease-in-out flex flex-col justify-center items-center">
            <button id="close-mobile-menu" class="absolute top-6 right-6 text-2xl text-gray-400 hover:text-white">
                <i class="fas fa-times"></i>
            </button>
            <nav class="flex flex-col items-center space-y-8 text-xl">
                <a href="<?= $base_path ?>/" class="text-gray-300 hover:text-white transition-colors <?= $current_page == $base_path.'/' ? 'text-white' : '' ?>">Home</a>
                
                <!-- Mobile Services Dropdown -->
                <div class="relative w-full text-center">
                    <a href="<?= $base_path ?>/services" id="mobile-services-toggle" class="text-gray-300 hover:text-white transition-colors flex items-center justify-center w-full <?= strpos($current_page, $base_path.'/services') === 0 ? 'text-white' : '' ?>">
                        Services
                        <svg class="w-4 h-4 ml-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    
                    <!-- Mobile Dropdown Menu -->
                    <div id="mobile-services-menu" class="hidden mt-4 space-y-4">
                        <?php foreach ($services as $slug => $name): ?>
                        <a href="<?= $base_path ?>/services/<?= $slug ?>" 
                           class="block text-gray-400 hover:text-white transition-colors">
                            <?= $name ?>
                        </a>
                        <?php endforeach; ?>
                        <div class="border-t border-slate-700 my-1"></div>
                        <a href="<?= $base_path ?>/services" 
                           class="block text-blue-400 hover:text-blue-300 transition-colors">
                            View All Services
                        </a>
                    </div>
                </div>
                
                <a href="<?= $base_path ?>/portfolio" class="text-gray-300 hover:text-white transition-colors <?= $current_page == $base_path.'/portfolio' ? 'text-white' : '' ?>">Portfolio</a>
                <a href="<?= $base_path ?>/contact" class="text-gray-300 hover:text-white transition-colors <?= $current_page == $base_path.'/contact' ? 'text-white' : '' ?>">Contact</a>
                <a href="<?= $base_path ?>/get-started" class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-3 rounded-md hover:shadow-lg transition-all duration-300 flex items-center mt-4">
                    Get Started
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </nav>
        </div>
    </div>
</header>

<!-- Add padding to the top of the main content to account for fixed navbar -->
<div class="pt-16"></div>

<style>
/* Burger Menu Styles */
.burger-icon {
    @apply w-6 h-6 flex flex-col justify-between;
}

.burger-line {
    @apply w-full h-0.5 bg-gray-300 transition-all duration-300;
}

/* Mobile Menu Animation */
#mobile-menu.active {
    @apply translate-x-0;
}

/* Mobile Services Menu Animation */
#mobile-services-menu.active {
    @apply block;
}

/* Dropdown Animation */
.group:hover .group-hover\:scale-100 {
    transform: scale(1);
}

.group:hover .group-hover\:opacity-100 {
    opacity: 1;
}

.group:hover .group-hover\:visible {
    visibility: visible;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMobileMenu = document.getElementById('close-mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('translate-x-full');
        });
    }
    
    if (closeMobileMenu && mobileMenu) {
        closeMobileMenu.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
        });
    }
    
    // Mobile services dropdown toggle
    const mobileServicesToggle = document.getElementById('mobile-services-toggle');
    const mobileServicesMenu = document.getElementById('mobile-services-menu');
    
    if (mobileServicesToggle && mobileServicesMenu) {
        mobileServicesToggle.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default link behavior
            mobileServicesMenu.classList.toggle('hidden');
            mobileServicesToggle.querySelector('svg').classList.toggle('rotate-180');
        });
    }
});
</script> 