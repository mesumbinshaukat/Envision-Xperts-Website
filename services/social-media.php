<?php
$serviceSlug = 'social-media';
$serviceTitle = 'Social Media Integration';
$serviceSubtitle = 'Boost engagement with social logins, sharing, and community features.';
$metaDescription = 'Social features in PHP apps: authentication, sharing, embeds, UGC, and moderation tools.';
$overview = ['We integrate social capabilities that increase engagement while maintaining safety and control.'];
$benefitItems = ['Faster sign-ups','More engagement','Safer communities'];
$featureItems = [
    ['fa-right-to-bracket','Social Auth','Login with Google, Apple, etc.'],
    ['fa-share-from-square','Sharing','Rich links and previews.'],
    ['fa-shield','Moderation','Flagging, roles, and policies.']
];
$processSteps = [
    ['fa-diagram-project','Design','Policies, roles, and UX.'],
    ['fa-code','Build','Auth, shares, and feeds.'],
    ['fa-gavel','Moderate','Tools and workflows.']
];
$techStack = ['OAuth2/OIDC','OpenGraph','CDN'];
$faqs = [['How do you prevent abuse?','Rate limits, filters, and human-in-the-loop moderation.']];
include __DIR__.'/_service-template.php';
