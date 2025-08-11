<?php
$serviceSlug = 'content-subscription';
$serviceTitle = 'Content Subscription Solutions';
$serviceSubtitle = 'Dynamic paywalls, entitlements, and personalized pricing for content businesses.';
$metaDescription = 'Subscription platforms: metered paywalls, pricing tests, entitlements, and payment integrations.';
$overview = ['We build flexible subscription systems that maximize reader revenue while preserving UX.'];
$benefitItems = ['Recurring revenue growth','Fine-grained control of access','Experimentation-ready pricing'];
$featureItems = [
    ['fa-unlock','Paywalls','Metered, freemium, and dynamic rules.'],
    ['fa-id-card','Entitlements','Account-level access and bundles.'],
    ['fa-coins','Pricing','A/B tests and offer management.']
];
$processSteps = [
    ['fa-list-check','Plan','Models and KPIs.'],
    ['fa-code','Build','Access rules and payments.'],
    ['fa-chart-line','Optimize','Cohorts and LTV.']
];
$techStack = ['Stripe','Braintree','Redis','PHP'];
$faqs = [['Do you support corporate access?','Yes, with seat management and SSO.']];
include __DIR__.'/_service-template.php';
