<?php
$fch = "fichier.txt";
$tab = file($fch);
for ($i=0; $i < count($tab) ; $i++) { 
	# code...
	echo $tab[$i];
}


  ?>