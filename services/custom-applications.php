<?php
$serviceSlug = 'custom-applications';
$serviceTitle = 'Custom Business Applications';
$serviceSubtitle = 'Tailored platforms for healthcare, finance, real estate, education, and more.';
$metaDescription = 'Custom PHP business apps: secure workflows, analytics, and industry compliance.';
$overview = ['We build line-of-business applications aligned with regulatory and operational needs for your vertical.'];
$benefitItems = ['Workflow automation','Role-based security','Analytics and reporting'];
$featureItems = [
    ['fa-diagram-project','Workflows','State machines and approvals.'],
    ['fa-lock','Security','Data protection and auditing.'],
    ['fa-chart-column','Insights','KPIs and real-time dashboards.']
];
$processSteps = [
    ['fa-magnifying-glass','Discovery','Domain analysis and outcomes.'],
    ['fa-code','Build','Features, integrations, and QA.'],
    ['fa-rocket','Adoption','Training and continuous improvement.']
];
$techStack = ['PHP','MySQL/PostgreSQL','Redis'];
$faqs = [['How do you ensure compliance?','We align with standards like HIPAA, PCI, and SOC practices.']];
include __DIR__.'/_service-template.php';
