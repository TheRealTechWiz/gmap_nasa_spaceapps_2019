<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "abc"; 
$dbPassword = "admin"; 
$dbName     = "pgdb"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
?>