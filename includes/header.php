<?php
$isServices = strpos($_SERVER['SCRIPT_NAME'], '/services/') !== false;
$prefix = $isServices ? '../' : '';
?>
<header class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="<?= $prefix ?>index.php">
            <img src="<?= $prefix ?>logo/envision-expert-logo-dark (1).png" alt="EnvisionXperts" height="40">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $prefix ?>index.php">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= $prefix ?>about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $prefix ?>team.php">Team</a>
                </li>
                
                <!-- Services Mega Menu -->
                <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu mega-menu" aria-labelledby="servicesDropdown">
                        <div class="container">
                            <div class="row g-4">
                                <!-- Web Development -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="mega-menu-section">
                                        <h5><i class="fas fa-globe me-2"></i>Web Development</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="<?= $prefix ?>services/custom-php.php">Custom PHP Development</a></li>
                                            <li><a href="<?= $prefix ?>services/cms-development.php">CMS Development</a></li>
                                            <li><a href="<?= $prefix ?>services/ecommerce.php">eCommerce Solutions</a></li>
                                            <li><a href="<?= $prefix ?>services/web-modernization.php">Web Modernization</a></li>
                                            <li><a href="<?= $prefix ?>services/pwa.php">Progressive Web Apps</a></li>
                                            <li><a href="<?= $prefix ?>services/api-development.php">API Development</a></li>
                                            <li><a href="<?= $prefix ?>services/web-maintenance.php">Web Maintenance</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Mobile Development -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="mega-menu-section">
                                        <h5><i class="fas fa-mobile-alt me-2"></i>Mobile Development</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="<?= $prefix ?>services/cross-platform.php">Cross-Platform Apps</a></li>
                                            <li><a href="<?= $prefix ?>services/native-apps.php">Native Development</a></li>
                                            <li><a href="<?= $prefix ?>services/mobile-maintenance.php">App Maintenance</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Software Development -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="mega-menu-section">
                                        <h5><i class="fas fa-cogs me-2"></i>Software Development</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="<?= $prefix ?>services/enterprise-software.php">Enterprise Software</a></li>
                                            <li><a href="<?= $prefix ?>services/saas-development.php">SaaS Development</a></li>
                                            <li><a href="<?= $prefix ?>services/custom-applications.php">Custom Applications</a></li>
                                            <li><a href="<?= $prefix ?>services/software-testing.php">Testing & QA</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Digital Transformation -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="mega-menu-section">
                                        <h5><i class="fas fa-sync-alt me-2"></i>Digital Transformation</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="<?= $prefix ?>services/cloud-solutions.php">Cloud Solutions</a></li>
                                            <li><a href="<?= $prefix ?>services/ai-ml.php">AI & Machine Learning</a></li>
                                            <li><a href="<?= $prefix ?>services/process-automation.php">Process Automation</a></li>
                                            <li><a href="<?= $prefix ?>services/system-migration.php">System Migration</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- IT Consulting -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="mega-menu-section">
                                        <h5><i class="fas fa-chart-line me-2"></i>IT Consulting</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="<?= $prefix ?>services/technology-consulting.php">Technology Consulting</a></li>
                                            <li><a href="<?= $prefix ?>services/project-management.php">Project Management</a></li>
                                            <li><a href="<?= $prefix ?>services/staff-augmentation.php">Staff Augmentation</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Digital Marketing -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="mega-menu-section">
                                        <h5><i class="fas fa-search me-2"></i>Digital Marketing</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="<?= $prefix ?>services/seo.php">Search Engine Optimization</a></li>
                                            <li><a href="<?= $prefix ?>services/marketing-automation.php">Marketing Automation</a></li>
                                            <li><a href="<?= $prefix ?>services/social-media.php">Social Media Integration</a></li>
                                            <li><a href="<?= $prefix ?>services/content-subscription.php">Content Subscription</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Support & Maintenance -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="mega-menu-section">
                                        <h5><i class="fas fa-headset me-2"></i>Support & Maintenance</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="<?= $prefix ?>services/website-maintenance.php">Website Maintenance</a></li>
                                            <li><a href="<?= $prefix ?>services/managed-services.php">Managed IT Services</a></li>
                                            <li><a href="<?= $prefix ?>services/technical-support.php">24/7 Technical Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Industry Solutions -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="mega-menu-section">
                                        <h5><i class="fas fa-industry me-2"></i>Industry Solutions</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="<?= $prefix ?>services/healthcare.php">Healthcare Solutions</a></li>
                                            <li><a href="<?= $prefix ?>services/real-estate.php">Real Estate Platforms</a></li>
                                            <li><a href="<?= $prefix ?>services/elearning.php">eLearning Platforms</a></li>
                                            <li><a href="<?= $prefix ?>services/financial-systems.php">Financial Systems</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= $prefix ?>contact.php">Contact</a>
                </li>
            </ul>
            
            <!-- Search Bar -->
            <div class="navbar-nav ms-auto">
                <div class="nav-item">
                    <form class="search-form d-flex" role="search">
                        <div class="input-group">
                            <input class="form-control" type="search" placeholder="Search..." aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                
                <!-- CTA Button -->
                <div class="nav-item ms-3">
                    <a href="<?= $prefix ?>contact.php" class="btn btn-primary">Get Quote</a>
                </div>
            </div>
        </div>
    </div>
</header> 