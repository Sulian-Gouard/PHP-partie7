<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 6</title>
</head>

<body>
  <h1>Exercice 6</h1>
  <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>


  <?php
  if (isset($_POST['lastName']) && $_POST['firstName'] && $_POST['choix']) {
    $myMsg = 'Bonjour ' . $_POST['choix'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' vous avez envoyé le fichier : ' . $_POST['myfile'];
    echo $myMsg;
  } else { ?>
    <form method="post" action="index.php" enctype="multipart/form-data">
      <select name="choix">
        <option value="Madame">Mme</option>
        <option value="Monsieur">M.</option>
      </select>
      <br>
      <label for="lastName">Nom :</label><br>
      <input type="text" id="lastName" name="lastName" pattern=[A-Z,a-z]{1,25} title="Lettres" placeholder="Entrez votre nom"><br>
      <label for="firstName">Prénom :</label><br>
      <input type="text" id="firstName" name="firstName" pattern=[A-Z,a-z]{1,25} title="Lettres" placeholder="Entrez votre prénom"><br>
      <input type="submit" value="Submit"><br><br>
      <input type="file" name="myfile"><br>
      <input type="submit" value="Envoyer le fichier">
    </form>
  <?php
  }
  ?>


</body>

</html>