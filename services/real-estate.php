<?php
$serviceSlug = 'real-estate';
$serviceTitle = 'Real Estate Platforms';
$serviceSubtitle = 'Listings, CRMs, transaction workflows, and immersive tours.';
$metaDescription = 'Real estate software: MLS/IDX integrations, agent tools, and buyer experiences.';
$overview = ['We deliver robust platforms for brokers and marketplaces with powerful search and transaction workflows.'];
$benefitItems = ['Faster deal cycles','Better agent productivity','Richer buyer experiences'];
$featureItems = [
    ['fa-magnifying-glass-location','Search','Geospatial filters and saved searches.'],
    ['fa-house','Listings','Media, availability, and compliance.'],
    ['fa-people-arrows','CRM','Leads, pipelines, and automation.']
];
$processSteps = [
    ['fa-sitemap','Design','Data, flows, and roles.'],
    ['fa-code','Build','Search and workflows.'],
    ['fa-rocket','Launch','Onboarding and training.']
];
$techStack = ['PHP','Elasticsearch','PostGIS','Stripe'];
$faqs = [['Do you support MLS/IDX?','Yes, with standardized feeds and caching.']];
include __DIR__.'/_service-template.php';
