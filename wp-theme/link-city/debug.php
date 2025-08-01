<?php
/**
 * Debug file to check theme paths and files
 */

// Check if we're in WordPress
if (!defined('ABSPATH')) {
    echo "This file should be accessed through WordPress.<br>";
    exit;
}

echo "<h2>Link City Theme Debug</h2>";

// Check theme directory
echo "<h3>Theme Directory</h3>";
echo "Template Directory: " . get_template_directory() . "<br>";
echo "Template Directory URI: " . get_template_directory_uri() . "<br>";
echo "Stylesheet Directory: " . get_stylesheet_directory() . "<br>";
echo "Stylesheet Directory URI: " . get_stylesheet_directory_uri() . "<br>";

// Check if files exist
echo "<h3>File Existence Check</h3>";
$files_to_check = array(
    'style.css' => get_template_directory() . '/style.css',
    'functions.php' => get_template_directory() . '/functions.php',
    'assets/css/styles.css' => get_template_directory() . '/assets/css/styles.css',
    'assets/css/core.css' => get_template_directory() . '/assets/css/core.css',
    'assets/js/app.js' => get_template_directory() . '/assets/js/app.js',
    'assets/images/logo.svg' => get_template_directory() . '/assets/images/logo.svg',
    'assets/images/Mask-group.svg' => get_template_directory() . '/assets/images/Mask-group.svg',
    'assets/images/Vector.svg' => get_template_directory() . '/assets/images/Vector.svg',
    'assets/images/Group-18811.svg' => get_template_directory() . '/assets/images/Group-18811.svg',
);

foreach ($files_to_check as $name => $path) {
    $exists = file_exists($path) ? '✅ EXISTS' : '❌ MISSING';
    echo "$name: $exists<br>";
}

// Check theme mods
echo "<h3>Theme Mods</h3>";
$theme_mods = array(
    'phone_number' => get_theme_mod('phone_number'),
    'phone_display' => get_theme_mod('phone_display'),
    'zalo_link' => get_theme_mod('zalo_link'),
    'tiktok_link' => get_theme_mod('tiktok_link'),
    'messenger_link' => get_theme_mod('messenger_link'),
    'google_map_link' => get_theme_mod('google_map_link'),
    'email_address' => get_theme_mod('email_address'),
);

foreach ($theme_mods as $key => $value) {
    echo "$key: " . ($value ? $value : 'NOT SET') . "<br>";
}

// Check if jQuery is loaded
echo "<h3>jQuery Check</h3>";
echo "jQuery loaded: " . (wp_script_is('jquery', 'enqueued') ? '✅ YES' : '❌ NO') . "<br>";
echo "jQuery version: " . (wp_script_is('jquery', 'enqueued') ? 'Loaded' : 'Not loaded') . "<br>";

// Check enqueued scripts
echo "<h3>Enqueued Scripts</h3>";
global $wp_scripts;
if (isset($wp_scripts->queue)) {
    foreach ($wp_scripts->queue as $handle) {
        echo "$handle<br>";
    }
} else {
    echo "No scripts enqueued<br>";
}
?> 