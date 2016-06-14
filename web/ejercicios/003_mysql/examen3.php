<html>
	<head>
		<title></title>
	</head>
	<body>
	
	
		<BR>
		<center>
			<table border=4 bgcolor=yellow>
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
						}
					
										
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
							
					function actualizar($enlace,$id1)
						{								
						$query = "SELECT unidades FROM peliculas where codigo=$id1";
						$resultado1 = mysqli_query($enlace,$query);
						if (!$resultado1) die("El acceso a la base de datos ha fallado: " . mysql_error());
							if ($row = mysqli_fetch_array($resultado1))
								{ 
								$num=$row["unidades"]; 
								}
							echo "<br><br>";

						$num=$num-1;
						
						$sql1 = "select * from peliculas where codigo=$id1";
						$resultado=mysqli_query($enlace, $sql1);
						if (mysqli_fetch_array( $resultado))
							{
							$sql2 = "UPDATE peliculas SET 
									unidades='$num'
									where codigo=$id1";
							if (mysqli_query($enlace, $sql2)) 
								echo ""; 
								else 
									echo "Error: " . $sql2 . "<br>" . mysqli_error($enlace);
							}
							else
								echo "No existe el registro";
												
							}
			
					
					Function terminar($enlace)
						{
						mysqli_close($enlace);
						echo "<tr><td>Conexion finalizada</td></tr><br><br>";
						}
	
	conectar($conexion);
	$id1=$_POST["codigo"];
	
	switch ($id1) 
		{
		case 1:
			actualizar($conexion,$id1);
			visualizar($conexion);
			break;
		case 2:
			actualizar($conexion,$id1);
			visualizar($conexion);
			break;
		case 3:
			actualizar($conexion,$id1);
			visualizar($conexion);
			break;
		case 3:
			actualizar($conexion,$id1);
			visualizar($conexion);
			break;
		case 4:
			actualizar($conexion,$id1);
			visualizar($conexion);
			break;
		case "F":
			terminar($conexion);
			break;
		}
					echo "</table></center>";
		
		switch ($id1) 
		{
		case 1:
			echo "<center><table border=5 bgcolor=green><tr><td>pelicula titulo1 alquilada</td></tr></table></center>";

			break;
		case 2:
			echo "<center><table border=5 bgcolor=green><tr><td>pelicula titulo2 alquilada</td></tr></table></center>";
			break;
		case 3:
			echo "<center><table border=5 bgcolor=green><tr><td>pelicula titulo3 alquilada</td></tr></table></center>";
			break;
		case 4:
			echo "<center><table border=5 bgcolor=green><tr><td>pelicula titulo4 alquilada</td></tr></table></center>";
			break;
		}
			
					echo "<center><form action=examen1.php><INPUT TYPE='submit' VALUE='volver'></FORM></center>"

 ?>

</center>			
</body>
</html>