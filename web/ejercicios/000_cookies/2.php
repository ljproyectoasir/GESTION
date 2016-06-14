<?php 
	// isset: si no esta definida la variable devuelve false
   if (isset($_POST["nombre"])) { 
      $datos = $_POST["nombre"] . "|" . $_POST["mail"]; 
       setcookie("usuario", $datos, time()+160);    } ?>
<html>
<head>
<title>Page title</title>
</head>
<body>
<p><b>Se ha creado la cookie con nombre y correo</b></p>
<b><?php echo $_COOKIE['usuario']."<BR>";
     $vector=explode("|", $_COOKIE['usuario']);
	 //explode: inserta una serie de caracteres entre los campos de un array
     echo "El nombre es:".$vector[0]."<BR>";
     echo "El correo es:".$vector[1]."<BR>";
     echo "<a href=2_1.php>Visualizar cookie </a>";
    ?></b> </body></html>
