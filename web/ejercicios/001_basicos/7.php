<html>
<head><title>Formularios PHP</title></head>
<body>
<center>
<h2>Datos introducidos en el formulario </h2>
<table  border="1">
<tr><td> Codigo:</td>
<td>
 <?php 
  echo $_GET["CodEmpleado"]; 
 ?> 
</td>	
</tr>
<tr><td> Nombre:</td>
<td>
 <?php
  echo $_GET["Nombre"];
 ?> 
</td>
</tr>
<tr><td> Sueldo:</td>

<td>
 <?php
  echo $_GET["Sueldo"];
 ?> 
</td></tr>