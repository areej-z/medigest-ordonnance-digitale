<?php
// add_medicament.php
$nom = $_POST['nom'];
$description = $_POST['description'];

echo "Médicament ajouté : $nom ($description). <a href='../html/medicaments.html'>Retour</a>";
?>
