<?php
$serviceSlug = 'technology-consulting';
$serviceTitle = 'Technology Consulting';
$serviceSubtitle = 'Make confident technology choices for long-term success.';
$metaDescription = 'PHP-focused technology consulting: framework selection, architecture reviews, and modernization strategy.';
$overview = ['We assess your goals and constraints to recommend frameworks, architectures, and delivery models that fit your context.'];
$benefitItems = ['Reduced risk and faster delivery','Clarity on roadmap and investment','Improved alignment across teams'];
$featureItems = [
    ['fa-compass-drafting','Architecture Reviews','Identify gaps and opportunities.'],
    ['fa-road','Roadmaps','Prioritized and actionable plans.'],
    ['fa-people-group','Workshops','Consensus building and alignment.']
];
$processSteps = [
    ['fa-magnifying-glass','Assess','Discovery and analysis.'],
    ['fa-lightbulb','Recommend','Options and tradeoffs.'],
    ['fa-handshake','Enable','Onboarding and support.']
];
$techStack = ['Laravel/Symfony','DDD/CQRS','Cloud-native'];
$faqs = [['Do you audit code?','Yes, with documented findings and remediation steps.']];
include __DIR__.'/_service-template.php';
