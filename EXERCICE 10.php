<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface d'Exercices</title>
</head>
<body>

    <!-- En-tête de la page -->
    <header>
        <h1>Interface d'Exercices</h1>
        <p>Bienvenue sur notre plateforme d'exercices interactifs.</p>
    </header>

    <!-- Liste d'exercices -->
    <section>
        <h2>Liste d'exercices :</h2>
        <ul>
            <li><a href="EXERCICE 1.php">Exercice 1</a></li>
            <li><a href="EXERCICE 2.php">Exercice 2</a></li>
            <li><a href="EXERCICE 3.php">Exercice 3</a></li>
            <li><a href="EXERCICE 4.php">Exercice 4</a></li>
            <li><a href="EXERCICE 5.php">Exercice 5</a></li>
            <li><a href="EXERCICE 6.php">Exercice 6</a></li>
            <li><a href="EXERCICE 7.php">Exercice 7</a></li>
            <li><a href="EXERCICE 8.php">Exercice 8</a></li>
            <li><a href="EXERCICE 9.php">Exercice 9</a></li>
            <li><a href="EXERCICE 10.php">Exercice 10</a></li>
            <li><a href="EXERCICE 11.php">Exercice 11</a></li>
            <li><a href="EXERCICE 12.php">Exercice 12</a></li>
            <li><a href="EXERCICE 13.php">Exercice 13</a></li>
            <li><a href="EXERCICE 14.php">Exercice 14</a></li>
            <li><a href="EXERCICE 15.php">Exercice 15</a></li>
            <li><a href="EXERCICE 16.php">Exercice 16</a></li>
            <li><a href="EXERCICE 17.php">Exercice 17</a></li>
        </ul>
    </section>
    <h3> EXERCICE 10 </h3>
    <?php
// Tableau associatif de l'exercice 8
$personnesExercice8 = array(
    'John Doe' => array(
        'prenom' => 'John',
        'ville' => 'Paris',
        'age' => 30
    ),
    'Jane Smith' => array(
        'prenom' => 'Jane',
        'ville' => 'New York',
        'age' => 25
    ),
    'Bob Johnson' => array(
        'prenom' => 'Bob',
        'ville' => 'London',
        'age' => 35
    )
);

// Tableau associatif de l'exercice 9
$personnesExercice9 = array(
    'John Doe' => array(
        'prenom' => 'John',
        'ville' => 'Paris',
        'age' => 30
    ),
    'Jane Smith' => array(
        'prenom' => 'Jane',
        'ville' => 'New York',
        'age' => 25
    ),
    'Bob Johnson' => array(
        'prenom' => 'Bob',
        'ville' => 'London',
        'age' => 35
    )
);

// Affichage des informations avec une boucle foreach pour l'exercice 8
echo "=== Informations de l'exercice 8 ===\n";
foreach ($personnesExercice8 as $nom => $infos) {
    echo "Nom: $nom\n";
    echo "Prénom: {$infos['prenom']}\n";
    echo "Ville: {$infos['ville']}\n";
    echo "Âge: {$infos['age']}\n";
    echo "----------------------\n";
}

// Affichage des informations avec une boucle foreach pour l'exercice 9
echo "=== Informations de l'exercice 9 ===\n";
foreach ($personnesExercice9 as $nom => $infos) {
    echo "Nom: $nom\n";
    echo "Prénom: {$infos['prenom']}\n";
    echo "Ville: {$infos['ville']}\n";
    echo "Âge: {$infos['age']}\n";
    echo "----------------------\n";
}
?>
</body>
</html> 