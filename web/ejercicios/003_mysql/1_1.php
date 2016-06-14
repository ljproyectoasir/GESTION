<?php
   //establecimiento de la conexión
	$enlace =  mysqli_connect('localhost', 'root', '');
	if (!$enlace) 
		{
		die('No pudo conectarse: ' . mysql_error());
		}
	echo 'Conectado satisfactoriamente <br>';
   
   // selección de la base de datos
	$bdatos=mysqli_select_db($enlace,"universidad")
		or die("No se puede seleccionar la base de datos:" . mysql_error ());
	if (!$bdatos) 
		{
		die('No se selecciono la base de datos: ' . mysql_error());
		}
	echo 'Base de datos seleccionada <br>';
	
	$query = "SELECT * FROM alumnos";
	$resultado = mysqli_query($enlace,$query);
	if (!$resultado) die("El acceso a la base de datos ha fallado: " . mysql_error());
		
	/*
	if($resultado) {
	while($row = mysqli_fetch_assoc($resultado)) {
		
		echo "<table border1 bgcolor=green><tr>";
		echo $row[0] . '<br>';	
		
	}
}
*/

if ($row = mysqli_fetch_array($resultado)){ 
   echo "<center><table border=1 bgcolor=green width=80% > \n"; 
   echo "<tr align=center>
			<td>Id_alumno</td>
			<td>Nombre</td>
			<td>Apellidos</td>
			<td>Edad</td>
			<td>Fecha</td>
			<td>Correo</td>
			<td>Id_carrera</td>
		</tr> \n"; 
   do { 
      echo "<tr align=center>
				<td>".$row["id_alumno"]."</td>
				<td>".$row["nombre"]."</td>
				<td>".$row["apellidos"]."</td>
				<td>".$row["edad"]."</td>
				<td>".$row["fecha"]."</td>
				<td>".$row["correo"]."</td>
				<td>".$row["id_carrera"]."</td>
				</tr> \n"; 
   } while ($row = mysqli_fetch_array($resultado)); 
   echo "</table> </center>"; 
}


	
   // se cierra la conexión
	mysqli_close($enlace);
	echo "Conexion cerrada"
   


   ?>
