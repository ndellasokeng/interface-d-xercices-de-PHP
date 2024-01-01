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
    
    <H3>Formulaire Adresse Client de l'éxercice 12</H3>
</head>
<body>
    <form action="traitement.php" method="post">
        <fieldset>
            <legend>Adresse client</legend>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required><br>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required><br>

            <label for="code_postal">Code postal :</label>
            <input type="text" id="code_postal" name="code_postal" required><br>
        </fieldset>
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <h4>Données de l'adresse client</h4>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $adresse = htmlspecialchars($_POST["adresse"]);
        $ville = htmlspecialchars($_POST["ville"]);
        $codePostal = htmlspecialchars($_POST["code_postal"]);

        // Affichage des données dans un tableau XHTML
        echo "<table border='1'>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code postal</th>
                </tr>
                <tr>
                    <td>$nom</td>
                    <td>$prenom</td>
                    <td>$adresse</td>
                    <td>$ville</td>
                    <td>$codePostal</td>
                </tr>
              </table>";
    } else {
        echo "<p>Aucune donnée reçue.</p>";
    }
    ?>
</body>
</html>
