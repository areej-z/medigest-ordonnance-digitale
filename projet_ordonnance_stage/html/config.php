<?php
$servername = "localhost";
$username = "root";   // par défaut sous XAMPP
$password = "";       // vide par défaut
$dbname = "ordonnance_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}
?>
