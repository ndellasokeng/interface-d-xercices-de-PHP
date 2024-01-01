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
    <h3> EXERCICE 13 </h3>
    <form action="" method="post">
        <label for="prix_ht">Prix HT :</label>
        <input type="text" id="prix_ht" name="prix_ht" value="<?php echo isset($_POST['prix_ht']) ? htmlspecialchars($_POST['prix_ht']) : ''; ?>" required>
        <br>

        <label for="taux_tva">Taux de TVA :</label>
        <input type="text" id="taux_tva" name="taux_tva" value="<?php echo isset($_POST['taux_tva']) ? htmlspecialchars($_POST['taux_tva']) : ''; ?>" required>
        <br>

        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $prixHT = isset($_POST['prix_ht']) ? floatval($_POST['prix_ht']) : 0;
        $tauxTVA = isset($_POST['taux_tva']) ? floatval($_POST['taux_tva']) : 0;

        // Calcul du montant de la TVA et du prix TTC
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;

        // Affichage des résultats
        echo "<h2>Résultats :</h2>";
        echo "<label>Montant de la TVA :</label> <input type='text' value='$montantTVA' readonly><br>";
        echo "<label>Prix TTC :</label> <input type='text' value='$prixTTC' readonly>";
    }
    ?>
</body>
</html>
