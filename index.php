<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>
    <p><a href='index.php?startDate=2/05/2016&amp;endDate=27/11/2016'>Dis-moi bonjour !</a></p>
    <?php
    if (isset($_GET['startDate']) AND isset($_GET['endDate'])) // On a le nom et le prénom
{
    echo 'Bonjour ' . $_GET['startDate'] . ' ' . $_GET['endDate'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut les dates!';
  }
  ?>
  </body>
</html>
