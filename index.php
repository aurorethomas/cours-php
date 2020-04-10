<?php
$heure = date("H:i");
$livres = [
  [
    'titre' => 'Le pendu de Conakry',
    'auteur' => 'Jean-Christophe Rufin',
    'isbn' => '2072713277',
    'prix' => 15
  ],
  [
    'titre' => 'Le Capital (Tome 1-Livre I)',
    'auteur' => 'Karl Marx',
    'isbn' => '2070355748',
    'prix' => 10
  ],
];
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
      Bienvenue sur <strong>Ma Librarie.fr</strong></br>
      Il est <?php echo $heure ?> </br>
      Ici vous allez pouvoir retrouver tout vos livres préférés à des prix défiant toute concurrence.
    </p>
  </section>
  <section>
  <?php  
  foreach ($livres as $livre) {
    echo '<div>';
    echo '<ul>';
    echo '<li>' . '<strong>' . 'Titre: ' . '</strong>' . $livre['titre'] . '</br>' . '</li>';
    echo '<li>' . '<strong>' . 'Auteur: ' . '</strong>' . $livre['auteur'] . '</br>' . '</li>';
    echo '<li>' . '<strong>' . 'ISBN: ' . '</strong>' . $livre['isbn'] . '</br>' . '</li>';
    echo '<li>' . '<strong>' . 'Prix: ' . '</strong>' . $livre['prix'] . '</br>' . '</li>';
    echo '</div>';
    echo '</ul>';
  }
  ?>
  </section>
</body>
</html>
