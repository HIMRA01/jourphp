<?php
session_start(); // a mettre avant le html c'est pour demarrer une session
require_once 'fonction.php';
if (!isset($_SESSION['id'])) { // si il n y a pas de session active
    header("Location: connexion.php"); // rediriger vers le formulaire de connexion
}
$listPost = getPost();
// echo "<pre>";
// print_r($listPost);
// echo "<pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php include_once "nav.php"; ?>
    <div class="container">
<?php foreach($listPost as $post){ ?>
<div class="post">
<div class="postimg">
<img src="img/<?= $post ['photo']; ?>" alt="image">


</div>
<p><?=  $post['text']; ?></p>
<span><?= $post['likes']; ?> likes</span> 
<a href="traitement.php?idpodt=<?= $post['id_post']; ?>">
<i class="fa-solid fa-thumbs-up"></i> 
</a>



</div>
<?php } ?>
















    </div>

</body>

</html>