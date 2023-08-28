<?php
session_start(); // a mettre avant le html c'est pour demarrer une session
if (!isset($_SESSION['id'])) { // si il n y a pas de session active
    header("Location: connexion.php"); // rediriger vers le formulaire de connexion
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php include_once "nav.php"; ?>

</body>

</html>