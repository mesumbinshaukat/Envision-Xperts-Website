// ===== MAIN JAVASCRIPT FILE =====

$(document).ready(function() {
    // Check for reduced motion preference
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    
    // Initialize AOS only if user hasn't requested reduced motion
    if (!prefersReducedMotion) {
        AOS.init({ 
            duration: 1000, 
            easing: 'ease-out-cubic', 
            once: true, 
            mirror: false,
            offset: 100,
            delay: 0
        });
    }

    // NAVBAR SCROLL EFFECTS
    let lastScrollTop = 0;
    let navbarHidden = false;
    
    $(window).on('scroll', function() {
        const scrollTop = $(this).scrollTop();
        const $navbar = $('#mainNav');
        
        // Add scrolled class for styling
        $navbar.toggleClass('scrolled', scrollTop > 50);
        
        // Smart navbar hide/show (only on desktop)
        if (window.innerWidth > 768) {
            if (scrollTop > lastScrollTop && scrollTop > 100 && !navbarHidden) {
                // Scrolling down - hide navbar
                $navbar.addClass('navbar-hidden');
                navbarHidden = true;
            } else if (scrollTop < lastScrollTop && navbarHidden) {
                // Scrolling up - show navbar
                $navbar.removeClass('navbar-hidden');
                navbarHidden = false;
            }
        }
        
        lastScrollTop = scrollTop;
    });

    // SMOOTH SCROLL
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            const offsetTop = target.offset().top - 80;
            
            if (!prefersReducedMotion) {
                $('html, body').stop().animate({ scrollTop: offsetTop }, 900, 'easeOutCubic');
            } else {
                $('html, body').stop().animate({ scrollTop: offsetTop }, 300);
            }
        }
    });

    // BACK TO TOP
    $(window).on('scroll', function() { 
        $('#backToTop').toggleClass('show', $(this).scrollTop() > 300); 
    });
    
    $('#backToTop').on('click', function(e) { 
        e.preventDefault(); 
        if (!prefersReducedMotion) {
            $('html, body').animate({scrollTop: 0}, 800, 'easeOutCubic');
        } else {
            $('html, body').animate({scrollTop: 0}, 300);
        }
    });

    // LIGHTWEIGHT SCROLL REVEAL (Intersection Observer)
    if (!prefersReducedMotion && 'IntersectionObserver' in window) {
        const revealElements = document.querySelectorAll('.scroll-reveal');
        
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    // Unobserve after revealing to improve performance
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        revealElements.forEach(el => revealObserver.observe(el));
    }

    // COUNTERS (trigger once with Intersection Observer)
    if (!prefersReducedMotion && 'IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        const statsElement = document.querySelector('.about-stats');
        if (statsElement) {
            counterObserver.observe(statsElement);
        }
    }
    
    // Fallback counter animation for older browsers
    function animateCounters() {
        $('.stat-number').each(function() {
            var $el = $(this); 
            var to = parseInt($el.attr('data-count') || '0', 10);
            
            if (!prefersReducedMotion) {
                $({ n: 0 }).animate({ n: to }, { 
                    duration: 1600, 
                    easing: 'easeOutCubic', 
                    step: function(now){ 
                        $el.text(Math.floor(now)); 
                    }, 
                    complete: function(){ 
                        $el.text(to); 
                    } 
                });
            } else {
                $el.text(to);
            }
        });
    }

    // FLOATING PARALLAX (only if not reduced motion)
    if (!prefersReducedMotion) {
        $(window).on('scroll', function(){
            var s = $(this).scrollTop();
            $('.floating-element').each(function(){ 
                var sp = parseFloat($(this).data('speed') || 1.5); 
                $(this).css('transform', 'translateY(' + (-(s*sp/12)) + 'px)'); 
            });
        });
    }

    // HERO TEXT ANIMATIONS (only if not reduced motion)
    if (!prefersReducedMotion) {
        var $hero = $('.hero-section .hero-title');
        if ($('body').find('section.hero-section').length && window.location.pathname.match(/index\.php|\/$/)) {
            var original = $hero.text().trim();
            var i = 0; 
            $hero.text('');
            
            function type(){ 
                if(i < original.length){ 
                    $hero.append(original.charAt(i)); 
                    i++; 
                    setTimeout(type, 80); 
                } 
            }
            setTimeout(type, 400);
        }
    }

    // SEARCH
    $('.search-form').on('submit', function(e) { 
        e.preventDefault(); 
        var q = $(this).find('input[type="search"]').val(); 
        if(q.trim()!==''){ 
            alert('Search will be implemented. Query: '+q); 
        }
    });

    // CONTACT FORM HANDLING
    $('.contact-form').on('submit', function(e){
        e.preventDefault();
        var $form = $(this);
        var $btn = $form.find('button[type="submit"]');
        var originalBtnText = $btn.html();
        
        // Disable button and show loading state
        $btn.html('<i class="fas fa-spinner fa-spin me-2"></i>Sending...').prop('disabled', true);
        
        // Clear previous messages
        $form.find('.alert').remove();
        
        // Get form data
        var formData = new FormData(this);
        
        $.ajax({
            url: $form.attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Show success message
                    var successAlert = '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                        '<i class="fas fa-check-circle me-2"></i>' + response.message +
                        '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
                        '</div>';
                    $form.prepend(successAlert);
                    
                    // Reset form
                    $form[0].reset();
                    
                    // Scroll to top of form
                    if (!prefersReducedMotion) {
                        $('html, body').animate({
                            scrollTop: $form.offset().top - 100
                        }, 500, 'easeOutCubic');
                    } else {
                        $('html, body').animate({
                            scrollTop: $form.offset().top - 100
                        }, 200);
                    }
                } else {
                    // Show error message
                    var errorAlert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                        '<i class="fas fa-exclamation-circle me-2"></i>' + response.message +
                        '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
                        '</div>';
                    $form.prepend(errorAlert);
                    
                    // Show validation errors if any
                    if (response.errors && response.errors.length > 0) {
                        var errorList = '<ul class="mt-2 mb-0">';
                        response.errors.forEach(function(error) {
                            errorList += '<li>' + error + '</li>';
                        });
                        errorList += '</ul>';
                        $form.find('.alert-danger').append(errorList);
                    }
                }
            },
            error: function(xhr, status, error) {
                var errorMessage = 'Sorry, there was an error sending your message. Please try again later.';
                
                try {
                    var response = JSON.parse(xhr.responseText);
                    if (response.message) {
                        errorMessage = response.message;
                    }
                } catch(e) {}
                
                var errorAlert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                    '<i class="fas fa-exclamation-circle me-2"></i>' + errorMessage +
                    '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
                    '</div>';
                $form.prepend(errorAlert);
            },
            complete: function() {
                // Re-enable button and restore original text
                $btn.html(originalBtnText).prop('disabled', false);
            }
        });
    });

    // NEWSLETTER FORM HANDLING
    $('.newsletter-form').on('submit', function(e){
        e.preventDefault();
        var $form = $(this);
        var $btn = $form.find('button[type="submit"]');
        var originalBtnText = $btn.html();
        var $input = $form.find('input[type="email"]');
        
        // Disable button and show loading state
        $btn.html('<i class="fas fa-spinner fa-spin me-2"></i>Subscribing...').prop('disabled', true);
        
        // Clear previous messages
        $form.find('.alert').remove();
        
        // Get email
        var email = $input.val().trim();
        
        if (!email) {
            showNewsletterMessage('Please enter your email address.', 'danger');
            $btn.html(originalBtnText).prop('disabled', false);
            return;
        }
        
        $.ajax({
            url: 'process/newsletter.php',
            type: 'POST',
            data: { email: email },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    showNewsletterMessage(response.message, 'success');
                    $form[0].reset();
                } else {
                    showNewsletterMessage(response.message, 'warning');
                }
            },
            error: function(xhr, status, error) {
                var errorMessage = 'Sorry, there was an error processing your subscription. Please try again later.';
                
                try {
                    var response = JSON.parse(xhr.responseText);
                    if (response.message) {
                        errorMessage = response.message;
                    }
                } catch(e) {}
                
                showNewsletterMessage(errorMessage, 'danger');
            },
            complete: function() {
                // Re-enable button and restore original text
                $btn.html(originalBtnText).prop('disabled', false);
            }
        });
    });

    // Helper function to show newsletter messages
    function showNewsletterMessage(message, type) {
        var $form = $('.newsletter-form');
        var alertClass = 'alert-' + type;
        var iconClass = type === 'success' ? 'fa-check-circle' : 
                       type === 'warning' ? 'fa-exclamation-triangle' : 'fa-exclamation-circle';
        
        var alert = '<div class="alert ' + alertClass + ' alert-dismissible fade show" role="alert">' +
            '<i class="fas ' + iconClass + ' me-2"></i>' + message +
            '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
            '</div>';
        
        $form.prepend(alert);
        
        // Auto-hide success messages after 5 seconds
        if (type === 'success') {
            setTimeout(function() {
                $form.find('.alert-success').fadeOut();
            }, 5000);
        }
    }

    // SCROLL PROGRESS
    if (!prefersReducedMotion) {
        $(window).on('scroll', function(){
            var sc = $(this).scrollTop(); 
            var h = $(document).height() - $(this).height(); 
            var p = (sc/h)*100;
            if($('.scroll-progress').length===0){ 
                $('body').append('<div class="scroll-progress"></div>'); 
            }
            $('.scroll-progress').css('width', p+'%');
        });
    }

    // FEATURE ITEMS ANIMATION
    if (!prefersReducedMotion && 'IntersectionObserver' in window) {
        const featureObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-in');
                    }, index * 100);
                    featureObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        
        document.querySelectorAll('.feature-item').forEach(el => {
            featureObserver.observe(el);
        });
    }

    // MICRO-INTERACTIONS
    if (!prefersReducedMotion) {
        // Button ripple effect
        $('.btn').on('click', function(e) {
            const $btn = $(this);
            const ripple = $('<span class="ripple"></span>');
            
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.css({
                width: size + 'px',
                height: size + 'px',
                left: x + 'px',
                top: y + 'px'
            });
            
            $btn.append(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });

        // Service card hover effects
        $('.service-card').on('mouseenter', function() {
            $(this).addClass('hover-glow');
        }).on('mouseleave', function() {
            $(this).removeClass('hover-glow');
        });

        // Social link hover effects
        $('.social-link').on('mouseenter', function() {
            $(this).addClass('hover-scale');
        }).on('mouseleave', function() {
            $(this).removeClass('hover-scale');
        });
    }

    // Enforce hero text color after AOS animation (in case any class overrides)
    document.addEventListener('aos:in', function(){
        $('.hero-section :is(h1,h2,h3,h4,h5,h6,p,span,strong,a)').css('color', '#f8fafc');
    });
});

// Add easing functions for smoother animations
$.easing.easeOutCubic = function (x, t, b, c, d) {
    return c * ((t = t/d - 1) * t * t + 1) + b;
};

// Inject extra CSS tweaks
$('<style>')
.prop('type','text/css')
.html(`
    .scroll-progress { 
        position: fixed; 
        top: 0; 
        left: 0; 
        width: 0%; 
        height: 3px; 
        background: linear-gradient(90deg, #1e3a8a, #3b82f6); 
        z-index: 9999; 
        transition: width 0.3s ease; 
    }
    
    /* Form alert styling */
    .alert { 
        margin-bottom: 1rem; 
        border-radius: var(--border-radius); 
    }
    
    .alert-success { 
        background-color: #d1fae5; 
        border-color: #10b981; 
        color: #065f46; 
    }
    
    .alert-danger { 
        background-color: #fee2e2; 
        border-color: #ef4444; 
        color: #991b1b; 
    }
    
    .alert-warning { 
        background-color: #fef3c7; 
        border-color: #f59e0b; 
        color: #92400e; 
    }
    
    /* Newsletter form specific styling */
    .newsletter-section .alert { 
        margin-bottom: 1rem; 
    }
    
    /* Button ripple effect */
    .btn {
        position: relative;
        overflow: hidden;
    }
    
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }
    
    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    /* Smooth transitions for all interactive elements */
    .service-card,
    .stat-card,
    .social-link,
    .btn,
    .nav-link,
    .footer-links a {
        will-change: transform;
    }
    
    /* Optimize animations for performance */
    .hero-title,
    .hero-subtitle,
    .hero-description,
    .hero-buttons {
        will-change: opacity, transform;
    }
    
    /* Reduce motion for users who prefer it */
    @media (prefers-reduced-motion: reduce) {
        .ripple {
            display: none;
        }
        
        .scroll-progress {
            display: none;
        }
    }
`)
.appendTo('head'); 