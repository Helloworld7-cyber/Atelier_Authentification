<?php
session_start();

// Vérification simple de la présence du cookie 'authToken'
if (!isset($_COOKIE['authToken']) || empty($_COOKIE['authToken'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial_scale=1.0">
    <title>Page Utilisateur Protégée</title>
</head>
<body>
    <h1>Bravo ! Vous êtes sur la page user !</h1>
    <p>Cette page est accessible uniquement après connexion avec 'user' / 'utilisateur'.</p>
    <p>Votre session (cookie) est configurée pour expirer après 1 minute.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>
