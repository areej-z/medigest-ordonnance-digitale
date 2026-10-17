<?php
// Récupération des données envoyées par le formulaire
$medecin = $_POST['medecin'];
$cabinet = $_POST['cabinet'];
$numero_professionnel = $_POST['numero_professionnel'];
$patient = $_POST['patient'];
$medicament = $_POST['medicament'];
$dosage = $_POST['dosage'];
$duree = $_POST['duree'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ordonnance Digitale</title>
    <link rel="stylesheet" href="../html/style.css">
</head>
<body>

<div class="ordonnance-container">
    <h2>Ordonnance Médicale Digitale</h2>

    <div class="ordonnance-header">
        <p><strong>Médecin :</strong> <?= htmlspecialchars($medecin) ?></p>
        <p><strong>Cabinet :</strong> <?= htmlspecialchars($cabinet) ?></p>
        <p><strong>Numéro professionnel :</strong> <?= htmlspecialchars($numero_professionnel) ?></p>
    </div>

    <div class="ordonnance-body">
        <p><strong>Patient :</strong> <?= htmlspecialchars($patient) ?></p>
        <p><strong>Médicament :</strong> <?= htmlspecialchars($medicament) ?></p>
        <p><strong>Dosage :</strong> <?= htmlspecialchars($dosage) ?></p>
        <p><strong>Durée :</strong> <?= htmlspecialchars($duree) ?></p>
    </div>

    <div class="ordonnance-footer">
        <p>📄 Ordonnance générée électroniquement</p>
        <a href="../html/historique_ordonnances.html" class="btn">Voir historique</a>
    </div>
</div>

</body>
</html>
