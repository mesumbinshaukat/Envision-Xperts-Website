<?php
$serviceSlug = 'financial-systems';
$serviceTitle = 'Financial Systems';
$serviceSubtitle = 'Secure, auditable platforms with real-time insights and controls.';
$metaDescription = 'Financial software: dashboards, risk scoring, audit logs, payments, and regulatory compliance.';
$overview = ['We build finance-focused systems that prioritize integrity, security, and transparency with real-time metrics.'];
$benefitItems = ['Stronger controls and auditability','Real-time decision making','Scalable architectures'];
$featureItems = [
    ['fa-scale-balanced','Governance','Audit trails and access controls.'],
    ['fa-chart-line','Analytics','KPIs and anomaly detection.'],
    ['fa-credit-card','Transactions','Secure payments and payouts.']
];
$processSteps = [
    ['fa-magnifying-glass','Assess','Risks and requirements.'],
    ['fa-code','Build','Secure modules and APIs.'],
    ['fa-clipboard-check','Validate','Security and compliance testing.']
];
$techStack = ['PHP','PostgreSQL','Redis','Stripe'];
$faqs = [['What regulations do you consider?','PCI practices, SOC-style controls, and local regulations as applicable.']];
include __DIR__.'/_service-template.php';
