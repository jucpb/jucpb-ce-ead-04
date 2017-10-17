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

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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

	</style>

</head>
<body>

<h1>Tabuada</h1>

<?php

	for ($i=$Inicio; $i <= $Fim; $i++) { 
	$cont++;
	echo "<table class='table table-striped' border='0'  align='center' style='width:10%; height:5%;'>";
	echo "<thead>";
	echo "<th colspan=2>";
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
