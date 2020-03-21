<!DOCTYPE html>
<html>
<head>
	<title>Exercice 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<h1 style="text-align: center;">Délice des Fruits & Légumes</h1>
	<br>
	<br>
	<table><tr>
<?php
	$pic = array('img/1.jpg','img/2.jpeg','img/3.jpeg');
	shuffle($pic);
	   for( $i = 0; $i < 3; $i++){
			echo "<td  class=\"col-sm-5\"><img src=\"$pic[$i]\"><td>";
	   }
?>
</tr></table>
</body>
</html>
