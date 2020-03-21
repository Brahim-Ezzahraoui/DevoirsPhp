<!DOCTYPE html>
<html>
<head>
    <title>Exercice 3</title>
</head>
<body>
<table border=1>
<tr>
    <th>Numéro de commande</th>
    <th>Numéro de Client</th>
    <th>Date</th>
    <th>Article</th>
    <th>Quantité</th>
    <th>Prix</th>
</tr>
<?php
    $infos = fopen("fichier.txt", "r") or die("Impossible d'ouvrir le fichier!");
    $tabInfos = [];

    while (!feof($infos)) {
        $ligne = fgets($infos);
        array_push($tabInfos, $ligne);
    }

    for ($i=0; $i<count($tabInfos); $i++) {
        $ligne = explode("|", $tabInfos[$i]);
        $ex2= array(1=>$ligne[0],
        2=>$ligne[1],
        3=>$ligne[2],
        4=>$ligne[3],
        5=>$ligne[4],
        6=>$ligne[5],
    );
        echo "<tr>";
        for ($j=1; $j <7 ; $j++) { 
            echo "<td>".$ex2[$j]."</td>";

        }
        echo"</tr>";
    }

    fclose($infos);
    ?>
</table>
</body>
</html>