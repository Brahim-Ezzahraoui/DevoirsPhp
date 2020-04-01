<?php  
function Exer($string , $car){
	echo "<table border=1><tr>";
	for ($i=0; $i < $car ; $i++) { 
		echo"<td>".$string[$i]."</td>";
	}
	echo"</tr></table>";
}
Exer("BrahimEzzahraoui",7);

?>
<style type="text/css">
	*{
		font-size: 30px;
	}
</style>