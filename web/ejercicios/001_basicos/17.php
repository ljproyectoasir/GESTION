<html>
<head><title>Formularios PHP</title></head>
<body>
<?php
	/*calcular los puntos de silla de una tabla de 5x5 de enteros comprendidos entre 2 y 1000
	un punto de silla es el maximo de una fila y el minimo de esa columna*/
	/*
	function nombrefuncion(argumento)
		{
		instrucciones;			
		[return valor;]
		}
	*/
	function cargar(&$v,$mini,$maxi)
		{
		for ($i=0;$i<25;$i++)
			$v[$i]=mt_rand($mini,$maxi);
		}
	function imp($v)
		{
		$filmax=0;
		$filmax1=0;
		$colmin=9999999;
		$colmin1=9999999;
		$aux=0;
		$aux1=0;
		$aux2=0;
		echo "<center><table border=3>";
		
		for ($i=0;$i<5;$i++)
			{
				
				//Maximo de fila
				for ($l=0;$l<5;$l++)
					{
					if ($v[$aux]>=$v[$aux1])
						{
						$filmax=$v[$aux];
						if ($filmax>=$filmax1)
							$filmax1=$filmax;
						}
						else 
							{
							$filmax=$v[$aux1];
							if ($filmax>=$filmax1)
								$filmax1=$filmax;
							}
					$aux1++;
					}
			
			
			echo "<tr> ";
			for ($j=0;$j<5;$j++)
				{
					//Minimo de columna
				for ($k=0;$k<5;$k++)
					{
					if ($v[$aux]<=$v[$aux2+$j])
						{
						$colmin=$v[$aux];
						if ($colmin<=$colmin1)
							$colmin1=$colmin;
						}
						else 
							{
							$colmin=$v[$aux2+$j];
							if ($colmin<=$colmin1)
								$colmin1=$colmin;
							}
					$aux2=$aux2+5;
					}
				$aux2=0;
					
				if ($v[$aux]==$filmax1 && $v[$aux]==$colmin1)
					echo "<td bgcolor=red>$v[$aux]</td>";
					else
						echo "<td>$v[$aux]</td>";
				$colmin=9999999;
				$colmin1=9999999;
				$aux++;
				}
			echo "</tr> ";	
			$filmax=0;
			$filmax1=0;
			}
		echo "</table></center>";
		}
	
	$v1=array();
	$min=$_GET["num1"];
	$max=$_GET["num2"];
	
	cargar($v1,$min,$max);
	
	imp($v1);
?>
</body>
</html>