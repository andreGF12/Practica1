<?php 
$multiplicando;
$multiplicador;

echo "<table text-align:center>";
echo "<tr>";
for ($tabla=1; $tabla<=10  ; $tabla++) { 
	echo "<td> $tabla </td>";
}
echo "</tr>";
echo "<tr>";
for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
	for ($multiplicando=01; $multiplicando <=10 ; $multiplicando++) { 
		echo "<td>";
		echo ($multiplicando *$multiplicador);
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>