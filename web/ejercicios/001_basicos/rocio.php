<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php
	session_start();
if (isset ($_SESSION["intentos"]))
	$_SESSION["intentos"]++;
	else
		$_SESSION["intentos"]=1;
	function comprobar($usuario,$contraseña1,$contraseña2,$comentarios)
	{
	if ($_SESSION["intentos"]<3)
	{
		if ($contraseña1==$contraseña2)
		{
		$caracteres=strlen($contraseña1);
			if ($caracteres>=5 && $caracteres<=8)
			{
				echo "Las contraseñas coinciden";
				echo "<table border=1>";
				echo "<tr><td>user</td>";
				echo "<td>$usuario</td></tr>";
				echo "<tr><td>clave</td>";
				echo "<td>$contraseña1</td></tr>";
				echo "<tr><td>rclave</td>";
				echo "<td>$contraseña2</td></tr>";
				echo "<tr><td>text</td>";
				echo "<td>$comentarios</td></tr>";
				echo "</table>";
			}
		}
			else
			{
			echo "las contraseñas no coinciden";
			echo "<table border=1>";
			echo "<tr><td>user</td>";
			echo "<td>$usuario</td></tr>";
			echo "<tr><td>clave</td>";
			echo "<td>$contraseña1</td></tr>";
			echo "<tr><td>rclave</td>";
			echo "<td>$contraseña2</td></tr>";
			echo "<tr><td>text</td>";
			echo "<td>$comentarios</td></tr>";
			echo "</table>";
			echo "<a href=rocio.html>PINCHA PARA VOLVER A INTRODUCIR CLAVES</a><br>";
			echo "Intentos consumidos:".$_SESSION["intentos"];
			}
	}	
	else 
	{
		echo "las contraseñas no coinciden";
			echo "<table border=1>";
			echo "<tr><td>user</td>";
			echo "<td>$usuario</td></tr>";
			echo "<tr><td>clave</td>";
			echo "<td>$contraseña1</td></tr>";
			echo "<tr><td>rclave</td>";
			echo "<td>$contraseña2</td></tr>";
			echo "<tr><td>text</td>";
			echo "<td>$comentarios</td></tr>";
			echo "</table>";
			echo "NO PUEDES VOLVER A INTENTARLO HAS CONSUMIDO LOS TRES INTENTOS";
			}
	}
	
	
	
	$usuario=$_POST["usuario"];
	$contraseña1=$_POST["contraseña1"];
	$contraseña2=$_POST["contraseña2"];
	$comentarios=$_POST["comentarios"];

	comprobar($usuario,$contraseña1,$contraseña2,$comentarios);
	
	
 ?>
 </BODY>
 </HTML>