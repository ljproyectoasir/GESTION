<?php
   //establecimiento de la conexión
   $conexion=mysqli_connect("localhost", "root","")
                                         or die ("No se pudo realizar la conexión");
   // selección de la base de datos

   mysqli_select_db("universidad");
   echo mysqli_errno(), ":2,"; echo mysqli_error(), "<BR>\n";

   $cons= "SELECT apellidos FROM alumnos";
   $res=mysqli_query($cons, $conex);
   echo mysqli_errno(), ":2,"; echo mysqli_error(), "<BR>\n";
   // se cierra la conexión
   mysqli_close($conex);
   ?>
