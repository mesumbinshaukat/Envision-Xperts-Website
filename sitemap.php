<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitemap | EnvisionXperts</title>
    <meta name="description" content="EnvisionXperts Sitemap - Navigate our website easily with our comprehensive site structure and organized links.">
    <meta name="keywords" content="sitemap, site map, EnvisionXperts, website navigation">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo/WhatsApp Image 2025-08-11 at 22.46.05_44b837bc.jpg">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Page Hero -->
    <section class="hero-section" style="min-height: 40vh;">
        <div class="hero-background"><div class="hero-overlay"></div></div>
        <div class="container d-flex align-items-center" style="min-height: 40vh;">
            <div class="row w-100">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="hero-title"><span class="text-gradient">Site</span> Map</h1>
                    <p class="hero-description mb-0">Navigate our website easily with our comprehensive site structure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sitemap Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="sitemap-content" data-aos="fade-up">
                        
                        <!-- Main Pages -->
                        <div class="sitemap-section mb-5">
                            <h2 class="mb-4"><i class="fas fa-home me-2"></i>Main Pages</h2>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="index.php">Home</a></h4>
                                        <p class="text-muted">Main landing page with company overview and services</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="about.php">About Us</a></h4>
                                        <p class="text-muted">Company information, mission, values, and team</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services.php">Services Overview</a></h4>
                                        <p class="text-muted">Complete list of our digital services and solutions</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="contact.php">Contact Us</a></h4>
                                        <p class="text-muted">Get in touch, request quotes, and support</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Web Development Services -->
                        <div class="sitemap-section mb-5">
                            <h2 class="mb-4"><i class="fas fa-globe me-2"></i>Web Development Services</h2>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/custom-php.php">Custom PHP Development</a></h4>
                                        <p class="text-muted">Bespoke PHP applications and web solutions</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/cms-development.php">CMS Development</a></h4>
                                        <p class="text-muted">WordPress, Drupal, and Joomla solutions</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/ecommerce.php">eCommerce Solutions</a></h4>
                                        <p class="text-muted">Online stores and shopping platforms</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/web-modernization.php">Web Modernization</a></h4>
                                        <p class="text-muted">Legacy system updates and improvements</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/pwa.php">Progressive Web Apps</a></h4>
                                        <p class="text-muted">Modern web applications with app-like features</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/api-development.php">API Development</a></h4>
                                        <p class="text-muted">REST and GraphQL API services</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/web-maintenance.php">Web Maintenance</a></h4>
                                        <p class="text-muted">Ongoing support and updates</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Development Services -->
                        <div class="sitemap-section mb-5">
                            <h2 class="mb-4"><i class="fas fa-mobile-alt me-2"></i>Mobile Development Services</h2>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/cross-platform.php">Cross-Platform Apps</a></h4>
                                        <p class="text-muted">React Native and Flutter development</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/native-apps.php">Native Development</a></h4>
                                        <p class="text-muted">iOS and Android native applications</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/mobile-maintenance.php">App Maintenance</a></h4>
                                        <p class="text-muted">Ongoing app support and updates</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Software Development Services -->
                        <div class="sitemap-section mb-5">
                            <h2 class="mb-4"><i class="fas fa-cogs me-2"></i>Software Development Services</h2>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/enterprise-software.php">Enterprise Software</a></h4>
                                        <p class="text-muted">Large-scale business applications</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/saas-development.php">SaaS Development</a></h4>
                                        <p class="text-muted">Software-as-a-Service platforms</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/custom-applications.php">Custom Applications</a></h4>
                                        <p class="text-muted">Tailored business solutions</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/software-testing.php">Testing & QA</a></h4>
                                        <p class="text-muted">Quality assurance and testing services</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Digital Transformation Services -->
                        <div class="sitemap-section mb-5">
                            <h2 class="mb-4"><i class="fas fa-sync-alt me-2"></i>Digital Transformation Services</h2>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/cloud-solutions.php">Cloud Solutions</a></h4>
                                        <p class="text-muted">AWS, Azure, and cloud infrastructure</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/ai-ml.php">AI & Machine Learning</a></h4>
                                        <p class="text-muted">Artificial intelligence integration</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/process-automation.php">Process Automation</a></h4>
                                        <p class="text-muted">Workflow and business process automation</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/system-migration.php">System Migration</a></h4>
                                        <p class="text-muted">Legacy system modernization</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Industry Solutions -->
                        <div class="sitemap-section mb-5">
                            <h2 class="mb-4"><i class="fas fa-industry me-2"></i>Industry Solutions</h2>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/healthcare.php">Healthcare Solutions</a></h4>
                                        <p class="text-muted">HIPAA-compliant healthcare platforms</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/financial-systems.php">Financial Systems</a></h4>
                                        <p class="text-muted">Secure financial and banking solutions</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/real-estate.php">Real Estate Platforms</a></h4>
                                        <p class="text-muted">Property management and listing systems</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/elearning.php">eLearning Platforms</a></h4>
                                        <p class="text-muted">Learning management systems</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Support & Maintenance -->
                        <div class="sitemap-section mb-5">
                            <h2 class="mb-4"><i class="fas fa-headset me-2"></i>Support & Maintenance</h2>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/website-maintenance.php">Website Maintenance</a></h4>
                                        <p class="text-muted">Ongoing website support and updates</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/managed-services.php">Managed IT Services</a></h4>
                                        <p class="text-muted">Comprehensive IT management</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="services/technical-support.php">Technical Support</a></h4>
                                        <p class="text-muted">24/7 technical assistance</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Legal & Policy Pages -->
                        <div class="sitemap-section mb-5">
                            <h2 class="mb-4"><i class="fas fa-gavel me-2"></i>Legal & Policy Pages</h2>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="privacy.php">Privacy Policy</a></h4>
                                        <p class="text-muted">How we protect and handle your information</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4><a href="terms.php">Terms of Service</a></h4>
                                        <p class="text-muted">Terms and conditions for using our services</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="sitemap-section mb-5">
                            <h2 class="mb-4"><i class="fas fa-address-book me-2"></i>Contact Information</h2>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4>General Inquiries</h4>
                                        <p class="text-muted">
                                            <strong>Email:</strong> <a href="mailto:info@envisionxperts.com">info@envisionxperts.com</a><br>
                                            <strong>Phone:</strong> <a href="tel:+1234567890">+1 (234) 567-890</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sitemap-card">
                                        <h4>Support & Technical</h4>
                                        <p class="text-muted">
                                            <strong>Support:</strong> <a href="mailto:support@envisionxperts.com">support@envisionxperts.com</a><br>
                                            <strong>Careers:</strong> <a href="mailto:careers@envisionxperts.com">careers@envisionxperts.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
