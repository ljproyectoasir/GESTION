<html>

<head>
<title>Page title</title>
</head>
<body>
<?php
	$saludo= "Hola, estamos trabajando con cadenas. ";
	echo "Todo en minusculas:<br>".strtolower($saludo)."<br><br>";
    echo "Todo en mayusculas:<br>".strtoupper($saludo)."<br><br>";
	echo "Primera letra mayuscula:<br>".ucfirst($saludo)."<br><br>";
	echo "Primera letra mayuscula de cada palabra:<br>".ucwords($saludo)."<br><br>";
	echo "Veces que se repite una cadena:<br>".str_repeat($saludo,3)."<br><br>";
	echo "Contar los caracteres:<br>".strlen($saludo)."<br><br>";
	echo "Busqueda de cadenas:<br>".strstr($saludo,"con",true)."<br><br>";
	echo "Busqueda de cadenas:<br>".strstr($saludo,"con",false)."<br><br>";
	echo "Extraer subcadenas:<br>".substr($saludo,2,15)."<br><br>";
	echo "Encontrar posicion:<br>".strpos($saludo,"estamos")."<br><br>";
	echo "Busqueda de caracteres:<br>".strchr($saludo,"t")."<br><br>";
	
	
	/*
	echo ":<br>".."<br><br>";
	*/
	echo "<br><br>".$saludo;
	
	
	?> 
</body>
</html>