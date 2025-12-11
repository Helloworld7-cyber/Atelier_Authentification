<?php
// Démarrer une session utilisateur
session_start();

$token_value = ''; 

// Vérifier si l'utilisateur est déjà en possession d'un cookie valide
// Si un jeton existe, on dirige l'utilisateur vers la page protégée (logique simplifiée)
if (isset($_COOKIE['authToken']) && !empty($_COOKIE['authToken'])) {
    // Redirection simplifiée vers la page admin si un cookie est trouvé.
    // L'utilisateur sera redirigé vers sa page respective (admin ou user) après le login.
    header('Location: page_admin.php'); 
    exit();
}

// Gérer la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // --- Configuration des Exercices 1 et 2 ---
    $token_value = bin2hex(random_bytes(16)); // Exercice 2 : Jeton unique et dynamique
    $duree_validite = time() + 60;          // Exercice 1 : Durée de 1 minute (60 secondes)

    // 1. VÉRIFICATION ADMIN (Originale)
    if ($username === 'admin' && $password === 'secret') {
        
        setcookie('authToken', $token_value, $duree_validite, '/', '', false, true); 
        header('Location: page_admin.php'); 
        exit();
        
    // 2. VÉRIFICATION USER (Exercice 3)
    } elseif ($username === 'user' && $password === 'utilisateur') {
        
        setcookie('authToken', $token_value, $duree_validite, '/', '', false, true); 
        header('Location: page_user.php'); // Redirection vers la nouvelle page
        exit();
        
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Atelier authentification par Cookie</h1>
    <h3>Connectez-vous avec :</h3>
    <ul>
        <li>admin / secret (redirige vers page_admin.php)</li>
        <li>user / utilisateur (redirige vers page_user.php)</li>
    </ul>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    
    <form method="POST" action="">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Se connecter</button>
    </form>
    <br>
    <a href="../index.html">Retour à l'accueil</a> 
</body>
</html><?php
// Démarrer une session utilisateur
session_start();

$token_value = ''; 

// Vérifier si l'utilisateur est déjà en possession d'un cookie valide
// Si un jeton existe, on dirige l'utilisateur vers la page protégée (logique simplifiée)
if (isset($_COOKIE['authToken']) && !empty($_COOKIE['authToken'])) {
    // Redirection simplifiée vers la page admin si un cookie est trouvé.
    // L'utilisateur sera redirigé vers sa page respective (admin ou user) après le login.
    header('Location: page_admin.php'); 
    exit();
}

// Gérer la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // --- Configuration des Exercices 1 et 2 ---
    $token_value = bin2hex(random_bytes(16)); // Exercice 2 : Jeton unique et dynamique
    $duree_validite = time() + 60;          // Exercice 1 : Durée de 1 minute (60 secondes)

    // 1. VÉRIFICATION ADMIN (Originale)
    if ($username === 'admin' && $password === 'secret') {
        
        setcookie('authToken', $token_value, $duree_validite, '/', '', false, true); 
        header('Location: page_admin.php'); 
        exit();
        
    // 2. VÉRIFICATION USER (Exercice 3)
    } elseif ($username === 'user' && $password === 'utilisateur') {
        
        setcookie('authToken', $token_value, $duree_validite, '/', '', false, true); 
        header('Location: page_user.php'); // Redirection vers la nouvelle page
        exit();
        
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Atelier authentification par Cookie</h1>
    <h3>Connectez-vous avec :</h3>
    <ul>
        <li>admin / secret (redirige vers page_admin.php)</li>
        <li>user / utilisateur (redirige vers page_user.php)</li>
    </ul>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    
    <form method="POST" action="">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Se connecter</button>
    </form>
    <br>
    <a href="../index.html">Retour à l'accueil</a> 
</body>
</html>
