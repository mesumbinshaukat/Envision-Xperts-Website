<?php
$serviceSlug = 'system-migration';
$serviceTitle = 'System Migration Services';
$serviceSubtitle = 'Migrate from legacy platforms to modern PHP-based solutions safely.';
$metaDescription = 'Migrations: data mapping, cutover planning, validation, and rollbacks with minimal downtime.';
$overview = ['We plan and execute migrations with careful data validation, rehearsal, and rollback strategies to reduce risk.'];
$benefitItems = ['Minimized downtime','Data integrity and validation','Clear migration runbook'];
$featureItems = [
    ['fa-database','Data','Mapping, cleansing, and verification.'],
    ['fa-road','Cutover','Rehearsals and rollback plans.'],
    ['fa-chart-line','Observability','Metrics and error monitoring.']
];
$processSteps = [
    ['fa-list-check','Plan','Dependencies and schedule.'],
    ['fa-code-branch','Execute','Runbooks and coordination.'],
    ['fa-shield','Validate','Post-cutover checks and fixes.']
];
$techStack = ['PHP','MySQL/PostgreSQL','ETL Tools'];
$faqs = [['What if something fails?','We use rehearsals and rollback plans to minimize risk.']];
include __DIR__.'/_service-template.php';
