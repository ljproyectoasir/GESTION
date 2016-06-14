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

function insertar($enlace)
{
  $sql = "INSERT INTO alumnos (id_alumno, nombre, apellidos, edad, fecha, correo, id_carrera)
		VALUES ('$_POST[id_alumno]','$_POST[nombre]','$_POST[apellidos]','$_POST[edad]','$_POST[fecha]','$_POST[correo]','$_POST[id_carrera]')";

	if (mysqli_query($enlace, $sql)) {
		echo "Nuevo registro creado";
		} 
		else 
			{
			echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
			}
}


 conectar($conexion);
 insertar($conexion);

 ?>

</center>			
</body>
</html>