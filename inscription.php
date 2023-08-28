<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/inscription.css" />
    <title>Formulaire d'inscription</title>
  </head>
  <body>
    <h3>Page Inscription</h3>
    <form action="traitement.php" method="post" enctype="multipart/form-data">
      <label for="email"></label>
      <input
        type="email"
        placeholder="Votre e-mail"
        id="email"
        name="email"
        required
      /><br /><br />

      <label for="nom"></label>
      <input
        type="text"
        placeholder="Votre nom"
        id="nom"
        name="pseudo"
        required
      /><br /><br />

      <label for="password"></label>
      <input
        type="password"
        placeholder="Mot de passe"
        id="password"
        name="mdp"
        required
      /><br /><br />

      <label for="confirm_password"></label>
      <input
        type="password"
        placeholder="Confirmer le mot de passe"
        id="confirm_password"
        name="confirm_password"
        required
      /><br /><br />

      <label for="fichier"></label>
      <input type="file" name="fichier" id="fichier" />

      <input type="submit" value="Envoyer" name="valider"/>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    </form>
  </body>
</html>
