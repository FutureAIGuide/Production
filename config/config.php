<?php
/**
 * Site Configuration
 * 
 * Global configuration settings for the website
 */

// Site Information
define('SITE_NAME', 'Production Website');
define('SITE_DESCRIPTION', 'A well-structured production website with design system');
define('SITE_URL', 'https://example.com');
define('SITE_EMAIL', 'info@example.com');

// Paths
define('BASE_PATH', dirname(__DIR__));
define('ASSETS_PATH', '/assets');
define('CSS_PATH', ASSETS_PATH . '/css');
define('JS_PATH', ASSETS_PATH . '/js');
define('IMAGES_PATH', ASSETS_PATH . '/images');

// Database Configuration (if needed)
define('DB_HOST', 'localhost');
define('DB_NAME', 'production_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// Timezone
date_default_timezone_set('UTC');

// Error Reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Session Configuration
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Helper Functions
 */

/**
 * Escape output for security
 */
function esc($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Get asset URL
 */
function asset($path) {
    return ASSETS_PATH . '/' . ltrim($path, '/');
}

/**
 * Check if current page matches
 */
function is_active($page) {
    $current = basename($_SERVER['PHP_SELF']);
    return $current === $page ? 'active' : '';
}

/**
 * Redirect to URL
 */
function redirect($url) {
    header("Location: $url");
    exit;
}

/**
 * Get current year for copyright
 */
function current_year() {
    return date('Y');
}
?>
