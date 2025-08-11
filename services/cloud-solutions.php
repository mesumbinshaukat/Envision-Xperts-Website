<?php
$serviceSlug = 'cloud-solutions';
$serviceTitle = 'Cloud Solutions';
$serviceSubtitle = 'Cloud-native PHP: containers, CI/CD, autoscaling, and observability.';
$metaDescription = 'Cloud solutions for PHP: AWS, Kubernetes, Docker, IaC, monitoring, and security.';
$overview = ['We design cloud architectures that improve reliability, scalability, and delivery speed for PHP workloads.'];
$benefitItems = ['Fewer outages and better performance','Elastic scaling and cost control','Faster deployments with CI/CD'];
$featureItems = [
    ['fa-boxes-stacked','Containers','Docker images and registries.'],
    ['fa-cloud','Kubernetes','Deployments, autoscaling, and networking.'],
    ['fa-file-code','IaC','Terraform/CloudFormation for consistency.']
];
$processSteps = [
    ['fa-magnifying-glass','Assess','Current infra and goals.'],
    ['fa-sitemap','Design','Landing zones and environments.'],
    ['fa-code','Implement','Pipelines, security, and monitoring.']
];
$techStack = ['AWS','Kubernetes','Docker','Terraform','Grafana'];
$faqs = [['Can you support hybrid?','Yes—hybrid and multi-cloud strategies are supported.']];
include __DIR__.'/_service-template.php';
