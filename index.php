<?php
$heure = date("H:i");
echo 'Aurore'; 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Ma librarie</title>
</head>
<body>
  <section>
    <h1>Ma librarie</h1>
    <p>
      Bienvenue Aurore sur <strong>Ma Librarie.fr</strong></br>
      Il est <?php echo $heure ?> </br>
      Ici vous allez pouvoir retrouver tout vos livres préférés à des prix défiant toute concurrence.</br>
    </p>

  </section>
  <section>
    <div>
      <ul>
          <li>
            <strong>Titre: </strong>Le pendu de Conakry</br>
          </li>
          <li>
            <strong>Auteur: </strong>Jean-Christophe Rufin</br>
          </li>
          <li>
            <strong>ISBN: </strong>2072713277</br>
          </li>
          <li>
            <strong>Prix: </strong>15€</br>
          </li>
        </ul>
    </div>
    <div>
      <ul>
          <li>
            <strong>Titre: </strong>Le Capital (Tome 1-Livre I) </br>
          </li>
          <li>
            <strong>Auteur: </strong>Karl Marx</br>
          </li>
          <li>
            <strong>ISBN: </strong>2070355748</br>
          </li>
          <li>
            <strong>Prix: </strong>10€</br>
          </li>
        </ul>
    </div>
    <div>
      <ul>
          <li>
            <strong>Titre: </strong>Living Documentation</br>
          </li>
          <li>
            <strong>Auteur: </strong>Cyrille Martraire</br>
          </li>
          <li>
            <strong>ISBN: </strong>0134689321</br>
          </li>
          <li>
            <strong>Prix: </strong>40€</br>
          </li>
        </ul>
    </div>
  </section>
</body>
</html>