<?php
$serviceSlug = 'seo';
$serviceTitle = 'Search Engine Optimization (SEO)';
$serviceSubtitle = 'Improve rankings, visibility, and conversions with technical and content SEO.';
$metaDescription = 'SEO services: audits, Core Web Vitals, structured data, content strategy, and analytics.';
$overview = ['We combine technical, on-page, and content SEO with analytics to drive sustainable growth.'];
$benefitItems = ['Better rankings and traffic','Higher conversions','Measurable ROI'];
$featureItems = [
    ['fa-screwdriver-wrench','Technical SEO','CWV, crawlability, and structured data.'],
    ['fa-pen','Content Strategy','Topic clusters and briefs.'],
    ['fa-chart-line','Analytics','Dashboards and KPIs.']
];
$processSteps = [
    ['fa-magnifying-glass','Audit','Site and competitors.'],
    ['fa-road','Plan','Backlog and prioritization.'],
    ['fa-rocket','Execute','Implement and measure.']
];
$techStack = ['Google Search Console','GA4','Screaming Frog'];
$faqs = [['How soon to see results?','Typically 8–12 weeks, depending on competition and site state.']];
include __DIR__.'/_service-template.php';
