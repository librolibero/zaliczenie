<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "wda";
$dbPassword = "wd18";
$dbName     = "wda_1";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>