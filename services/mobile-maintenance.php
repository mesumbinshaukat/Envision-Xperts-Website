<?php
$serviceSlug = 'mobile-maintenance';
$serviceTitle = 'Mobile App Maintenance';
$serviceSubtitle = 'Keep your apps compliant, fast, and reliable across OS and device changes.';
$metaDescription = 'Mobile maintenance: version updates, compatibility, bug fixes, performance tuning, and analytics.';
$overview = ['We ensure your mobile apps remain stable and compliant through OS updates, device changes, and evolving requirements.'];
$benefitItems = ['Proactive OS/device compatibility','Crash reduction and performance gains','Continuous improvement roadmap'];
$featureItems = [
    ['fa-wrench','Upgrades','OS SDK and library updates.'],
    ['fa-chart-line','Optimization','Performance audits and optimizations.'],
    ['fa-bug','Stability','Crash analytics and rapid hotfixes.']
];
$processSteps = [
    ['fa-eye','Assess','Identify stability and performance issues.'],
    ['fa-screwdriver-wrench','Fix','Patch, refactor, and optimize.'],
    ['fa-repeat','Iterate','Measure and improve continuously.']
];
$techStack = ['Firebase Crashlytics','App Center','PHP APIs'];
$faqs = [['Do you handle store submissions?','Yes, including listings, screenshots, and compliance.']];
include __DIR__.'/_service-template.php';
