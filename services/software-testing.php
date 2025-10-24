<?php
$serviceSlug = 'software-testing';
$serviceTitle = 'Software Testing & Quality Assurance';
$serviceSubtitle = 'Automated and manual testing that safeguard reliability and performance.';
$metaDescription = 'QA for PHP apps: unit/feature tests, load testing, CI pipelines, and release quality gates.';
$overview = ['We set up comprehensive testing strategies to reduce regressions and improve release confidence.'];
$benefitItems = ['Fewer incidents and hotfixes','Faster, safer releases','Objective quality metrics'];
$featureItems = [
    ['fa-vial','Automated Tests','Unit, integration, and end-to-end.'],
    ['fa-gauge-high','Performance','Load and stress testing.'],
    ['fa-square-check','Release Gates','CI checks and approvals.']
];
$processSteps = [
    ['fa-microscope','Assess','Identify critical paths and risks.'],
    ['fa-code','Implement','Test suites and environments.'],
    ['fa-chart-line','Improve','Track failures and optimize.']
];
$techStack = ['PHPUnit','Pest','k6/JMeter','GitHub Actions'];
$faqs = [['Can you test legacy apps?','Yes, we prioritize risk-based coverage and add tests incrementally.']];
include __DIR__.'/_service-template.php';
