<html>
<?php 

	// isset: si no esta definida la variable devuelve false
	session_start();

  if (isset($_POST["color"])) 
		{	
		$datos = $_POST["color"]; 
		$_SESSION["colorfondo"]=$datos;  
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
<body>
<?php
	echo "<center><h1> El color de fondo es: $datos1</h2></center>";     
    
	echo "<a href=4.php>Ir al primer archivo</a>";
	?> 
</body>
</html>