<?php
$serviceSlug = 'elearning';
$serviceTitle = 'eLearning Platforms';
$serviceSubtitle = 'LMS, cohort courses, progress tracking, and assessments.';
$metaDescription = 'eLearning systems: courses, grading, communities, and analytics built on PHP.';
$overview = ['We develop learning platforms that scale with content and community while tracking outcomes.'];
$benefitItems = ['Better learning outcomes','Instructor productivity','Scalable content delivery'];
$featureItems = [
    ['fa-book','Courses','Modules, quizzes, and grading.'],
    ['fa-users','Communities','Discussion, chat, and events.'],
    ['fa-chart-line','Analytics','Progress, retention, and success.']
];
$processSteps = [
    ['fa-lightbulb','Design','Curriculum and UX.'],
    ['fa-code','Build','LMS features and payments.'],
    ['fa-rocket','Scale','Cohorts and integrations.']
];
$techStack = ['PHP','MySQL','Redis','Stripe'];
$faqs = [['Do you support SCORM/xAPI?','Yes, we can integrate SCORM/xAPI where required.']];
include __DIR__.'/_service-template.php';
