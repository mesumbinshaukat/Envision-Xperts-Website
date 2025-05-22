<?php
// Set page title
$pageTitle = "About Us";

// Start output buffering to capture content
ob_start();
?>

<style>
/* Enhanced Animations */
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

/* Timeline Styles */
.timeline-container {
    position: relative;
    padding: 2rem 0;
}

.timeline-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 100%;
    background: linear-gradient(to bottom, transparent, rgba(59, 130, 246, 0.5), transparent);
}

.timeline-item {
    position: relative;
    margin-bottom: 4rem;
}

.timeline-dot {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 1rem;
    height: 1rem;
    background: #3B82F6;
    border-radius: 50%;
    z-index: 1;
}

.timeline-content {
    position: relative;
    width: calc(50% - 2rem);
    padding: 1.5rem;
    background: rgba(30, 41, 59, 0.5);
    border: 1px solid rgba(59, 130, 246, 0.2);
    border-radius: 0.75rem;
    backdrop-filter: blur(8px);
    transition: all 0.3s ease;
}

.timeline-item:nth-child(odd) .timeline-content {
    margin-left: auto;
}

.timeline-item:nth-child(even) .timeline-content {
    margin-right: auto;
}

.timeline-content:hover {
    transform: translateY(-5px);
    border-color: rgba(59, 130, 246, 0.4);
    box-shadow: 0 10px 30px -10px rgba(59, 130, 246, 0.2);
}

/* Team Card Styles */
.team-card {
    position: relative;
    overflow: hidden;
    border-radius: 1rem;
    background: rgba(30, 41, 59, 0.5);
    border: 1px solid rgba(59, 130, 246, 0.2);
    transition: all 0.3s ease;
}

.team-card:hover {
    transform: translateY(-5px);
    border-color: rgba(59, 130, 246, 0.4);
    box-shadow: 0 10px 30px -10px rgba(59, 130, 246, 0.2);
}

.team-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(45deg, transparent, rgba(59, 130, 246, 0.1), transparent);
    transform: translateX(-100%);
    transition: transform 0.6s ease;
}

.team-card:hover::before {
    transform: translateX(100%);
}

/* Vision Card Styles */
.vision-card {
    position: relative;
    overflow: hidden;
    border-radius: 1rem;
    background: rgba(30, 41, 59, 0.5);
    border: 1px solid rgba(59, 130, 246, 0.2);
    transition: all 0.3s ease;
}

.vision-card:hover {
    transform: translateY(-5px);
    border-color: rgba(59, 130, 246, 0.4);
    box-shadow: 0 10px 30px -10px rgba(59, 130, 246, 0.2);
}

.vision-card::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(45deg, transparent, rgba(59, 130, 246, 0.1), transparent);
    transform: translateX(-100%);
    transition: transform 0.6s ease;
}

.vision-card:hover::after {
    transform: translateX(100%);
}

/* Why Choose Us Card Styles */
.feature-card {
    position: relative;
    overflow: hidden;
    border-radius: 1rem;
    background: rgba(30, 41, 59, 0.5);
    border: 1px solid rgba(59, 130, 246, 0.2);
    transition: all 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
    border-color: rgba(59, 130, 246, 0.4);
    box-shadow: 0 10px 30px -10px rgba(59, 130, 246, 0.2);
}

.feature-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(45deg, transparent, rgba(59, 130, 246, 0.1), transparent);
    transform: translateX(-100%);
    transition: transform 0.6s ease;
}

.feature-card:hover::before {
    transform: translateX(100%);
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .timeline-container::before {
        left: 1rem;
    }
    
    .timeline-dot {
        left: 1rem;
    }
    
    .timeline-content {
        width: calc(100% - 3rem);
        margin-left: 3rem !important;
    }
}
</style>

<!-- Hero Section -->
<section class="relative min-h-[60vh] flex items-center py-24 overflow-hidden bg-dark-900">
    <!-- Animated background elements -->
    <div class="absolute inset-0 bg-gradient-mesh opacity-20"></div>
    
    <!-- Animated shapes -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 -right-20 w-96 h-96 bg-glow-purple/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute -bottom-32 -left-20 w-96 h-96 bg-glow-blue/20 rounded-full blur-3xl animate-pulse-slow delay-1000"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <span class="inline-block px-4 py-2 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-6">
                Our Story
            </span>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Transforming Ideas into 
                <span class="relative">
                    <span class="relative z-10 bg-gradient-to-r from-primary-400 to-accent-400 text-transparent bg-clip-text">Digital Excellence</span>
                    <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-primary-500/40 to-accent-500/40 blur-sm"></span>
                </span>
            </h1>
            <p class="text-xl text-gray-300 leading-relaxed">
                We're a team of passionate innovators dedicated to creating exceptional digital experiences 
                that drive business growth and technological advancement.
            </p>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-24 bg-dark-800/50 relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-4">
                Our Vision
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Pioneering the Future of Technology
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                We envision a world where technology seamlessly enhances human potential and drives sustainable innovation.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Innovation -->
            <div class="vision-card p-8">
                <div class="w-16 h-16 bg-primary-500/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Innovation</h3>
                <p class="text-gray-400">Pushing boundaries and exploring new possibilities in technology to create groundbreaking solutions.</p>
            </div>

            <!-- Excellence -->
            <div class="vision-card p-8">
                <div class="w-16 h-16 bg-primary-500/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Excellence</h3>
                <p class="text-gray-400">Delivering exceptional quality and value in everything we do, setting new standards in the industry.</p>
            </div>

            <!-- Impact -->
            <div class="vision-card p-8">
                <div class="w-16 h-16 bg-primary-500/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Impact</h3>
                <p class="text-gray-400">Creating meaningful change through technology that positively impacts businesses and society.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-24 bg-dark-900 relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-4">
                Our Team
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Meet the Innovators
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                A diverse team of experts passionate about technology and innovation.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            <div class="team-card group">
                <div class="relative overflow-hidden rounded-t-xl">
                    <div class="aspect-w-1 aspect-h-1 bg-gradient-to-br from-primary-500/20 to-accent-500/20">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-24 h-24 text-primary-400/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Sarah Johnson</h3>
                    <p class="text-primary-400 mb-4">Chief Technology Officer</p>
                    <p class="text-gray-400">Leading our technical vision with over 15 years of experience in software architecture.</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-card group">
                <div class="relative overflow-hidden rounded-t-xl">
                    <div class="aspect-w-1 aspect-h-1 bg-gradient-to-br from-primary-500/20 to-accent-500/20">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-24 h-24 text-primary-400/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Michael Chen</h3>
                    <p class="text-primary-400 mb-4">Lead Developer</p>
                    <p class="text-gray-400">Expert in full-stack development with a passion for creating scalable solutions.</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-card group">
                <div class="relative overflow-hidden rounded-t-xl">
                    <div class="aspect-w-1 aspect-h-1 bg-gradient-to-br from-primary-500/20 to-accent-500/20">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-24 h-24 text-primary-400/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Emily Rodriguez</h3>
                    <p class="text-primary-400 mb-4">UX/UI Designer</p>
                    <p class="text-gray-400">Creating beautiful and intuitive user experiences that delight our clients.</p>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="team-card group">
                <div class="relative overflow-hidden rounded-t-xl">
                    <div class="aspect-w-1 aspect-h-1 bg-gradient-to-br from-primary-500/20 to-accent-500/20">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-24 h-24 text-primary-400/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">David Kim</h3>
                    <p class="text-primary-400 mb-4">Project Manager</p>
                    <p class="text-gray-400">Ensuring smooth project delivery and client satisfaction through effective management.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="py-24 bg-dark-800/50 relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-4">
                Our Journey
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Milestones & Achievements
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                A timeline of our growth and success in the technology industry.
            </p>
        </div>

        <div class="timeline-container">
            <!-- 2018 -->
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="text-primary-400 text-sm font-medium">2018</span>
                    <h3 class="text-xl font-semibold text-white mt-2 mb-4">Company Founded</h3>
                    <p class="text-gray-400">Started with a vision to transform the digital landscape through innovative solutions.</p>
                </div>
            </div>

            <!-- 2019 -->
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="text-primary-400 text-sm font-medium">2019</span>
                    <h3 class="text-xl font-semibold text-white mt-2 mb-4">First Major Project</h3>
                    <p class="text-gray-400">Successfully delivered our first enterprise-level project, establishing our reputation.</p>
                </div>
            </div>

            <!-- 2020 -->
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="text-primary-400 text-sm font-medium">2020</span>
                    <h3 class="text-xl font-semibold text-white mt-2 mb-4">Team Expansion</h3>
                    <p class="text-gray-400">Grew our team to 20+ experts, expanding our capabilities and expertise.</p>
                </div>
            </div>

            <!-- 2021 -->
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="text-primary-400 text-sm font-medium">2021</span>
                    <h3 class="text-xl font-semibold text-white mt-2 mb-4">Innovation Award</h3>
                    <p class="text-gray-400">Recognized for our innovative approach to solving complex business challenges.</p>
                </div>
            </div>

            <!-- 2022 -->
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="text-primary-400 text-sm font-medium">2022</span>
                    <h3 class="text-xl font-semibold text-white mt-2 mb-4">Global Expansion</h3>
                    <p class="text-gray-400">Expanded our services to international markets, serving clients worldwide.</p>
                </div>
            </div>

            <!-- 2023 -->
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="text-primary-400 text-sm font-medium">2023</span>
                    <h3 class="text-xl font-semibold text-white mt-2 mb-4">Future Vision</h3>
                    <p class="text-gray-400">Continuing to innovate and expand our services to meet evolving market needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-24 bg-dark-900 relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-4">
                Why Choose Us
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Excellence in Every Detail
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                We combine expertise, innovation, and dedication to deliver exceptional results.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Expertise -->
            <div class="feature-card p-8">
                <div class="w-16 h-16 bg-primary-500/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Expertise</h3>
                <p class="text-gray-400">Our team brings together decades of combined experience in technology and innovation.</p>
            </div>

            <!-- Innovation -->
            <div class="feature-card p-8">
                <div class="w-16 h-16 bg-primary-500/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Innovation</h3>
                <p class="text-gray-400">We stay ahead of the curve by embracing cutting-edge technologies and methodologies.</p>
            </div>

            <!-- Quality -->
            <div class="feature-card p-8">
                <div class="w-16 h-16 bg-primary-500/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Quality</h3>
                <p class="text-gray-400">We maintain the highest standards of quality in every project we undertake.</p>
            </div>

            <!-- Support -->
            <div class="feature-card p-8">
                <div class="w-16 h-16 bg-primary-500/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Support</h3>
                <p class="text-gray-400">24/7 dedicated support to ensure your success and satisfaction.</p>
            </div>

            <!-- Security -->
            <div class="feature-card p-8">
                <div class="w-16 h-16 bg-primary-500/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Security</h3>
                <p class="text-gray-400">Enterprise-grade security measures to protect your data and systems.</p>
            </div>

            <!-- Scalability -->
            <div class="feature-card p-8">
                <div class="w-16 h-16 bg-primary-500/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Scalability</h3>
                <p class="text-gray-400">Solutions that grow with your business, ensuring long-term success.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-dark-800/50 relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Transform Your Business?
            </h2>
            <p class="text-xl text-gray-400 mb-8">
                Let's work together to create innovative solutions that drive your success.
            </p>
            <a href="/envisionxperts.com/contact" class="inline-flex items-center justify-center px-8 py-4 font-medium text-lg text-white transition-all duration-300 ease-out">
                <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-primary-600 via-accent-500 to-primary-600 rounded-lg transition-all duration-500 group-hover:scale-105"></span>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize animations
    const animateOnScroll = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, {
        threshold: 0.1
    });

    // Observe elements
    document.querySelectorAll('.timeline-item, .team-card, .vision-card, .feature-card').forEach(el => {
        animateOnScroll.observe(el);
    });

    // Smooth scroll for timeline
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach(item => {
        item.addEventListener('click', () => {
            item.scrollIntoView({ behavior: 'smooth', block: 'center' });
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