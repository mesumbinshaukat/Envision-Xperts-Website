<?php
$serviceSlug = 'ecommerce';
$serviceTitle = 'eCommerce Solutions';
$serviceSubtitle = 'Conversion-first storefronts with secure payments, subscriptions, and personalization.';
$metaDescription = 'PHP eCommerce: product catalogs, checkout, Stripe/Braintree, subscriptions, recommendations, analytics, and SEO.';
$overview = [
    'We craft high-performing storefronts that drive conversion and lifetime value, with streamlined checkout, flexible pricing, and personalized experiences.',
];
$benefitItems = [
    'Frictionless checkout and high conversion UX',
    'Secure payments and PCI compliance support',
    'Subscriptions, bundles, promotions, and taxation',
    'Analytics, experimentation, and SEO best practices'
];
$featureItems = [
    ['fa-box','Product Management','Variants, bundles, inventory, and rich content.'],
    ['fa-credit-card','Payments','Stripe/Braintree, wallets, and regional methods.'],
    ['fa-rotate','Subscriptions','Plans, trials, proration, and dunning.'],
    ['fa-wand-magic-sparkles','Personalization','Recommendations and behavioral targeting.'],
    ['fa-truck','Fulfillment','Shipping, tracking, and returns workflows.'],
    ['fa-chart-line','Growth','A/B testing, analytics, and funnels.']
];
$processSteps = [
    ['fa-magnifying-glass-dollar','Growth Audit','Conversion and funnel analysis.'],
    ['fa-sitemap','Architecture','Catalog, pricing, and integrations design.'],
    ['fa-code','Build','Storefront, checkout, and back-office ops.'],
    ['fa-bug','QA','Payments, taxes, and cross-device testing.'],
    ['fa-rocket','Launch','SEO, feeds, and analytics readiness.']
];
$techStack = ['PHP 8','MySQL','Stripe/Braintree','Redis','Algolia/Elasticsearch','Google Tag Manager'];
$faqs = [
    ['Which payment gateways do you support?','Stripe, Braintree, PayPal, and regional providers.'],
    ['Do you handle subscriptions?','Yes—full subscription lifecycle with retries and webhooks.']
];
include __DIR__.'/_service-template.php';
