<?php
$serviceSlug = 'web-modernization';
$serviceTitle = 'Web Application Modernization';
$serviceSubtitle = 'Upgrade legacy PHP systems to secure, scalable, and maintainable architectures.';
$metaDescription = 'Modernize legacy PHP apps: refactoring, framework upgrades, security hardening, performance, and CI/CD.';
$overview = [
    'We modernize legacy PHP applications by introducing clean architectures, automated tests, and secure workflows—reducing risk and enabling faster feature delivery.'
];
$benefitItems = [
    'Lower technical debt and operational risk',
    'Improved developer velocity and reliability',
    'Security baselines and compliance readiness'
];
$featureItems = [
    ['fa-building-shield','Security','Auth, audit logs, secrets management, and dependency hygiene.'],
    ['fa-diagram-project','Architecture','Modularization, services, and API-first patterns.'],
    ['fa-gauge','Performance','Caching, DB indexing, and async processing.'],
    ['fa-flask','Testing','Unit/feature tests and regression automation.'],
    ['fa-diagram-next','Migration Plans','Strangler patterns and phased rollouts.'],
    ['fa-gears','DevEx','CI/CD, code quality gates, and documentation.']
];
$processSteps = [
    ['fa-microscope','Codebase Audit','Identify hotspots, risks, and opportunities.'],
    ['fa-road','Roadmap','Prioritized modernization plan with milestones.'],
    ['fa-code-branch','Incremental Delivery','Low-risk refactors and module extraction.'],
    ['fa-shield','Hardening','Security controls and observability.'],
    ['fa-rocket','Release','Progressive rollouts and monitoring.']
];
$techStack = ['PHP 8','Laravel/Symfony','MySQL/PostgreSQL','Redis','Docker','GitHub Actions'];
$faqs = [
    ['Will there be downtime?','We plan phased releases to minimize or avoid downtime.'],
    ['How do you measure success?','Error rates, performance KPIs, velocity, and business outcomes.']
];
include __DIR__.'/_service-template.php';
