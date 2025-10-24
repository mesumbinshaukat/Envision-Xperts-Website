<?php
$serviceSlug = 'healthcare';
$serviceTitle = 'Healthcare Solutions';
$serviceSubtitle = 'HIPAA-ready portals with scheduling, secure messaging, and telehealth.';
$metaDescription = 'Healthcare platforms: EMR/EHR integration, HIPAA controls, patient experiences, and analytics.';
$overview = ['We build patient-centric platforms with privacy, accessibility, and clinician workflows in mind.'];
$benefitItems = ['Privacy and compliance','Better patient engagement','Operational efficiency'];
$featureItems = [
    ['fa-notes-medical','Patient Portals','Scheduling, results, and messages.'],
    ['fa-lock','HIPAA Controls','Audit logs and access controls.'],
    ['fa-hospital','Integrations','EHR/EMR and insurance.']
];
$processSteps = [
    ['fa-magnifying-glass','Assess','Requirements and compliance.'],
    ['fa-code','Build','Features and integrations.'],
    ['fa-rocket','Launch','Security testing and training.']
];
$techStack = ['PHP','HL7/FHIR','MySQL','Redis'];
$faqs = [['How do you handle HIPAA?','We design with least privilege, encryption, and detailed logging.']];
include __DIR__.'/_service-template.php';
