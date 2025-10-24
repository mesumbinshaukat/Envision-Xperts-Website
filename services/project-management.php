<?php
$serviceSlug = 'project-management';
$serviceTitle = 'Project Management';
$serviceSubtitle = 'Deliver outcomes on time with agile, transparent leadership.';
$metaDescription = 'Agile project management: planning, risk management, stakeholder communication, and reporting.';
$overview = ['Our PMs orchestrate predictable delivery with clear visibility and proactive risk management.'];
$benefitItems = ['Alignment and focus','Reduced delivery risks','Transparent reporting'];
$featureItems = [
    ['fa-list-check','Planning','Scope, milestones, and estimates.'],
    ['fa-diagram-project','Execution','Scrum/kanban and impediment removal.'],
    ['fa-chart-line','Reporting','KPIs and stakeholder updates.']
];
$processSteps = [
    ['fa-flag-checkered','Initiate','Set goals and success metrics.'],
    ['fa-sitemap','Plan','Roadmap and sprint plans.'],
    ['fa-gauge','Track','Monitor, adapt, and deliver.']
];
$techStack = ['Jira/Asana','Confluence','Status dashboards'];
$faqs = [['How do you handle changes?','We manage change control with clear impact analysis.']];
include __DIR__.'/_service-template.php';
