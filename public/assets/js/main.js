/**
 * EnvisionXperts - Main JavaScript
 * This file contains all interactive features and animations for the website
 */

document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const themeToggle = document.getElementById('theme-toggle');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('mobile-menu-enter');
            setTimeout(() => {
                mobileMenu.classList.toggle('mobile-menu-enter-active');
            }, 10);
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (mobileMenu && !mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
            mobileMenu.classList.add('mobile-menu-exit');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('mobile-menu-exit');
            }, 200);
        }
    });

    // Theme toggle functionality
    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
        });
    }

    // Initialize theme from localStorage
    const theme = localStorage.getItem('theme') || 'dark';
    if (theme === 'dark') {
        document.documentElement.classList.add('dark');
    }

    // GSAP Animations (if GSAP is loaded)
    if (typeof gsap !== 'undefined') {
        // Hero section animations
        const heroContent = document.querySelector('.hero-content');
        if (heroContent) {
            gsap.from(heroContent.children, {
                opacity: 0,
                y: 30,
                duration: 1,
                stagger: 0.2,
                ease: 'power2.out'
            });
        }

        // Animate sections on scroll
        gsap.utils.toArray('.animate-on-scroll').forEach((section, i) => {
            gsap.from(section, {
                opacity: 0,
                y: 50,
                duration: 1,
                scrollTrigger: {
                    trigger: section,
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse'
                }
            });
        });
    }
});

/**
 * Loading Screen Animation
 * Animates the initial loading screen with logo and reveals the site
 */
function initLoader() {
    const loader = document.getElementById('loader');
    if (!loader) return;
    
    // Logo path animation
    const logoPath = document.querySelector('.logo-path');
    const logoText = document.querySelector('.logo-text');
    
    if (logoPath && logoText) {
        logoPath.style.strokeDasharray = '600';
        logoPath.style.strokeDashoffset = '600';
        
        gsap.to(logoPath, {
            strokeDashoffset: 0,
            duration: 1.5,
            ease: 'power2.inOut'
        });
        
        gsap.fromTo(logoText, 
            { opacity: 0 },
            { opacity: 1, duration: 0.8, delay: 1.2, ease: 'power2.inOut' }
        );
    }
    
    // Hide loader and reveal content
    gsap.to(loader, {
        opacity: 0,
        duration: 0.8,
        delay: 2,
        onComplete: () => {
            loader.style.display = 'none';
            document.body.classList.add('loaded');
            
            // Animate hero section elements after page load
            animateHeroElements();
        }
    });
}

/**
 * Navigation Functionality
 * Handles mobile menu, nav links, and scroll behavior
 */
function initNavigation() {
    // Mobile Menu Functionality
    const mobileMenuBtn = document.getElementById('mobile-menu-button');
    const closeMobileMenuBtn = document.getElementById('close-mobile-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-full');
            document.body.classList.add('overflow-hidden');
            
            // Animate mobile menu items
            const menuItems = mobileMenu.querySelectorAll('.mobile-nav-link, .mobile-nav-button');
            gsap.fromTo(menuItems, 
                { opacity: 0, y: 20 },
                { 
                    opacity: 1, 
                    y: 0, 
                    duration: 0.5, 
                    stagger: 0.1,
                    ease: 'power2.out',
                    delay: 0.2
                }
            );
        });
    }
    
    if (closeMobileMenuBtn && mobileMenu) {
        closeMobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
            document.body.classList.remove('overflow-hidden');
        });
    }
    
    // Active Link Highlighting
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section[id]');
    
    function highlightNavOnScroll() {
        const scrollY = window.scrollY;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }
    
    window.addEventListener('scroll', highlightNavOnScroll);
    
    // Sticky Header Effect
    const header = document.getElementById('main-header');
    
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('py-2', 'shadow-md');
                header.classList.remove('py-4');
            } else {
                header.classList.remove('py-2', 'shadow-md');
                header.classList.add('py-4');
            }
        });
    }
}

/**
 * Scroll Animations
 * Uses Intersection Observer for performance and GSAP for smooth animations
 */
function initScrollAnimations() {
    const elements = document.querySelectorAll('.animate-on-scroll');
    
    if (!elements.length) return;
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const delay = element.dataset.delay ? parseFloat(element.dataset.delay) : 0;
                
                gsap.fromTo(element, 
                    { opacity: 0, y: 50 },
                    { 
                        opacity: 1, 
                        y: 0, 
                        duration: 0.8, 
                        delay: delay,
                        ease: 'power2.out',
                        clearProps: 'opacity,transform'
                    }
                );
                
                observer.unobserve(element);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    });
    
    elements.forEach(element => {
        observer.observe(element);
    });
}

/**
 * Text Reveal Animations
 * Creates a typing effect for text elements with reveal-text class
 */
function initRevealTextAnimations() {
    const textElements = document.querySelectorAll('.reveal-text');
    
    if (!textElements.length) return;
    
    textElements.forEach(element => {
        // Store original text
        const originalText = element.textContent.trim();
        element.textContent = '';
        
        element.style.clipPath = 'polygon(0 0, 0 0, 0 100%, 0 100%)';
        element.style.opacity = 1;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const delay = element.dataset.delay ? parseFloat(element.dataset.delay) : 0;
                    
                    // First reveal the container
                    gsap.to(element, {
                        clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)',
                        duration: 0.8,
                        delay: delay,
                        ease: 'power2.inOut'
                    });
                    
                    // Then animate the text typing
                    gsap.to(element, {
                        text: {
                            value: originalText,
                            delimiter: ''
                        },
                        duration: 0.6,
                        delay: delay + 0.3,
                        ease: 'none'
                    });
                    
                    observer.unobserve(element);
                }
            });
        }, {
            threshold: 0.5
        });
        
        observer.observe(element);
    });
}

/**
 * Hero Section Parallax Effect
 * Creates depth with parallax scrolling for hero elements
 */
function initHeroParallax() {
    const heroSection = document.querySelector('section:first-of-type');
    if (!heroSection) return;
    
    // Parallax elements
    const floatingShapes = heroSection.querySelectorAll('.floating-shape');
    const heroContent = heroSection.querySelector('h1');
    const heroBg = heroSection.querySelector('.bg-gradient-to-br');
    
    // Animate floating shapes
    if (floatingShapes.length) {
        floatingShapes.forEach((shape, index) => {
            const duration = 5 + (index % 3);
            const delay = index * 0.5;
            const animation = index % 2 === 0 ? 'float' : 'floatReverse';
            
            gsap.to(shape, {
                keyframes: {
                    '0%': { y: 0, rotation: 0 },
                    '50%': { y: -20 + (index * 5), rotation: 5 - (index * 2) },
                    '100%': { y: 0, rotation: 0 }
                },
                duration: duration,
                delay: delay,
                repeat: -1,
                ease: 'power1.inOut'
            });
        });
    }
    
    // Parallax scroll effect
    if (heroBg) {
        gsap.to(heroBg, {
            scrollTrigger: {
                trigger: heroSection,
                start: 'top top',
                end: 'bottom top',
                scrub: true
            },
            y: '20%',
            ease: 'none'
        });
    }
    
    // 3D Hero Cube Animation
    const heroCube = document.querySelector('.hero-cube');
    if (heroCube) {
        gsap.to(heroCube, {
            rotationY: 360,
            rotationX: 45,
            duration: 20,
            repeat: -1,
            ease: 'linear'
        });
    }
}

/**
 * Animate Hero Elements on Page Load
 * Initial animations for hero section after loader completes
 */
function animateHeroElements() {
    const heroContent = document.querySelector('section:first-of-type .grid');
    if (!heroContent) return;
    
    // Create a stagger effect for all hero elements
    const heroElements = heroContent.querySelectorAll('h1, p, .flex');
    
    gsap.fromTo(heroElements, 
        { opacity: 0, y: 30 },
        { 
            opacity: 1, 
            y: 0, 
            duration: 0.8, 
            stagger: 0.2,
            ease: 'power2.out'
        }
    );
}

/**
 * Statistics Counter Animation
 * Animates number counters when they come into view
 */
function initStatCounters() {
    const counterElements = document.querySelectorAll('.counter');
    
    if (!counterElements.length) return;
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const target = parseInt(element.dataset.target);
                
                gsap.fromTo(element, 
                    { innerText: 0 },
                    {
                        innerText: target,
                        duration: 2,
                        snap: { innerText: 1 },
                        ease: 'power2.out'
                    }
                );
                
                observer.unobserve(element);
            }
        });
    }, {
        threshold: 0.5
    });
    
    counterElements.forEach(element => {
        observer.observe(element);
    });
}

/**
 * Service Cards Interaction
 * Manages the flip animation and hover effects for service cards
 */
function initServiceCards() {
    const serviceCards = document.querySelectorAll('.service-card');
    
    if (!serviceCards.length) return;
    
    serviceCards.forEach(card => {
        // Add perspective on hover for a 3D effect
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                scale: 1.03,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
        
        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                scale: 1,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
        
        // Service icon animation
        const icon = card.querySelector('.service-icon i');
        if (icon) {
            gsap.to(icon, {
                rotation: 360,
                duration: 10,
                repeat: -1,
                ease: 'linear'
            });
        }
    });
}

/**
 * Project Filter Functionality
 * Enables filtering of project cards by category
 */
function initProjectFilters() {
    const filterButtons = document.querySelectorAll('.project-filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    
    if (!filterButtons.length || !projectCards.length) return;
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const filter = button.dataset.filter;
            
            // Filter projects
            projectCards.forEach(card => {
                const category = card.dataset.category;
                
                if (filter === 'all' || filter === category) {
                    // Show card with animation
                    gsap.to(card, {
                        opacity: 1,
                        scale: 1,
                        duration: 0.4,
                        ease: 'power2.out',
                        clearProps: 'opacity,transform'
                    });
                    card.classList.remove('hidden');
                } else {
                    // Hide card with animation
                    gsap.to(card, {
                        opacity: 0,
                        scale: 0.95,
                        duration: 0.4,
                        ease: 'power2.out'
                    });
                    card.classList.add('hidden');
                }
            });
        });
    });
}

/**
 * Testimonial Slider
 * Manages the testimonial slider functionality
 */
function initTestimonialSlider() {
    const slider = document.querySelector('.testimonial-slider');
    if (!slider) return;
    
    const slides = document.querySelectorAll('.testimonial-slide');
    const totalSlides = slides.length;
    let currentSlide = 0;
    
    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }
    
    showSlide(currentSlide);
    
    const nextBtn = document.querySelector('.testimonial-next');
    const prevBtn = document.querySelector('.testimonial-prev');
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
        });
    }
}

/**
 * Scroll to Top Button
 * Manages the scroll to top button functionality
 */
function initScrollToTop() {
    const scrollToTopBtn = document.getElementById('scroll-to-top');
    
    if (scrollToTopBtn) {
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
}

/**
 * Custom Cursor
 * Manages the custom cursor functionality
 */
function initCustomCursor() {
    const cursor = document.createElement('div');
    cursor.className = 'custom-cursor';
    document.body.appendChild(cursor);
    
    const cursorSize = 20;
    cursor.style.width = `${cursorSize}px`;
    cursor.style.height = `${cursorSize}px`;
    cursor.style.borderRadius = '50%';
    cursor.style.position = 'fixed';
    cursor.style.pointerEvents = 'none';
    
    document.addEventListener('mousemove', (e) => {
        const x = e.clientX - cursorSize / 2;
        const y = e.clientY - cursorSize / 2;
        cursor.style.left = `${x}px`;
        cursor.style.top = `${y}px`;
    });
}

/**
 * Client Marquee
 * Manages the client marquee functionality
 */
function initClientMarquee() {
    const marquee = document.querySelector('.client-marquee');
    if (!marquee) return;
    
    const clientNames = marquee.querySelectorAll('.client-name');
    const totalClients = clientNames.length;
    let currentIndex = 0;
    
    function updateMarquee() {
        clientNames.forEach((name, i) => {
            if (i === currentIndex) {
                name.classList.add('active');
            } else {
                name.classList.remove('active');
            }
        });
        
        currentIndex = (currentIndex + 1) % totalClients;
    }
    
    updateMarquee();
    
    setInterval(updateMarquee, 2000);
}

/**
 * Form Validation
 * Manages the form validation functionality
 */
function initFormValidation() {
    const form = document.querySelector('form');
    if (!form) return;
    
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        // Implement form validation logic here
    });
}

/**
 * Smooth Scroll
 * Manages the smooth scroll functionality
 */
function initSmoothScroll() {
    const smoothScrollLinks = document.querySelectorAll('.smooth-scroll');
    
    if (!smoothScrollLinks.length) return;
    
    smoothScrollLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = e.target.getAttribute('href');
            if (target) {
                const element = document.querySelector(target);
                if (element) {
                    window.scrollTo({ top: element.offsetTop, behavior: 'smooth' });
                }
            }
        });
    });
}

