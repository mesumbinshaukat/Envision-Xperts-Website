<footer class="footer bg-dark text-light py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-section">
                    <div class="footer-logo mb-3">
                        <img src="logo/envision-expert-logo-dark (1).png" alt="EnvisionXperts" height="50">
                    </div>
                    <p class="footer-description">
                        EnvisionXperts is a leading web development company specializing in PHP-based solutions, 
                        mobile applications, and digital transformation services. We help businesses achieve their 
                        digital goals with innovative and scalable solutions.
                    </p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/envisionxperts" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://pk.linkedin.com/company/envisionxperts" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/envisionxperts/" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-section">
                    <h5 class="footer-title">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-section">
                    <h5 class="footer-title">Our Services</h5>
                    <ul class="footer-links">
                        <li><a href="services.php#web-development">Web Development</a></li>
                        <li><a href="services.php#mobile-development">Mobile App Development</a></li>
                        <li><a href="services.php#software-development">Software Development</a></li>
                        <li><a href="services.php#digital-transformation">Digital Transformation</a></li>
                        <li><a href="services.php#it-consulting">IT Consulting</a></li>
                        <li><a href="services.php#digital-marketing">Digital Marketing & SEO</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-section">
                    <h5 class="footer-title">Contact Info</h5>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Address:</strong><br>
                                Shadam Town Karachi<br>
                                
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Phone:</strong><br>
                                <a href="tel:+923708528313"></a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email:</strong><br>
                                <a href="mailto:info@envisionxperts.com">info@envisionxperts.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Hours:</strong><br>
                                Mon - Fri: 4:00 PM - 12:00 AM<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Newsletter -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="newsletter-section">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h5 class="newsletter-title">Subscribe to Our Newsletter</h5>
                            <p class="newsletter-description">Get the latest updates on technology trends and industry insights.</p>
                        </div>
                        <div class="col-lg-6">
                            <form class="newsletter-form" method="POST" action="process/newsletter.php">
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-paper-plane"></i> Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Footer -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="bottom-footer">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p class="copyright">
                                &copy; <?php echo date('Y'); ?> EnvisionXperts. All rights reserved.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <ul class="footer-bottom-links">
                                <li><a href="privacy.php">Privacy Policy</a></li>
                                <li><a href="terms.php">Terms of Service</a></li>
                                <li><a href="sitemap.php">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </div>
</footer> 