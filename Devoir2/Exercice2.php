<?php
$infos = fopen("commandes.txt", "r") or die("Impossible d'ouvrir le fichier!");
$myfile = fopen("pscde01_CLI1001.txt", "w") or die("Impossible d'ouvrir le fichier!");
$myfile2 = fopen("pscde01_CLI1004.txt", "w") or die("Impossible d'ouvrir le fichier!");
    $tabInfos = [];
    while (!feof($infos)) {
        $ligne = fgets($infos);
        array_push($tabInfos, $ligne);
    }
    $lineCL1="---------------------------- [ Client Numéro : CLI1001 ] -----------------------\n";
        $lineCL2="---------------------------- [ Client Numéro : CLI1004 ] -----------------------\n";
    fwrite($myfile, $lineCL1);
    fwrite($myfile2, $lineCL2);
    for ($i=0; $i<count($tabInfos); $i++) {
        $ligne = explode("|", $tabInfos[$i]);
        $txt="Numéro de Commande : ".$ligne[0]."\nDate de Commande : ".$ligne[2]."\nDésignation Article : ".$ligne[3]."\nQuantité(PAL) : ".$ligne[4]."\nPrix Unitaire(HT) : ".$ligne[5]."\nDate de livraison : ".$ligne[6]."\nAdresse Client : ".$ligne[7]."\n";
        //
        if($ligne[1] == 'CLI1001'){
			fwrite($myfile, $txt);
			fwrite($myfile, "-------------------------------------------------------------------\n");
        }elseif ($ligne[1] == 'CLI1004') {
			fwrite($myfile2, $txt);
			fwrite($myfile2, "------------------------------------------------------------------\n");
        }
        
    }
    echo"les commandes du client CLI1001 sont archiver dans le fichier  pscde01_CLI1001.txt<br>------------------------------------------<br>";
    echo"les commandes du client CLI1001 sont archiver dans le fichier  pscde01_CLI1004.txt<br>";
    fclose($infos);
    fclose($myfile);
    fclose($myfile2);
?>
