<?php
// Basic PHP test file
echo "<h1>PHP is working!</h1>";

// Check Laravel paths
echo "<h2>Path Checks:</h2>";
echo "<p>Current directory: " . __DIR__ . "</p>";
echo "<p>Storage directory exists: " . (is_dir(__DIR__ . '/../storage') ? 'Yes' : 'No') . "</p>";
echo "<p>Bootstrap directory exists: " . (is_dir(__DIR__ . '/../bootstrap') ? 'Yes' : 'No') . "</p>";
echo "<p>Vendor directory exists: " . (is_dir(__DIR__ . '/../vendor') ? 'Yes' : 'No') . "</p>";

// Check permissions
echo "<h2>Permission Checks:</h2>";
echo "<p>Storage directory writable: " . (is_writable(__DIR__ . '/../storage') ? 'Yes' : 'No') . "</p>";
echo "<p>Bootstrap/cache directory writable: " . (is_writable(__DIR__ . '/../bootstrap/cache') ? 'Yes' : 'No') . "</p>";

// Check PHP version and extensions
echo "<h2>PHP Environment:</h2>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>PDO MySQL Extension: " . (extension_loaded('pdo_mysql') ? 'Loaded' : 'Not loaded') . "</p>";
echo "<p>OpenSSL Extension: " . (extension_loaded('openssl') ? 'Loaded' : 'Not loaded') . "</p>";
echo "<p>Mbstring Extension: " . (extension_loaded('mbstring') ? 'Loaded' : 'Not loaded') . "</p>";
echo "<p>JSON Extension: " . (extension_loaded('json') ? 'Loaded' : 'Not loaded') . "</p>";
echo "<p>Fileinfo Extension: " . (extension_loaded('fileinfo') ? 'Loaded' : 'Not loaded') . "</p>";

// Check if .env file exists
echo "<h2>.env File:</h2>";
echo "<p>.env file exists: " . (file_exists(__DIR__ . '/../.env') ? 'Yes' : 'No') . "</p>";
?> 