// ===== MAIN JAVASCRIPT FILE =====

$(document).ready(function() {
    
    // ===== INITIALIZE AOS (ANIMATE ON SCROLL) =====
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });
    
    // ===== NAVBAR SCROLL EFFECT =====
    $(window).scroll(function() {
        if ($(window).scrollTop() > 50) {
            $('#mainNav').addClass('scrolled');
        } else {
            $('#mainNav').removeClass('scrolled');
        }
    });
    
    // ===== SMOOTH SCROLLING FOR ANCHOR LINKS =====
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
    
    // ===== BACK TO TOP BUTTON =====
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('#backToTop').addClass('show');
        } else {
            $('#backToTop').removeClass('show');
        }
    });
    
    $('#backToTop').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 800);
    });
    
    // ===== COUNTER ANIMATION =====
    function animateCounters() {
        $('.stat-number').each(function() {
            var $this = $(this);
            var countTo = $this.attr('data-count');
            
            $({ countNum: $this.text() }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    }
    
    // ===== TRIGGER COUNTER ANIMATION ON SCROLL =====
    $('.about-stats').waypoint(function() {
        animateCounters();
        this.destroy();
    }, {
        offset: '90%'
    });
    
    // ===== FLOATING ELEMENTS PARALLAX =====
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        $('.floating-element').each(function() {
            var speed = $(this).data('speed');
            var yPos = -(scrolled * speed / 10);
            $(this).css('transform', 'translateY(' + yPos + 'px)');
        });
    });
    
    // ===== SEARCH FUNCTIONALITY =====
    $('.search-form').on('submit', function(e) {
        e.preventDefault();
        var searchTerm = $(this).find('input[type="search"]').val();
        if (searchTerm.trim() !== '') {
            // Add search functionality here
            alert('Search functionality will be implemented here. Search term: ' + searchTerm);
        }
    });
    
    // ===== CONTACT FORM HANDLING =====
    $('.contact-form').on('submit', function(e) {
        e.preventDefault();
        
        var formData = $(this).serialize();
        var submitBtn = $(this).find('button[type="submit"]');
        var originalText = submitBtn.html();
        
        // Show loading state
        submitBtn.html('<i class="fas fa-spinner fa-spin me-2"></i>Sending...');
        submitBtn.prop('disabled', true);
        
        // Simulate form submission (replace with actual AJAX call)
        setTimeout(function() {
            submitBtn.html('<i class="fas fa-check me-2"></i>Message Sent!');
            submitBtn.removeClass('btn-primary').addClass('btn-success');
            
            // Reset form
            $('.contact-form')[0].reset();
            
            // Reset button after 3 seconds
            setTimeout(function() {
                submitBtn.html(originalText);
                submitBtn.removeClass('btn-success').addClass('btn-primary');
                submitBtn.prop('disabled', false);
            }, 3000);
        }, 2000);
    });
    
    // ===== NEWSLETTER FORM HANDLING =====
    $('.newsletter-form').on('submit', function(e) {
        e.preventDefault();
        
        var email = $(this).find('input[type="email"]').val();
        var submitBtn = $(this).find('button[type="submit"]');
        var originalText = submitBtn.html();
        
        if (email.trim() !== '') {
            // Show loading state
            submitBtn.html('<i class="fas fa-spinner fa-spin me-2"></i>Subscribing...');
            submitBtn.prop('disabled', true);
            
            // Simulate subscription (replace with actual AJAX call)
            setTimeout(function() {
                submitBtn.html('<i class="fas fa-check me-2"></i>Subscribed!');
                submitBtn.removeClass('btn-primary').addClass('btn-success');
                
                // Reset form
                $('.newsletter-form')[0].reset();
                
                // Reset button after 3 seconds
                setTimeout(function() {
                    submitBtn.html(originalText);
                    submitBtn.removeClass('btn-success').addClass('btn-primary');
                    submitBtn.prop('disabled', false);
                }, 3000);
            }, 1500);
        }
    });
    
    // ===== MEGA MENU HOVER EFFECTS =====
    $('.dropdown').hover(
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(300);
        },
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(300);
        }
    );
    
    // ===== SERVICE CARDS HOVER EFFECTS =====
    $('.service-card').hover(
        function() {
            $(this).find('.service-icon').addClass('animated');
        },
        function() {
            $(this).find('.service-icon').removeClass('animated');
        }
    );
    
    // ===== STATS CARDS HOVER EFFECTS =====
    $('.stat-card').hover(
        function() {
            $(this).find('.stat-number').addClass('pulse');
        },
        function() {
            $(this).find('.stat-number').removeClass('pulse');
        }
    );
    
    // ===== SOCIAL LINKS HOVER EFFECTS =====
    $('.social-link').hover(
        function() {
            $(this).addClass('animated pulse');
        },
        function() {
            $(this).removeClass('animated pulse');
        }
    );
    
    // ===== MOBILE MENU TOGGLE =====
    $('.navbar-toggler').on('click', function() {
        $(this).toggleClass('active');
    });
    
    // ===== CLOSE MOBILE MENU ON LINK CLICK =====
    $('.navbar-nav .nav-link').on('click', function() {
        if ($(window).width() < 992) {
            $('.navbar-collapse').collapse('hide');
            $('.navbar-toggler').removeClass('active');
        }
    });
    
    // ===== LAZY LOADING FOR IMAGES =====
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // ===== SCROLL PROGRESS INDICATOR =====
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = (scrolled / height) * 100;
        
        // Create progress bar if it doesn't exist
        if ($('.scroll-progress').length === 0) {
            $('body').append('<div class="scroll-progress"></div>');
        }
        
        $('.scroll-progress').css('width', progress + '%');
    });
    
    // ===== TYPING ANIMATION FOR HERO TITLE =====
    function typeWriter(element, text, speed = 100) {
        let i = 0;
        element.html('');
        
        function type() {
            if (i < text.length) {
                element.html(element.html() + text.charAt(i));
                i++;
                setTimeout(type, speed);
            }
        }
        
        type();
    }
    
    // ===== INITIALIZE TYPING ANIMATION =====
    setTimeout(function() {
        var heroTitle = $('.hero-title');
        var originalText = heroTitle.text();
        typeWriter(heroTitle, originalText, 150);
    }, 1000);
    
    // ===== PARTICLE BACKGROUND EFFECT =====
    function createParticles() {
        var particleContainer = $('<div class="particles"></div>');
        $('.hero-section').append(particleContainer);
        
        for (var i = 0; i < 50; i++) {
            var particle = $('<div class="particle"></div>');
            particle.css({
                left: Math.random() * 100 + '%',
                top: Math.random() * 100 + '%',
                animationDelay: Math.random() * 20 + 's',
                animationDuration: (Math.random() * 10 + 10) + 's'
            });
            particleContainer.append(particle);
        }
    }
    
    // ===== INITIALIZE PARTICLES =====
    createParticles();
    
    // ===== FORM VALIDATION =====
    $('.contact-form input, .contact-form textarea').on('blur', function() {
        var field = $(this);
        var value = field.val().trim();
        
        if (value === '') {
            field.addClass('is-invalid');
        } else {
            field.removeClass('is-invalid').addClass('is-valid');
        }
    });
    
    // ===== EMAIL VALIDATION =====
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    $('.contact-form input[type="email"]').on('blur', function() {
        var email = $(this).val().trim();
        if (email !== '' && !isValidEmail(email)) {
            $(this).addClass('is-invalid');
        } else if (email !== '') {
            $(this).removeClass('is-invalid').addClass('is-valid');
        }
    });
    
    // ===== TOOLTIP INITIALIZATION =====
    $('[data-bs-toggle="tooltip"]').tooltip();
    
    // ===== POPOVER INITIALIZATION =====
    $('[data-bs-toggle="popover"]').popover();
    
    // ===== MODAL ANIMATIONS =====
    $('.modal').on('show.bs.modal', function() {
        $(this).find('.modal-dialog').addClass('animate__animated animate__fadeInUp');
    });
    
    $('.modal').on('hide.bs.modal', function() {
        $(this).find('.modal-dialog').addClass('animate__animated animate__fadeOutDown');
    });
    
    // ===== SCROLL TO TOP SMOOTH ANIMATION =====
    $('#backToTop').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, {
            duration: 1000,
            easing: 'easeInOutQuart'
        });
    });
    
    // ===== LOADING ANIMATION =====
    $(window).on('load', function() {
        $('.loading-screen').fadeOut(1000);
    });
    
    // ===== RESPONSIVE IMAGE HANDLING =====
    function handleResponsiveImages() {
        $('img').each(function() {
            var img = $(this);
            if (img.width() > img.parent().width()) {
                img.css('max-width', '100%');
                img.css('height', 'auto');
            }
        });
    }
    
    $(window).on('resize', handleResponsiveImages);
    handleResponsiveImages();
    
    // ===== PERFORMANCE OPTIMIZATION =====
    // Throttle scroll events
    var ticking = false;
    
    function updateOnScroll() {
        // Update scroll-based animations here
        ticking = false;
    }
    
    $(window).on('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateOnScroll);
            ticking = true;
        }
    });
    
    // ===== ACCESSIBILITY IMPROVEMENTS =====
    // Add focus indicators
    $('a, button, input, textarea, select').on('focus', function() {
        $(this).addClass('focus-visible');
    }).on('blur', function() {
        $(this).removeClass('focus-visible');
    });
    
    // Keyboard navigation for mega menu
    $('.dropdown-toggle').on('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            $(this).dropdown('toggle');
        }
    });
    
    // ===== ERROR HANDLING =====
    window.addEventListener('error', function(e) {
        console.error('JavaScript error:', e.error);
    });
    
    // ===== ANALYTICS TRACKING =====
    function trackEvent(category, action, label) {
        // Google Analytics tracking (if available)
        if (typeof gtag !== 'undefined') {
            gtag('event', action, {
                'event_category': category,
                'event_label': label
            });
        }
    }
    
    // Track button clicks
    $('.btn').on('click', function() {
        var buttonText = $(this).text().trim();
        trackEvent('Button', 'Click', buttonText);
    });
    
    // Track form submissions
    $('form').on('submit', function() {
        var formName = $(this).attr('class') || 'Unknown Form';
        trackEvent('Form', 'Submit', formName);
    });
    
    // ===== CONSOLE WELCOME MESSAGE =====
    console.log('%cWelcome to EnvisionXperts! 🚀', 'color: #1e3a8a; font-size: 20px; font-weight: bold;');
    console.log('%cWe specialize in cutting-edge web development and digital solutions.', 'color: #6b7280; font-size: 14px;');
    
});

// ===== ADDITIONAL CSS FOR ANIMATIONS =====
$('<style>')
    .prop('type', 'text/css')
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
        
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(59, 130, 246, 0.3);
            border-radius: 50%;
            animation: float-particle 20s infinite linear;
        }
        
        @keyframes float-particle {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }
        
        .focus-visible {
            outline: 2px solid #3b82f6 !important;
            outline-offset: 2px !important;
        }
        
        .pulse {
            animation: pulse 0.6s ease-in-out;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #111827;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }
        
        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 3px solid rgba(59, 130, 246, 0.3);
            border-top: 3px solid #3b82f6;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    `)
    .appendTo('head'); 