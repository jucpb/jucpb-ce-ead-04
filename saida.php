<?php

$Inicio = $_POST['numInicio'];
$Fim = $_POST['numFinal'];
$multiploIni = $_POST['multiploInicio'];
$multiploFim = $_POST['multiploFinal'];
$cont = 0;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabuada</title>



<style type="text/css">


	table {
		float: left;
		text-align:center;
		margin-right: 50px;
    font-family: Comic Sans;
	}
  #titulo {
    background-color:#FF8C00;
    font-weight: bold;
    color: white;
  }
  #principio{
    background-color: white;
  }
  
  tr:nth-child(even) {
  background-color: white;
}
tr:nth-child(odd) {
  background-color: #C0C0C0;
}

	</style>

</head>
<body>

<h1>Tabuada</h1>

<?php

	for ($i=$Inicio; $i <= $Fim; $i++) { 
	$cont++;
	echo "<table class='table table-striped' border='0'  align='center' style='width:10%; height:5%;'>";
	echo "<thead>";
	echo "<th id=principio colspan=2>";
	echo "Tabuada do " . $cont;
	echo "</th>";
	echo "<tr>";
	echo "<th id='titulo'>";
	echo "Fórmula";
	echo "</th>";
	echo "<th id=titulo>";
	echo "Valor";
	echo "</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	
	for ($x=$multiploIni; $x <= $multiploFim; $x++){	
	echo "<tr>";
			echo "<td>";
			echo  $i . " x " . $x . " = "; 
			echo "</td>";

			echo "<td>";
			echo  ($i * $x) . "<br>"; 
			echo "</td>";

	echo "</tr>";
	}
	
	echo "</tbody>";
	echo "</table>";	
	}

?>

</body>
</html>
