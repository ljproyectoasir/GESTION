<?php
   //establecimiento de la conexión
	function conectar(&$enlace)
		{
		$enlace =  mysqli_connect('localhost', 'root', '');
		if (!$enlace) 
			{
			die('No pudo conectarse: ' . mysql_error());
			}
   // selección de la base de datos
		$bdatos=mysqli_select_db($enlace,"universidad")
			or die("No se puede seleccionar la base de datos:" . mysql_error ());
		if (!$bdatos) 
			{
			die('No se selecciono la base de datos: ' . mysql_error());
			}
	}
	
	function imprimir($enlace)
		{
		//$query = "SELECT * FROM alumnos";
		$id=$_POST["id_alumno"];
		$query = "select * from alumnos where id_alumno=$id";
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
		}
	conectar($enlace1);
	imprimir($enlace1);
   // se cierra la conexión
	mysqli_close($enlace1);
   echo "<br><br><center><a href=6.html>Volver al formulario<a><center>"


   ?>