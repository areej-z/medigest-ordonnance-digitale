<?php
include 'config.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naissance = $_POST['date_naissance'];

$stmt = $conn->prepare("INSERT INTO patients (nom, prenom, date_naissance) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nom, $prenom, $date_naissance);

if ($stmt->execute()) {
    echo "✅ Patient ajouté avec succès.";
} else {
    echo "Erreur: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
