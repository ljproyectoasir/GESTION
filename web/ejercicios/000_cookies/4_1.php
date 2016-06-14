<html>
<?php 

	// isset: si no esta definida la variable devuelve false
   if (isset($_POST["opcion"])) 
		{	
		$datos = $_POST["opcion"]; 
		}	 
	switch ($datos) 
	{
    case "crear":
		setcookie("opcion", "Javi <br> palomoasir@gmail.com", time()+60);
		echo "Cookie creada";
        break;
    case "ver":
		if (isset($_COOKIE["opcion"]))
			echo ($_COOKIE["opcion"]);
			else
				echo "No existe la cookie";
		break;
    case "borrar":
        unset($_COOKIE["opcion"]);
		setcookie("opcion", '', time()-3600);
		echo "Cookie borrada";
        break;
	}
?>
<head>
<title>Page title</title>
</head>
<?php
	echo "<br><br><a href=4.php>Ir a la pagina anterior</a>";
	?> </body></html>