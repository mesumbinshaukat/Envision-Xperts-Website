<?php
$serviceSlug = 'technical-support';
$serviceTitle = '24/7 Technical Support';
$serviceSubtitle = 'Round-the-clock support with clear SLAs and escalation paths.';
$metaDescription = '24/7 technical support for PHP apps: incident response, triage, and resolution with SLAs.';
$overview = ['Our on-call engineers respond quickly to incidents, triage efficiently, and restore service while keeping stakeholders informed.'];
$benefitItems = ['Faster resolution','Clear communication','Reduced downtime'];
$featureItems = [
    ['fa-bell','Alerting','Smart routing and escalation.'],
    ['fa-headset','On-call','Engineers across time zones.'],
    ['fa-clipboard-check','Postmortems','Root cause and preventive actions.']
];
$processSteps = [
    ['fa-eye','Detect','Alerts and anomaly detection.'],
    ['fa-fire-extinguisher','Respond','Triage and escalation.'],
    ['fa-chart-line','Improve','Post-incident reviews.']
];
$techStack = ['PagerDuty','Sentry','Grafana'];
$faqs = [['How do you measure SLA adherence?','We track MTTA/MTTR and report monthly.']];
include __DIR__.'/_service-template.php';
