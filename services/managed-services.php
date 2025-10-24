<?php
$serviceSlug = 'managed-services';
$serviceTitle = 'Managed IT Services (MSP)';
$serviceSubtitle = 'Comprehensive support for infrastructure, networks, and hosting.';
$metaDescription = 'Managed IT services: monitoring, security, updates, and disaster recovery for web systems.';
$overview = ['Our MSP offering reduces downtime and risk by proactively maintaining your stack end-to-end.'];
$benefitItems = ['Reduced outages','Lower operational risk','Predictable costs'];
$featureItems = [
    ['fa-eye','Monitoring','24/7 visibility and alerts.'],
    ['fa-shield-halved','Security','Patching and incident response.'],
    ['fa-hard-drive','Backups/DR','Restore points and drills.']
];
$processSteps = [
    ['fa-list-check','Onboarding','Asset inventory and baselines.'],
    ['fa-gears','Operate','Runbooks and maintenance.'],
    ['fa-chart-line','Improve','Reports and optimization.']
];
$techStack = ['AWS/Azure','WAF/CDN','Backup solutions'];
$faqs = [['Do you cover on-prem?','Yes, with remote and on-site options.']];
include __DIR__.'/_service-template.php';
