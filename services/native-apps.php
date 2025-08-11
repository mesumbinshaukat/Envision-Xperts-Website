<?php
$serviceSlug = 'native-apps';
$serviceTitle = 'Native Mobile App Development';
$serviceSubtitle = 'Platform-optimized iOS and Android apps powered by secure PHP APIs.';
$metaDescription = 'Native app development: Swift/Kotlin with PHP-based APIs for performance, security, and UX.';
$overview = ['We build native apps for performance-critical use cases, integrating with PHP APIs and platform features for best-in-class UX.'];
$benefitItems = ['Peak performance and responsiveness','Deep platform integrations','Robust security and privacy'];
$featureItems = [
    ['fa-bolt','Performance','Optimized rendering and background tasks.'],
    ['fa-fingerprint','Security','Biometrics, secure storage, and HTTPS pinning.'],
    ['fa-diagram-project','Integrations','Maps, payments, and device services.']
];
$processSteps = [
    ['fa-magnifying-glass','Discovery','Prioritize features and platform needs.'],
    ['fa-code','Development','Native modules and API contracts.'],
    ['fa-rocket','Release','App Store/Play compliance and rollout.']
];
$techStack = ['Swift/Kotlin','PHP APIs','App Store/Play Console'];
$faqs = [['How do you handle app updates?','We plan staged rollouts, monitor, and iterate quickly.']];
include __DIR__.'/_service-template.php';
