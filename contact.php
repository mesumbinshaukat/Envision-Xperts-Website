<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact EnvisionXperts | Request a Quote or Speak to an Expert</title>
    <meta name="description" content="Get in touch with EnvisionXperts for PHP web development, mobile apps, software solutions, and digital transformation. Request a quote or schedule a consultation.">
    <meta name="keywords" content="Contact EnvisionXperts, request a quote, PHP development contact, software consultation, web development inquiry">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo/envision-expert-logo-dark (1).png">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Page Hero -->
    <section class="hero-section" style="min-height: 50vh;">
        <div class="hero-background"><div class="hero-overlay"></div></div>
        <div class="container d-flex align-items-center" style="min-height: 50vh;">
            <div class="row w-100">
                <div class="col-lg-9" data-aos="fade-up">
                    <h1 class="hero-title"><span class="text-gradient">Contact</span> Us</h1>
                    <p class="hero-description mb-0">Have questions or a project to discuss? Our team will respond within one business day.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="service-card text-start h-100">
                        <div class="service-icon"><i class="fas fa-phone"></i></div>
                        <h3>Sales & Inquiries</h3>
                        <p>Discuss your project goals, timelines, and budget with our solution consultants.</p>
                        <p class="mb-1"><strong>Phone:</strong> <a href="tel:+1234567890">+1 (234) 567-890</a></p>
                        <p class="mb-0"><strong>Email:</strong> <a href="mailto:info@envisionxperts.com">info@envisionxperts.com</a></p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card text-start h-100">
                        <div class="service-icon"><i class="fas fa-headset"></i></div>
                        <h3>Technical Support</h3>
                        <p>Existing client? Our 24/7 support team is ready to help with urgent issues.</p>
                        <p class="mb-1"><strong>Support Desk:</strong> <a href="mailto:support@envisionxperts.com">support@envisionxperts.com</a></p>
                        <p class="mb-0"><strong>SLA:</strong> Critical: 2h • High: 4h • Normal: 1 business day</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card text-start h-100">
                        <div class="service-icon"><i class="fas fa-briefcase"></i></div>
                        <h3>Careers</h3>
                        <p>We’re hiring engineers and designers who love building exceptional products.</p>
                        <p class="mb-1"><strong>Careers:</strong> <a href="mailto:careers@envisionxperts.com">careers@envisionxperts.com</a></p>
                        <p class="mb-0"><strong>Location:</strong> Remote-first</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map & Form -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="ratio ratio-16x9" style="border-radius:12px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,.15);">
                        <iframe src="https://www.google.com/maps?q=Business%20Street%20Suite%20100&output=embed" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <p class="mt-3 text-muted">We operate globally with a remote-first team. Meetings available virtually and on-site by appointment.</p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="contact-form-wrapper">
                        <h3 class="mb-3">Send us a message</h3>
                        <form class="contact-form" method="POST" action="process/contact.php">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="How can we help?" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Tell us about your project, goals, timelines, and constraints" required></textarea>
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-paper-plane me-2"></i>Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="section-subtitle">Quick answers about timelines, pricing, and collaboration</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <div class="accordion" id="faqAccordion">
                        <?php
                        $faqs = [
                            ['q' => 'How soon can you start?', 'a' => 'Most projects begin within 1-2 weeks after scoping and agreement. Urgent engagements are possible depending on availability.'],
                            ['q' => 'What engagement models do you offer?', 'a' => 'We offer fixed-scope delivery, time & materials, and dedicated engineering squads for long-term engagements.'],
                            ['q' => 'Do you work with existing codebases?', 'a' => 'Yes. We perform a technical audit and modernization plan to ensure code quality, security, and maintainability.'],
                            ['q' => 'Which industries do you serve?', 'a' => 'We partner with startups and enterprises across healthcare, finance, real estate, education, retail, and more.']
                        ];
                        foreach ($faqs as $i => $f): $id = 'faq'.($i+1); ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?= $id ?>">
                                <button class="accordion-button <?= $i>0?'collapsed':'' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $id ?>" aria-expanded="<?= $i===0?'true':'false' ?>" aria-controls="collapse<?= $id ?>">
                                    <?= $f['q'] ?>
                                </button>
                            </h2>
                            <div id="collapse<?= $id ?>" class="accordion-collapse collapse <?= $i===0?'show':'' ?>" aria-labelledby="heading<?= $id ?>" data-bs-parent="#faqAccordion">
                                <div class="accordion-body"><?= $f['a'] ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
