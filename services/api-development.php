<?php
$serviceSlug = 'api-development';
$serviceTitle = 'API Development & Integration';
$serviceSubtitle = 'Design, build, and secure REST/GraphQL APIs and third‑party integrations.';
$metaDescription = 'API development with OAuth2/JWT, rate limiting, documentation, and integrations to third-party platforms.';
$overview = [
    'We design robust APIs with clear versioning, authentication, and documentation, enabling seamless internal and external integrations.'
];
$benefitItems = [
    'Secure authentication and authorization',
    'Reliable versioning and deprecation policies',
    'Comprehensive docs and SDKs'
];
$featureItems = [
    ['fa-key','Auth & Security','OAuth2/JWT, scopes, and rate limiting.'],
    ['fa-book','Docs','OpenAPI/Swagger, portals, and examples.'],
    ['fa-plug','Integrations','Webhooks and platform connectors.']
];
$processSteps = [
    ['fa-diagram-project','Design','Resource modeling, contracts, and SLAs.'],
    ['fa-code','Build','Handlers, validation, and observability.'],
    ['fa-microscope','Test','Contract and load testing.']
];
$techStack = ['PHP','OpenAPI','Postman','Redis','NGINX','Kong/Traefik'];
$faqs = [
    ['Do you support GraphQL?','Yes, where it fits the domain and performance needs.']
];
include __DIR__.'/_service-template.php';
