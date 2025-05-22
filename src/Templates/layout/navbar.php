<?php
$current_page = $_SERVER['REQUEST_URI'];
$base_path = '/envisionxperts.com';

// Define services for dropdown
$services = [
    'web-development' => [
        'name' => 'Web Development',
        'sub_services' => [
            'frontend-development' => 'Frontend Development',
            'backend-development' => 'Backend Development',
            'full-stack-development' => 'Full-Stack Development',
            'progressive-web-apps' => 'Progressive Web Apps',
            'web-application-maintenance' => 'Web Application Maintenance',
            'custom-web-portals' => 'Custom Web Portals'
        ]
    ],
    'e-commerce-solutions' => [
        'name' => 'E-commerce Solutions',
        'sub_services' => [
            'magento-development' => 'Magento Development',
            'magento-customization' => 'Magento Customization',
            'magento-migration' => 'Magento Migration',
            'woocommerce-development' => 'WooCommerce Development',
            'shopify-development' => 'Shopify Development',
            'e-commerce-consultation' => 'E-commerce Consultation'
        ]
    ],
    'mobile-app-development' => [
        'name' => 'Mobile App Development',
        'sub_services' => [
            'ios-development' => 'iOS Development',
            'android-development' => 'Android Development',
            'cross-platform-apps' => 'Cross-Platform Apps',
            'hybrid-apps' => 'Hybrid Apps',
            'mobile-app-maintenance' => 'Mobile App Maintenance',
            'mobile-ux-design' => 'Mobile UX Design'
        ]
    ],
    'cloud-solutions' => [
        'name' => 'Cloud Solutions',
        'sub_services' => [
            'cloud-migration' => 'Cloud Migration',
            'aws-solutions' => 'AWS Solutions',
            'azure-services' => 'Azure Services',
            'google-cloud' => 'Google Cloud',
            'serverless-architecture' => 'Serverless Architecture',
            'cloud-security' => 'Cloud Security'
        ]
    ],
    'digital-marketing' => [
        'name' => 'Digital Marketing',
        'sub_services' => [
            'seo-services' => 'SEO Services',
            'social-media-marketing' => 'Social Media Marketing',
            'content-marketing' => 'Content Marketing',
            'email-marketing' => 'Email Marketing',
            'ppc-advertising' => 'PPC Advertising',
            'analytics-and-reporting' => 'Analytics & Reporting'
        ]
    ],
    'it-consulting' => [
        'name' => 'IT Consulting',
        'sub_services' => [
            'technology-assessment' => 'Technology Assessment',
            'digital-transformation' => 'Digital Transformation',
            'it-strategy' => 'IT Strategy',
            'process-optimization' => 'Process Optimization',
            'software-selection' => 'Software Selection',
            'technical-support' => 'Technical Support'
        ]
    ]
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
                        <svg class="dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    
                    <!-- Main Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-64 bg-slate-900/95 backdrop-blur-sm border border-slate-800 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top scale-95 group-hover:scale-100 z-[9998]">
                        <div class="py-2">
                            <?php foreach ($services as $slug => $service): ?>
                            <div class="relative group/submenu">
                                <a href="<?= $base_path ?>/services/<?= $slug ?>" 
                                   class="flex justify-between items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-slate-800/70 transition-colors">
                                    <span><?= $service['name'] ?></span>
                                    <?php if (!empty($service['sub_services'])): ?>
                                    <svg class="submenu-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                    </svg>
                                    <?php endif; ?>
                                </a>
                                
                                <?php if (!empty($service['sub_services'])): ?>
                                <!-- Submenu -->
                                <div class="absolute left-full top-0 w-64 bg-slate-900/95 backdrop-blur-sm border border-slate-800 rounded-lg shadow-xl opacity-0 invisible group-hover/submenu:opacity-100 group-hover/submenu:visible transition-all duration-200 transform origin-top-left scale-95 group-hover/submenu:scale-100 ml-1 mt-0 z-[9999]">
                                    <div class="py-2">
                                        <?php foreach ($service['sub_services'] as $subSlug => $subName): ?>
                                        <a href="<?= $base_path ?>/services/<?= $slug ?>/<?= $subSlug ?>" 
                                           class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-slate-800/70 transition-colors">
                                            <?= $subName ?>
                                        </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                            <div class="border-t border-slate-700 my-1"></div>
                            <a href="<?= $base_path ?>/services" 
                               class="block px-4 py-2 text-blue-400 hover:text-blue-300 hover:bg-slate-800 transition-colors">
                                View All Services
                            </a>
                        </div>
                    </div>
                </div>
                
                <a href="<?= $base_path ?>/about" class="text-gray-300 hover:text-white transition-colors duration-200 <?= $current_page == $base_path.'/about' ? 'text-white' : '' ?>">About Us</a>
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
        <div id="mobile-menu" class="md:hidden fixed inset-0 bg-slate-900 z-[9999] transform translate-x-full transition-transform duration-500 ease-in-out flex flex-col justify-center items-center">
            <button id="close-mobile-menu" class="absolute top-6 right-6 text-2xl text-gray-400 hover:text-white">
                <i class="fas fa-times"></i>
            </button>
            <nav class="flex flex-col items-center space-y-8 text-xl">
                <a href="<?= $base_path ?>/" class="text-gray-300 hover:text-white transition-colors <?= $current_page == $base_path.'/' ? 'text-white' : '' ?>">Home</a>
                
                <!-- Mobile Services Dropdown -->
                <div class="relative w-full text-center">
                    <a href="<?= $base_path ?>/services" id="mobile-services-toggle" class="text-gray-300 hover:text-white transition-colors flex items-center justify-center w-full <?= strpos($current_page, $base_path.'/services') === 0 ? 'text-white' : '' ?>">
                        Services
                        <svg class="dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    
                    <!-- Mobile Dropdown Menu -->
                    <div id="mobile-services-menu" class="hidden mt-4 space-y-4">
                        <?php foreach ($services as $slug => $service): ?>
                        <div class="relative">
                            <a href="<?= $base_path ?>/services/<?= $slug ?>" 
                               class="block text-gray-300 hover:text-white transition-colors mb-2">
                                <?= $service['name'] ?>
                            </a>
                            
                            <?php if (!empty($service['sub_services'])): ?>
                            <div class="pl-4 space-y-2 mb-4">
                                <?php foreach ($service['sub_services'] as $subSlug => $subName): ?>
                                <a href="<?= $base_path ?>/services/<?= $slug ?>/<?= $subSlug ?>" 
                                   class="block text-gray-400 hover:text-white transition-colors text-sm">
                                    - <?= $subName ?>
                                </a>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                        <div class="border-t border-slate-700 my-1"></div>
                        <a href="<?= $base_path ?>/services" 
                           class="block text-blue-400 hover:text-blue-300 transition-colors">
                            View All Services
                        </a>
                    </div>
                </div>
                
                <a href="<?= $base_path ?>/about" class="text-gray-300 hover:text-white transition-colors <?= $current_page == $base_path.'/about' ? 'text-white' : '' ?>">About Us</a>
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

/* Submenu styles */
.group\/submenu:hover .group-hover\/submenu\:opacity-100 {
    opacity: 1;
}

.group\/submenu:hover .group-hover\/submenu\:visible {
    visibility: visible;
}

.group\/submenu:hover .group-hover\/submenu\:scale-100 {
    transform: scale(1);
}

/* These rules are replaced by the ones in the Arrow styling section */

/* Arrow styling */
.dropdown-arrow {
    width: 16px !important;
    height: 16px !important;
    margin-left: 2px;
    margin-top: 1px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transform-origin: center;
    transition: transform 0.2s ease-in-out;
    transform: scale(0.45);
}

.submenu-arrow {
    width: 14px !important;
    height: 14px !important;
    margin-left: 3px;
    margin-right: 1px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transform-origin: center;
    transition: transform 0.2s ease-in-out;
    transform: scale(0.4);
}

/* Arrow rotation on hover */
.group:hover .dropdown-arrow {
    transform: scale(0.45) rotate(180deg);
}

.group\/submenu:hover .submenu-arrow {
    transform: scale(0.4) rotate(90deg);
}

/* Update submenu positioning */
.group\/submenu > div {
    top: -2px !important;
    margin-left: 2px !important;
}

/* Arrow rotation on hover */
/* Arrow rotation hover styles moved to the arrow styling section */

/* Position refinements */
.group\/submenu > a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-right: 6px;
}

/* Prevent arrow sizing issues */
.dropdown-arrow svg,
.submenu-arrow svg {
    width: 100%;
    height: 100%;
}

/* Submenu positioning and hover effects */
.group\/submenu {
    position: relative;
}

.group\/submenu:hover .group-hover\/submenu\:rotate-90 {
    transform: rotate(90deg);
}

/* Improved submenu positioning */
.group\/submenu > div {
    top: 0;
    margin-top: 0;
    margin-left: 1px;
    transform-origin: left top;
}

/* Enhanced hover states */
.group\/submenu:hover > div {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
}

/* Z-index management */
.group\/submenu {
    z-index: 50;
}

.group\/submenu > div {
    z-index: 51;
}

/* Prevent submenu from overlapping main menu */
.group\/submenu > div {
    pointer-events: none;
}

.group\/submenu:hover > div {
    pointer-events: auto;
}

/* Header background */
#main-header {
    background-color: rgba(15, 23, 42, 0.95);
    backdrop-filter: blur(8px);
}

/* Dropdown Menu Styles */
.group {
    position: relative;
}

/* Main Dropdown */
.group > div {
    position: absolute;
    transform-origin: top;
    transition: all 0.2s ease-in-out;
}

/* Submenu Container */
.group\/submenu {
    position: relative;
}

/* Submenu Positioning */
.group\/submenu > div {
    position: absolute;
    left: 100%;
    top: 0;
    margin-left: 0.25rem;
    transform-origin: left top;
    transition: all 0.2s ease-in-out;
}

/* Hover States */
.group:hover > div {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
}

.group\/submenu:hover > div {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
}

/* Arrow Styling */
.dropdown-arrow {
    width: 16px !important;
    height: 16px !important;
    margin-left: 2px;
    margin-top: 1px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transform-origin: center;
    transition: transform 0.2s ease-in-out;
    transform: scale(0.45);
}

.submenu-arrow {
    width: 14px !important;
    height: 14px !important;
    margin-left: 3px;
    margin-right: 1px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transform-origin: center;
    transition: transform 0.2s ease-in-out;
    transform: scale(0.4);
}

/* Arrow Animations */
.group:hover .dropdown-arrow {
    transform: scale(0.45) rotate(180deg);
}

.group\/submenu:hover .submenu-arrow {
    transform: scale(0.4) rotate(90deg);
}

/* Z-index Management */
.group > div {
    z-index: 9998;
}

.group\/submenu > div {
    z-index: 9999;
}

/* Prevent Text Selection During Hover */
.group\/submenu > a {
    user-select: none;
}

/* Ensure Proper Spacing */
.group\/submenu > a {
    padding-right: 1.5rem;
}

/* Smooth Transitions */
.group > div,
.group\/submenu > div {
    transition: opacity 0.2s ease-in-out,
                visibility 0.2s ease-in-out,
                transform 0.2s ease-in-out;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .group\/submenu > div {
        position: static;
        margin-left: 0;
        margin-top: 0.5rem;
        transform-origin: top;
    }
    
    .group\/submenu:hover .submenu-arrow {
        transform: scale(0.4) rotate(180deg);
    }
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
            const arrow = mobileServicesToggle.querySelector('.dropdown-arrow');
            if (arrow) {
                if (mobileServicesMenu.classList.contains('hidden')) {
                    arrow.style.transform = 'scale(0.45)';
                } else {
                    arrow.style.transform = 'scale(0.45) rotate(180deg)';
                }
            }
        });
    }

    // Prevent dropdown from closing when moving to submenu
    const submenuItems = document.querySelectorAll('.group\/submenu');
    
    submenuItems.forEach(item => {
        const link = item.querySelector('a');
        const submenu = item.querySelector('div');
        
        if (link && submenu) {
            link.addEventListener('mouseenter', () => {
                submenu.style.opacity = '1';
                submenu.style.visibility = 'visible';
                submenu.style.transform = 'scale(1)';
            });
            
            item.addEventListener('mouseleave', () => {
                submenu.style.opacity = '0';
                submenu.style.visibility = 'hidden';
                submenu.style.transform = 'scale(0.95)';
            });
        }
    });
});
</script> 