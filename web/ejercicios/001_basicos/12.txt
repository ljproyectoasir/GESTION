<html>
<head><title>Formularios PHP</title></head>
<body>
<?php
settype ($_GET["num"], "integer");
switch ($_GET["num"])
{
	case 1:
	echo "<h1>La cabezera seleccionada es 1</h1>";
	break;
	case 2:
	echo "<h2>La cabezera seleccionada es 2</h2>";
	break;
	case 3:
	echo "<h3>La cabezera seleccionada es 3</h3>";
	break;
	case 4:
	echo "<h4>La cabezera seleccionada es 4</h4>";
	break;
	case 5:
	echo "<h5>La cabezera seleccionada es 5</h5>";
	break;
	case 6:
	echo "<h6>La cabezera seleccionada es 6</h6>";
	break;
	default:
    echo "El valor de la cabecera no es valida<br><a href=",$_SERVER['HTTP_REFERER'],">Volver</a>";
	;
};

?> 
</body>
</html>