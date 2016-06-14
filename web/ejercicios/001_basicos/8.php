<html>
<head><title>Formularios PHP</title></head>
<body>
<?php
settype ($_GET["num1"], "integer");
settype ($_GET["num2"], "integer");
settype ($_GET["num3"], "integer");
if ($_GET["num1"]=="" || $_GET["num2"]=="" || $_GET["num3"]=="")
	echo "<br><h2>LOS VALORES DE LOS CAMPOS:<br><br>- DEBEN SER NUMERICOS <br>- NO PUEDEN ESTAR VACIOS</h2>" ;
	else 
		{
		if ($_GET["num1"] >= $_GET["num2"] && $_GET["num1"] >= $_GET["num3"])
			$max=$_GET["num1"];
			else
				if ($_GET["num2"] >= $_GET["num3"])
					$max=$_GET["num2"];
					else
						$max=$_GET["num3"];
			
		echo 	"<center><table border='1'><tr><td> Numero 1:</td>";
		if ($_GET["num1"] == $max)
			echo "<td bgcolor=red>";
			else
				echo "<td>";
		echo $_GET["num1"] , "</td></tr>","<tr><td> Numero 2:</td>";
		if ($_GET["num2"] == $max)
			echo "<td bgcolor=red>";
			else
			echo "<td>";
		echo $_GET["num2"] ,"</td></tr>","<tr><td> Numero 3:</td>";
		if ($_GET["num3"] == $max)
			echo "<td bgcolor=red>";
			else
				echo "<td>";
		echo $_GET["num3"] , "</td></tr></table></center></body></html>";
		}
?> 