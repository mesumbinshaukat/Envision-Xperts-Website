<?php
$serviceSlug = 'website-maintenance';
$serviceTitle = 'Website Maintenance';
$serviceSubtitle = 'Protect uptime and performance with proactive website care.';
$metaDescription = 'Website maintenance: monitoring, patches, backups, and performance optimization.';
$overview = ['We keep websites secure, fast, and reliable with continuous care and improvements.'];
$benefitItems = ['Uptime and reliability','Security and compliance','Better performance'];
$featureItems = [
    ['fa-shield','Security','Hardening and updates.'],
    ['fa-gauge','Speed','Caching and asset optimization.'],
    ['fa-database','Backups','Retention and recovery drills.']
];
$processSteps = [
    ['fa-eye','Monitor','Watch for regressions.'],
    ['fa-wrench','Maintain','Patch and optimize.'],
    ['fa-life-ring','Support','SLA incident response.']
];
$techStack = ['Cloudflare','Sentry','Grafana'];
$faqs = [['What SLAs do you offer?','We tailor SLAs by criticality and business needs.']];
include __DIR__.'/_service-template.php';
