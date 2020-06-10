<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 5</title>
</head>

<body>
  <h1>Exercice 5</h1>
  <p>Créer un formulaire sur la page index.php avec :
    <ul>
      <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
      <li>Un champ texte pour le nom</li>
      <li>Un champ texte pour le prénom</li>
    </ul>

    Ce formulaire doit rediriger vers la page index.php.
    Vous avez le choix de la méthode.</p>

  <form method="post" action="index.php">
    <select name="choix">
      <option value="choix1">Mme</option>
      <option value="choix2">M.</option>
    </select>
    <br>
    <label for="lastName">Nom :</label><br>
    <input type="text" id="lastName" name="lastName" placeholder="Entrez votre nom"><br>
    <label for="firstName">Prénom :</label><br>
    <input type="text" id="firstName" name="firstName" placeholder="Entrez votre prénom"><br><br>
    <input type="submit" value="Submit">
  </form>





</body>

</html>