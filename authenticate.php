<!-- authenticate.php -->

<?php
// Start session
session_start();

// Connect to database
try {
    $bdd = new PDO('mysql:host=localhost;dbname=fullcalendar', 'root', '');
} catch (Exception $e) {
    exit('Unable to connect to database.');
}

// Retrieve