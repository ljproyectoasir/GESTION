<html>
<head> 
   <title>Ejemplo de PHP</title> 
</head> 
<body
<?php 

	if (isset($_COOKIE["colorfondo"])) 
		{	
		$aux = $_COOKIE["colorfondo"]; 
		echo "bgcolor=$aux";
		}
?>
> 
<center><table border 5><tr><td colspan=3>
   <H1>SELECCIONE COLOR</H1>  
<FORM  ACTION="3.php" METHOD="POST"> 
</td></tr><tr>
	<td><INPUT TYPE="radio" NAME="color" value="blue"> Azul</td> 
	<td><INPUT TYPE="radio" NAME="color" value="green" checked="checked">Verde</td> 
	<td><INPUT TYPE="radio" NAME="color" value="red">Rojo</td> 
</tr><tr>
	<td colspan=3 align=center><INPUT TYPE="submit" VALUE="Enviar"> </td>
</FORM> 
</tr></table></center>
</body> 
</html>