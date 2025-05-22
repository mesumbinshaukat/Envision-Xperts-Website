<?php
namespace App\Security;

class SecurityHeaders {
    public static function setup() {
        header('Content-Security-Policy: default-src \'self\'; script-src \'self\' https://apis.appwrite.io; style-src \'self\' \'unsafe-inline\';');
        header('X-Frame-Options: DENY');
        header('X-Content-Type-Options: nosniff');
        header('Referrer-Policy: strict-origin-when-cross-origin');
        header('Permissions-Policy: camera=(), microphone=(), geolocation=()');
    }
}
