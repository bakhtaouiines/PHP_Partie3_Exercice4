<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3.4</title>
</head>
<body>
    <h1>Exercice 4 Partie 3 : Les boucles PHP</h1>
    <ul>
    <?php
    for($firstNumber = 1; $firstNumber <= 10; $firstNumber += $firstNumber/2 ){?>
        <li><?=($firstNumber);}?></li>
    </ul>
</body>
</html>