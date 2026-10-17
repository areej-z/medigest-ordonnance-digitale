<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$password = $_POST['password'];
$telephone = $_POST['telephone'];
$numero_professionnel = $_POST['numero_professionnel'];
$adresse = $_POST['adresse'];
$experience = $_POST['experience'];
$specialite = $_POST['specialite'];

header("Refresh:3; url=../html/dashbord.html");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription réussie</title>
    <link rel="stylesheet" href="../html/style.css">
</head>
<body>

<div class="dashboard-container">
    <h2>Inscription réussie !</h2>

    <p><strong>Nom :</strong> <?= htmlspecialchars($nom) ?></p>
    <p><strong>Email :</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>Téléphone :</strong> <?= htmlspecialchars($telephone) ?></p>
    <p><strong>Numéro professionnel :</strong> <?= htmlspecialchars($numero_professionnel) ?></p>
    <p><strong>Adresse :</strong> <?= htmlspecialchars($adresse) ?></p>
    <p><strong>Expérience :</strong> <?= htmlspecialchars($experience) ?> années</p>
    <p><strong>Spécialité :</strong> <?= htmlspecialchars($specialite) ?></p>

    <p style="margin-top:20px; color:#4aa3ff;">
        ⏳ Vous serez redirigé vers le Dashboard dans 3 secondes...
    </p>
</div>

</body>
</html>
