<!-- register.php -->

<?php
// Connect to database
try {
    $bdd = new PDO('mysql:host=localhost;dbname=fullcalendar', 'root', '');
} catch (Exception $e) {
    exit('Unable to connect to database.');
}

// Retrieve user input from form
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert new record into users table
$sql = "INSERT INTO users (email, password) VALUES (?, ?)";
$stmt= $bdd->prepare($sql);
$stmt->execute([$email, $password]);

// Redirect user to login page
header("Location: login.php");
exit();
?>