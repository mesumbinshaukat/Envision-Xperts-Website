<?php
$serviceSlug = 'process-automation';
$serviceTitle = 'Digital Process Automation';
$serviceSubtitle = 'Automate workflows to reduce manual work and improve compliance.';
$metaDescription = 'Process automation with PHP: orchestrators, BPM, approvals, and integrations.';
$overview = ['We automate routine processes and orchestrate complex workflows to reduce cost and error rates.'];
$benefitItems = ['Shorter cycle times','Fewer errors and better compliance','Better visibility and reporting'];
$featureItems = [
    ['fa-diagram-project','Orchestration','Stateful workflows and retries.'],
    ['fa-file-signature','Approvals','Audit trails and SLAs.'],
    ['fa-plug','Integrations','Connect line-of-business systems.']
];
$processSteps = [
    ['fa-magnifying-glass-chart','Analyze','Identify automation candidates.'],
    ['fa-sitemap','Design','Workflow design and SLAs.'],
    ['fa-code','Implement','Connectors and monitoring.']
];
$techStack = ['Temporal/Camunda','PHP workers','Redis/Queues'];
$faqs = [['What processes are best to automate?','High-volume, rule-based tasks with clear inputs/outputs.']];
include __DIR__.'/_service-template.php';
