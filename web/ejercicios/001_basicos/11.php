<html>
<head><title>Formularios PHP</title></head>
<body>
<?php
$num=$_GET["num"];
$binario="";
while ($num>0)
{
	$resto=$num%2;
	$binario=$resto.$binario;
	$num=(int)($num/2);
}
echo $binario;
?> 
</body>
</html>