<?php
$serviceSlug = 'enterprise-software';
$serviceTitle = 'Enterprise Software Development';
$serviceSubtitle = 'CRMs, ERPs, and internal platforms engineered for scale and governance.';
$metaDescription = 'Enterprise-grade PHP systems: role-based access, auditability, integrations, and high availability.';
$overview = ['We architect and deliver enterprise platforms with the security, compliance, and reliability large organizations expect.'];
$benefitItems = ['Governance and auditability','High availability and resilience','Seamless integrations'];
$featureItems = [
    ['fa-user-shield','RBAC & SSO','SSO/SAML, LDAP/AD, and granular permissions.'],
    ['fa-diagram-project','Integrations','ERP/CRM/data pipelines with reliability.'],
    ['fa-clone','HA/DR','Failover, backups, and disaster recovery.']
];
$processSteps = [
    ['fa-magnifying-glass','Discovery','Stakeholders, KPIs, and constraints.'],
    ['fa-sitemap','Architecture','Availability, security, and scalability patterns.'],
    ['fa-code','Build','Iterative delivery with controls and audits.']
];
$techStack = ['PHP','PostgreSQL','Redis','Kafka/SQS','Kubernetes'];
$faqs = [['Do you support on-prem?','Yes, we support cloud, hybrid, and on-prem deployments.']];
include __DIR__.'/_service-template.php';
