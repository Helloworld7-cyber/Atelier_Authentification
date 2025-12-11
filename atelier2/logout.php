<?php
session_start();

// Supprime le cookie 'authToken' en le faisant expirer dans le passé
setcookie('authToken', '', time() - 3600, '/', '', false, true);

// Redirige vers la page de connexion
header('Location: index.php');
exit();
?>
