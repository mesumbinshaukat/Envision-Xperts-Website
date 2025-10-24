<?php
$serviceSlug = 'saas-development';
$serviceTitle = 'SaaS Development';
$serviceSubtitle = 'Multi-tenant, secure, and scalable SaaS products powered by PHP.';
$metaDescription = 'SaaS development: tenant isolation, billing, onboarding, analytics, and admin tools.';
$overview = ['We deliver SaaS platforms with tenant isolation, role-based access, metering and billing, and observability.'];
$benefitItems = ['Faster releases with CI/CD','Scalable multi-tenancy','Analytics and billing readiness'];
$featureItems = [
    ['fa-layer-group','Multi-Tenancy','Tenant isolation and provisioning.'],
    ['fa-money-bill','Billing','Usage metering and subscription billing.'],
    ['fa-gauge-high','Observability','Health metrics, logs, and audits.']
];
$processSteps = [
    ['fa-diagram-project','Design','Tenant model and data boundaries.'],
    ['fa-code','Build','Services, billing, and admin portals.'],
    ['fa-rocket','Launch','Pricing experiments and growth.']
];
$techStack = ['PHP','Stripe Billing','PostgreSQL','Redis'];
$faqs = [['How do you handle migrations?','Versioned migrations with safe rollouts and backups.']];
include __DIR__.'/_service-template.php';
