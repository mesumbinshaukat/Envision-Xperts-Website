<?php
$serviceSlug = 'cms-development';
$serviceTitle = 'PHP-based CMS Development';
$serviceSubtitle = 'WordPress, Drupal, and Joomla engineering built for editors, speed, and scale.';
$metaDescription = 'CMS development and customization with WordPress, Drupal, Joomla: headless, multisite, editorial workflows, and performance.';
$overview = [
    'We deliver editorially friendly CMS platforms with custom themes, plugins/modules, and workflows that empower teams without sacrificing performance or security.',
    'From traditional to headless architectures, we integrate CDNs, DAMs, and marketing tools to accelerate content velocity.'
];
$benefitItems = [
    'Editor-first UX and role-based workflows',
    'Headless or traditional architectures',
    'Multisite and localization support',
    'Security hardening and performance optimization'
];
$featureItems = [
    ['fa-paintbrush','Custom Themes','Brand-aligned, accessible, and performant themes.'],
    ['fa-puzzle-piece','Plugins & Modules','Purpose-built features with clean code and support.'],
    ['fa-diagram-project','Headless Delivery','API-driven content for apps and channels.'],
    ['fa-language','i18n & Multisite','Operate multiple brands and locales from one core.'],
    ['fa-gauge-high','Speed & SEO','Core Web Vitals, caching, and structured data.'],
    ['fa-shield','Hardening','WAF, backups, updates, and security best practices.']
];
$processSteps = [
    ['fa-magnifying-glass','Discovery','Content models, governance, and workflows.'],
    ['fa-pen-ruler','Design & IA','Information architecture and component libraries.'],
    ['fa-code','Build','Themes, plugins, and integrations.'],
    ['fa-vial','QA','Accessibility, performance, and security testing.'],
    ['fa-rocket','Launch','CDN, caching, and training for editors.']
];
$techStack = ['WordPress','Drupal','Joomla','PHP 8','MySQL','Redis','Varnish/CDN'];
$faqs = [
    ['Do you support headless CMS?','Yes, we deliver headless WordPress/Drupal with REST/GraphQL.'],
    ['Can you migrate existing sites?','We migrate content, media, redirects, and preserve SEO.']
];
include __DIR__.'/_service-template.php';
