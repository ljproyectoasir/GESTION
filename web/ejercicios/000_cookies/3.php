<html>
<?php 

	// isset: si no esta definida la variable devuelve false
   if (isset($_POST["color"])) 
		{	
		$datos = $_POST["color"]; 
		setcookie("colorfondo", $datos, time()+20);  
		}	 
	switch ($datos) 
	{
    case "green":
		$datos1="verde";
        break;
    case "red":
        $datos1="rojo";
        break;
    case "blue":
        $datos1="azul";
        break;
	}
?>
<head>
<title>Page title</title>
</head>
<?php
	echo "<center><h1> El color de fondo es: $datos1</h2></center>";     
    echo "<p>Se ha creado la cookie</p>";
	echo "<a href=3.html>Ir al primer archivo</a>";
	?> </body></html>