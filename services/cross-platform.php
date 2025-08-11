<?php
$serviceSlug = 'cross-platform';
$serviceTitle = 'Cross-Platform Mobile Apps';
$serviceSubtitle = 'Build once, ship on iOS and Android with a shared codebase and PHP APIs.';
$metaDescription = 'React Native/Flutter with PHP APIs: rapid delivery, native capabilities, and unified experiences.';
$overview = ['Ship high-quality apps faster using cross-platform frameworks, with secure PHP backends and unified features across platforms.'];
$benefitItems = ['Faster time-to-market','Lower maintenance cost','Consistent UX across platforms'];
$featureItems = [
    ['fa-mobile-screen','Native Capabilities','Camera, location, biometrics, and push.'],
    ['fa-plug','API Integration','Reliable communication with PHP services.'],
    ['fa-bug','Quality','Automated tests and crash analytics.']
];
$processSteps = [
    ['fa-diagram-project','Plan','Architecture and shared components.'],
    ['fa-code','Build','Feature delivery and device testing.'],
    ['fa-rocket','Release','Store readiness and monitoring.']
];
$techStack = ['React Native/Flutter','PHP APIs','Firebase/OneSignal'];
$faqs = [['How close to native performance?','Near-native with careful optimization and native modules where needed.']];
include __DIR__.'/_service-template.php';
