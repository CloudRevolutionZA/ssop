<?php
/**
 * SSOP Configuration File
 * Central configuration for the entire application
 */

// Site Information
define('SITE_NAME', 'SSOP');
define('SITE_TAGLINE', 'Making Roodepoort Safer');
define('SITE_TITLE_SUFFIX', ' – Safer Communities. Stronger Together.');

// Contact Information
define('PHONE_NUMBER', '0100210178');
define('PHONE_DISPLAY', '0790194931');

// Paths
define('BASE_PATH', dirname(__DIR__));
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('ASSETS_PATH', '/assets');
define('IMAGES_PATH', ASSETS_PATH . '/images');

// Navigation Menu Items
$navItems = [
    ['url' => 'index.php', 'label' => 'Home'],
    ['url' => 'about.php', 'label' => 'About USP'],
    ['url' => 'what-we-do.php', 'label' => 'What We Do'],
    ['url' => 'projects.php', 'label' => 'Our Projects'],
    ['url' => 'get-involved.php', 'label' => 'Get Involved'],
    ['url' => 'contact.php', 'label' => 'Contact']
];

// Theme Colors (for reference)
$themeColors = [
    'ssop-red' => '#e31e24',
    'ssop-red-dark' => '#b51519',
    'ssop-black' => '#0a0a0a',
    'ssop-dark' => '#111111',
    'ssop-dark2' => '#1a1a1a',
    'ssop-grey' => '#888888',
    'ssop-light-grey' => '#cccccc',
    'ssop-white' => '#ffffff',
    'ssop-gold' => '#f5a623',
    'ssop-green' => '#28a745'
];
