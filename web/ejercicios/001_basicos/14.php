<html>
<head><title>Formularios PHP</title></head>
<body>
<?php
	/*function nombrefuncion(argumento)
		{
		instrucciones;			
		[return valor;]
		}
	*/
	function num()
		{
		switch ($_GET["num"])
			{
			case "1":
				$num1=range('A','Z');
				//$num1=chr(rand(97,122));
				break;
			case "2":
				$num1=range('a','z');
				//$num1=chr(rand(65,90));
				break;
			case "3":
				$num1=range('2','1000');
				break;
			case "4":
				$num1=array_merge(range('A','Z'), range('a','z'), range('2','1000'));
				break;
			};
		return($num1)
		}
	function tabla($num1)
		{
		echo "<center><table border=4 width=1000>";
		for ($i=1;$i<=30;$i++)
			{
			echo "<tr>";
			for ($y=1;$y<=30;$y++)
				{
				echo "<td>",$num1[rand(0,count($num1)-1)],"</td>";
				$con++;
				}
			echo "</tr>";
			}
		echo "</tr></table></center>";
		}
	
	?>
	<?php
	$con=0;
	$num1=num();
	tabla($num1);
	//poner en verde los numeros pares
	//poner en morado los que tengan mas de 4 divisores
	
	
	
?>
</body>
</html>