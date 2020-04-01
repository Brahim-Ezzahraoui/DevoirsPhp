<?php
function Test_mail($email){
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	}else{
		return false;
	}
}
function Test_pass($password){
	$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,}$/';
	if (preg_match($pattern,$password)){
		return true;
	}else{
		return false;
	}
}	
//test et vérification de deaux fonctions A et B
echo "<h2>test et vérification de deux fonctions A et B</h2>";
$email="tatakk@cocomail.com";$password="Test.123@";
if (Test_mail($email) == true) {
	echo "Email de Test  est valide !<br>";
}else{
	echo "Email de Test est invalide !<br>";
}
if (Test_pass($password) == true) {
	echo " Le mot de passe  de Test est valide !<br>";
}else{
	echo "Le mot de passe  de Test est invalide !<br>";
}
//vérifie si une adresse et un mot de passe dans le fichier login.txt
echo "<br>-----------------------------------------------------<br>";
echo "<h2>vérifie si une adresse et un mot de passe dans le fichier login.txt</h2>";
$infos = fopen("login.txt", "r") or die("Impossible d'ouvrir le fichier!");
    $tabInfos = [];

    while (!feof($infos)) {
        $ligne = fgets($infos);
        array_push($tabInfos, $ligne);
    }

    for ($i=0; $i<count($tabInfos); $i++) {
        $ligne = explode("|", $tabInfos[$i]);
if (Test_mail($ligne[0]) == true) {
	echo "<br>Email est valide !<br>";
}else{
	echo "<br>Email est invalide !<br>";
}
if (Test_pass($ligne[1]) == true) {
	echo "<br>Le mot de passe est valide !<br>";
}else{
	echo "<br>Le mot de passe est invalide !<br>";
}
}
    fclose($infos);
 /*correspondent au login et mot de passe reçu par le formulaire. Si c’est le cas, le message
« Authentification réussie » est affiché. Sinon suivant les cas un des messages est affiché :
« Login inexistant » «Mot de passe invalide»*/
echo "<br>-----------------------------------------------------<br>";
echo "<h2>vérification de la page Aceuil.php</h2>";
if (isset($_POST['Login'])){
	if (Test_mail($_POST['mail']) == true && Test_pass($_POST['password'])){
		echo "<br>Authentification réussie";
	}else{
		echo "<br>Login inexistant ou bien Mot de passe invalide";
	}
}









?>