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
	function cargar(&$v,$mini,$maxi)
		{
		for ($i=0;$i<100;$i++)
			$v[$i]=mt_rand($mini,$maxi);
		}
	function imp($v)
		{
		$aux=0;
		$aux1=0;
		$aux2=0;
		$aux3=0;
		$aux4=0;
		$aux5=0;
		$aux6=9;
		$fil=array();
		$col=array();
		$dia1=0;
		$dia2=0;
		$sw="true";
		$m=0;
		
		echo "<center><table border=3>";
		
		for ($i=0;$i<10;$i++)
			{
			
				for ($l=0;$l<10;$l++)
				//Todos los valores de una fila fila
					{
					$aux2=$aux2+$v[$aux1];	
					$aux1++;
				//	
				//Todos los valores de una columna
					$aux3=$aux3+$v[$aux4+$l];
					$aux4=$aux4+10;
					}
					
				$fil[$i]=$aux2;
				$col[$i]=$aux3;
				$aux2=0;
				$aux3=0;
				$aux4=0;
			
			echo "<tr> ";
			for ($j=0;$j<10;$j++)
				{
				if ($i==$j)  
				$dia1=$dia1+$v[$aux];
				if (($i==$aux5 && $j==$aux6))
					$dia2=$dia2+$v[$aux];
				echo "<td>$v[$aux]</td>";
				$aux++;
				}
			$aux5++;
			$aux6--;
			echo "</tr> ";	
			
			}
		echo "</table></center>";
		//Comprobar si es magico
		while ($sw=="true" && $m<9)
			{
			if ($fil[$m]!=$fil[$m+1] || $col[$m]!=$col[$m+1])
				$sw="false";
				else
					if ($fil[0]!=$col[0] || $fil[$m]!=$dia1 || $fil[$m]!=$dia2)
						$sw="false";
			$m++; 
			}
		if ($sw=="true")
			echo "La tabla es magica";
			else
				echo "La tabla no es magica";
		}
		
	$v1=array();
	$min=$_GET["num1"];
	$max=$_GET["num2"];
	
	cargar($v1,$min,$max);
	
	imp($v1);
	
?>
</body>
</html>