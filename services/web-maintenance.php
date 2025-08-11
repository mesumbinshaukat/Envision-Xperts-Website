<?php
$serviceSlug = 'web-maintenance';
$serviceTitle = 'Web Maintenance & Support';
$serviceSubtitle = 'Keep your PHP applications secure, fast, and up-to-date.';
$metaDescription = 'Web maintenance: updates, security patches, monitoring, backups, incident response, and performance optimization.';
$overview = [
    'We provide comprehensive maintenance services to protect uptime, performance, and security while enabling continuous improvement.'
];
$benefitItems = [
    'Proactive monitoring and alerts',
    'Regular updates and security patching',
    'Performance tuning and backups'
];
$featureItems = [
    ['fa-shield-halved','Security','Patches, audits, and WAF configuration.'],
    ['fa-server','Ops','Backups, disaster recovery, and scaling.'],
    ['fa-chart-line','Performance','Caching, database health, and CDN tuning.']
];
$processSteps = [
    ['fa-eye','Monitor','Detect issues early with observability.'],
    ['fa-wrench','Maintain','Patch, update, and optimize.'],
    ['fa-life-ring','Support','SLA-backed response and resolution.']
];
$techStack = ['Uptime monitoring','Grafana/Prometheus','Sentry','Cloudflare/AWS WAF'];
$faqs = [
    ['Do you offer 24/7 coverage?','Yes, with agreed SLAs and escalation paths.']
];
include __DIR__.'/_service-template.php';
