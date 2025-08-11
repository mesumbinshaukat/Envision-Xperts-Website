<?php
$serviceSlug = 'custom-php';
$serviceTitle = 'Custom PHP Web Development';
$serviceSubtitle = 'Tailored, secure, and scalable PHP applications engineered for your business.';
$metaDescription = 'Bespoke PHP development: clean architecture, robust APIs, integrations, testing, and performance for secure and scalable apps.';
$overview = [
    'We build bespoke PHP applications aligned with your domain logic, workflows, and growth plans. Our engineers use clean architecture, SOLID principles, and modern tooling to ship maintainable code at speed.',
    'From greenfield builds to refactors, we deliver secure authentication, robust integrations, observability, and automated QA to ensure reliability and performance.'
];
$benefitItems = [
    'Clean, testable code with clear boundaries',
    'Security-first approach (OWASP, secure sessions, CSRF)',
    'API-first design for omnichannel integration',
    'Performance tuning and caching strategies',
    'CI/CD pipelines and automated test suites'
];
$featureItems = [
    ['fa-diagram-project','Domain-driven Design','Architecture aligned to business capabilities and future scale.'],
    ['fa-key','Secure Auth & RBAC','JWT/OAuth2, MFA, SSO, and granular permissions.'],
    ['fa-cloud-arrow-right','3rd‑Party Integrations','Payments, CRMs, ERPs, marketing, and data platforms.'],
    ['fa-gauge-high','Performance','Caching, queues, async jobs, and DB optimization.'],
    ['fa-shield-halved','Compliance','Best practices for data privacy and audit trails.'],
    ['fa-flask','Quality Engineering','Unit, feature, and load testing with CI gates.']
];
$processSteps = [
    ['fa-magnifying-glass','Requirements & Discovery','Workshops to align scope, constraints, and success metrics.'],
    ['fa-sitemap','Architecture & Planning','Choose patterns, data models, and delivery roadmap.'],
    ['fa-code','Implementation','Iterative delivery with clean code and reviews.'],
    ['fa-vial-circle-check','QA & Hardening','Automated tests, security checks, and performance runs.'],
    ['fa-rocket','Launch & Observability','Deploy with rollback, monitoring, and alerting.']
];
$techStack = ['PHP 8.x','Composer','Laravel/Symfony','MySQL/PostgreSQL','Redis','Docker','Nginx/Apache','GitHub Actions'];
$faqs = [
    ['How do you ensure code quality?','We enforce standards, peer review, and CI pipelines with tests and static analysis.'],
    ['Can you integrate with our internal systems?','Yes. We build robust APIs and connectors for ERPs/CRMs/data platforms.'],
    ['What about documentation?','We provide developer docs, API specs, and handover sessions.']
];
include __DIR__.'/_service-template.php';
