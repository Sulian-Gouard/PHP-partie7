
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
    <h1>Exercice 6</h1>
    <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.  </p>


<?php 
  if (isset($_POST['lastName']) && $_POST['firstName'] && $_POST['choix']) {
    $myMsg = 'Bonjour ' . $_POST['choix'] . ' ' . $_POST['firstName'] . ' '. $_POST['lastName'];
    echo $myMsg;
  }
  else { ?>
    <form method="post" action="index.php">
    <select name="choix">
      <option value="Madame">Mme</option>
      <option value="Monsieur">M.</option>
  </select>
  <br>
    <label for="lastName">Nom :</label><br>
    <input type="text" id="lastName" name="lastName" pattern=[A-Z,a-z]{1,25} title="Lettres" placeholder="Entrez votre nom"><br>
    <label for="firstName">Prénom :</label><br>
    <input type="text" id="firstName" name="firstName" pattern=[A-Z,a-z]{1,25} title="Lettres" placeholder="Entrez votre prénom"><br><br>
    <input type="submit" value="Submit">
  </form>
<?php
}
?>


</body>
</html>