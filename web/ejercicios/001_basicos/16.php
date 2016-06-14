

<html>
<head><title>Formularios PHP</title></head>
<body>
<?php
	/*a partir de 2 numeros introducidos en un formulario crear una tabla de 4x4 y colocar
en rojo las diagonales principales y en verde el resto*/
	/*
	function nombrefuncion(argumento)
		{
		instrucciones;			
		[return valor;]
		}
	*/
	function cargar(&$v,$mini,$maxi)
		{
		for ($i=0;$i<16;$i++)
			$v[$i]=mt_rand($mini,$maxi);
		}
	function imp($v)
		{
		$aux=0;
		$aux2=0;
		$aux3=3;
		echo "<center><table bgcolor=green>";
		for ($i=0;$i<4;$i++)
			{
			echo "<tr> ";
			for ($j=0;$j<4;$j++)
				{
				if ($i==$j || ($i==$aux2 && $j==$aux3))
					echo "<td bgcolor=red>$v[$aux]</td>";
					else
						echo "<td>$v[$aux]</td>";
				$aux++;
				}
			$aux2++;
			$aux3--;
			}
		echo "<center><table bgcolor=green>";
		}
	function disjuntos($v1,$v2)
		{
		$sw=true;
		$i=0;
		while ($i<50 && $sw==true)
		{
			$j=0;	
			while ($j<50 && $sw==true)
			{
				if ($v1[$i]==$v2[$j])
					$sw=false;
				$j++;
			}
			$i++;
		}
		}
	$v1=array();
	$min=$_GET["num1"];
	$max=$_GET["num2"];
	
	cargar($v1,$min,$max);
	
	imp($v1);
?>
</body>
</html>