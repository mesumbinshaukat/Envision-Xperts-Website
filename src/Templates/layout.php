<?php
require_once __DIR__ . '/../config/init.php';

// Rate limiting check
$ip = $_SERVER['REMOTE_ADDR'];
$redis = new Redis();
$redis->connect($_ENV['REDIS_HOST'], $_ENV['REDIS_PORT']);
$rateLimitKey = 'rate_limit:' . $ip;
$requests = $redis->incr($rateLimitKey);
$redis->expire($rateLimitKey, 60);

if ($requests > 60) {
    header('HTTP/1.1 429 Too Many Requests');
    exit('Too many requests');
}

// CSRF Protection for POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        header('HTTP/1.1 403 Forbidden');
        exit('CSRF token validation failed');
    }
}

// Generate page title
$pageTitle = isset($pageTitle) ? $pageTitle . ' | EnvisionXperts' : 'EnvisionXperts | IT Services & SaaS Solutions';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EnvisionXperts - Professional IT Services and cutting-edge SaaS solutions for your business">
    <meta name="keywords" content="IT services, SaaS, software development, cloud solutions, digital transformation">
    <meta name="author" content="EnvisionXperts">
    <meta name="theme-color" content="#0f172a">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="Transform your business with our innovative IT and SaaS solutions">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://envisionxperts.com">
    <meta property="og:image" content="/assets/images/og-image.jpg">
    
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
    
    <!-- Stylesheets -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/TextPlugin.min.js" defer></script>
    <script src="/assets/js/main.js" defer></script>
</head>
<body class="min-h-screen bg-slate-900 text-gray-100 font-sans antialiased flex flex-col transition-colors duration-300">
    <!-- Cursor follower (decorative element) -->
    <div class="cursor-follower hidden lg:block"></div>
    
    <!-- Loading screen animation -->
    <div id="loader" class="fixed inset-0 bg-slate-950 flex items-center justify-center z-50 transition-opacity duration-700">
        <div class="loader-content">
            <svg class="logo-animation" width="120" height="120" viewBox="0 0 120 120">
                <path class="logo-path" d="M60,10 L100,30 L100,70 L60,90 L20,70 L20,30 Z" fill="none" stroke="#60a5fa" stroke-width="4"></path>
                <text x="60" y="65" text-anchor="middle" class="logo-text" fill="#60a5fa" font-size="14">ENVISION</text>
            </svg>
        </div>
    </div>

    <div id="app" class="flex flex-col min-h-screen transition-all duration-500">
        <!-- Header & Navigation -->
        <header id="main-header" class="fixed top-0 left-0 right-0 bg-slate-900/90 backdrop-blur-md z-40 transition-all duration-300 border-b border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="flex justify-between items-center py-4">
                    <!-- Logo -->
                    <div class="flex items-center space-x-2 animate-on-scroll">
                        <div class="text-blue-500 text-3xl">
                            <i class="fas fa-cube rotate-12 transform inline-block"></i>
                        </div>
                        <a href="/" class="text-xl md:text-2xl font-bold text-white tracking-tight relative overflow-hidden group">
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-indigo-600">
                                EnvisionXperts
                            </span>
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-500 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="/" class="nav-link">Home</a>
                        <a href="/services" class="nav-link">Services</a>
                        <a href="/products" class="nav-link">Products</a>
                        <a href="/about" class="nav-link">About</a>
                        <a href="/contact" class="nav-link">Contact</a>
                        <a href="/get-started" class="nav-button">
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
            </div>
            
            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="md:hidden fixed inset-0 bg-slate-950/98 backdrop-blur-lg z-50 transform translate-x-full transition-transform duration-500 ease-in-out flex flex-col justify-center items-center">
                <button id="close-mobile-menu" class="absolute top-6 right-6 text-2xl text-gray-400 hover:text-white">
                    <i class="fas fa-times"></i>
                </button>
                <nav class="flex flex-col items-center space-y-8 text-xl">
                    <a href="/" class="mobile-nav-link">Home</a>
                    <a href="/services" class="mobile-nav-link">Services</a>
                    <a href="/products" class="mobile-nav-link">Products</a>
                    <a href="/about" class="mobile-nav-link">About</a>
                    <a href="/contact" class="mobile-nav-link">Contact</a>
                    <a href="/get-started" class="mobile-nav-button mt-4">
                        Get Started
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </nav>
                <div class="absolute bottom-10 flex space-x-6 text-xl">
                    <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </header>
        
        <!-- Main Content -->
        <main class="flex-grow pt-24 pb-16">
            <?php if (isset($_SESSION['csrf_token'])): ?>
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
            <?php endif; ?>
            
            <div id="page-content" class="animate-content-fade">
                <!-- Content will be inserted here from individual page templates -->
                <?php echo $content ?? ''; ?>
            </div>
        </main>
        
        <!-- Footer -->
        <footer class="bg-slate-950 border-t border-slate-800 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                    <!-- Brand Column -->
                    <div class="animate-on-scroll">
                        <div class="flex items-center space-x-2 mb-4">
                            <div class="text-blue-500 text-2xl">
                                <i class="fas fa-cube rotate-12 transform inline-block"></i>
                            </div>
                            <h2 class="text-xl font-bold text-white">EnvisionXperts</h2>
                        </div>
                        <p class="text-gray-400 mb-6">Transforming ideas into powerful solutions. We create innovative IT services and SaaS products for businesses looking to excel in the digital landscape.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    
                    <!-- Services Column -->
                    <div class="animate-on-scroll">
                        <h3 class="text-lg font-semibold text-white mb-4">Services</h3>
                        <ul class="space-y-3 text-gray-400">
                            <li><a href="/services/web-development" class="footer-link">Web Development</a></li>
                            <li><a href="/services/mobile-apps" class="footer-link">Mobile Applications</a></li>
                            <li><a href="/services/cloud-solutions" class="footer-link">Cloud Solutions</a></li>
                            <li><a href="/services/ai-ml" class="footer-link">AI & Machine Learning</a></li>
                            <li><a href="/services/consulting" class="footer-link">IT Consulting</a></li>
                        </ul>
                    </div>
                    
                    <!-- Company Column -->
                    <div class="animate-on-scroll">
                        <h3 class="text-lg font-semibold text-white mb-4">Company</h3>
                        <ul class="space-y-3 text-gray-400">
                            <li><a href="/about" class="footer-link">About Us</a></li>
                            <li><a href="/careers" class="footer-link">Careers</a></li>
                            <li><a href="/blog" class="footer-link">Blog</a></li>
                            <li><a href="/case-studies" class="footer-link">Case Studies</a></li>
                            <li><a href="/contact" class="footer-link">Contact Us</a></li>
                        </ul>
                    </div>
                    
                    <!-- Newsletter Column -->
                    <div class="animate-on-scroll">
                        <h3 class="text-lg font-semibold text-white mb-4">Subscribe to Newsletter</h3>
                        <p class="text-gray-400 mb-4">Stay updated with our latest news and offers.</p>
                        <form class="newsletter-form" action="/subscribe" method="POST">
                            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'] ?? ''); ?>">
                            <div class="flex flex-col space-y-3">
                                <input type="email" name="email" placeholder="Your email address" required
                                    class="bg-slate-800 border border-slate-700 rounded-md px-4 py-2 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                                <button type="submit" class="btn-primary-gradient px-4 py-2 rounded-md text-white font-medium hover:shadow-lg transition-all duration-300 flex items-center justify-center">
                                    Subscribe <i class="fas fa-paper-plane ml-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Divider -->
                <div class="border-t border-slate-800 my-8"></div>
                
                <!-- Footer Bottom -->
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <!-- Copyright -->
                    <div class="text-gray-500 mb-4 md:mb-0">
                        <p>&copy; <?php echo date('Y'); ?> EnvisionXperts. All rights reserved.</p>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6 text-gray-500 mb-4 md:mb-0">
                        <a href="mailto:contact@envisionxperts.com" class="hover:text-blue-400 transition-colors duration-300">
                            <i class="far fa-envelope mr-2"></i>contact@envisionxperts.com
                        </a>
                        <a href="tel:+12345678900" class="hover:text-blue-400 transition-colors duration-300">
                            <i class="fas fa-phone-alt mr-2"></i>+1 (234) 567-8900
                        </a>
                    </div>
                    
                    <!-- Legal Links -->
                    <div class="flex space-x-6 text-gray-500">
                        <a href="/privacy-policy" class="hover:text-blue-400 transition-colors duration-300">Privacy Policy</a>
                        <a href="/terms-of-service" class="hover:text-blue-400 transition-colors duration-300">Terms of Service</a>
                        <a href="/cookies" class="hover:text-blue-400 transition-colors duration-300">Cookies</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Scroll to top button -->
        <button id="scroll-to-top" class="fixed bottom-8 right-8 bg-blue-600 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-blue-700 focus:outline-none z-40" aria-label="Scroll to top">
            <i class="fas fa-arrow-up"></i>
        </button>
        
        <!-- Cursor follower script and initialization -->
        <script>
            // Initialize on document load
            document.addEventListener('DOMContentLoaded', function() {
                // Handle mobile menu
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const closeMobileMenuButton = document.getElementById('close-mobile-menu');
                const mobileMenu = document.getElementById('mobile-menu');
                
                if (mobileMenuButton && mobileMenu) {
                    mobileMenuButton.addEventListener('click', function() {
                        mobileMenu.classList.remove('translate-x-full');
                        document.body.classList.add('overflow-hidden');
                    });
                }
                
                if (closeMobileMenuButton && mobileMenu) {
                    closeMobileMenuButton.addEventListener('click', function() {
                        mobileMenu.classList.add('translate-x-full');
                        document.body.classList.remove('overflow-hidden');
                    });
                }
                
                // Handle scroll to top button
                const scrollToTopButton = document.getElementById('scroll-to-top');
                
                if (scrollToTopButton) {
                    window.addEventListener('scroll', function() {
                        if (window.pageYOffset > 300) {
                            scrollToTopButton.classList.remove('opacity-0', 'invisible');
                            scrollToTopButton.classList.add('opacity-100', 'visible');
                        } else {
                            scrollToTopButton.classList.remove('opacity-100', 'visible');
                            scrollToTopButton.classList.add('opacity-0', 'invisible');
                        }
                    });
                    
                    scrollToTopButton.addEventListener('click', function() {
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    });
                }
                
                // Handle loader animation
                const loader = document.getElementById('loader');
                
                if (loader) {
                    setTimeout(function() {
                        loader.classList.add('opacity-0');
                        setTimeout(function() {
                            loader.style.display = 'none';
                        }, 700);
                    }, 1500);
                }
                
                // Custom cursor follower
                const cursorFollower = document.querySelector('.cursor-follower');
                
                if (cursorFollower) {
                    document.addEventListener('mousemove', function(e) {
                        gsap.to(cursorFollower, {
                            x: e.clientX,
                            y: e.clientY,
                            duration: 0.1
                        });
                    });
                }
                
                // Sticky header effect
                const header = document.getElementById('main-header');
                
                if (header) {
                    window.addEventListener('scroll', function() {
                        if (window.pageYOffset > 50) {
                            header.classList.add('shadow-md', 'py-2');
                            header.classList.remove('py-4');
                        } else {
                            header.classList.remove('shadow-md', 'py-2');
                            header.classList.add('py-4');
                        }
                    });
                }
            });
        </script>
    </div>
</body>
</html>
