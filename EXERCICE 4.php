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
    <h3> EXERCICE 4 </h3>
    <?php
// Fonction pour calculer le PGCD de deux entiers
function pgcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Fonction pour calculer le PPCM de deux entiers
function ppcm($a, $b) {
    return abs($a * $b) / pgcd($a, $b);
}

// Saisie des entiers au clavier
$entier1 = readline("Entrez le premier entier : ");
$entier2 = readline("Entrez le deuxième entier : ");

// Conversion des saisies en entiers
$entier1 = intval($entier1);
$entier2 = intval($entier2);

// Calcul et affichage du PPCM
$resultat_ppcm = ppcm($entier1, $entier2);
echo "Le PPCM de $entier1 et $entier2 est : $resultat_ppcm\n";
?>

</body>
</html>  