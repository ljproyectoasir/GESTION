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
						
						$dia=date("j");
						$mes=date("n");
						$ano=date("Y");
						$fecha=$_POST["fecha"];
						$var = explode("-", $fecha);
						$diaz=$var[2];
						$mesz=$var[1];
						$anoz=$var[0];
						if (($mesz == $mes) && ($diaz > $dia)) {
							$ano=($ano-1); }
						if ($mesz > $mes) {
							$ano=($ano-1);}
						$id4=($ano-$anoz);
						settype($idi4,"int");

						$sql = "INSERT INTO alumnos (id_alumno, nombre, apellidos, edad, fecha, correo, id_carrera)
							VALUES ($id1,'$id2','$id3',$id4,'$id5','$id6',$id7)";
						if (mysqli_query($enlace, $sql)) {
							echo "Nuevo registro creado";
							} 
							else 
								echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
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
										<td>Edad</td>
										<td>Fecha</td>
										<td>Correo</td>
										<td>Id_carrera</td>
									</tr>"; 
								do { 
									echo "<tr align=center>
										<td>".$row["id_alumno"]."</td>
										<td>".$row["nombre"]."</td>
										<td>".$row["apellidos"]."</td>
										<td>".$row["edad"]."</td>
										<td>".$row["fecha"]."</td>
										<td>".$row["correo"]."</td>
										<td>".$row["id_carrera"]."</td>
									</tr>"; 
									} while ($row = mysqli_fetch_array($resultado)); 
								echo "</table> </center>"; 
								}
							echo "<br><br>";
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
										<td>Edad</td>
										<td>Fecha</td>
										<td>Correo</td>
										<td>Id_carrera</td>
									</tr>"; 
								do { 
									echo "<tr align=center>
										<td>".$row["id_alumno"]."</td>
										<td>".$row["nombre"]."</td>
										<td>".$row["apellidos"]."</td>
										<td>".$row["edad"]."</td>
										<td>".$row["fecha"]."</td>
										<td>".$row["correo"]."</td>
										<td>".$row["id_carrera"]."</td>
									</tr>"; 
									} while ($row = mysqli_fetch_array($resultado)); 
								echo "</table> </center>"; 
								}
							echo "<br><br>";
							}
						
					function actualizar($enlace,$id1,$id2,$id3,$id4,$id5,$id6,$id7)
						{
						$dia=date("j");
						$mes=date("n");
						$ano=date("Y");
						$fecha=$_POST["fecha"];
						$var = explode("-", $fecha);
						$diaz=$var[2];
						$mesz=$var[1];
						$anoz=$var[0];
						if (($mesz == $mes) && ($diaz > $dia)) {
							$ano=($ano-1); }
						if ($mesz > $mes) {
							$ano=($ano-1);}
						$id4=($ano-$anoz);
						settype($idi4,"int");
						
						$sql1 = "select * from alumnos where id_alumno=$id1";
						$resultado=mysqli_query($enlace, $sql1);
						if (mysqli_fetch_array( $resultado))
							{
							$sql = "UPDATE alumnos SET 
									id_alumno=$id1,
									nombre='$id2',
									apellidos='$id3',
									edad=$id4,
									fecha='$id5',
									correo='$id6',
									id_carrera=$id7
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
						$id1=$_POST["id_alumno"];
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
						
					Function consultarfecha($enlace)
						{
						if ($_POST["fecha"]=="") {
							$fecha="1970-01-01";
							}
							else { 
								$fecha=$_POST["fecha"];
								}
						$query = "SELECT * FROM alumnos where fecha>'$fecha'";
						$resultado = mysqli_query($enlace,$query);
						if (!$resultado) die("El acceso a la base de datos ha fallado: " . mysql_error());
							if ($row = mysqli_fetch_array($resultado))
								{ 
								echo "<center><table border=1 bgcolor=green width=80% >"; 
								echo "<tr bgcolor=red align=center>
										<td>Id_alumno</td>
										<td>Nombre</td>
										<td>Apellidos</td>
										<td>Edad</td>
										<td>Fecha</td>
										<td>Correo</td>
										<td>Id_carrera</td>
									</tr>"; 
								do { 
									echo "<tr align=center>
										<td>".$row["id_alumno"]."</td>
										<td>".$row["nombre"]."</td>
										<td>".$row["apellidos"]."</td>
										<td>".$row["edad"]."</td>
										<td>".$row["fecha"]."</td>
										<td>".$row["correo"]."</td>
										<td>".$row["id_carrera"]."</td>
									</tr>"; 
									} while ($row = mysqli_fetch_array($resultado)); 
								echo "</table> </center>"; 
								}
							echo "<br><br>";
						}

					Function terminar($enlace)
						{
						mysqli_close($enlace);
						echo "<tr><td>Conexion finalizada</td></tr><br><br>";
						}
	
	conectar($conexion);
	$id1=$_POST["id_alumno"];
	settype($id1,"int");
	$id2=$_POST["nombre"];
	$id3=$_POST["apellidos"];
	$id4=$_POST["edad"];
	settype($idi4,"int");
	$id5=$_POST["fecha"];
	// $id5=strtotime($id5); mysql no reconoce el tipo de dato y pone fecha 0000-00-00
	$id6=$_POST["correo"];
	$id7=$_POST["id_carrera"];
	settype($id7,"int");					
	
	
	conectar($conexion);
	$opcion=$_POST["opcion"];
	switch ($opcion) 
		{
		case "ins":
			insertar($conexion,$id1,$id2,$id3,$id4,$id5,$id6,$id7);
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
			actualizar($conexion,$id1,$id2,$id3,$id4,$id5,$id6,$id7);
			visualizar($conexion);
			break;
		case "eli":
			eliminar($conexion,$id1);
			visualizar($conexion);
			break;
		case "confecha":
			consultarfecha($conexion);
			break;
		case "fin":
			terminar($conexion);
			break;
		}
					echo "</table></center>";
					echo "<center><table bgcolor=yellow border=4><tr><td><a href=FINAL.html>Volver al formulario<a><td></tr></table></center>"

 ?>

</center>			
</body>
</html>
