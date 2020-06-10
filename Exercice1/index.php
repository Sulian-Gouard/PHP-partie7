<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 1</title>
</head>

<body>
  <h1>Exercice 1</h1>
  <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>

  <form method="get" action="user.php">
    <label for="lastName">Nom :</label><br>
    <input type="text" id="lastName" name="lastName" placeholder="Entrez votre nom"><br>
    <label for="firstName">Prénom :</label><br>
    <input type="text" id="firstName" name="firstName" placeholder="Entrez votre prénom"><br><br>
    <input type="submit" value="Submit">
  </form>



</body>

</html>