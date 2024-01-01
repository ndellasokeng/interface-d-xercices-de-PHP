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
    <h3> EXERCICE 5 </h3>
    <?php
// Fonction pour calculer le diamètre d'un cercle
function calculerDiametre($rayon) {
    return $rayon * 2;
}

// Fonction pour calculer le périmètre d'un cercle
function calculerPerimetre($rayon) {
    return 2 * M_PI * $rayon;
}

// Fonction pour calculer la surface d'un cercle
function calculerSurface($rayon) {
    return M_PI * pow($rayon, 2);
}

// Saisie du rayon au clavier
$rayon = readline("Entrez le rayon du cercle : ");

// Conversion de la saisie en nombre à virgule flottante
$rayon = floatval($rayon);

// Calcul des propriétés du cercle
$diametre = calculerDiametre($rayon);
$perimetre = calculerPerimetre($rayon);
$surface = calculerSurface($rayon);

// Affichage des résultats
echo "Diamètre du cercle : $diametre\n";
echo "Périmètre du cercle : $perimetre\n";
echo "Surface du cercle : $surface\n";
?>
</body>
</html>  