<?php
$serviceSlug = 'pwa';
$serviceTitle = 'Progressive Web Apps (PWAs)';
$serviceSubtitle = 'App-like speed and reliability on the web with offline support and installability.';
$metaDescription = 'PWA development: fast, installable, offline-capable experiences with PHP backends and modern frontends.';
$overview = [
    'We build PWAs that deliver native-like experiences on the web—fast loads, offline support, push notifications, and seamless updates.'
];
$benefitItems = [
    'Improved engagement and retention',
    'Offline and flaky-network resilience',
    'Lower acquisition costs vs native'
];
$featureItems = [
    ['fa-bolt','Performance','Lighthouse-driven optimization and asset strategies.'],
    ['fa-wifi','Offline','Service workers, caching, and background sync.'],
    ['fa-bell','Re-engagement','Push notifications and web app manifests.']
];
$processSteps = [
    ['fa-gauge','Benchmark','Measure vitals and prioritize wins.'],
    ['fa-code','Build','Service workers, caching, and features.'],
    ['fa-rocket','Ship','Install prompts and analytics.']
];
$techStack = ['PHP','Workbox','Vite/Webpack','CDN','Redis'];
$faqs = [
    ['Can a PWA be published to app stores?','With wrappers like TWA (Android) and PWABuilder (Windows).']
];
include __DIR__.'/_service-template.php';
