<?php
// Define valid credentials
$valid_username = 'Sherjeel';
$valid_password = '12333';

// Check if the user has provided credentials
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    // If not, send authentication headers and exit
    header('WWW-Authenticate: Basic realm="My Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authentication required.';
    exit;
}

// Check if provided credentials are valid
if ($_SERVER['PHP_AUTH_USER'] !== $valid_username || $_SERVER['PHP_AUTH_PW'] !== $valid_password) {
    // If not, send error message and exit
    header('HTTP/1.0 401 Unauthorized');
    echo 'Invalid credentials.';
    exit;
}

// If credentials are valid, user is authenticated
echo 'You are now logged in as ' . $_SERVER['PHP_AUTH_USER'];


?>