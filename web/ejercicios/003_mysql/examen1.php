<html>
	<head> 
		<title>Formulario General</title>
	</head>
<body>
	<center>
	<br>
	<?php
	function conectar(&$enlace)
						{
						//Establecer conexion con el servidor
						$enlace=mysqli_connect("localhost","root","");
						if($enlace==false)
							die ("No puede establecer la conexión<br>");                             
						//Seleccionar la base de datos
						$seleccion=mysqli_select_db($enlace,"videoclub");
						if($seleccion==false)
							die ("No se pudo seleccionar la base de datos<br>");
								else echo"Base de datos seleccionada<br>";
						}
			conectar($conexion);

	?>
		<FORM name="f1" ACTION="examen2.php" METHOD="POST"> 
			C&oacutedigo: <br>
			<select name="codigo" size=1>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="F">FIN</option>

			</select>
			<INPUT TYPE="submit" VALUE="devolver">
			<br><br><br>
		</FORM>			
		<FORM name="f2" ACTION="examen3.php" METHOD="POST"> 
			C&oacutedigo: <br>
			<select name="codigo" size=1>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="F">FIN</option>

			</select>
			<INPUT TYPE="submit" VALUE="alquilar">
				
		</FORM> 
		<br>
		<h1>LISTADO DE PELICULAS</h1>
		<br>
	<?php
	function visualizar($enlace)
						{
						$query = "SELECT * FROM peliculas";
						$resultado = mysqli_query($enlace,$query);
						if (!$resultado) die("El acceso a la base de datos ha fallado: " . mysql_error());
							if ($row = mysqli_fetch_array($resultado))
								{ 
								echo "<center><table border=1 bgcolor=green width=60% >"; 
								echo "<tr bgcolor=red align=center>
										<td>CODIGO</td>
										<td>TITULO</td>
										<td>CATEGORIA</td>
										<td>PRECIO</td>
										<td>UNIDADES</td>
									</tr>"; 
								do { 
									echo "<tr align=center>
										<td>".$row["codigo"]."</td>
										<td>".$row["titulo"]."</td>
										<td>".$row["categoria"]."</td>
										<td>".$row["precio"]."</td>
										<td>".$row["unidades"]."</td>
									</tr>"; 
									} while ($row = mysqli_fetch_array($resultado)); 
								echo "</table> </center>"; 
								}
							echo "<br><br>";
							}
	
	visualizar($conexion)	
	?>
	</center>
</body> 
</html>