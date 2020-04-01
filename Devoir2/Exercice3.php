<!DOCTYPE html>
<html>
<head>
	<title>Exercice 3</title>
</head>
<body>
	<h1>Validation de la date</h1>
		<form method="post" action="">
			<table><tr><th>Jour</th><th>Mois</th><th>Année</th></tr>
			<tr>
		<td><select id="jour" name="jour"><?php echo"<option>Choisir Le Jour</option>";
		for ($i=1; $i < 32; $i++) { 
  		echo "  <option>".$i."</option>";} ?>
  		</select></td>
		<td><select name="mois"><?php echo"<option>Choisir Le Mois</option>";
		for ($i=1; $i < 13; $i++) { 
  		echo "  <option>".$i."</option>";} ?>
  		</select></td>
		<td><select name="annee"><?php echo"<option>Choisir L'année</option>";
		for ($i=1900; $i < 2021; $i++) { 
  		echo "  <option>".$i."</option>";} ?>
  		</select></td></tr></table>
  		<input type="submit" value="Envoyer" name="Envoyer">
  		</form>
	<?php
function TestExer3($Year) {
 return ((($Year & 3) == 0) && (($Year % 100 != 0) || ($Year % 400 == 0)));
}
	if (isset($_POST['Envoyer'])){
		if ($_POST['jour'] == date("j") && $_POST['mois'] == date("n") && $_POST['annee'] == date("Y")) {
			echo "La date sisaie est : ".$_POST['jour']."/".$_POST['mois']."/".$_POST['annee']."<br>";
			echo "<table><tr><td>La date sisaie</td>"; 
			echo"<td style='color:Green'>est valide</td></tr></table>";
		}else{
			echo "La date sisaie est : ".$_POST['jour']."/".$_POST['mois']."/".$_POST['annee']."<br>";
			if (TestExer3($_POST['annee'])) {
				echo "<table><tr><td>L'année ".$_POST['annee']." est bissextile</td>";
			}else{
				echo "<table><tr><td>L'année ".$_POST['annee']." est non bissextile</td>";
			}
			echo"<td style='color:red'>Date invalide</td></tr></table>";
		}
	}
	  ?>
</body>
</html>