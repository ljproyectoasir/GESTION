<html>
	<head>
		<title>Formulario General</title>
	</head>
	<body bgcolor=grey>
		<center>
			<font color="yellow"><H1>INSERTAR MODIFICAR ELIMINAR CONSULTAR DATOS EN MYSQL</H1></font>
		</center>
		<HR>
		<HR>
		<BR>
		<center>
			<table border=4 bgcolor=yellow>
				<?php
					function conectar(&$enlace)
						{
						//Establecer conexion con el servidor
						$enlace=mysqli_connect("10.0.30.15","proyecto","proyecto");
						if($enlace==false)
							die ("No puede establecer la conexión<br>");                             
						//Seleccionar la base de datos
						$seleccion=mysqli_select_db($enlace,"proyecto");
						if($seleccion==false)
							die ("No se pudo seleccionar la base de datos<br>");
						}
					
					function insertar($enlace,$id1,$id2,$id3,$id4,$id5,$id6,$id7)
						{
						
						$sql = "INSERT INTO alumnos (id_alumno, nombre, apellido)
							VALUES ($id1,'$id2','$id3')";
						if (mysqli_query($enlace, $sql)) {
							echo "Nuevo registro creado";
							} 
							else 
								echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
						}

                                        function consultar($enlace,$id1)
                                                {

                                                $query = "SELECT * FROM alumnos where id_alumno=$id1";
                                                $resultado = mysqli_query($enlace,$query);
                                                if (!$resultado) die("El acceso a la base de datos ha fallado: " . mysql_error());
                                                        if ($row = mysqli_fetch_array($resultado))
                                                                {
                                                                echo "<center><table border=1 bgcolor=green width=80% >";
                                                                echo "<tr bgcolor=red align=center>
                                                                                <td>Id_alumno</td>
                                                                                <td>Nombre</td>
                                                                                <td>Apellidos</td>
                                                                        </tr>";
                                                                do {
                                                                        echo "<tr align=center>
                                                                                <td>".$row["id_alumno"]."</td>
                                                                                <td>".$row["nombre"]."</td>
                                                                                <td>".$row["apellido"]."</td>
                                                                        </tr>";
                                                                        } while ($row = mysqli_fetch_array($resultado));
                                                                echo "</table> </center>";
                                                                }
                                                        echo "<br><br>";
                                                        }
				
	
					function visualizar($enlace)
						{
						$query = "SELECT * FROM alumnos";
						$resultado = mysqli_query($enlace,$query);
						if (!$resultado) die("El acceso a la base de datos ha fallado: " . mysql_error());
							if ($row = mysqli_fetch_array($resultado))
								{ 
								echo "<center><table border=1 bgcolor=green width=80% >"; 
								echo "<tr bgcolor=red align=center>
										<td>Id_alumno</td>
										<td>Nombre</td>
										<td>Apellidos</td>
									</tr>"; 
								do { 
									echo "<tr align=center>
										<td>".$row["id_alumno"]."</td>
										<td>".$row["nombre"]."</td>
										<td>".$row["apellido"]."</td>
									</tr>"; 
									} while ($row = mysqli_fetch_array($resultado)); 
								echo "</table> </center>"; 
								}
							echo "<br><br>";
							}
						
					function actualizar($enlace,$id1,$id2,$id3,$id4,$id5,$id6,$id7)
						{

						$sql1 = "select * from alumnos where id_alumno=$id1";
						$resultado=mysqli_query($enlace, $sql1);
						if (mysqli_fetch_array( $resultado))
							{
							$sql = "UPDATE alumnos SET 
									id_alumno=$id1,
									nombre='$id2',
									apellido='$id3'
									where id_alumno=$id1";
							if (mysqli_query($enlace, $sql)) 
								echo "Registro actualizado"; 
								else 
									echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
							}
							else
								echo "No existe el registro";
												
							}
			
					function eliminar($enlace)
						{
						$id1=$_GET["id_alumno"];
						settype($id1,"int");
						$sql1 = "select * from alumnos where id_alumno=$id1";
						$resultado=mysqli_query($enlace, $sql1);
						if (mysqli_fetch_array( $resultado))
							{
							$sql = "DELETE from alumnos where id_alumno=$id1";
							if (mysqli_query($enlace, $sql)) 
								echo "Registro borrado"; 
								else 
									echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
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
	$id1=$_GET["id_alumno"];
	settype($id1,"int");
	$id2=$_GET["nombre"];
	$id3=$_GET["apellido"];
	
	conectar($conexion);
	$opcion=$_GET["opcion"];
	switch ($opcion) 
		{
		case "ins":
			insertar($conexion,$id1,$id2,$id3);
			visualizar($conexion);
			break;
		case "vis":
			visualizar($conexion);
			break;
		case "con":
			consultar($conexion,$id1);
			;
			break;
		case "act":
			actualizar($conexion,$id1,$id2,$id3);
			visualizar($conexion);
			break;
		case "eli":
			eliminar($conexion,$id1);
			visualizar($conexion);
			break;
		case "fin":
			terminar($conexion);
			break;
		}
					echo "</table></center>";
					echo "<center><table bgcolor=yellow border=4><tr><td><a href=mysql.html>Volver al formulario<a><td></tr></table></center>"

 ?>

</center>			
</body>
</html>
