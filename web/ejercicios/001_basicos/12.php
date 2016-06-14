<html>
<head><title>Formularios PHP</title></head>
<body>
<?php
settype ($_GET["num"], "integer");
$num1=$_GET["num"];
$num2=$num1;
$pri=2;
$sw=0;
echo "Los primos factoriales de $num1 son :";
while ($num2>1)
	{
	if ($num2%$pri==0)
		{
		if ($sw==1)
			echo ",";
		$sw=1;
		$num2=$num2/$pri;
		echo " $pri";
		}
		else
			$pri=$pri+1;
	}
	echo ".";
?> 
</body>
</html>