<?php
   //establecimiento de la conexi�n
   $conexion=mysqli_connect("localhost", "root","")
                                         or die ("No se pudo realizar la conexi�n");
   // selecci�n de la base de datos

   mysqli_select_db("universidad");
   echo mysqli_errno(), ":2,"; echo mysqli_error(), "<BR>\n";

   $cons= "SELECT apellidos FROM alumnos";
   $res=mysqli_query($cons, $conex);
   echo mysqli_errno(), ":2,"; echo mysqli_error(), "<BR>\n";
   // se cierra la conexi�n
   mysqli_close($conex);
   ?>
