<html>
<head>
<title>Base de Datos</title>
</head>
<body>
<center>
<font color="blue"><H1>Conexión con bases de datos Mysql</H1></font>
</center>
<HR>
<center><b>Funciones basicas de manejo de datos</b> </center>
<HR>
<center>
<?php
function conectar(&$enlace){
				//Establecer conexion con el servidor
				$enlace=mysqli_connect("localhost","root","");
				if($enlace==false)
					die ("No puede establecer la conexión<br>");
                                     else echo"CONEXIÓN REALIZADA". "<BR>";
				//Seleccionar la base de datos
				$seleccion=mysqli_select_db($enlace,"universidad");
				if($seleccion==false)
					die ("No se pudo seleccionar la base de datos<br>");
                                           else echo"BASE DE DATOS SELECCIONADA". "<BR><BR>";
			}

function imprimir($enlace)
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
		
			
function borrar($enlace)
{
	$id=$_POST["id_alumno"];
	$sql1 = "select * from alumnos where id_alumno=$id";
	$resultado=mysqli_query($enlace, $sql1);
	if (mysqli_fetch_array( $resultado))
		{
		$sql = "DELETE from alumnos where id_alumno=$id";
		if (mysqli_query($enlace, $sql)) 
			echo "Registro borrado"; 
			else 
				echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
		}
		else
		echo "No existe el registro";
	echo "<br><br>";
}


 conectar($conexion);
 borrar($conexion);
 imprimir($conexion);
    echo "<center><a href=6.html>Volver al formulario<a><center>"
// mysqli_num_rows
// mysqli_num_fields
// mysqli_result 
 ?>

</center>			
</body>
</html>